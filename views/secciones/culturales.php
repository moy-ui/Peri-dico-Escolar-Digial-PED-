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


<main class="seccion-culturales seccion">
  <h1 class="center">Actividades Culturales</h1>
  <div class="cards">
    <?php while ($act = $actividad->fetch_object()) : ?>

      <a href="" class="card card-<?= $act->color ?>">
        <h3><?= $act->nombre ?></h3>
        <img src="<?= BASE_URL ?>uploads/fotoActividades/<?= $act->imagen ?>" alt="Aqui ira una imagen agregada por el admin">
        <p><?= $act->descripcion ?></p>
      </a>
    <?php endwhile; ?>
  </div>

  <!-- <div class="cards">
    <div class="card card-purple">
      <h3>Pintura</h3>
      <i class="flaticon-paleta-de-pintura"></i>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nam, doloremque maiores minus nemo, saepe
        impedit culpa neque atque quasi molestiae placeat deserunt dicta delectus ullam, deleniti architecto vero
        velit.</p>
    </div>

    <div class="card card-green">
      <h3>Musica</h3>
      <i class="flaticon-nota-musical"></i>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere ex quis omnis dolorem neque nihil eaque,
        voluptatibus ullam ipsa a. Nam provident magnam ullam, recusandae officia animi aliquid placeat libero.</p>
    </div>

    <div class="card card-orange">
      <h3>Baile</h3>
      <i class="flaticon-fiesteros"></i>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo cum dignissimos, consequatur fugit consequuntur
        quam eos molestias delectus iste, aliquam suscipit illum nam perferendis velit temporibus mollitia deserunt
        earum quos!</p>
    </div> -->

  </div>

</main>