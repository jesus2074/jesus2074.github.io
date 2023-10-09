<?php
// Recoge la información del carrito de compras
$items = $_POST['items'];
$total = $_POST['total'];

// Configura los detalles del correo electrónico
$to = 'jalbertorojas12@gmail.com';
$subject = 'Información del carrito de compras';
$message = "Items: $items\nTotal: $total";

// Envía el correo electrónico
mail($to, $subject, $message);
?>