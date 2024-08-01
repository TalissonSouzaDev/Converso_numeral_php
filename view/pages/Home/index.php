<?php include("../Components/head.php");
@session_destroy();
?>
<h1 class="text-white">Bem-vindo ao nosso site!</h1>
<h2 class="text-white">Converta aqui seus números romanos e reais!</h2>
<div class="container-home">
<form action="../../../Process/process_input.php" method="post">
        <h1>Numero Real Para Romano</h1>
        <div class="form-group">
        <input type="hidden" name="type" value="realtoromano">
        <input type="number" class="form-control" name="convert" placeholder="Digite um numero real">
        <button type="submit" class="btn btn-primary">Converter</button>
        </div>
    </form>
</div>

<div class="container-home">
<form action="../../../Process/process_input.php" method="post">
        <h1>Numero Romano Para Real</h1>
        <div class="form-group">
        <input type="hidden" name="type" value="romanotoreal">
        <input type="text" class="form-control" name="convert" placeholder="Digite um numero romano">
        <button type="submit" class="btn btn-primary">Converter</button>
        </div>
    </form>
</div>

<?php include("../Components/footer.php"); ?>
