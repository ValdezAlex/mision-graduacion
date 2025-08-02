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
				<a href="<?php bloginfo( 'url' ); ?>" class="site-icon" aria-label="Ir a la sección de inicio del sitio">
					<img class="logo-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo.svg" alt="Logo">
					<span class="logo-text">Misión Graduación</span>
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
            <p>Dejame tu mail y enterate</p>
            <p>de mas detalles</p>

            <form action="#" method="post" class="email-form">
                <!-- <label for="email">Suscribite:</label> -->
                <input class="form-news__email-form__email" type="email" id="email" name="email" placeholder="tumail@email.com" required>
                <button class="form-news__email-form__button" type="submit">Enviar</button>
            </form>
            <img class="img-portada" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/png/img-portada.png" alt="Imagen de portada">

        </div>
    </div>

    <!-- <div class="second-section">
        <div class="second-section__titles">
            <div class="second-section__titles__stain-text">
                <div class="stain-container">
                    <img class="stain" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo-mancha-naranja.svg" alt="Logo">
                    <div class="text-above-stain">
                        <h1>Activando</h1>
                        <h1>el estudio.</h1>
                        <h1>Apagando</h1>
                        <h1> bloqueos.</h1>
                    </div>
                </div>

            </div>

            <img class="arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/img-flecha.svg" alt="flecha">

            <div class="second-section__titles__text">
                <h1>Esto NO es</h1>
                <h1>una clase ni</h1>
                <h1>un curso de</h1>
                <h1>organización</h1>
                <h1>académica</h1>
            </div>

        </div>
        <div class="second-section__text">
            <span>Este lugarcito lo pensé para que puedas frenar un poco la cabeza, ordenarte, y empezar a mirar tu carrera con otros ojos. No importa si estás recién empezando o si te falta poco para terminar: si sentís que hay algo que te está trabando, este espacio es para vos.</span>
        </div>
    </div> -->

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
            <p class="fourth-section__text-section__text">
                Me encanta acompañar a estudiantes universitarios y terciarios a superar los bloqueos que aparecen en el camino del estudio. Vengo de un recorrido en la investigación educativa, especialmente en temas de toma de decisiones morales, valores laborales y dinámicas en contextos reales de aprendizaje.
                Más allá de los libros, pasé por institutos de investigación y seminarios donde diseñé programas para adolescentes y adultos, buscando entender qué nos frena y cómo podemos avanzar con más claridad.
                Me encanta acompañar a estudiantes que sienten que están un poco trabados en su camino universitario y a quienes quieren evitar nuevas trabas. Sé lo que es estar en esa etapa en la que uno se pregunta si eligió bien, si va a poder con todo, o simplemente no encuentra la motivación para seguir. Lo vi mil veces… y también lo trabajé mucho desde la investigación y, sobre todo, desde el vínculo con estudiantes como vos.
                Si te da curiosidad o sentís que te vendría bien un empujoncito para reconectar con tu camino, te esperamos. Me encantaría que te sumes.
            </p>
        </div>
    </div>
        


        <!-- <div class="fourth-section__last-form">
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
        </div> -->
    






</div>


<?php
// get_footer();  // Carga el footer
?>

<!-- // Contenido del footer para pruebas -->


		</main>
		<footer id="colophon" class="site-footer">

            <img class="logo-icon-negative" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo-negativo.svg" alt="logo blanco">

			<h1 class="footer-h1">
				Redes sociales
			</h1>
            
            <h1 class="footer-h1">mail</h1>
            <h2 class="footer-h2">misiongraduacion@gmail.com</h2>
			
<?php
	alt_custom_theme_print_menu( 'footer' );
?>

		</footer>
		<?php wp_footer(); ?>
	</body>
</html>





<!-- // fin del footer para pruebas -->
