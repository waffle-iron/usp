<?php if ( have_posts() ) {
	while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="header row">
				<div class="col-md-10 col-md-offset-1">
					<p class="categoria"><?php the_category(", "); ?></p>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<!-- <p class="linhafina"><?php the_excerpt(); ?></p> -->
				</div>
			</div><!--  row  -->
			<div class="row metainfo">
				<div class="col-md-2 col-md-offset-1">
					<div class="data">
						<?php if ('evento' == get_post_type() ) : ?>
							<img src="<?php bloginfo('template_url'); ?>/imgs/icon-evento.png" />
						<?php elseif ('noticias' == get_post_type() ) : ?>
							<img src="<?php bloginfo('template_url'); ?>/imgs/icon-noticia.png" />
						<?php endif; ?>
						<?php the_date('d M Y','',''); ?>
					</div>
				</div>
				<div class="col-md-8">
					<?php if ('noticias' == get_post_type() ) : ?>
						<!-- <p class="autor">Por <?php the_author(); ?> para a Agência Universitária de Notícias</p> -->
					<?php endif; ?>					
					<ul class="list-inline tags">
						<?php the_tags( '<li>#', '</li><li>#', '</li>' ); ?>
					</ul>
				</div>
			</div><!--  row  -->
			<div class="row content">
				<div class="col-md-10 col-md-offset-1">
					<?php the_content(); ?>
				</div>
			</div><!--  row  -->
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<div class="redes-sociais">
						<div class="row">
							<div class="col-md-4">
								<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
							</div>
							<div class="col-md-4">
								<!-- <a href="#"><i class="fa fa-2x fa-print"></i> Imprimir</a> -->
							</div>
							<div class="col-md-4">
								<!-- <a href="#"><i class="fa fa-2x fa-envelope"></i> Enviar por e-mail</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row assinatura">
				<div class="col-md-offset-1 col-md-10">
					<strong>IP Comunica | Serviço de apoio institucional</strong> <br>
					Av. Prof. Mello Moraes, 1721 - sala 26 <br>
					Cidade Universitária - São Paulo, SP <br>
				</div>	
			</div>
		</article>
		
	<?php endwhile; // end of the loop. ?>

	<?php get_template_part( 'content', 'single-relacionados' ); ?>
	
<?php } else { ?>
	<article>
		<p>Nenhuma notícia.</p>
	</article>
<?php } ?>