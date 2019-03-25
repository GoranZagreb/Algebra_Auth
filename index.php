<?php
  include_once 'core/init.php';
  
  $user = 'peroždero';
  
  $db = DB::getInstance()->action('SELECT *','users',array('username','=',$user));
  dump($db);
  
  