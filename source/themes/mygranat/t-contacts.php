<?php
/*
Template Name: Contacts

*/

get_header(); ?>

  <main id="main" class="site-main" role="main">

    <div class="container pt-60">

      <div class="row">
       
        <div class="col-md-2 col-md-2 left-column">
          <h2>Контакты</h2>
        </div>  <!-- .col-md-2 -->
        
        <div class="col-md-3 col-md-push-5 col-md-offset-2 col-sm-4 col-sm-offset-1 col-sm-push-7 contact-info">
          <p><img src="/source/themes/mygranat/assets/img/phone_icon.svg" alt="Телефон"><a title="" href="tel:+74955322838">+7 (495) 532 - 28 - 38</a></p>
          <p><img src="/source/themes/mygranat/assets/img/phone_icon.svg" alt="Телефон"><a title="" href="tel:+79264675848">+7 (926) 467 - 58 - 48 </a></p>
          <p><img src="/source/themes/mygranat/assets/img/email_icon.svg" alt=""><a title="Отправить E-mail" href="mailto:info@mygranat.ru">info@mygranat.ru</a></p>
          <p><img src="/source/themes/mygranat/assets/img/skype_icon.svg" alt=""><a title="Позвонить на Skype" href="skype:mygranat?call">mygranat</a></p>
          <p><img src="/source/themes/mygranat/assets/img/telegram_icon.svg" alt=""><a title="Написать в Telegram" href="http://telegram.me/mygranat">mygranat</a></p>
        </div>        
        
        <div class="col-md-5 col-md-pull-5 col-sm-7 col-sm-pull-5">
          <div class="contact-form">
          <?php echo do_shortcode( '[contact-form-7 id="27" title="Контакты"]' ); ?>
          </div>
        </div>
        

        
        
      </div> <!-- .row -->
       
        
    </div> <!-- .container -->


  </main> <!-- #main -->

<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
?>


  <?php
get_footer();