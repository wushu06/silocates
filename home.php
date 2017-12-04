<!-- Blog - home.php - -->
<?php get_header(); ?>
<div class="block_posts">
    <div class="block_small_container">

        <h1 class="main-title">Latest <strong>news</strong></h1>

        <div class="block_posts_form">
            <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
                <?php
                if( $terms = get_terms( 'category', 'orderby=name' ) ) :
                    echo '<select id="select" name="categoryfilter" ><option>Filter by <strong>Silocates news</strong></option>';
                    foreach ( $terms as $term ) :
                        echo '<option value="' . $term->term_id . '">' . $term->name . '</option>';
                    endforeach;
                    echo '</select>';
                endif;
                ?>


                <input type="hidden" name="action" value="customfilter">

            </form>
        </div>


        <div id="response"></div>



        <div id="lazyload">



            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => -1
                ,
            );
            $my_posts = new WP_Query( $args );
            if ( $my_posts->have_posts() ) :
                while ( $my_posts->have_posts() ) : $my_posts->the_post()
                    // var_dump($post);



                    ?>

                        <div class="block_posts_single">
                            <div class="block_posts_content">
                                <a href="<?php the_permalink() ?>" class="animsition-link" data-animsition-out-class="zoom-out-sm">
                                    <div class="block_posts_content_image">

                                    <?php echo get_the_post_thumbnail();?>
                                    <div class="block_posts_content_image_overlay">

                                        <span>Read the article</span>
                                    </div>
                                </div> </a>
                            </div>

                            <div class="block_posts_title">
                                <h6><?php the_date() ?></h6>
                                <h2>
                                    <?php the_title() ?>
                                </h2>
                            </div>


                        </div>

                <?php   endwhile; endif;


            ?>



        </div>

    </div>
</div>
<script>
    jQuery(function($){

    });

</script>
<?php get_footer(); ?>
