
<div class="wrap container">

	<header class="page-header">
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title">
			<?php

			printf( 'Resultados da pesquisa por: %s', '<span>' . get_search_query() . '</span>' );
			?>
			</h1>
		<?php else : ?>
			<h1 class="page-title">Nenhum resultado foi encontrado</h1>
		<?php endif; ?>
	</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) :
				the_post();

				//get_template_part( 'template-parts/post/content', 'excerpt' );

			endwhile; 

		else :
			?>

			<p>Desculpe, mas não há resultados relacionados a sua busca. Por favor, tente novamente com termos diferentes.</p>
			<?php
				get_search_form();

		endif;
		?>

		</main>
	</div>
</div>