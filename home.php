<?php


get_header();  // Carga el encabezado

// Aquí va el contenido de la página
?>
<div class="container-general">
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

    <div class="second-section">
        <div class="second-section__titles">
            <div class="second-section__titles__stain-text">
                <img class="stain" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo-mancha-naranja.svg" alt="Logo">
                <h1 class="text-above-stain">Activando el estudio. Apagando bloqueos.</h1>
                
            </div>

            <img class="arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-flecha.svg" alt="flecha">
                
            <h1>Esto NO es una clase ni un curso de organización académica</h1>

        </div>
        <div class="second-section__text">
            <span>Este lugarcito lo pensé para que puedas frenar un poco la cabeza, ordenarte, y empezar a mirar tu carrera con otros ojos. No importa si estás recién empezando o si te falta poco para terminar: si sentís que hay algo que te está trabando, este espacio es para vos.</span>
        </div>
    </div>

    <div class="third-section">
        <div class="third-section__cards-section">

            <h1>Sobre Misión Graduación</h1>

            <div class="third-section__cards-section__cards">
                <img class="cards" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-card1.svg" alt="">
                <img class="cards" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-card2.svg" alt="">
                <img class="cards" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-card3.svg" alt="">
            </div>

        </div>

        <div class="third-section__only-card-section">
            <div class="third-section__only-card-section__only-card">
                <img class="only-card" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-only-card.svg" alt="">
                <h1>Semana de exámenes</h1>
            </div>
            
        </div>
    </div>

    <div class="fourth-section">
        <div class="fourth-section__info">
            <div class="fourth-section__info__face-text">
                <img class="face-two" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-face2.svg" alt="">
                <h1>Antonela Marcaccio</h1>
                <h2>Lic. en Psicología</h2>
            </div>
            <span>Me encanta acompañar a estudiantes universitarios y terciarios a superar los bloqueos que aparecen en el camino del estudio. Vengo de un recorrido en la investigación educativa, especialmente en temas de toma de decisiones morales, valores laborales y dinámicas en contextos reales de aprendizaje.
                Más allá de los libros, pasé por institutos de investigación y seminarios donde diseñé programas para adolescentes y adultos, buscando entender qué nos frena y cómo podemos avanzar con más claridad.
                Me encanta acompañar a estudiantes que sienten que están un poco trabados en su camino universitario y a quienes quieren evitar nuevas trabas. Sé lo que es estar en esa etapa en la que uno se pregunta si eligió bien, si va a poder con todo, o simplemente no encuentra la motivación para seguir. Lo vi mil veces… y también lo trabajé mucho desde la investigación y, sobre todo, desde el vínculo con estudiantes como vos.
                Si te da curiosidad o sentís que te vendría bien un empujoncito para reconectar con tu camino, te esperamos. Me encantaría que te sumes.
            </span>
        </div>


        <div class="fourth-section__last-form">
            <form class="fourth-section__last-form__form" action="#" method="post" class="email-form">
                <label for="email">¿Cual es tu nombre?</label>
                <input type="email" id="email" name="email" placeholder="nombre y apellido" required>
                <label for="email">¿Cual es tu mail?</label>
                <input type="email" id="email" name="email" placeholder="tumail@email.com" required>
                <label for="email">Whatsapp(opcional)</label>
                <input type="email" id="email" name="email" placeholder="11 22334455" required>
                <label for="email">¿En que te puedo ayudar?</label>
                <input type="email" id="email" name="email" placeholder="tu consulta..." required>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>






</div>


<?php

get_footer();  // Carga el footer
