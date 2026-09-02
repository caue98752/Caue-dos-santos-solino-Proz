<?php

class Livro {
    public $titulo;
    public $autor;
    public $paginas;
    
}

$livro1 = new Livro();
$livro1 ->titulo = "Bibla sagrada";
$livro1 ->autor = "Moises";
$livro1 ->paginas = 2000;

$livro2 = new Livro();
$livro2 ->titulo = "O pequeno principe";
$livro2 ->autor = "Antoine de Saint-Exupéryt";
$livro2 ->paginas = 160;

echo "Dados do Livro 1:\n";
echo "Titulo:" . $livro1->titulo . "\n";
echo "Autor:" . $livro1->autor . "\n";
echo "Paginas:" . $livro1 ->paginas . "\n";

echo "\nDados do Livro 2:\n";
echo "Titulo:" . $livro2->titulo . "\n";
echo "Autor:" . $livro2->autor . "\n";
echo "Paginas:" .$livro2 ->paginas . "\n";
