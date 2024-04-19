<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css.css">
    <title>Mi galeria de imagenes</title>
    </head>
<body>
    <section class="fondo">
        <h1>Mi galeria de imagenes</h1>
        <hr>
        <nav>
            <ul>
                <li><a href="upload.php">Subir imagen</a></li>
                <li><a href="login.php">Registrar</a></li>
            </ul>
        </nav>
        <div class="galeria">
            <?php
            $ruta_imagenes = "imagenes/";
            $imagenes = opendir($ruta_imagenes);
            $hay_imagenes = false;
            if($imagenes){
                while($imagen = readdir($imagenes)){
                    if(is_file($ruta_imagenes . $imagen) && getimagesize($ruta_imagenes . $imagen)){
                        echo "<img src= '$ruta_imagenes$imagen'>";
                        $hay_imagenes = true;
                    } 
                }
                closedir($imagenes);
            } else {
                echo "Error: al cargar carpeta de imagenes";
            }
            if(!$hay_imagenes){
                echo "No hay imagenes aún. Sube la primera";
            }
            ?>
        </div>
    </section>
</body>
</html>