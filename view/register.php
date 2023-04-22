<!DOCTYPE html>
<html lang="es">

<?php include "view/fragments/head.php" ?>

<body>

  <?php require("view/fragments/header.php") ?>


  <div class="banner-map"></div>

  <section class="container my-5">
    <form action="?view=register" method="POST">
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingName" placeholder="Nombre" name="name">
        <label for="floatingPassword">Nombre</label>
      </div>
      <div class="form-floating">
        <input type="date" class="form-control" id="floatingDate" name="fecha_nac">
        <label for="floatingPassword">Fecha de nacimiento</label>
      </div>


      <input class="btn btn-primary mt-3" type="submit" value="Enviar">
      <?php 
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo FormController::formRegister();
      }
      ?>
    </form>
  </section>
  <?php require("view/fragments/footer.php") ?>
</body>

</html>