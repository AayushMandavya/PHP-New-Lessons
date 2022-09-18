<?php
include('./db_config.php');
if($_SERVER['REQUEST_METHOD']==="POST"){
    $todo_item= $_POST['todo'];
    echo "You have enter the following text: <br>". $todo_item . "      to the list";

    $sql ="insert into todo_list (`title`) values ('$todo_item')";
    $result=$conn->query($sql);
    header('location: ./index.php');
}
 ?>