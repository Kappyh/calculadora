<?php
    class Calculadora{
        private $total;
        private $numero1;
        private $numero2;

        function __construct()
        {
            $this->total=0;
            $this->numero1=0;
            $this->numero2=0;
        }

        // getters e setters
        public function setNumero1($numero1){
            $this->numero1=$numero1;
        }

        public function setNumero2($numero2){
            $this->numero2=$numero2;
        }

        public function getTotal(){
            return $this->total;
        }

        // operacoes
        public function calcular($operacao){
            if(isset($this->numero1) || isset($this->numero2)){
                throw new Exception('Insira valores em ambos os campos');
            }
            switch($operacao){
                case 'somar':
                    $this->total = $this->numero1 + $this->numero2;
                break;
                case 'subtrair':
                    $this->total = $this->numero1 - $this->numero2;
                break;
                case 'multiplicar':
                    $this->total = $this->numero1 * $this->numero2;
                break;
                case 'dividir':
                    $this->total = $this->numero1 / $this->numero2;
                break;
            }
        }

    }
