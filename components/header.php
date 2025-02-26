<?php
session_start();
?>
<div class=cabecalho>
    <div class=milcentoesetenta>
        <div class=usuario>
            <b>
                <?php
                if(isset($_SESSION['nome']) && $_SESSION['tipo'] == "ADMIN"){
                    echo "<div class=saudacao><img width=15 height=15 src='assets/imagens/usuario/".$_SESSION['foto']."'>";
                    echo " ADMIN ".$_SESSION['nome']."</div>";
                    echo "<div class=logoff><a href='crud_demo.php' style='margin-right:25px;'>CRUD DEMO </a><a href='cadastro_form.php?id=".$_SESSION['id']."'>ALTERAR </a><a href='deslogar.php'> LOGOFF</a></div>"; 
                }else if(isset($_SESSION['nome'])){
                    echo "<div class=saudacao><img width=25 height=25 src='assets/imagens/usuario/".$_SESSION['foto']."'>";
                    echo " ".$_SESSION['nome']."</div>";
                    echo "<div class=logoff><a href='cadastro_form.php?id=".$_SESSION['id']."'>ALTERAR </a><a href='deslogar.php'> LOGOFF</a></div>";
                }else{
                    header("location:erro.php");
                    exit();
                }
                ?>
            </b>
        </div>
    </div>
</div>
