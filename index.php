<?php

spl_autoload_register('autoLoader');

  require_once('Routes.php');

  function autoLoader($fileName) {

    if (file_exists('./Classes/'.$fileName.'.php')) {
          require_once './Classes/'.$fileName.'.php';
    } elseif (file_exists('./Controllers/'.$fileName.'.php')) {
          require_once './Controllers/'.$fileName.'.php';
    } elseif (file_exists('./Models/'.$fileName.'.php')) {
          require_once './Models/'.$fileName.'.php';
    } elseif (file_exists('./Views/'.$fileName.'.php')) {
          require_once './Views/'.$fileName.'.php';
    } else {
      echo "Something went wrong, click to go to <a href='/'>home page</a>!";
    }
  }

 ?>
