<footer class="footer">
      <div class="footer-container">
        <section class="links">
          <h3 class="footer__title">Przydatne linki</h3>
          <nav class="footer-navigation">

          <?php wp_nav_menu(array(
            'theme_location' => 'footer-left-menu',
            'container' => 'ul',
            'menu_class' => 'footer-navigation__list'
      )); ?>
      
          </nav>
        </section>

        <section class="author">
          <h3 class="footer__title">O mnie</h3>
          <img class="author__image" src="<?php echo get_theme_file_uri('images/author.png'); ?>" />
          <p class="author__name">Arkadiusz Kulewicz</p>
          <p class="author__description">
            Autor bloga poruszeni.pl. Wielbiciel podróży oraz wszelkich form
            aktywności. W wolnych chwilach stara się coś kodować, czego
            rezultatem jest ta strona.
          </p>
          <div class="social-links">
            <a href="https://www.facebook.com/poruszeni/" aria-label="Facebook"
              ><i
                class="fab fa-facebook-square social-links__item"
                aria-hidden="true"
              ></i
            ></a>
            <a href="https://www.youtube.com/user/kulabwo/" aria-label="Youtube"
              ><i
                class="fab fa-youtube-square social-links__item"
                aria-hidden="true"
              ></i
            ></a>
            <a href="https://github.com/akulewicz" aria-label="GitHub"
              ><i
                class="fab fa-github-square social-links__item"
                aria-hidden="true"
              ></i
            ></a>
            <a
              href="https://www.strava.com/athletes/5099827"
              aria-label="Strava"
              ><i
                class="fab fa-strava social-links__item"
                aria-hidden="true"
              ></i
            ></a>
          </div>
        </section>
        <section class="categories">
          <h3 class="footer__title">Kategorie</h3>
          <nav class="footer-navigation">

          <?php wp_nav_menu(array(
          'theme_location' => 'footer-right-menu',
          'container' => 'ul',
          'menu_class' => 'footer-navigation__list'
      )); ?>
            
          </nav>
        </section>
      </div>
      <div class="copy">
        <p class="copy__text">&copy; Poruszeni.pl, 2021 r.</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>