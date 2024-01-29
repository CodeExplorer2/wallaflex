<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .product-card {
            border: 6px solid #ddd;
            padding: 15px;
            margin: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        .product-card h1, .product-card p {
            margin: 0;
            padding: 0;
        }
        .product-card img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="product-card">
        <h1><?php echo $imagen['nombre']; ?></h1>
        <p>Marca: <?php echo $imagen['marca']; ?></p>
        <p>Precio: <?php echo $imagen['precio']; ?></p>
        <img src="<?php echo isset($imagen['nombreimagen']) ? site_url('public/imagenes/' . $imagen['nombreimagen']) : ''; ?>" alt="<?php echo $imagen['nombre']; ?>">
    </div>
</body>
</html>
