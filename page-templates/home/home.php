<div class="wrap container">
    <?php

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 12
    );

    $query = new WP_Query($args);

    ?>
    <div class="row row-cols-1 row-cols-md-3 g-4 card-group posts-grid">
        <?php
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
            ?>
                <div class="col">
                    <?php get_template_part("template-parts/posts-grid/posts-grid"); ?>
                </div>
            <?php
            endwhile;
        else :
            "Desculpe, não há posts para serem exibidos aqui.";
        endif;
        wp_reset_postdata();

        ?>
    </div>
</div>