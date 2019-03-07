<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gymandClub
 */

get_header();
?>

	<div id="primary" class="content-area col-md-12">
		<main id="main" class="site-main">
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<div class="row">

		<?php if ( has_post_thumbnail() ) {;
		
		?>



			<div class="col-md-4">

			<?php 
				the_post_thumbnail( 'single-entrenador', ['class' => 'rounded'] );
			
			?>	
			
		<div class="enlaces-sociales">	
			<?php if ( get_field('enlace_social_N1')) {  ?>
				<a href="<?php the_field('enlace_social_N1'); ?>" target="_blank"><i class="fab fa-2x fa-facebook-square"></i></a>
			<?php } ?>

			<?php if ( get_field('enlace_social_N2')) {  ?>	
				<a href="<?php the_field('enlace_social_N2'); ?>" target="_blank"><i class="fab fa-2x fa-twitter-square"></i></a>
			<?php } ?>	

			<?php if ( get_field('enlace_social_N3')) {  ?>	
				<a href="<?php the_field('enlace_social_N3'); ?>" target="_blank"><i class="fab fa-2x fa-pinterest-square"></i></a>
			<?php } ?>		

			<?php if ( get_field('enlace_social_N4')) {  ?>		
				<a href="<?php the_field('enlace_social_N4'); ?>" target="_blank"><i class="fab fa-2x fa-youtube-square"></i></a>
			<?php } ?>	
		</div>		
			</div>

			<?php } ?>

			<div class="col-md-8 detalle_entrenador">
					<header class="entry-header">
						<?php
							the_title( '<h1 class="entry-title">', '</h1>' );
						?>
					</header>
					<?php the_field('biografia'); ?>
				<h3 class="entry-title"><?php the_field('titulo_perfil_del_entrenador'); ?></h3>
				<span>Nombre:</span> <?php the_field('nombre_y_apellido_del_entrenador'); ?> <br>
				<span>Edad:</span> <?php 
				$date = get_field('edad', false, false);
				$date = new DateTime($date);
				echo $date->format('j/m/Y'); 
				?> <br>
				<span>Email:</span> <?php the_field('email'); ?> <br>
				<span>Especialidades:</span> 
				<?php
				 $terms = get_terms( 'especialidad' );
				 if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
					 
					 foreach ( $terms as $term ) {
					   echo $term->name . ',' ;
						
					 }
				 } 
				?>

			</div>	
		</div>

		<div class="row">
			<div class="col-md-12">
				<h4 class="entry-title"><?php the_field('titulo_habilidades'); ?></h4>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<p><?php the_field('habilidad_1'); ?></p>
				<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: <?php the_field('porcentaje_de_habilidad'); ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php the_field('porcentaje_de_habilidad'); ?>%</div>
				</div>
				<p><?php the_field('habilidad_2'); ?></p>
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: <?php the_field('porcentaje_de_habilidad_2'); ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php the_field('porcentaje_de_habilidad_2'); ?>%</div>
				</div>
				<p><?php the_field('habilidad_3'); ?></p>
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: <?php the_field('porcentaje_de_habilidad_3'); ?>%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"><?php the_field('porcentaje_de_habilidad_3'); ?>%</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h4 class="entry-title"><?php the_field('titulo_de_la_galeria'); ?></h4>
			</div>
		</div>

		<div class="row">
		<?php 
			$image = get_field('imagen_n#1');
			$thumb = $image['sizes'][ 'entrenador-galeria' ];
			$alt = $image['alt'];
			$caption = $image['caption'];
			if( !empty($image) ):
				 
		?>	
			<div class="col-md-4 contenedor_galeria ">
				<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
				<?php if( $caption ): ?>
					<p class="caption_galeria"><?php echo $caption; ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<?php 
			$image2 = get_field('imagen_n#2');
			$thumb2 = $image2['sizes'][ 'entrenador-galeria' ];
			$alt2 = $image2['alt'];
			$caption2 = $image2['caption'];	
			if( !empty($image2) ):		 
		?>
			<div class="col-md-4 contenedor_galeria ">
				<img src="<?php echo $thumb2; ?>" alt="<?php echo $alt2; ?>" />
				<?php if( $caption2 ): ?>
					<p class="caption_galeria"><?php echo $caption2; ?></p>
				<?php endif; ?>
			</div>			 
		<?php endif; ?>

		<?php 
			$image3 = get_field('imagen_n#3');
			$thumb3 = $image3['sizes'][ 'entrenador-galeria' ];
			$alt3 = $image3['alt'];
			$caption3 = $image3['caption'];	
			if( !empty($image3) ):		 
		?>
			<div class="col-md-4 contenedor_galeria ">
				<img src="<?php echo $thumb3; ?>" alt="<?php echo $alt3; ?>" />
				<?php if( $caption3 ): ?>
					<p class="caption_galeria"><?php echo $caption3; ?></p>
				<?php endif; ?>
			</div>			 
		<?php endif; ?>


		</div><!-- .row -->
		</article>			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
