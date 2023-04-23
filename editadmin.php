 <?php 
    if (isset($_SESSION['id']) && isset($_SESSION['user'])                                                                                                                      )
?>
 <?php include("myside.php")?>

 <style>
input[type="file"] {
    display: none;
}
 </style>
 <div class="wrapper">
     <div class="registration_form">
         <div class="title">
             Edit Your Admin
         </div>
         <form action="action.php" method="post" enctype="multipart/form-data">
             <input type="hidden" name="id" value="<?php echo $id; ?>">
             <div class="form_wrap">
                 <div class="input_wrap">
                     <label for="email">User:</label>
                     <input type="text" name="user" placeholder="Type Your Name" value="<?php echo $user; ?>">
                 </div>
                 <div class="input_wrap">
                     <label for="">Email:</label>
                     <input type="text" name="email" placeholder=" Type Your Name" value="<?php echo $email; ?>">

                 </div>
                 <div class="input_wrap">
                     <label for="">Password</label>
                     <input type="password" name="pass" placeholder="Type Your Password" value="<?php echo $pass; ?>">
                 </div>
                 <div class="photo">
                     <input type="file" name="image" id="file" class="custom-file" />
                     <label class="file" for="file" class="file" name="image"><i
                             class="material-icons">add_photo_alternate</i>&nbsp;Choose Photo</label>
                     <img src="images/<?php echo $chemin; ?>" width="120" class="img-thumbnail">
                 </div>
                 <input type="submit" name="update" class="submit_btn" value="Update Record">
             </div>
     </div>
 </div>