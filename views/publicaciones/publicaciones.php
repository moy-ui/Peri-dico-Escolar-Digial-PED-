
<div class="contenido-principal">

  <main class="contenido-main ">
    <h2>Publicaciones</h2>

    <?php if ($dato != null) {


      while ($datos = $dato->fetch_object()) : ?>
        <!-- Asignar el id del usuairio para sacar su foto -->

        <div class="publicacion">
          <?php if ($datos->imagen != null) : ?>
            <img src="<?= BASE_URL ?>uploads/fotoPerfil/<?= $datos->imagen ?>" alt="Foto Perfil"> <b><?= $datos->nombre ?></b>
          <?php else : ?>
            <img src="<?= BASE_URL ?>assets/img/img-perfil.webp" alt="Foto Perfil"> <b><?= $datos->nombre ?></b>
          <?php endif; ?>
          <div class="contenido-publicaciones">
            <p>
              <?= $datos->descripcion ?>
            </p>

            <?php if ($datos->imagenp != null) : ?>
              <img src="<?= BASE_URL ?>uploads/fotoPublicacion/<?= $datos->imagenp ?>" alt="">
            <?php endif; ?>

          </div>
          <?= $datos->fecha ?>
        </div>
        <hr>

    <?php endwhile;
    } else {
      echo 'Aun No Hay Publicaciones';
    } ?>
  </main>

  <div class="contenido-aside ">
    <aside>
      <div class="secciones">
        <h3 class="center">Secciones<i class="flaticon-lista"></i></h3>
        <ul>
          <a href="<?= BASE_URL ?>seccion/deportes&id=1">
            <li><i class="flaticon-futbol"></i> <b>Deportes</b></li>
          </a>
          <a href="<?= BASE_URL ?>seccion/culturales&id=3">
            <li><i class="flaticon-idioma"></i> <b>Culturales</b></li>
          </a>
          <a href="<?= BASE_URL ?>seccion/comunidad&id=2">
            <li><i class="flaticon-gorro-de-graduacion"></i> <b>Comunidad Estudiantil</b></li>
          </a>
        </ul>
      </div>

      <div class="avisos">
        <a href="<?= BASE_URL ?>aviso/index">
          <h3 class="center">Avisos<i class="flaticon-megafono"></i></h3>
        </a>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia distinctio labore corrupti ullam
          repellendus
          quasi eum, et consequuntur deleniti vel earum cupiditate numquam, dolores excepturi! Est qui vitae adipisci
          excepturi!</p>
      </div>
      <div class="eventos">
        <a href="<?= BASE_URL ?>evento/index">
          <h3 class="center">Eventos Utsoe</h3>
        </a>
      </div>
    </aside>