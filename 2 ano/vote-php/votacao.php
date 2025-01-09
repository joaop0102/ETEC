<?php
$arquivo = 'votos.txt';
$conteudo = file_get_contents($arquivo);
$votos = json_decode($conteudo, true);
if (!is_array($votos)) {
  $votos = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
    <title>Votação</title>
    <style>
      
    </style>
</head>
<body>
    <nav>
        <div class="container" style="background-color: #B0C4DE;" >
            <div class="row">
                <h2 class="text-center mt-4">Qual é a matéria que você tem mais difícil de aprender ?</h2>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col text-center">
                <div class="form-check">    
                <label class="col-form-label col-sm-2 pt-0" for="flexRadioDefault1">
                    Português

                </label>
                <form method="post" action="processa_votos.php">
                    <input type="hidden" name="pessoa" value="2">
                    <input type="submit" value="Votar" class="btn btn-outline-primary">
                    
                    </form>
                </div>
                <div class="form-check">
                <label class="col-form-label col-sm-2 pt-0" for="flexRadioDefault2">
                    Matemática
                </label>
                </div>
                <div class="form-check">
                 <form method="post" action="processa_votos.php">
                    <input type="hidden" name="pessoa" value="1">
                    <input type="submit" value="Votar" class="btn btn-outline-primary">
                    
                    </form>
                <label class="col-form-label col-sm-2 pt-0" for="flexRadioDefault2">
                    Geografia
                </label>
                </div>
                <div class="form-check">
                <form method="post" action="processa_votos.php">
                    <input type="hidden" name="pessoa" value="3">
                    <input type="submit" value="Votar" class="btn btn-outline-primary">
                    
                    </form>
                <label class="col-form-label col-sm-2 pt-0" for="flexRadioDefault2">
                    Educação-física
                </label>
                </div>
                <div class="form-check">
                <form method="post" action="processa_votos.php">
                    <input type="hidden" name="pessoa" value="4">
                    <input type="submit" value="Votar" class="btn btn-outline-primary">
                    
                    </form>
                <label class="col-form-label col-sm-2 pt-0" for="flexRadioDefault2">
                    Biologia
                </label>
                <form method="post" action="processa_votos.php">
                    <input type="hidden" name="pessoa" value="6">
                    <input type="submit" value="Votar" class="btn btn-outline-primary">
                    
                    </form>
                </div>
                <div class="form-check">
                <label class="col-form-label col-sm-2 pt-0" for="flexRadioDefault2">
                    Química
                </label>
                <form method="post" action="processa_votos.php">
                    <input type="hidden" name="pessoa" value="5">
                    <input type="submit" value="Votar" class="btn btn-outline-primary">
                    
                    </form>
                </div>
                    <br>
                </div>            
            </div>
            <br>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div id="placar">
               <h3 class="text-center text-danger"> Matemática <?php echo isset($votos[1]) ? $votos[1] : 0 ?></h3> 
               <br>
               <h3 class="text-center text-danger"> Português <?php echo isset($votos[2]) ? $votos[2] : 0 ?></h3> 
               <br>
               <h3 class="text-center text-danger"> Geografia <?php echo isset($votos[3]) ? $votos[3] : 0 ?></h3> 
               <br>
               <h3 class="text-center text-danger"> Educação-física <?php echo isset($votos[4]) ? $votos[4] : 0 ?></h3> 
               <br>
               <h3 class="text-center text-danger"> Química <?php echo isset($votos[5]) ? $votos[5] : 0 ?></h3> 
               <br>
               <h3 class="text-center text-danger"> Biologia <?php echo isset($votos[6]) ? $votos[6] : 0 ?></h3> 
               </div>
            </div>
        </div>
    </nav>
    
</body>
</html>