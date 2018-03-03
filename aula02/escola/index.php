<?php 

require 'aluno.php';
require 'turma.php';
require 'matricula.php';


$lucas = new Aluno("Lucas","lucas@lucas.com");
$turma = new Turma("501","sabado");
echo $lucas->getNome();
echo "<br>";
echo $turma->getCurso();
echo "<br>";
$matriculaLucas = new Matricula($lucas,$turma);
echo $matriculaLucas->getAluno()->getNome();
echo "<br>";
echo $matriculaLucas->getTurma()->getCurso();