 <?php 
    if (isset($_SESSION['id']) && isset($_SESSION['user'])                                                                                                                      )
?>
 <?php include("myside.php")?>

 <style>
input[type="file"] {
    display: none;
}

.ob {
    height: 200px;
    width: 200px;
    word-break: break-word;
}
 </style>
 <div class="wrapper">
     <div class="registration_form">
         <div class="title">
             Edit Your Article
         </div>
         <form action="action.php" method="post" enctype="multipart/form-data">
             <input type="hidden" name="id" value="<?php echo $id; ?>">
             <div class="form_wrap">
                 <div class="input_wrap">
                     <label for="title">Title:</label>
                     <input type="text" name="title" placeholder="Type Your Name" value="<?php echo $title; ?>">
                 </div>
                 <div class="input_wrap">
                     <label for="Object">Object:</label>
                     <input type="text" class="ob" name="object" placeholder="Your object"
                         value="<?php echo $object; ?>"></input>
                 </div>
                 <div class="input_wrap">
                     <label for="user">User:</label>
                     <input type="text" name="user" placeholder="Type Your Password" value="<?php echo $user; ?>">
                 </div>
                 <div class="photo">
                     <input type="file" name="image" id="file" class="custom-file" />
                     <label class="file" for="file" class="file" name="image"><i
                             class="material-icons">add_photo_alternate</i>&nbsp;Choose Photo</label>
                     <img src="artphotos/<?php echo $chemin; ?>" width="120" class="img-thumbnail">
                 </div>
                 <input type="submit" name="updart" class="submit_btn" value="Update Record">
             </div>
     </div>
 </div>