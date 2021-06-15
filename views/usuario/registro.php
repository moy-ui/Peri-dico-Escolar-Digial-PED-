<main>
  <h1 class="center">Registrarse</h1>

  <div class="registro">
    <!-- La accion la mandaremos a nuestro UsuarioController accion registro -->
    <form action="<?= BASE_URL ?>usuario/save" method="post" enctype="multipart/form-data">
      <div class="contenido-registro">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" placeholder="Nombre">
      </div>
      <div class="contenido-registro">
        <label for="apellidos">Apellidos: </label>
        <input type="text" name="apellidos" placeholder="Apellidos">
      </div>

      <div class="contenido-registro">
        <label for="email">Correo: </label>
        <input type="email" placeholder="@email" name="email">
      </div>

      <div class="contenido-registro">
        <label for="password">Contraseña </label>
        <input type="password" name="password" placeholder="Contraseña">
      </div>

      <div class="contenido-registro">
        <label for="evento">Imagen</label>
        <input type="file" name="imagen">
      </div>

      <button type="submit">
        Registrarse
      </button>
    </form>
  </div>

</main>