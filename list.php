<?php
  require 'config.php';
  if(isset($_POST['name'])){
    header("Location: list.php?name=".$_POST['find_s']."");
  }
  if(isset($_POST['detail'])){
    header("Location: list.php?detail=".$_POST['find_s']."");
  }
  if($_GET['name']!=NULL){
    $books = $collection->find(array('name'=>$_GET['name']));
  }
  if($_GET['detail']!=NULL){
    $books = $collection->find(array('detail'=>$_GET['detail']));
  }
?>
<!DOCTYPE html>
<html>
  <head>
     <title>PHP & MongoDB</title>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
    <h1>PHP & MongoDB</h1>

    <form method="POST">
       <div class="form-group">
          <input type="text" name="find_s" required="" class="form-control">
       </div>
       <div class="form-group">
          <button type="submit" name="name" class="btn btn-success">Name</button>
          <button type="submit" name="detail" class="btn btn-success">Detail</button>
       </div>
    </form>

    <table class="table table-borderd">
       <tr>
          <th>Name</th>
          <th>Details</th>
       </tr>
       <?php
          foreach($books as $book) {
             echo "<tr>";
             echo "<td>".$book->name."</td>";
             echo "<td>".$book->detail."</td>";
             echo "</tr>";
          };
       ?>

    </table>
    <a href="index.php" class="btn btn-primary">Back</a>
    </div>

  </body>
</html>
