<?php

class ViewController {

  function router() {
   if (isset($_GET["view"])) {
      switch ($_GET["view"]) {
        case 'home':
          include "./view/home.php";
          break;
        case 'about':
          include "./view/about.php";
          break;
        case 'map':
          include "./view/map.php";
          break;
        case 'register':
          include "./view/register.php";
          break;
        default:
        include "./view/home.php";
          break;
      }
   }else {
    include "./view/home.php";
   }
  }
}