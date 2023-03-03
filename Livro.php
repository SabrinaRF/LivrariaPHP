<?php
/**
 * Description of Livro
 *
 * @author sabri
 */
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totalPag;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    public function __construct($titulo, $autor, $totalPag, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPag = $totalPag;
        $this->pagAtual=0;
        $this->leitor = $leitor;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function getTotalPag() {
        return $this->totalPag;
    }
    public function getPagAtual() {
        return $this->pagAtual;
    }
    public function getAberto() {
        return $this->aberto;
    }
    public function getLeitor() {
        return $this->leitor;
    }
    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }
    public function setAutor($autor): void {
        $this->autor = $autor;
    }
    public function setTotalPag($totalPag): void {
        $this->totalPag = $totalPag;
    }
    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }
    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }
    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    } 
    
    public function detalhes() {
        
    }

    public function abrir() {
        $this->aberto=true;
    }

    public function avancarPag() {
        $this->pagAtual++;
    }

    public function fechar() {
        $this->aberto=false;
    }

    public function folhear($p) {
        if($p>$this->totalPag){
            $this->pagAtual=0;
        }else{
            $this->pagAtual=$p;
        }
    }

    public function voltarPag() {
        $this->pagAtual--;
    }

}
