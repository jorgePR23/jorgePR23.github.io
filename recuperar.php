<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dos Imágenes en una Fila</title>
  <style>
    .contenedor {
      display: flex; /* Establece el contenedor como un contenedor flexbox */
      justify-content: space-between; /* Distribuye el espacio entre las imágenes */
    }

    /* Puedes ajustar el estilo según tus preferencias */
    .imagen {
      width: 48%; /* Ajusta el ancho de las imágenes según tus necesidades */
      height: auto; /* Mantiene la proporción original de la imagen */
    }
  </style>
</head>
<body>

<div class="contenedor">
  <img src="/imagenes/vivandalogo.png" alt="Imagen 1" class="imagen">
  <img src="/imagenes/plazavealogo.png" alt="Imagen 2" class="imagen">
</div>

</body>
</html>
