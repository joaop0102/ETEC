<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Form/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <script src="../Form/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <title>Formulário</title>
    <link rel="stylesheet" href="../Form/style.css">
    <style>
        .teste{
    display: flex;
    justify-content: center;
        }
        .ajustes{
            list-style: none;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 10px 10px;
            font-weight: bold;
        }
        ul, li{
            margin: 0px;
            padding: 0px;
        }
    </style>
 </head>
 <body>
     <div class="container">
         <div class="col">
             <div class="row">
    <div class="container" id="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary, fundo" data-bs-theme="dark">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">SISTEMA WEB</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="consultar.html">Consultar</a>
                  </li>
              </ul>
              
              </div>
          </div>
      </nav><br>
        <div>
        <div class="row">
            <div class="col"> 
                <div class="teste">
                    <div style="width: 50%;">
                        <p class="fs-4">Consultar - Contratos Agendados</p>
                        <div class="bg-primary">
                        <div class="table-responsive">  
                            <div class="table">
                        <ul class="ajustes">
                                <li class="text-break">
                                    Nome
                                </li>
                                <li class="text-break">
                                    Telefone
                                </li>
                                <li class="text-break">
                                    Origem
                                </li>
                                <li class="text-break">
                                    Contrato
                                </li>
                                <li class="text-break">
                                    Observação
                                </li>
                                <li class="text-break">
                                    Ação
                                </li>
                            </ul>
                            </div> 
                        </div>
                                <?php
                                    require_once("pessoa.class.php");

                                    class Teste{
                                        private $pessoa;

                                        public function __construct(){
                                            $pessoa = new Pessoa();
                                            echo "<div class='row teste' font-size: 14px width: 50%;'>";
                                            echo "<div class='col'>";
                                            $pessoa->setNome($_POST['nome']);
                                            echo $pessoa->getNome();
                                            echo "</div>";

                                            echo "<div class='col'>";
                                            $pessoa->setTelefone($_POST['telefone']);
                                            echo $pessoa->getTelefone();
                                            echo "</div>";

                                           echo "<div class='col'>";
                                            $pessoa->setOrigem($_POST['origem']);
                                            echo $pessoa->getOrigem();
                                            echo "</div>";

                                            echo "<div class='col'>";
                                            $pessoa->setData($_POST['data']);
                                            echo $pessoa->getData();
                                            echo "</div>";

                                            echo "<div class='col'>'";
                                            $pessoa->setObsevacao($_POST['obser']);
                                            echo $pessoa->getObsevacao();
                                            echo "</div>";
                                            echo "<div class='col'>";
                                            echo "<div style='text-align: center;'>";
                                            echo "0";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                                        }

                                                    }new Teste();
                                ?>
                    </div>      
                </div>
            </div>
          </div>
        </div>
      
                              <div>
                                      </div>
                                          </div>
                                               </div>
                                                     </div>
                                                           </div>
                                                             </div>
                                                           </div>
                                                      </div>
   </body>

        </html>