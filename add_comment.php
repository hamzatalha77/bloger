<?php

//add_comment.php
session_start();
$connect = new PDO('mysql:host=localhost;dbname=hamza', 'root', '');

$error = '';

$comment_content = '';

if(empty($_SESSION['user']))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $user = $_SESSION['user'];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO tbl_comment 
 (parent_comment_id, comment, user) 
 VALUES (:parent_comment_id, :comment, :user)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':user' => $_SESSION['user'],
 
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>