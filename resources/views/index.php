<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Proyecto - Tailwind</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  </head>

  <body> 
    <div class="fixed top-0 w-full">
      <?php include 'components/navbar-gris.html'; ?>
      <?php include 'components/navbar-azul.html'; ?>
      <?php include 'components/options-bar.html'; ?>
    </div>

    <div class="overflow-y-auto bg-gray-100 max-h-screen">
      <div class="h-96 items-center justify-end">
        <?php include 'components/imagen-portada.html'; ?>
        <?php include 'components/carrusel-1.html'; ?>
        <?php include 'components/texto-responsabilidad.html'; ?>
        <?php include 'components/oferta-educativa.html'; ?>
        <?php include 'components/carrusel-2.html'; ?>
        <?php include 'components/cuadro-gris.html'; ?>
        <?php include 'components/carrusel-3.html'; ?>
        <?php include 'components/sub-footer.html'; ?>
        <?php include 'components/footer.html'; ?>
      </div>
    </div>
  </body>
</html>
