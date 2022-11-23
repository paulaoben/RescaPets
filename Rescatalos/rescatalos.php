<?php
require 'connection.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"] and
  $zone = $_POST["zone"] and
  $contact = $_POST["contact"] and
  $comments = $_POST["comments"];

  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png', 'row'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Formato inválido de imagen');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('El archivo es demasiado grande');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO tb_upload VALUES('$zone', '$name', '$contact', '$newImageName', '$comments')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Añadido con éxito');
        document.location.href = 'data.php';
      </script>
      ";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>RescaPEts</title>
    <link rel="stylesheet" href="./style.css"/>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="contact-box">
          <div class="left"></div>
			    <div class="right">
            <h2>Rescatalos</h2>
              <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                
                <label for="zone">Zona Norte/Sur/Este/Oeste</label>
                <input type="text" name="zone" id = "zone" required value="" class="field"> <br/>
              
                <label for="name">Nombre</label>
                <input type="text" name="name" id = "name" required value="" class="field"> <br/>

                <label for="contact">Contacto</label>
                <input type="text" name="contact" id = "contact" required value="" class="field"> <br/>

                <label for="image">Foto del animal</label>
                <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="" class="field"> <br/>

                <label for="comments">Descripción</label>
                <input type="text" name="comments" id = "comments" required value="" class="field"> <br/>
                <br/>
                <button type = "submit" name = "submit" class="btn">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>