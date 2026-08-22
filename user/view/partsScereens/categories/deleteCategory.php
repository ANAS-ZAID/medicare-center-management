<?php  CategoriesController::deleteCategory($_GET['id']);
  header("Location:?page=index");
  exit;