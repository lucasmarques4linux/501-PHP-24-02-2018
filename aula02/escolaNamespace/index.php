<?php 

require_once 'autoload.php';

use Escola\Aluno\AlunoNovo as Aluno;
use Escola\Curso\Curso;
use Escola\Turma\Turma;
use Escola\Matricula\Matricula;


echo "<pre>";

$lucas = new Aluno("Lucas","lucas@lucas.com");

$php = new Curso("PHP",40);

$turma = new Turma($php,'sabado');

$mat = new Matricula($lucas,$turma);

echo $mat->getTurma()->getCurso()->getNome();