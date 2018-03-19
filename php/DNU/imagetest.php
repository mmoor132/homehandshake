<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"img/".$file_name);
      }else{
         print_r($errors);
      }
   }

   /*
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"img/".$file_name);
      }else{
         print_r($errors);
      }
   }

if(isset($_FILES['image2'])){
      $errors= array();
      $file_name = $_FILES['image2']['name'];
      $file_size = $_FILES['image2']['size'];
      $file_tmp = $_FILES['image2']['tmp_name'];
      $file_type = $_FILES['image2']['type'];
      $file_ext = strtolower(end(explode('.',$_FILES['image2']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"img/".$file_name);
      }else{
         print_r($errors);
      }
   }

if(isset($_FILES['image3'])){
      $errors= array();
      $file_name = $_FILES['image3']['name'];
      $file_size = $_FILES['image3']['size'];
      $file_tmp = $_FILES['image3']['tmp_name'];
      $file_type = $_FILES['image3']['type'];
      $file_ext = strtolower(end(explode('.',$_FILES['image3']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"img/".$file_name);
      }else{
         print_r($errors);
      }
   }

if(isset($_FILES['image4'])){
      $errors= array();
      $file_name = $_FILES['image4']['name'];
      $file_size = $_FILES['image4']['size'];
      $file_tmp = $_FILES['image4']['tmp_name'];
      $file_type = $_FILES['image4']['type'];
      $file_ext = strtolower(end(explode('.',$_FILES['image4']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"img/".$file_name);
      }else{
         print_r($errors);
      }
   }

if(isset($_FILES['image5'])){
      $errors= array();
      $file_name = $_FILES['image5']['name'];
      $file_size = $_FILES['image5']['size'];
      $file_tmp = $_FILES['image5']['tmp_name'];
      $file_type = $_FILES['image5']['type'];
      $file_ext = strtolower(end(explode('.',$_FILES['image5']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"img/".$file_name);
      }else{
         print_r($errors);
      }
   }*/
?>
<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
			
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>
			
      </form>
      
   </body>
</html>

<!--<input type = "file" name = "image" />
               <input type = "file" name = "image2" />
               <input type = "file" name = "image3" />
               <input type = "file" name = "image4" />
               <input type = "file" name = "image5" />-->