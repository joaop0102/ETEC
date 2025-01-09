<?php


$email = $_POST['email'];
$senha = $_POST['senha'];
$url = "logar.php?email=" . urlencode($email) . "&senha=" . urlencode($senha);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
    <title>Logando</title>
</head>
<body>

    <nav>
        <div class="container">
            <div class="row">
            <div class="cadastro_efetuado">
            <p class="fs-4 text-center">Cadastro bem sucessido</p>
            <div style="text-align: center;">
            <button style="width: 20%;" type="submit" class="btn btn-outline-success"><a href="<?php echo $url; ?>">Continuar</a></button> 
            </div>
        </div>
            </div>
        </div>
        
    </nav>
    
</body>
</html>