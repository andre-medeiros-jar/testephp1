<?php
    class Documento {
        private $valor;
        public function getValor(){
            return $this->valor;
        }

        public function setValor($v){
            $this->valor = $v;
        }
    }

    class CPF extends Documento{


        public function validaCPF():bool{
            $cpf = $this->getValor();
            if ($cpf == "123456") return true;
            
            else
            {
                return false;
            }
        }

    }
    $doc = new CPF();
    $doc->setValor("123456");
    echo $doc->getValor()."<br />";
    var_dump($doc->validaCPF());
?>