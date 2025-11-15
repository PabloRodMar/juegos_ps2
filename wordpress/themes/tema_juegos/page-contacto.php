<?php
/*
Template Name: Contacto
*/
?>

<?php get_header(); ?>

<main class="contacto-pagina">
    <div class="contenedor-formulario">
        <h1 class="titulo-contacto">Contáctanos</h1>

        <form class="formulario-contacto" action="#" method="post">
            
            <div class="campo-grupo">
                <label for="full_name">Nombre completo</label>
                <input type="text" id="full_name" name="full_name" placeholder="Añade tu nombre" required>
            </div>

            <div class="fila-campos">
                <div class="campo-grupo medio">
                    <label for="email">EMAIL</label>
                    <input type="email" id="email" name="email" placeholder="Añade tu email" required>
                </div>
                <div class="campo-grupo medio">
                    <label for="phone">Teléfono</label>
                    <input type="tel" id="phone" name="phone" placeholder="Añade tu número de teléfono">
                </div>
            </div>

            <div class="campo-grupo">
                <label for="message">MENSAJE</label>
                <textarea id="message" name="message" placeholder="Escribe el mensaje a enviar..." rows="5"></textarea>
            </div>

            <button type="submit" class="boton-enviar">ENVIAR &rarr;</button>
        </form>
    </div>
</main>

<?php get_footer();?>