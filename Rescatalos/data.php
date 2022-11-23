<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
    <link rel="stylesheet" href="./style.css"/>
  </head>
  <body>
    <div class="table_responsive">
      <table border = 1 cellspacing = 0 cellpadding = 10>
        <thead>
          <tr>
            <td>Zona</td>
            <td>Nombre</td>
            <td>Contacto</td>
            <td>Foto del animal</td>
            <td>Descripción</td>
          </tr>
        <thead>  
    <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM tb_upload ORDER BY image DESC")
    ?>

      <?php foreach ($rows as $row) : ?>
        <tbody>
          <tr>
            <td><?php echo $row["zone"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["contact"]; ?></td>
            <td> <img src="img/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"> </td>
            <td><?php echo $row["comments"]; ?></td>
          </tr>
        </tbody>
      <?php endforeach; ?>
    </table>
    <br>
    <a href="./rescatalos.php">Rescatar otro animal</a>
  </body>
</html>