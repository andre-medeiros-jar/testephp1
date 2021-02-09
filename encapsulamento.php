<?php
    class Pessoa {
        public $nome = "André Jar";
        protected $idade = 45;
        private $senha = "123456";

        public function verDados() {
            echo $this->nome . "<br />";
            echo $this->idade . "<br />";
            echo $this->senha . "<br />";
        }
    }

    class Programador extends Pessoa {
        public function verDados2() {
            echo get_class($this) . "<br/>"; //retorna Programador
            echo $this->nome . "<br />";
            echo $this->idade . "<br />";
            echo $this->senha . "<br />"; //vai dar erro pq a variavel senha foi declarada como private
        }

    }

    $objeto = new Programador();
    //echo $objeto->nome . "<br/>"; //retornou pois é um atributo PUBLIC
    //echo $objeto->idade . "<br/>"; //erro pq só quem acessa é dentro da classe ou quem herda dessa classe
    //echo $objeto->idade . "<br/>"; //erro pq só quem acessa é na própria classe e não herdeiro
    $objeto->verDados();//é o que devemos usar
?>