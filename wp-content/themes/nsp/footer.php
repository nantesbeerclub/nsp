<!--   <a href="#" class="back-top js-back-top hide" aria-label="Retour en haut de page"></a> -->
</div>
<!--       <footer id="footer" class="footer">
        <div class="">
          <div class="footer-partenaires">
            <h2 class="f-secondary">Les partenaires</h2>
            <div class="footer-partenaires-logo">
              <?php 
                $Partenairescontent = apply_filters('the_content', get_post_field('post_content', 130));
                echo $Partenairescontent;
              ?>              
            </div>
          </div>
          <div class="footer-questions">
            <div class="footer-questions-texte">
                <h2>Des questions ?</h2>
                <div>
                  <a class="btn btn-link f-secondary" href="<?php echo get_the_permalink(19); ?>">Contact</A>
                  <a class="btn btn-link f-secondary"  href="<?php echo get_the_permalink(23); ?>">Faq</a>
                  <a class="btn btn-link f-secondary"  href="<?php echo get_the_permalink(21); ?>">Infos pratiques</a>
                </div>
            </div>
            <div class="footer-questions-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nsp/verre-footer.png">
            </div>
          </div>
          <div class="footer-bottom">
            <div class="footer-bottom-logos">
              <a href="https://www.helloasso.com/associations/nantes-beer-club" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/nsp/logoNbc.svg">
              </a>
              &
              <a href="http://www.assocafardnahum.com/" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/nsp/logoCafard.svg">
              </a>
            </div>
            <div class="footer-bottom-links">
              <a href="<?php echo get_the_permalink(136); ?>">Mentions Légales</a>
              <a href="<?php echo get_the_permalink(140); ?>">Plan du site</a>
              <a href="<?php echo get_the_permalink(19); ?>">Contact</a>
            </div>
            <div class="footer-bottom-copyright">
              <p>&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> -&nbsp;Nantes Beer Club</p>
            </div>            
          </div>
        </div>
      </footer> -->
    <!-- </div> -->
    <!-- <?php wp_footer(); ?> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
