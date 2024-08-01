<?php include("../Components/head.php");
session_start();
?>
<h1 class="text-white">Bem-vindo ao nosso site!</h1>
<h2 class="text-white">Converta aqui seus números romanos e reais!</h2>
<div class="container-home">
        <h1> <b>Seu Resultado Foi:</b> <?= $_SESSION['Result']?></h1>  
        <a href="../Home/index.php" class="btn btn-primary">Converter novamente</a>
</div>

<?php include("../Components/footer.php"); ?>