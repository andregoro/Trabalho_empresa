<?php
//sessao
session_start();
if(!isset($_SESSION['login']))
  die("Ops! ...Você não fez login");
?>