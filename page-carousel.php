<?php

get_header();


?>


<div class="grid-x align-center">
    <div class="row large-9 text-center">

    <section class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <?php
                $args = array(
                    'post_type' => 'main_carousel'
                );

                $posts = get_posts($args);

                foreach($posts as $post) {
                    $description = get_field( "carousel_description", $post->ID );
                    $image = get_field("carousel_image",$post->ID);
                    $imageUrl = wp_get_attachment_image_url($image,'large');
                    ?>
                    <li class="splide__slide" style="width: 100%">
                        <img src="<?=$imageUrl?>" alt="">
                        <div><?=$description?></div>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </section>
    </div>
</div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>

<script>
  new Splide( '.splide', {
    type: 'loop',
    drag: 'true',
    autoplay: true,
    autoWidth: true
  }).mount();
</script>
<?php get_footer();?>
