<?php get_header(); ?>

<!-- Wordpress Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Title and Permalink -->
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <!-- Content -->
    <?php the_content(); ?>

    <hr>

<!-- No Posts Found -->
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>