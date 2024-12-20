<?php
// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

?>

<div class="custom-product-template">
    <?php
    while (have_posts()) : the_post();
        ?>
        <h1 class="product-title"><?php the_title(); ?></h1>
        <div class="product-content">
            <?php the_content(); ?>
        </div>
        <div class="product-price">
            <?php echo wc_price(wc_get_product()->get_price()); ?>
        </div>
        <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="btn btn-primary">Add to Cart</a>
    <?php
    endwhile;
    ?>
</div>
