    <?php include 'connectdb.php';?>
    <?php
        if(isset($_POST['item_update'])){
            $item_value = $_POST['item_value'];
            $id = $_POST['id'];
            $sql = "UPDATE todolist SET todowork='$item_value' WHERE id=$id";
            mysql_query($sql) or die("no answer" . mysql_error());
            header('Location: index.php');
            exit;
        }
        
    ?>
    <?php 
        $id = $_GET['item_id'];
        $query = "SELECT * from todolist where id=$id";
        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
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
            <li class=""><a href="todolist.php">Todo List</a></li>
            <!-- <li><a href="contact">Contact</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
        <div class="text-center">
            <h1 class="">Todo List&#x2C; Edit</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora laborum accusamus expedita, quaerat nostrum libero adipisci ipsa officia reprehenderit cumque illum aut modi porro! Voluptatibus iusto illo minima nobis deleniti.</p>
        </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <form action="todolist-update.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Todo Item</label>
            <input type="text" name="item_value" class="form-control" value="<?php echo $row["todowork"];?>" required>
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $row["id"];?>">
            <input type="submit" value="Update" name="item_update" class="btn btn-primary">
            <a href="index.php" class="btn btn-primary">Cancel</a>

        </div>
    </form>
    </div>
    </div>
    </div>
    <!-- <script src="js/bootstrap.mim.js"></script>
    <script src="js/jquery.js"></script> -->
    </body>
    </html>