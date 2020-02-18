<?php
   $categoryName = $_POST['categoryName'];
   // Validation
   if (empty($categoryName))
   {
       $error = "ERROR: Category not valid.";
       include('error.php');
   }
   else
   {
       // add category to the database table
       require_once('database.php');
       $query = "INSERT INTO categories (categoryName) VALUES ('$categoryName')";
       $db->exec($query);
       // show category list page
       include('category_list.php');
   }
?>