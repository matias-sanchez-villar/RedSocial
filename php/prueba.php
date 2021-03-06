<?php

require_once ("Usuario.php");

$uno = new Usuario();

$uno->Cargar($_POST['Inscripcion']);

$uno->Registrar();