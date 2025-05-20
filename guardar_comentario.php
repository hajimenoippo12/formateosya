
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $comentario = htmlspecialchars($_POST["comentario"]);
    $fecha = date("d-m-Y H:i");

    $linea = "<p><strong>$nombre</strong> <em>($fecha)</em><br>$comentario</p>\n";

    file_put_contents("comentarios.txt", $linea, FILE_APPEND | LOCK_EX);
    header("Location: index.php");
    exit();
}
?>
