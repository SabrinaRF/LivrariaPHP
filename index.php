<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            
            //$p= array();
            $p[0]= new Pessoa("Sabrina", 20, "F");
            $p[1]= new Pessoa("Antonio", 21, "M");
            
            $l[0] = new Livro("PHP Básico", "José alfredo", 300, $p[0]);
            $l[1] = new Livro("PHP Avançado", "Maria Clara", 500, $p[1]);
            $l[2] = new Livro("Java POO", "Tomasia Catarina", 450, $p[0]);
            
            print_r($l[0]);
            print_r($l[1]);
            print_r($l[2]);
            
        ?>
        </pre>
    </body>
</html>
