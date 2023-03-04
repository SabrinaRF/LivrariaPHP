<?php
/**
 * Description of Aluno
 *
 * @author sabri
 */
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    private $matricula;
    private $curso;
   
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
    public function pagarMensalidade() {
        echo"Pagando a mensalidade do aluno $this->nome";
    }

}
