<?php

get_header();

?>

<div class="grid-x align-center">
    <div class="row large-10">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio in quas veritatis nemo. Nemo ad, aperiam odit similique iure quis quos nihil non, corporis neque magni perferendis voluptatem cupiditate magnam repellat consequatur voluptates dicta est, temporibus impedit sed et! Non labore possimus perferendis ea vitae veniam natus iste accusamus dicta suscipit voluptate exercitationem deserunt mollitia sequi repellat ad modi laborum inventore dolorum qui, id maxime laboriosam dignissimos nobis! Explicabo maiores est iure aliquam tempora officiis nesciunt praesentium labore quam consectetur accusamus voluptas sint molestiae dolorem blanditiis dicta, minima ut repudiandae in cupiditate sapiente! Voluptas adipisci perferendis molestiae perspiciatis error inventore illum assumenda molestias optio, dolor nihil eveniet voluptatibus nemo quae vitae in quas rerum totam ad illo laborum. Quaerat veniam exercitationem consequatur facilis esse consectetur rem earum dolorum accusantium officia aperiam hic illum fugiat corporis cupiditate, asperiores tempora quod explicabo sint minus laborum animi magni? Exercitationem nulla dolorum inventore nostrum.
    </div>
</div>

<?php
$args = array(
    'post_type' => 'main_carousel'
);

$getPost = get_posts($args);


print_r($getPost);
?>


<?php get_footer() ?>