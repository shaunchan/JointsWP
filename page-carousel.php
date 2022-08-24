<?php

get_header();

?>


<div class="grid-x align-center">
    <div class="row large-10 border text-center">
    <section class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">Slide 01</li>
                <li class="splide__slide">Slide 02</li>
                <li class="splide__slide">Slide 03</li>
            </ul>
        </div>
    </section>
    </div>
</div>


<script type="text/javascript" src="<?=get_template_directory_uri()?>/assets/scripts/splide.min.js"></script>


<script>
  new window.Splide( '.splide' ).mount();
</script>
<?php get_footer();?>
