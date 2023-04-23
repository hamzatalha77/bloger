<?php
	session_start();
	include 'config.php';
	$update=false;
	$id="";
	$user="";
	$email="";
	$pass="";
	$chemin="";
	$results = mysqli_query($conn, "SELECT * FROM admin");
if(isset($_POST['add'])){
	$user=$_POST['user'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];	
	$chemin=$_FILES['image']['name'];
	$upload="images/".$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'], "images/".$_FILES['image']['name']);
	$query = "INSERT INTO admin (user, email, pass, chemin) VALUES ('$user', '$email', '$pass','$chemin')";
	mysqli_query($conn, $query);
	header('location:index.php');
	$_SESSION['response']="Successfully Inserted to the database!";
	$_SESSION['res_type']="success";
	}
if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	$sql="SELECT chemin FROM admin WHERE id=?";
	$stmt2=$conn->prepare($sql);
	$stmt2->bind_param("i",$id);
	$stmt2->execute();
	$result2=$stmt2->get_result();
	$row=$result2->fetch_assoc();
	$imagepath=$row['chemin'];
	unlink($imagepath);
	$query="DELETE FROM admin WHERE id=?";
	$stmt=$conn->prepare($query);
	$stmt->bind_param("i",$id);
	$stmt->execute();
	header('location:index.php');
	$_SESSION['response']="Successfully Deleted!";
	$_SESSION['res_type']="danger";	
	}
if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM admin WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$user=$row['user'];
		$email=$row['email'];
		$pass=$row['pass'];
		$chemin=$row['chemin'];

		$update=true;
	}
	
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $user=$_POST['user'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
    $chemin= $_FILES['image']['name'];
    $c_image_temp=$_FILES['image']['tmp_name'];
    move_uploaded_file($c_image_temp , "images/$chemin");
    $query="UPDATE admin set user='$user', email='$email', pass='$pass',  chemin= '$chemin'where id='$id'";     
    $run_update=mysqli_query($conn, $query);
    if($run_update){
		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:index.php');
    }
  }
if(isset($_POST['login_btn'])){
	$user_login = $_POST['user'];
	$password_login = $_POST['pass'];
	$query = "SELECT * FROM admin WHERE user='$user_login' AND pass='$password_login'";
	$run_login=mysqli_query($conn, $query);
	if(mysqli_fetch_array($run_login)){
		$_SESSION['user'] = $user_login;
		header('location:index.php');
		
	}
	else{
		$_SESSION['status'] = 'user or password is incorrect';
		header('location:first.php');
	}

}
if(isset($_POST['art-btn'])){
		$date_val= date("Y-m-d H:i:s");
        $fn = $_POST["title"];
        $ln = $_POST["object"];   
		$link = $_POST["link"];
		$rn = $_SESSION['user'];
		$photos=$_FILES['image']['name'];
		$upload="artphotos/".$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], "artphotos/".$_FILES['image']['name']);
        $query = "INSERT INTO posts (title,object,user,photos,date,link) VALUES('$fn','$ln','$rn','$photos','$date_val','$link')";
		mysqli_query($conn, $query);
		header('location:index2.php');


}
if(isset($_GET['editart'])){
		$id=$_GET['editart'];

		$query="SELECT * FROM posts WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();
		$id=$row['id'];
		$title=$row['title'];
		$object=$row['object'];
		$user=$row['user'];
		$link=$row['link'];
		$photos=$row['photos'];
		$update=true;
	}
	
if(isset($_POST['updart'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
	$object=$_POST['object'];
	$user=$_POST['user'];
	$link=$_POST['link'];
    $photos= $_FILES['image']['name'];
    $c_image_temp=$_FILES['image']['tmp_name'];
    move_uploaded_file($c_image_temp , "artphotos/$chemin");
    $query="UPDATE posts set title='$title', object='$object', user='$user',  photos= '$photos' , link='$link'where id='$id'";     
    $run_update=mysqli_query($conn, $query);
    if($run_update){
	$_SESSION['response']="Updated Successfully!";
	$_SESSION['res_type']="primary";
	header('location:index2.php');
    }
  }
if(isset($_GET['delart'])){
	$id=$_GET['delart'];
	$sql="SELECT photos FROM posts WHERE id=?";
	$stmt2=$conn->prepare($sql);
	$stmt2->bind_param("i",$id);
	$stmt2->execute();
	$result2=$stmt2->get_result();
	$row=$result2->fetch_assoc();
	$imagepath=$row['photos'];
	unlink($imagepath);
	$query="DELETE FROM posts WHERE id=?";
	$stmt=$conn->prepare($query);
	$stmt->bind_param("i",$id);
	$stmt->execute();
	header('location:index2.php');
	$_SESSION['response']="Successfully Deleted!";
	$_SESSION['res_type']="danger";	
	}


?>