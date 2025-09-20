<?php get_header(); ?>

<h1>Mi Blog Personal</h1>

<?php 
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post(); 
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div>
                <?php the_excerpt(); ?>
            </div>
        </article>
        <?php 
    endwhile;
else :
    echo '<p>No hay entradas para mostrar.</p>';
endif;
?>

<?php get_footer(); ?>