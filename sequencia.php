<?php

class Sequencia {
    private $inicio;
    private $fim;

    public function getInicio() {
        return $this->inicio;
    }

    public function setInicio($inicio) {
        $this->inicio = $inicio;
    }

    public function getFim() {
        return $this->fim;
    }

    public function setFim($fim) {
        $this->fim = $fim;
    }

    public function exibirTodos() {
        $sequencia = [];
    
        for ($index = $this->inicio; $index <= $this->fim; $index++) {
            array_push($sequencia, $index);
        }

        return $sequencia;

    }

    public function exibirPares() {
        $sequencia = [];
    
        for ($numero = $this->inicio; $numero <= $this->fim; $numero++) {
           if ($numero % 2 === 0) {
            array_push($sequencia, $numero);
           }
        }

        return $sequencia;
    }

    public function exibirImpares() {
        $sequencia = [];
    
        for ($numero = $this->inicio; $numero <= $this->fim; $numero ++) {
            if ($numero % 2 === 1) {
                array_push($sequencia, $numero);
               }
        }

        return $sequencia;    
    }
}
?>