<?php  UsersController::deleteUser($_GET['id']);
  header("Location:?page=index");
  exit;