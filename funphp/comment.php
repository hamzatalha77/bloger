	<?php session_start();?>
	<?php if (isset($_SESSION['id']) && isset($_SESSION['userc'])):?>
	<?php else:?>
	<?php include("../funphp/config.php");?>
	<?php if(isset($_POST['postcomment'])){
	$username = $_SESSION['userc'];
	$postid = $_POST['id'];
	$comment = $_POST['comment'];
	if($comment !=""){
	$sql="INSERT INTO comments (post_id, username, comment) VALUES ('$postid','$username','$comment')";
	$query = $conn->query($sql);
    if($query){
        header("location:../iblog/blogpost.php?id=".$postid);
	}
    }
	
	}
    ?>
	<?php endif;?>