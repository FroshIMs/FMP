<?php
  Route::set('index.php', function(){
    AuthController::CreateView('Index.php');
  });
  Route::set('login', function(){
    AuthController::CreateView('Login');
  });
  Route::set('register', function(){
    AuthController::CreateView('Register');
  });
 ?>
