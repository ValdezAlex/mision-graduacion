<?php


get_header();  // Carga el encabezado

// Aquí va el contenido de la página
?>

<div class="first-section">
    <div class="logo-presentacion">
        <img class="logo-icon-big" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logoBig.svg" alt="Logo">
        <h1>Misión Graduación</h1>
    </div>

    <div class="form-news">
        <h1>Se viene un evento!</h1>
        <p>Dejame tu mail y enterate de mas detalles</p>

        <form action="#" method="post" class="email-form">
            <!-- <label for="email">Suscribite:</label> -->
            <input type="email" id="email" name="email" placeholder="tumail@email.com" required>
            <button type="submit">Enviar</button>
        </form>
        <img class="img-portada" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/png/img-portada.png" alt="Imagen de portada">

    </div>
</div>


<?php

get_footer();  // Carga el footer
?>