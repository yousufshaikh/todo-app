    <?php include 'connectdb.php';
    if(isset($_POST['submit'])){
        $item_value = $_POST['item_value'];

        $sql = "INSERT INTO todolist(todowork) value ('$item_value')";
        mysql_query($sql) or die("no answer " .mysql_error());
        header('Location: index.php');
        exit;
    }?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="jquery.js"></script>

        <title>TODO APP</title>
    </head>
    <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>hahahahah
          </button>
          <a class="navbar-brand" href="index.php">Project Todo</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!-- <li><a href="index.php">Todo</a></li> -->
            <li class=""><a href="todolist.php">Todo List</a></li>
            <!-- <li class=""><a href="todolist.php">Completed Task</a></li> -->

            <!-- <li><a href="contact">Contact</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
        <div class="text-center">
            <h1 class="">Todo App</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora laborum accusamus expedita, quaerat nostrum libero adipisci ipsa officia reprehenderit cumque illum aut modi porro! Voluptatibus iusto illo minima nobis deleniti.</p>
        </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Todo Item</label>
            <input type="text" class="form-control" name="item_value" placeholder="Todo Item" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Add" name="submit" class="btn btn-primary">
        </div>
    </form>
    </div>
    <div class="col-md-6">
        <h1>Todo List</h1>
        <?php
            $counter = 0;
            $sql = "SELECT * FROM todolist";
            // if($result = mysql_query($sql)){
            //     if(mysql_num_rows($result) > 0){
        echo '<div class = "collapse1">';    
        echo '<table class="table">';
        echo     '<thead>';
        echo       '<tr>';
        echo         '<th>#</th>';
        echo         '<th>Todo Item</th>';
        // echo         '<th>Complete</th>';
        echo        '<th>Edit</th>';
        echo         '<th>Delete</th>';
        echo       '</tr>';
        echo     '</thead>';
            if($result = mysql_query($sql)){
                if(mysql_num_rows($result) > 0){
            while ($row = mysql_fetch_array($result)) {
            echo '<tbody>';
            echo  '<tr>';
            echo   '<td>'. ++$counter .'</td>';
            echo   '<td>'. $row['todowork'] .'</td>';
            // echo   '<td><a href="" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a></td>';
            echo    '<td><a href="todolist-update.php?item_id='. $row['id'] .'" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>';
            echo    '<td><a href="delete_list.php?item_id='. $row['id'] .'" class="btn btn-danger" onclick=\'return confirm("You want to delete, Are you sure?")\'><i class="fa fa-times" aria-hidden="true"></i></a></td>';
            echo   '</tr>';
            echo '</tbody>';
        }
          echo '</table>';
          echo '</div>';
             }
            }
            else{
                echo "0 Result!" . mysql_error();
            }
          ?>
    </div>
    </div>
    </div>
    <!-- <script src="js/bootstrap.mim.js"></script>
    <script src="js/jquery.js"></script> -->
    </body>
    </html>