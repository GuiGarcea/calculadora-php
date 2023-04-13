<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Calcular PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body class="bg-dark text-white p-5">
<div class="container d-flex flex-column align-items-center justify-content-center p-5">
<div class="calcular">
<h1>Calculadora</h1><br>
</div>
<form  class="col-3 mb-2" method="post">
<div class="row mb-1">
<label for="num1">Primeiro Número: </label>
<input type="number" id="num1" name="num1" required>
</div>
<br>
<div class="row mb-5">
<label for="num2">Segundo Número: </label>
<input type="number" id="num2" name="num2" required>
</div>
<br>

<label for="operacao">Operação:</label>
<br><br>

<input type="radio"  name="operacao" value="somar"> Somar
<br>
<input type="radio" name="operacao" value="subtrair"> Subtrair
<br>
<input type="radio"  name="operacao" value="multiplicar"> Multiplicar
<br>
<input type="radio"  name="operacao" value="dividir"> Dividir


<div class="row gap-2 justify-content-center mt-5 mb-5">
<button type="submit" class="btn btn-info" name="submit">Calcular</button>
</div>
</form>

<?php
include"function.php";

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])) {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacao = $_POST['operacao'];

switch ($operacao) {
case 'somar':
$resultado = somar($num1, $num2);
break;
case 'subtrair':
$resultado = subtrair($num1, $num2);
break;
case 'multiplicar':
$resultado = multiplicar($num1, $num2);
break;
case 'dividir':
$resultado = dividir($num1, $num2);
break;
default:
$resultado = "Operação inválida.";
break;
}
echo "<strong><p>O resultado é: $resultado</p></strong>";
echo "<strong><p>A operação selecionada é: $operacao</p></strong>";

}
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>
</html>