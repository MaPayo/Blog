<?php require_once './includes/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de videojuegos</title>
    <link href="./assets/css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php require_once './includes/cabecera.php'; ?>

    <?php require_once './includes/lateral.php'; ?>

    <!--MAIN CONTENT -->
    <div id="principal">
        <h1>Últimas entradas</h1>
        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quod praesentium vero incidunt necessitatibus quos quae, voluptates veritatis ab, sint, deserunt perferendis dolorum id esse explicabo culpa! Voluptate, architecto quaerat.</p>
        </article>
        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quod praesentium vero incidunt necessitatibus quos quae, voluptates veritatis ab, sint, deserunt perferendis dolorum id esse explicabo culpa! Voluptate, architecto quaerat.</p>
        </article>
        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quod praesentium vero incidunt necessitatibus quos quae, voluptates veritatis ab, sint, deserunt perferendis dolorum id esse explicabo culpa! Voluptate, architecto quaerat.</p>
        </article>
        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quod praesentium vero incidunt necessitatibus quos quae, voluptates veritatis ab, sint, deserunt perferendis dolorum id esse explicabo culpa! Voluptate, architecto quaerat.</p>
        </article>
        <div id="ver-todas">
            <a href="">Ver todas las entradas</a>
        </div>
    </div> <!-- fin principal-->

    <!--FOOTER -->
    <?php require_once './includes/pie.php'; ?>