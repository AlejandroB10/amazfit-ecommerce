<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $descuento = $_POST['descuento'];
    $stock = $_POST['stock'];
    $activo = $_POST['activo'];
    $categoria = $_POST['categoria'];

    include('../conexion.php');

    $sql = "INSERT INTO Producto (nombre, descripcion, precio, descuento, stock, activo, nombreCat) VALUES ($nombre, $descripcion, $precio, $descuento, $stock, $activo, $categoria)";

    consultar($sql);
}
?>
