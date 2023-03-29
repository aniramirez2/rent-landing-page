<div class="card w-100 h-100" style="width: 18rem;">
<?php $thumbnail = get_post_thumbnail_id($post->ID, 'medium'); ?>

    <img src="<?php echo wp_get_attachment_image_url($thumbnail, 'medium'); ?>" class="card-img-top" alt="<?php echo get_post_meta( $thumbnail, '_wp_attachment_image_alt', true ); ?>">

    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_excerpt(); ?></p>
    </div>

    <div class="card-footer bg-transparent border-0">
        <a href="<?php echo get_permalink($post->ID); ?>" class="btn btn-primary">Ler mais</a>
    </div>
</div>