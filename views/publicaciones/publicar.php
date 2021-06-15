<main>
  <h1 class="center">Publicar Noticia</h1>

  <div class="registro">
    <!-- La accion la mandaremos a nuestro UsuarioController accion registro -->
    <form action="<?= BASE_URL ?>publicacion/addPublicacion&id=<?= $_SESSION['identity']->id ?>" method="post" enctype="multipart/form-data">
      <div class="contenido-registro">
        <label for="descripcion">Descripcion: </label>
        <br>
        <textarea name="descripcion" rows="6"></textarea>
      </div>

      <div class="contenido-registro">
        <label for="password">Agregar seccion: </label>
        <select name="actividad">
          <option value="null">Ninguna</option>
          <?php while ($act = $actividad->fetch_object()) : ?>

            <option value="<?= $act->id ?>"><?= $act->nombre ?></option>

          <?php endwhile; ?>
        </select>
      </div>

      <div class="contenido-registro">
        <label for="evento">Agregar Imagen</label>
        <input type="file" name="imagen">
      </div>

      <button type="submit">
        Publicar
      </button>
    </form>
  </div>

</main>