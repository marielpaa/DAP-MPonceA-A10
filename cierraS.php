<?php

//cargas sesion la destruye y te redirije a index
session_start();
session_destroy();
header('Location:index.html');

?>