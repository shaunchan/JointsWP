<?php

get_header();


$args = array(
    'post_type' => 'main_carousel'
);

$posts = get_posts($args);

foreach($posts as $post) {
    $description = get_field( "carousel_description", $post->ID );
    $image = get_field("carousel_image",$post->ID);
    $imageUrl = wp_get_attachment_image_url($image,'large');
    
    echo "<P>";
    echo "POST ID: ".$post->ID."<br/>";
    echo "POST Title: ".$post->post_title."<br/>";    
    echo "POST Description: ".$description."<br/>";
    echo "POST Image: ".$imageUrl."<br/>";

}
?>


<?php get_footer() ?>