<?php
/**
 * Description of Aluno
 *
 * @author sabri
 */
require_once 'Pessoa.php';
class Aluno {
    private $matricula;
    private $curso;
    
    public function __construct($matricula, $curso) {
        $this->matricula = $matricula;
        $this->curso = $curso;
    }
    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }

    public function cancelarMatricula() {
        $this->setMatricula(false);
    }

}