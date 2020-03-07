<?php
    class tabuleiro{
        // lista de atributos
        private $coluna;
        private $linha;

        public function __construct($nome,$simbolo){
            $this->nome = $nome;
            $this->simbolo = $simbolo;
        }
        public function get_nome(){
            return($this->nome);
        }
        public function get_simbolo(){
            return($this->simbolo);
        }

        // lista de metodos

        public function acelerar($valor_aceleracao, $tempo){
            $this->velocidade_atual =
                $this->velocidade_atual + $valor_aceleracao*$tempo;

            if($this->velocidade_atual > $this->velocidade_maxima){
                $this->velocidade_atual = $this->velocidade_maxima;
            }
        }
        public function frear($valor_frenagem, $tempo){
            $this->velocidade_atual =
                $this->velocidade_atual - $valor_frenagem*$tempo;

                
            if($this->velocidade_atual < 0){
                $this->velocidade_atual = 0;
            }
        }
        public function virar($lado){
            
        }
    }
?>