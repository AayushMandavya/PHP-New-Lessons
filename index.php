<?php
include('./db_config.php');
$sql="select * from todo_list";
$result=$conn->query($sql);


$row=$result->fetch_assoc();
print_r($row);

?>

<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-3">
        <h3>To Do Application</h3>
   <form action="save-todo.php" method="post">
    <input type="text" class="form-control" name="todo" id="" placeholder="Write here">
    <button type="submit" class="btn btn-primary mt-2">TO DO</button>
   </form>

   <table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">ID</th>
      <th scope="col">GO TO</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <?php 
      while($row =$result->fetch_assoc()){ ?>
      <td><?php echo $row["id"];?></td>
      <td><?php echo $row["title"];?></td>
      <td><button type="button" class="btn btn-danger">Delete</button></td>
      <?php
      }
      ?>
    </tr>
  <!--  <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
           <td></td>

      <td></td>
      <td><button type="button" class="btn btn-danger">Delete</button></td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Sacob</td>
      <td></td>

      <td></td>
      <td><button type="button" class="btn btn-danger">Delete</button></td>

    </tr> -->
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>