<div class="wrap container">
    <main id="main" class="site-main">

        <?php
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/single-post/content');

            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

            the_post_navigation(
                array(
                    'prev_text' => '<span class="screen-reader-text">' . 'Anterior' . '</span>',
                    'next_text' => '<span class="screen-reader-text">' . 'Próximo' . '</span>',
                )
            );

        endwhile;
        ?>

    </main>
</div>