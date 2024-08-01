<?php
session_start();
require_once("../model/Convert.php");

$input_convert = filter_input(INPUT_POST, 'convert');
$input_type = filter_input(INPUT_POST, 'type');

if ($input_type == "realtoromano") {
    $_SESSION["Result"]  = Convert::InteiroToRomano($input_convert);
    header("Location: http://localhost/Real_Romano/view/pages/Result/result.php");
} elseif ($input_type == "romanotoreal") {
    $pattern = '/^[IVXLCDM]+$/';
    $validate = preg_match($pattern, $input_convert);
    if ($validate) {
                $_SESSION["Result"]  =  Convert::RomanoToInteiro($input_convert);
                header("Location: http://localhost/Real_Romano/view/pages/Result/result.php");
            }
            else {
                echo "Invalid Roman numeral </br> <a href='http://localhost/Real_Romano/view/pages/Home/index.php'>Converter novamente</a>";
            }
} else {
    echo " Invalid input type </br> <a href='http://localhost/Real_Romano/view/pages/Home/index.php'>Converter novamente</a>";
}
