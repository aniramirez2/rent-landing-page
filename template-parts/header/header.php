<header class="bg-white d-md-flex align-items-md-center fixed-top">
    <nav class="navbar navbar-expand-lg sticky-top container">
        <div class="container-fluid bg-white">
            <?php 
                if( wp_is_mobile() ) {
                    echo get_theme_mod( 'logo_mobile' ) ? '<img src="'. get_theme_mod( 'logo_mobile' ) .'" alt="logo mobile" class="logo_mobile">' : the_custom_logo();
                } else {
                    echo the_custom_logo();
                } 
            ?>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu( 
                    array( 
                            'container'      => '',
                            'theme_location' => 'header-menu',
                            'menu_class' => 'navbar-nav justify-content-end align-items-md-center flex-grow-1 pe-md-3'
                        )
                    ); 
                ?>
            </div>
        </div>
    </nav>
</header>