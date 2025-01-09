<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
    <title>Login</title>
    <style>
        .card-login{
            width: 500px;
            
            margin: 0 auto;
            padding: 60px 30px 30px 30px;
        }
        
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <div class="row">
                <div class="card-login">
                    <div class="card" style="background-color: black;">
            <div class="card-header">
             <h3 style="font-style: italic; text-align: center; color: blue;">Cadastre-se</h3>
            </div>
            <div class="card-body">
              <form action="valida_logar.php" method="post">
                <div class="form-group mb-3">
                  <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="form-group mb-3">
                  <input name="senha" type="password" class="form-control" placeholder="Senha" required>
                </div>
                <button style="width: 100%;" type="submit" class="btn btn-outline-primary">Cadastrar</button>       
                
              </form>
            </div>
          </div>
                </div>
            </div>
        </div>
    </nav>
    
</body>
</html>