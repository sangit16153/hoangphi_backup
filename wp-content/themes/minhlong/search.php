<?php get_header(); ?>

<div class="content">

    <section id="main-content">
        <div class="search-info">
            <?php
            $search_query = new WP_Query( 's='.$s.'&showposts=-1' );
            $search_keyword = wp_specialchars( $s, 1);
            $search_count = $search_query->post_count;
            // var_dump( $search_query );
            printf( __('Search results for <strong>%1$s</strong>. We found <strong>%2$s</strong> articles for you.', 'thachpham'), $search_keyword, $search_count );
            ?>
        </div>
        <?php if ( have_posts() ) : ?>
            <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
            endwhile;
            minhlong_pagination();
        else :
            get_template_part( 'content', 'none' );
        endif;
        ?>

    </section>
    <section id="sidebar">
        <?php get_sidebar(); ?>
    </section>

</div>

<?php get_footer(); ?>
