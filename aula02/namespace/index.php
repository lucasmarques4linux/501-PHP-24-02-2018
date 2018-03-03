<?php 

namespace Site;	

require 'model.php';
require 'view.php';

use Model\Form as ModelForm;
use View\Form as ViewForm;
use DateTime;

$data = new DateTime();
var_dump($data);

$modelForm = new ModelForm();
$viewForm = new ViewForm();