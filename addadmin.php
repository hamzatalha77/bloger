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
             Add New Admin
         </div>
         <form action="action.php" method="post" enctype="multipart/form-data">
             <input type="hidden" name="id">
             <div class="form_wrap">
                 <div class="input_wrap">
                     <label for="email">User:</label>
                     <input type="text" name="user" placeholder="Type Your Name">
                 </div>
                 <div class="input_wrap">
                     <label for="">Email:</label>
                     <input type="text" name="email" placeholder=" Type Your Name">
                 </div>
                 <div class="input_wrap">
                     <label for="">Password</label>
                     <input type="password" name="pass" placeholder="Type Your Password">
                 </div>
                 <div class="photo">
                     <input type="file" name="image" id="file" class="custom-file" />
                     <label class="file" for="file" class="file" name="image"><i
                             class="material-icons">add_photo_alternate</i>&nbsp;Choose Photo</label>
                 </div>
                 <div class="input_wrap">
                     <input type="submit" name="add" value="Register Now" class="submit_btn">
                 </div>
             </div>

         </form>
     </div>
 </div>