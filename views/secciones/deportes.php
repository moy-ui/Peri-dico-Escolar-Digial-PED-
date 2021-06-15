<nav class="navegacion">
  <a href="<?= BASE_URL ?>seccion/Deportes&id=1">
    <i class="flaticon-futbol"></i> Deportes
  </a>
  <a href="<?= BASE_URL ?>seccion/Culturales&id=3">
    <i class="flaticon-idioma"></i> Culturales
  </a>
  <a href="<?= BASE_URL ?>seccion/Comunidad&id=2">
    <i class="flaticon-gorro-de-graduacion"></i> Comunidad Estudiantil
  </a>
</nav>

<main class="seccion-deportes seccion">
  <h1 class="center">Seccion Deportes</h1>


  <div class="cards">
    <?php while ($act = $actividad->fetch_object()) : ?>

      <a href="" class="card card-<?= $act->color ?>">
        <h3><?= $act->nombre ?></h3>
        <img src="<?= BASE_URL ?>uploads/fotoActividades/<?= $act->imagen ?>" alt="Aqui ira una imagen agregada por el admin">
        <p><?= $act->descripcion ?></p>
      </a>
    <?php endwhile; ?>
  </div>

</main>