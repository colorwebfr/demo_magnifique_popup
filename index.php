

<script>   /* fonction de popup contactez-nous */
        $('.open-popup-link').magnificPopup({
        type:'inline',
        midClick: true 
        });
        $('.open-popup-link').click(function(){
            var currForm = $(this).attr('data');
            $('#formationChoisi').val(currForm);
            $('.formationChoisi > span').html(currForm);
        });
</script>

html / php:

<a href="#test-popup" class="open-popup-link" data="<?php the_title(); ?>">
                                    <div class="alignC">
                                        <span class="btn-inscription bouton-contactez-nous <?= $arrayCouleur[$num_module] ?>"> Contactez-nous</span>
                                    </div>
                                </a>
                                
                                <div id="test-popup" class="white-popup mfp-hide"><?php echo do_shortcode('[contact-form-7 id="36264" title="Formulaire contactez-nous formations-aux-professionnels-de-la-tutelle"]'); ?>
                                </div>
