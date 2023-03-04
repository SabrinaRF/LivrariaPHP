<?php
/**
 * Description of Professor
 *
 * @author sabri
 */
require_once 'Pessoa.php';
class Professor extends Pessoa{
    private $especialidade;
    private $salario;
    
    public function __construct($especialidade, $salario) {
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }
    
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }
    
    public function receberAumento($dindin) {
        $this->setSalario($this->getSalario()+$dindin);
    }



}
