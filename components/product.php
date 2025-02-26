<?php
include("conectar.php");

function fetchProducts($model, $type) {
    $query = "SELECT * FROM produto WHERE modelo='$model' AND tipo='$type'";
    $resultQuery = mysql_query($query);
    $products = [];

    while ($result = mysql_fetch_assoc($resultQuery)) {
        $product = [];
        $product['id'] = $result['id'];
        $product['id_descricao'] = utf8_encode($result['id_descricao']);
        
        $chamades = "SELECT * FROM descricao WHERE id='{$product['id_descricao']}'";
        $resultdes = mysql_query($chamades);
        while ($descricao = mysql_fetch_assoc($resultdes)) {
            $product['descricao'] = $descricao['texto'];
        }
        
        $product['tipo'] = utf8_encode($result['tipo']);
        $product['modelo'] = utf8_encode($result['modelo']);
        $product['preco'] = utf8_encode($result['preco']);
        $product['foto'] = utf8_encode($result['foto']) != "" ? utf8_encode($result['foto']) : "arma.jpg";
        
        $products[] = $product;
    }

    return $products;
}

function displayProducts($products) {
    foreach ($products as $product) {
        echo "
        <div class='divproduto' title='{$product['tipo']}' id='{$product['tipo']}'>
            <div class='produtoimg'>
                <img src='assets/imagens/produto/{$product['foto']}' class='cemporcento'>
            </div>
            <div class='produtodesc'>
                <b style='margin-top:-10px;'>
                    {$product['tipo']}
                </b><br>
                {$product['descricao']}
                <br>
                Preço: R$ {$product['preco']}
            </div>
        </div>";
    }
}
?>
