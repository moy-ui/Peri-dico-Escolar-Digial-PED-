<?php if (isset($avisos)) : ?>

  <main>

    <div class="contenido-main seccion-avisos">
      <h2>Avisos</h2>
      <?php if ($avisos != null) : ?>
        <?php while ($aviso = $avisos->fetch_object()) : ?>
          <div class="publicacion">
            <?php if ($aviso->userfoto != null) : ?>
              <img src="<?= BASE_URL ?>uploads/fotoPerfil/<?= $aviso->userfoto ?>" alt="Foto Perfil"> <b><?= $aviso->nombre ?></b>
            <?php else : ?>
              <img src="<?= BASE_URL ?>assets/img/img-perfil.webp"" alt=" Foto Perfil"><b><?= $aviso->nombre ?></b>
            <?php endif; ?>
            <div class="contenido-publicaciones">
              <p>
                <?= $aviso->descripcion ?>
              </p>
            </div>
            <div class="contenido-info">
              <?= $aviso->fecha ?> <br><br>
              <input type="checkbox"> selecionar
            </div>
          </div>
          <hr>
        <?php endwhile; ?>

      <?php else : ?>
        <h3>Aun No hay Avisos</h3>
      <?php endif; ?>
    </div>

  </main>
<?php else : ?>
  <h1>No existen avisos aun</h1>
<?php endif ?>