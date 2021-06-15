<!-- Header  -->
<?php if (isset($_SESSION['usuario']) && $_SESSION['usuario'] == 'complete') : ?>
  <h2 class="center">Ya esta resgistrado!! Ahora inicie sesión</h2>

<?php elseif (isset($_SESSION['usuario']) && $_SESSION['usuario'] == 'failed') : ?>
  <h2 class="center">A ocurrido un error por favor verifique que haya ingresado todo los datos</h2>
<?php endif; ?>

<?php Utils::deleteSeccion('usuario'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Periodico Escolar Digital</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/font/flaticon.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/normalize.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>

<body>

  <header class="site-header">

    <a href="<?= BASE_URL ?>index.php"><img src="<?= BASE_URL ?>assets/img/ped.jpeg" alt="Logotipo del Periodico Escolar Digital"></a>

    <div class="contenido-header">
      <h1>Periodico Escolar</h1>
      <input type="text" name="buscar" placeholder="Buscar">
    </div>

    <div class="session">
      <?php if (isset($_SESSION['identity'])) : ?>

        <b><?= $_SESSION['identity']->nombre . " " . $_SESSION['identity']->apellidos; ?></b>
        <a href="<?= BASE_URL ?>publicacion/publicar">Publicar noticia</a>
        <?php if (isset($_SESSION['admin'])) : ?>
          <a href="">Gestionar Actividades</a>
          <a href="">Gestionar Eventos</a>
        <?php endif; ?>
        <a href="<?= BASE_URL ?>/usuario/logout">Cerrar sesión</a>

      <?php else : ?>

        <b><a href="<?= BASE_URL ?>usuario/registro">Registrarse</a></b>
        <b><a href="<?= BASE_URL ?>usuario/session">Iniciar sesión</a></b>

      <?php endif; ?>
    </div>
  </header>