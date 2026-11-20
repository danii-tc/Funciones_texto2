<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <h1>Clave</h1>
    <form method="POST" action="">
    <label for="n">Nombre completo:</label>
    <input type="text" step="any" name="n" id="n" style="width: 150px; height: 25px" required>
    <br><br>
    <label for="f">Fecha nacimiento:</label>
    <input type="text" step="any" name="f" id="f" style="width: 150px; height: 25px" required>
    <br><br>
    <button type="submit" name="convertir">Generar clave</button>
    <br><br>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=== "POST" && isset($_POST['convertir'])) {
            require_once("funciones.php");
            $n= strval($_POST['n']);
            $f= strval($_POST['f']);
            echo "La clave de identificacion es: ". generar_clave($n, $f). "<br>";
        }
    ?>
</body>
</html>