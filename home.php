<?php

/**
 * The template for displaying the blog.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alt_Custom_Theme
 */


// get_header();  // Carga el encabezado

?>


<!-- // Contenido del header para pruebas -->


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!-- Site favicon -->
    <link rel="icon" href="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/favicon.ico'); ?>" type="image/x-icon">
    <?php wp_site_icon(); ?>
    <?php wp_head(); ?>
</head>



<body <?php alt_custom_theme_print_body_class(); ?>>

    <header class="main-theme-header">
        <div class="inner-container">
            <a class="site-icon" href="<?php bloginfo('url'); ?>" aria-label="Ir a la sección de inicio del sitio">
                <img class="logo-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo.svg" alt="Logo">
                <h1 class="logo-text">Misión Graduación</h1>
            </a>
            <?php alt_custom_theme_print_menu('header'); ?>
            <button id="hamburger-menu-toggler">
                <div class="bar"></div>
                <div class="bar-space"></div>
                <div class="bar"></div>
            </button>
            <div id="hamburger-menu-container">
                <?php alt_custom_theme_print_menu('hamburger'); ?>
            </div>
        </div>
    </header>
    <main>


        <!-- Alerta sobre si se mando bien el formulario -->


        <?php if (isset($_GET['status'])): ?>
            <script>
                <?php if ($_GET['status'] === 'ok'): ?>
                    alert('✅ Mensaje enviado correctamente. ¡Gracias por contactarnos!');
                <?php elseif ($_GET['status'] === 'error'): ?>
                    alert('❌ Error al enviar el mensaje. Intenta de nuevo más tarde.');
                <?php endif; ?>

                // 🔹 Limpia la URL para que no quede ?status=ok o ?status=error
                if (window.history.replaceState) {
                    const url = new URL(window.location);
                    url.searchParams.delete('status');
                    window.history.replaceState({}, document.title, url);
                }
            </script>
        <?php endif; ?>


        <!-- Fin de la alerta-->






        <!-- // Fin del contenido del header -->







        <!-- // Aquí va el contenido de la página -->
        <div class="container-general">

            <div class="first-section">
                <div class="first-section__logo-section">
                    <img class="first-section__logo-section__logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logoBig.svg" alt="Logo">

                    <h1 class="first-section__logo-section____text">misión <br> graduación</h1>
                </div>

                <div class="first-section__picture-section">
                    <h1 class="first-section__picture-section__title">
                        Se viene<span class="salto"> un evento!</span>
                    </h1>

                    <h2 class="first-section__picture-section__sub-title">
                        Dejame tu mail y enterate<br> de mas detalles
                    </h2>

                    <form action="/wp-content/themes/mg-theme/enviar.php" method="post" class="first-section__picture-section__form">
                        <!-- <label for="email">Suscribite:</label> -->
                        <input class="first-section__picture-section__form__input" type="email" id="email" name="email" placeholder="tumail@email.com" required>
                        <button class="first-section__picture-section__form__button" type="submit">
                            <h1 class="first-section__picture-section__form__button__text">
                                ENVIAR
                            </h1>
                        </button>
                    </form>

                    <img class="first-section__picture-section__picture" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-principalpicture.svg" alt="Imagen de portada">


                </div>
            </div>

            <div class="second-section">

                <div class="second-section__obj-text-section">

                    <div class="second-section__obj-text-section__slain-text-section">

                        <img class="stain" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo-mancha-naranja.svg" alt="Logo">

                        <h1 class="text-above">Activando <br> el estudio.<br> Apagando<br> bloqueos.</h1>

                    </div>

                    <img class="second-section__obj-text-section__arrow-section" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-flecha.svg" alt="flecha">


                    <h1 class="second-section__obj-text-section__sec-text">Esto NO es<br> una clase ni<br> un curso de<br> organización<br> académica</h1>


                </div>


                <h3 class="second-section__text-section__desktop">
                    ¿Estás por graduarte o atravesando una carrera y sentís que se te viene el mundo encima? <br>
                    Tranqui, no sos el único. Este es un lugarcito pensado para vos, que estás en la recta final (o en plena montaña rusa) de tu carrera universitaria o terciaria.
                </h3>

                <h3 class="third-section__text-section__desktop">
                    Acá no solo hablamos de parciales y tesis. Hablamos de TODO eso que pesa y que nadie te enseñó a gestionar:
                </h3>
                <ul>
                    <li><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/items/first.svg'; ?>" alt="First"><p>El estrés de rendir y sentir que nunca alcanza.</p></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/items/second.svg'; ?>" alt="Second"><p>La presión familiar o social de "terminar ya".</p></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/items/third.svg'; ?>" alt="Third"><p>La culpa por no avanzar al ritmo de los demás.</p></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/items/fourth.svg'; ?>" alt="Fourth"><p>El miedo a no saber qué hacer después del título.</p></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/items/fifth.svg'; ?>" alt="Fifth"><p>La ansiedad, el agotamiento y el famoso “no doy más”.</p></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/items/sixth.svg'; ?>" alt="Sixth"><p>Esa sensación de estar perdido o desconectado de tu propósito.</p></li>
                </ul>

                <h3 class="fourth-section__text-section__desktop">
                    En Misión Graduación vas a encontrar talleres, cursos y contenido pensado para acompañarte en esta etapa que puede ser TAN desafiante como transformadora.<br>
                    Con herramientas emocionales, acompañamiento real y mucho amor.</h3>
                <h3 class="fifth-section__text-section__desktop">No es solo un espacio para hablar de estudios. Es un lugar para hablar de vos.<br>
                    Para que recuerdes que no sos una máquina de rendir y que tu valor no se mide en finales aprobados.</h3>
                <h3 class="sixth-section__text-section__desktop">Te esperamos en <strong>@misiongraduacion</strong>. Recibirte es una misión posible y el camino es una transformación.</h3>
                </h1>
            </div>

            <div class="third-section">

                <h1 class="third-section__title">Seguime</h1>

                <div class="third-section__carousel">
                    <div class="third-section__carousel__cards">
                        <a href="https://www.instagram.com/misiongraduacion/" target="_blank">
                            <div class="card">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/png/card-ig.png" alt="Imagen 1">
                            </div>
                        </a>
                        <a href="https://www.tiktok.com/@misiongraduacion" target="_blank">
                            <div class="card">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/png/card-tiktok.png" alt="Imagen 2">
                            </div>
                        </a>
                        <a href="https://www.youtube.com/@misiongraduacion" target="_blank">
                            <div class="card">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/png/card-youtube.png" alt="Imagen 3">
                            </div>
                        </a>
                        <a href="https://chat.whatsapp.com/LfotNoyJRW198UMGs62s6l" target="_blank">
                            <div class="card">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/png/card-wasap.png" alt="Imagen 3">
                            </div>
                        </a>
                    </div>

                    <button class="third-section__carousel__button prev">‹</button>
                    <button class="third-section__carousel__button next">›</button>
                </div>


                <!-- <div class="third-section__only-card">
            <img class="card" src=" php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-only-card.svg" alt="">
            <h1 class="sub-title">Semana de exámenes</h1>
        </div> -->
            </div>

            <div class="fourth-section">
                <div class="fourth-section__picture-section">
                    <img class="fourth-section__picture-section__picture" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-facepreform.svg" alt="">
                    <h1 class="fourth-section__picture-section__title">Antonela <br> Marcaccio</h1>
                    <h1 class="fourth-section__picture-section__sub-title">Lic. en Psicología</h1>
                </div>

                <div class="fourth-section__text-section">
                    <h3 class="fourth-section__text-section__text">
                        Soy psicóloga y vengo del mundo de la docencia y de la investigación educativa, donde me enfoqué en la toma de decisiones, los valores laborales, herramientas útiles para orientación vocacional y las emociones que influyen en nuestras elecciones.<br>
                        <br>
                        Desde hace casi veinte años acompaño a estudiantes universitarios y terciarios que sienten bloqueos en su recorrido académico o quieren evitar nuevas trabas.<br>
                        <br>
                        Diseñe programas para jóvenes y adultos, siempre buscando entender qué nos frena y cómo avanzar con más claridad.<br>
                        <br>
                        Cada uno de nosotros tiene una historia única pero compartimos desafíos comunes. Con calma, humor y escucha, reconectamos con tu camino y tomamos impulso. <strong>Te espero.<strong>
                    </h3>

                    <h3 class="fourth-section__text-section__text-mobile">
                        Vengo del mundo de la docencia y de la investigación educativa, donde me enfoqué en la toma de decisiones, los valores laborales, herramientas útiles para orientación vocacional y las emociones que influyen en nuestras elecciones.<br>
                        <br>
                        Desde hace casi veinte años acompaño a estudiantes universitarios y terciarios que sienten bloqueos en su recorrido académico o quieren evitar nuevas trabas. <br>
                        <br>
                        Diseñe programas para jóvenes y adultos, siempre buscando entender qué nos frena y cómo avanzar con más claridad. <br>
                        <br>
                        Cada uno de nosotros tiene una historia única pero compartimos desafíos comunes. Con calma, humor y escucha, reconectamos con tu camino y tomamos impulso. Te espero
                    </h3>
                </div>
            </div>

            <div class="form-section">

                <h1 class="form-section__title">Escribime con tu consulta</h1>

                <form class="form-section__form" action="/wp-content/themes/mg-theme/enviar.php" method="post" class="email-form">
                    <div class="form-section__form__input-name">
                        <label for="email">
                            <h2>¿Cuál es tu nombre?</h2>
                        </label>
                        <input class="form-section__form__input-name__name" type="text" id="nombre" name="nombre" placeholder="nombre y apellido" required>
                    </div>

                    <div class="form-section__form__input-mail">
                        <label for="email">
                            <h2>¿Cuál es tu mail?</h2>
                        </label>
                        <input class="form-section__form__input-mail__mail" type="email" id="email" name="email" placeholder="tumail@email.com" required>
                    </div>

                    <div class="form-section__form__input-wsp">
                        <label for="email">
                            <h2>Whatsapp (opcional)</h2>
                        </label>
                        <input class="form-section__form__input-wsp__wsp" type="text" id="wasap" name="wasap" placeholder="11 22334455" required>
                    </div>

                    <div class="form-section__form__input-consul">
                        <label for="email">
                            <h2>¿En qué te puedo ayudar?</h2>
                        </label>
                        <input class="form-section__form__input-consul__consul" type="text" id="mensaje" name="mensaje" placeholder="tu consulta..." required>
                    </div>

                    <button class="form-section__form__buttom" type="submit">
                        <h1 class="form-section__form__buttom__text">
                            ENVIAR
                        </h1>
                    </button>
                </form>
            </div>

        </div>











        </div>


        <?php
        // get_footer();  // Carga el footer
        ?>

        <!-- // Contenido del footer para pruebas -->


    </main>
    <footer id="colophon" class="site-footer">

        <div class="site-footer__logo">
            <img class="logo-icon-negative" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo-negativo.svg" alt="logo blanco">
        </div>

        <div class="site-footer__network-section">
            <h1 class="site-footer__network-section__networks">
                Redes
            </h1>

            <ul>
				<li><a href="https://www.instagram.com/misiongraduacion/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/footer/instagram.svg'; ?>" alt="Instagram"><p>@misiongraduacion</p></a></li>
				<li><a href="https://www.tiktok.com/@misiongraduacion" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/footer/tiktok.svg'; ?>" alt="Tik tok"><p>@misiongraduacion</p></a></li>
				<li><a href="https://www.youtube.com/@misiongraduacion" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/footer/youtube.svg'; ?>" alt="Youtube"><p>@misiongraduacion</p></a></li>
				<li><a href="https://www.linkedin.com/in/antonelamarcaccio/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/footer/linkedin.svg'; ?>" alt="Linkedin"><p>antonelamarcaccio</p></a></li>
				<li>contactomisiongraduacion@gmail.com</li>
			</ul>

            <p class="footer-terminos">Términos y condiciones</p>

            <a href="https://altcooperativa.com/" target="_blank"><em class="footer-by">Powered by <strong>ALT</strong></em></a>

        </div>







        <?php
        alt_custom_theme_print_menu('footer');
        ?>

    </footer>
    <?php wp_footer(); ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/carousel.js"></script>
</body>

</html>





<!-- // fin del footer para pruebas -->