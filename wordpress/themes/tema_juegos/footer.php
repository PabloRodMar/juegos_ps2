        <footer>
            <div class="site-info">
                <div class="footer-social">
                    <h1>REDES SOCIALES</h1> 
                    <a href="https://www.instagram.com/iampablitico/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.png" class="redes">
                    </a>
                    <a href="https://web.whatsapp.com/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.webp" class="redes">
                    </a>
                    <a href="https://mail.google.com/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gmail.webp" class="redes">
                    </a>
                    <a href="https://web.telegram.org/a/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/telegram.png" class="redes">
                    </a>
                </div>
                <div>
                    <a href="<?php echo get_permalink( get_page_by_path('contacto') ); ?>" class="contacto">Contacta con nosotros</a>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const mainMenu = document.getElementById('main-menu');

            if (menuToggle && mainMenu) {
                menuToggle.addEventListener('click', function() {
                    // Alterna la clase 'is-open'
                    mainMenu.classList.toggle('is-open');
                    
                    // Actualiza el estado ARIA
                    let isExpanded = this.getAttribute('aria-expanded') === 'true' || false;
                    this.setAttribute('aria-expanded', !isExpanded);
                });
            }
        });
        </script>
    </body>
</html>