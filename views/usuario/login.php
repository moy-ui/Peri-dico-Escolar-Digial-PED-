<main>
  <h1 class="center">Iniciar sesión</h1>
  <div class="registro">
    <!-- La accion la mandaremos a nuestro UsuarioController accion registro -->
    <form action="<?= BASE_URL ?>usuario/login" method="post" enctype="multipart/form-data">

      <div class="contenido-registro">
        <label for="email">Correo: </label>
        <input type="email" placeholder="@email" name="email">
      </div>

      <div class="contenido-registro">
        <label for="password">Contraseña </label>
        <input type="password" name="password" placeholder="Contraseña">
      </div>

      <button type="submit">
        Iniciar sesión
      </button>
    </form>
  </div>

</main>