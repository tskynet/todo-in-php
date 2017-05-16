<?php

Class Todo{

  public $tab=[];

  private static $_instance;

  private function __construct(){}

  public static function getInstance(){
    if(true === is_null( self::$_instance)){
      self::$_instance = new self();
    }
    return self::$_instance;
  }

  function addTask($task){
    $this->tab[]=$task;
  }
  function adding($text){
    new Task($text);
  }
  function showAll(){
    echo '<pre>';
    print_r($this->tab);
    echo '</pre>';
  }

  function affiche(){
    $i=0;
    foreach($this->tab as $n){
      if($n->show===true){
            echo '<li>'.$n->text.' <button name="delete" value="'.$i.'" onclick="requestDelete('.$i.')">DELETE</button></li>    ';
            $i++;
      }
    }
  }
}

Class Task{
  var $text='';
  var $show=true;
  function __construct($pText){
    $this->setText($pText);
    $todo = Todo::getInstance();
    $todo->addTask($this);
  }
  function notAffiche(){
    $this->show=false;
  }
  function setAffiche(){
    $this->show=true;
  }
  function setText($pText){
    $this->text=$pText;
  }
  function launchShow(){
    $todo = Todo::getInstance();
    $todo->affiche();
  }

}
$try = new Task('boby');
$try2 = new Task('boby2');
$try3 = new Task('Jean Philipe');
$single = Todo::getInstance();


?>
