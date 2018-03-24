<?php 

const BASEDIR = '/var/www/html/501/aula05/todo-list/';

const DBUSER   = 'lucas';
// const DBPASS   = '@da4linux';
const DBPASS   = '123';
const DBNAME   = 'tarefas';
const DBHOST   = 'localhost';
// const DBDRIVER = 'mysql';
const DBDRIVER = 'pgsql';
const DBDSN    = DBDRIVER.':host='.DBHOST.';dbname='.DBNAME;