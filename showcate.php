<?php
    include_once("Model/category.php");
    $cate=new Category();
    $result = $cate->GetCategories();
    include_once("View/Category/showcate.php");
?>