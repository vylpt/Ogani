<?php
  
  require('../db/conn.php');
   //lay dư lieu tu form
  $name = $_POST['name'];
  $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/','-',$name)));
  $summary = $_POST['summary'];
  $description = $_POST['description'];

  $danhmuc = $_POST['danhmuc'];
 
 
  //$imgs = '';
  
    $filename = $_FILES['image']['name'];
    $location = "uploads/news/".uniqid().$filename;
    $extension = pathinfo($location, PATHINFO_EXTENSION);    $extension = strtolower($extension);
    $valid_extensions = array("jpg","jpeg","png");
    $response =0;
    if (in_array(strtolower($extension), $valid_extensions)){
      if (move_uploaded_file($_FILES['image']['tmp_name'], $location)){
        //$imgs .= $location .";";
      }
    }
  
  //$imgs = substr($imgs,0,-1);
  $sql_str = "INSERT INTO `news` 
  ( `title`, `avatar`, `slug`,`summary`, `description`,`newscategory_id`, `created_at`, `updated_at`) 
  VALUES 
  ( '$name', '$location','$slug', '$summary','$description',  
  $danhmuc,  NOW(), NOW());";
 
  mysqli_query($conn, $sql_str);
  header("location: listnews.php");
?>