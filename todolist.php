<?php include 'connectdb.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Project Todo</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!-- <li><a href="index.php">Todo</a></li> -->
            <li><a href="todolist.php">Todo List</a></li>
            <!-- <li><a href="contact">Contact</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- <div class="container">
        <div class="jumbotron">
        <div class="text-center">
            <h1 class="">Todo List Items</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora laborum accusamus expedita, quaerat nostrum libero adipisci ipsa officia reprehenderit cumque illum aut modi porro! Voluptatibus iusto illo minima nobis deleniti.</p>
        </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <div class="page-header">
                <h1>Todo List</h1>
            </div>
            <?php
            $counter = 0;
            $sql = "SELECT * from todolist";
            if ($result = mysql_query($sql)) {
              if (mysql_num_rows($result) > 0) {
                echo '<table class="table">';
              echo '<thead>';
              echo '<tr>';
              echo '<th>#</th>';
              echo '<th>Todo Items</th>';
              echo '<th>Edit</th>';
              echo '<th>Delete</th>';
              echo '</tr>';
              echo '</thead>';
              while ($row = mysql_fetch_array($result)) {
                echo '<tbody>';
                echo '<tr>';
                echo '<td>'. ++$counter .'</td>';
                echo '<td>'. $row['todowork'] .'</td>';
                echo '<td><a href="todolist-update.php?item_id='.$row['id'].'"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>';
                echo '<td><a href="todolist-delete.php?item_id='.$row['id'].'" onclick=\'return confirm("Are you sure, you want to delete?")\'><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>';
                echo '</tr>';
                echo '</tbody>';
                }
                echo '</table>';
              }
            }
            else {
              echo "0 Result!" . mysql_error();
            }
          ?>
        </div>
        </div>
    </div>
</body>
</html>