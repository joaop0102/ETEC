<?php
$emailUser = $_POST['emailUser'];
$senhaUser = $_POST['senhaUser'];

if(isset($_GET['email']) && isset($_GET['senha'])){
    $email = $_GET['email'];
    $senha = $_GET['senha'];   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
    <title>COnfirmando</title>
    <style>
        .cadastro_efetuado{
            width: 560px;
           
                margin: 100px auto;
        }
    </style>
   
</head>
<body>
    <nav>
        <div class="container">
            <div class="row">
            <div class="cadastro_efetuado">
            <p class="fs-4 text-center">
                 <?php 
                if(($emailUser == $email) && ($senhaUser == $senha)){
                    header('Location: votacao.php');
                }else{
                    echo 'Efetuação do login mal sucessido';
                }
            ?> 
            </p>
            <div style="text-align: center;">
            <button style="width: 20%;" type="submit" class="btn btn-outline-danger"><a href="index.php">Voltar</a></button>
            </div>
        </div>
            </div>
        </div>
    </nav>
</body>
</html>