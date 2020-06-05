<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        span.note{
            font-size: 120%;
            color: #F1042C;
        }
        </style>
    <title>Document</title>

</head>
<body>
    <?php require 'views/header.php'; ?>
    

        
        <h1>SuperM <span class="note">.com</span>
        <input type="search" id="miBusqueda" name="busqueda" style="font.size:50%" placeholder="Buscar Producto"> <button> </button>
        </h1>
        <div id="header">
        <ul>
            <li><a href="<?php echo constant('URL'); ?>Productos.html">Productos</a></li>
            <li><a href="<?php echo constant('URL'); ?>Logo.html">Logo</a></li>
            <li><a href="<?php echo constant('URL'); ?>Informacion.html">Informacion</a></li>
            <li><a href="<?php echo constant('URL'); ?>Subtotal.html">Subtotal</a></li>
        </ul>
    </div>
    

    <?php require 'views/footer.php'; ?>
</body>
</html>