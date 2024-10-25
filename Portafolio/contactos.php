<?php
require 'includes/header.php';
?>

<!-- container -->
<main class="container">

  <form class="formulario" action="./funciones/insertar_registro.php" method="POST">
    <fieldset>
      <legend>Digite todos sus datos</legend>

      <div class="campos">

        <div class="campo">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" placeholder="Digite nombre completo" required autofocus>
        </div>

        <div class="campo">
          <label for="tel">Telefono</label>
          <input type="number" id="tel" name="telefono" placeholder="+57 3XXXXXXXXX">
        </div>

        <div class="campo">
          <label for="email">Email</label>
          <input type="email" id="email" name="correo" placeholder="correo@correo.com">
        </div>

        <div class="campo">
          <label for="men">Mensaje</label>
          <textarea name="mensaje" id="men"></textarea>
        </div>

        <input type="submit" class="btn">

      </div>
    </fieldset>
  </form>

  </section>
  </div>
</main>
<?php include 'includes/footer.php';?>
</body>

</html>