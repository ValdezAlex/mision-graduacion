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
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<!-- Site favicon -->
		<link rel="icon" href="<?php echo esc_attr( get_stylesheet_directory_uri() . '/img/favicon.ico' ); ?>" type="image/x-icon">
<?php wp_site_icon(); ?>
<?php wp_head(); ?>
	</head>



	<body <?php alt_custom_theme_print_body_class(); ?>>
        
		<header class="main-theme-header">
			<div class="inner-container">
				<a class="site-icon" href="<?php bloginfo( 'url' ); ?>"  aria-label="Ir a la sección de inicio del sitio">
					<img class="logo-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo.svg" alt="Logo">
					<h1 class="logo-text">Misión Graduación</h1>
				</a>
<?php alt_custom_theme_print_menu( 'header' ); ?>
				<button id="hamburger-menu-toggler">
					<div class="bar"></div>
					<div class="bar-space"></div>
					<div class="bar"></div>
				</button>
				<div id="hamburger-menu-container">
<?php alt_custom_theme_print_menu( 'hamburger' ); ?>
				</div>
			</div>
		</header>
		<main>






<!-- // Fin del contenido del header -->







<!-- // Aquí va el contenido de la página -->
<div class="container-general">
    <div class="first-section">
        <div class="logo-presentacion">
            <img class="logo-icon-big" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logoBig.svg" alt="Logo">
            <h1>misión <br> graduación</h1>
        </div>

        <div class="form-news">
            <h1>Se viene un evento!</h1>
            <h2>Dejame tu mail y enterate<br> de mas detalles</h2>


            <form action="#" method="post" class="email-form">
                <!-- <label for="email">Suscribite:</label> -->
                <input class="form-news__email-form__email" type="email" id="email" name="email" placeholder="tumail@email.com" required>
                <button class="form-news__email-form__button" type="submit">Enviar</button>
            </form>
            <img class="img-portada" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/png/img-portada.png" alt="Imagen de portada">

        </div>
    </div>






    <div class="second-section">

        <div class="second-section__obj-text-section">

            <div class="second-section__obj-text-section__slain-text-section">

                <img class="stain" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo-mancha-naranja.svg" alt="Logo">
                
                <h1 class="text-above">Activando <br> el estudio.<br> Apagando<br> bloqueos.</h1>

            </div>

            <img class="second-section__obj-text-section__arrow-section" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-flecha.svg" alt="flecha">

            <div class="second-section__obj-text-section__sec-text">
                <h1>Esto NO es<br> una clase ni<br> un curso de<br> organización<br> académica</h1>
            </div>

        </div>

        <div class="second-section__text-section">
            <h3>Este lugarcito lo pensé para que puedas frenar un poco<br> la cabeza, ordenarte, y empezar a mirar tu carrera con<br> otros ojos. No importa si estás recién empezando o si te<br> falta poco para terminar: si sentís que hay algo que te<br> está trabando, este espacio es para vos.</h3>
        </div>

    </div>






    <div class="third-section">

        <h1 class="third-section__title">Sobre Misión Graduación</h1>

        <div class="third-section__cards">
            <img class="cards" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-card1.svg" alt="">
            <img class="cards" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-card2.svg" alt="">
            <img class="cards" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-card3.svg" alt="">
        </div>


        <div class="third-section__only-card">
            <img class="card" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-only-card.svg" alt="">
            <h1 class="sub-title">Semana de exámenes</h1>
        </div>
    </div>

    <div class="fourth-section">
        <div class="fourth-section__picture-section">
            <img class="fourth-section__picture-section__picture" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-face2.svg" alt="">
            <h1 class="fourth-section__picture-section__title">Antonela <br> Marcaccio</h1>
            <h2 class="fourth-section__picture-section__sub-title">Lic. en Psicología</h2>
        </div>

        <div class="fourth-section__text-section">
            <h3 class="fourth-section__text-section__text">
                Me encanta acompañar a estudiantes universitarios y terciarios a superar los bloqueos que aparecen en el camino del estudio. Vengo de un recorrido en la investigación educativa, especialmente en temas de toma de decisiones morales, valores laborales y dinámicas en contextos reales de aprendizaje.
                Más allá de los libros, pasé por institutos de investigación y seminarios donde diseñé programas para adolescentes y adultos, buscando entender qué nos frena y cómo podemos avanzar con más claridad.
                Me encanta acompañar a estudiantes que sienten que están un poco trabados en su camino universitario y a quienes quieren evitar nuevas trabas. Sé lo que es estar en esa etapa en la que uno se pregunta si eligió bien, si va a poder con todo, o simplemente no encuentra la motivación para seguir. Lo vi mil veces… y también lo trabajé mucho desde la investigación y, sobre todo, desde el vínculo con estudiantes como vos.
                Si te da curiosidad o sentís que te vendría bien un empujoncito para reconectar con tu camino, te esperamos. Me encantaría que te sumes.
            </h3>
        </div>
    </div>

    <div class="form-section">

        <h1 class="form-section__title">Escribime con tu consulta</h1>

        <form class="form-section__form" action="#" method="post" class="email-form">
            <div class="form-section__form__input-name">
                <label for="email"><h2>¿Cuál es tu nombre?</h2></label>
                <input class="form-section__form__input-name__name" type="email" id="email" name="email" placeholder="nombre y apellido" required>
            </div>
            <div class="form-section__form__input-mail">
                <label for="email"><h2>¿Cuál es tu mail?</h2></label>
                <input class="form-section__form__input-mail__mail" type="email" id="email" name="email" placeholder="tumail@email.com" required>
            </div>
            <div class="form-section__form__input-wsp">
                <label for="email"><h2>Whatsapp (opcional)</h2></label>
                <input class="form-section__form__input-wsp__wsp" type="email" id="email" name="email" placeholder="11 22334455" required>
            </div>
            <div class="form-section__form__input-consul">
                <label for="email"><h2>¿En qué te puedo ayudar?</h2></label>
                <input class="form-section__form__input-consul__consul" type="email" id="email" name="email" placeholder="tu consulta..." required>
            </div>

            <button class="form-section__form__buttom" type="submit">Enviar</button>
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
                redes sociales
			</h1>

            <h1 class="site-footer__network-section__mail-title">
                mail
            </h1>

            <h2 class="site-footer__network-section__mail-subtitle">
                misiongraduacion@gmail.com
            </h2>
        </div>



            
            
            
			
<?php
	alt_custom_theme_print_menu( 'footer' );
?>

		</footer>
		<?php wp_footer(); ?>
	</body>
</html>





<!-- // fin del footer para pruebas -->
