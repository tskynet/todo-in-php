<?php
include('todo_class.php');

if(isset($_GET['delete'])){
  unset($single->tab[$_GET['delete']]);
  $single->affiche();
}
if(isset($_GET['add'])){
    $add = new Task($_GET['add']);
    $single->affiche();
}


?>
