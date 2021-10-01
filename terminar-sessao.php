<?php 
require_once("inc/acesso-restrito.php"); 

session_destroy();
header('location:index.php');
