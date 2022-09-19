<?php

if(isset($_POST['update']))
{
   
    include('db_config.php');
   $id = $_POST['id'];
   $title = $_POST['todo'];

           
   $sql = "UPDATE `todo_list` SET `title` = '$title' WHERE `todo_list`.`id` = '$id';";
  


   $result = mysqli_query($conn, $sql);
   
   if($result)
   {
    header('location: ./index.php');
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($conn);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> UPDATE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="newupdate.php" method="post">

            ID To Update: <input type="text" name="id"  value=""><br><br>

            New  Name:<input type="text" name="todo" ><br><br>

          
            <input type="submit" name="update" value="Update Data">

        </form>

    </body>


</html>