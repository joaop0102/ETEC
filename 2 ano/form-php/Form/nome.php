<?php
require_once("pessoa.class.php");

        class Teste{
            private $pessoa;

            public function __construct(){
                $pessoa = new Pessoa();
                $pessoa->setNome($_POST['nome']);
                echo "<strong>Nome:  </strong>".$pessoa->getNome();
                echo "<br>";
            }
        }new Teste();
                ?>