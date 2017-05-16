<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="js/jQuery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
  <link type="text/css" rel="stylesheet" href="css/jquery-ui"></script>
	<link type="text/css" rel="stylesheet" href="font-awesome.css" />
	<link type="text/css" rel="stylesheet" href="css/grid.css" />
  <link type="text/css" rel="stylesheet" href="css/style.css" />
    <title>Todo list in Object !</title>
  </head>
  <body>
    <?php
    include('todo_class.php');
    ?>
    <div class="container">
      <div class="todo">
        <h1> Quelle belle todo list !</h1>
        <ul>
          <li>
            <form>
              <input type="text" name="add" class="inputAdd" placeholder="add a Todo here !" />
              <button class="buttonAdd">ADD</button>
            </form>
          </li>
        </ul>
        <ul class="ul">
          <?php
          $single->affiche();
          ?>
        </ul>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    $(".buttonAdd").click(function(event){
      event.preventDefault();
      var text=$(".inputAdd").val();
      $.get({
        data:{add:text},
        url:"ajax.php",
        dataType:"html",
        success:function(reponse){
          $(".ul").html(reponse);
        }
      });
    });

    function requestDelete(i){
      alert(i);
      var number = i;
      $.get({
        data:{delete:number},
        url:"ajax.php",
        dataType:"html",
        success:function(reponse){
          $(".ul").html(reponse);
        }
      });
    }
  </script>
</html>
