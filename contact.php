<?php
  if(isset($_SESSION['user'])){
  }
?>

<?php include("myside.php")?>
<style>
input[type="file"] {
    display: none;
}

label {
    color: #34495e;
    height: 60px;
    width: 250px;
    background-color: yellow;
    position: relative;
    margin: auto;
    top: 38px;
    left: -145px;
    right: 0;
    bottom: 0;
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Montserrat"sans-serif;
    transition: 0.5s;
}

label:hover {
    color: #fff;
    background: #2980b9;
}
</style>
<form action="action.php" method="post" enctype="multipart/form-data">
    <div class="contact-section">
        <h1>Add Your Article</h1>
        <div class="border"></div>
        <input type="hidden" name="user" class="form-control" placeholder="Type Your Name"
            value="<?php echo $_SESSION['user']; ?>">
        <input type="text" name="title" class="contact-form-text" placeholder="Your title" />
        <input type="text" name="link" class="contact-form-text" placeholder="Your link" />
        <textarea class="contact-form-text" name="object" placeholder="Your object"></textarea>
        <input type="file" name="image" id="file" class="custom-file" />
        <label class="file" for="file" class="file"><i class="material-icons">add_photo_alternate</i>&nbsp; Choose
            Photo</label>
        <input type="submit" name="art-btn" class="contact-form-btn" value="Send" />
    </div>
</form>