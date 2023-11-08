<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
     $nome = $_POST ['nomePrato'];
     $peso = $_POST['peso'];
     if(!empty($_POST['nomePrato']) && !empty ($_POST ['peso'])){
     $valor = ($peso/1000)*21.50;
     echo" prato: $nome, peso.".$peso. "Gramas - Valor a pagar: ".$valor;
     }else{
        echo "Prencha os dados!!";
        header( "refresh:3, form.php");
     };
    ?>
</body>
</html>
</body>
</html>