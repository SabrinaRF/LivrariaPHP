<?php
/**
 * Description of Funcionario
 *
 * @author sabri
 */
require_once 'Pessoa.php';
class Funcionario {
    private $setor;
    private $trabalhando;
    
    public function __construct() {
        
    }
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setSetor($setor): void {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando): void {
        $this->trabalhando = $trabalhando;
    }

    public function mudarTrabalho($param) {
        $this->setSetor($param);
    }

}
