<!-- front page -->
<?php
// Page
get_header();

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();

        get_page_structure( 'blocks' );

    }
}




// get the latest posts
?>
<!-- block posts for front page -->
    <div class="block_posts">
        <div class="block_small_container">

            <h1 class="main-title js-fadeUp" data-animation="hierarchical-display">Latest <strong>news</strong></h1>

            <div id="lazyload" >

                    <?php
                    $i = 1;
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => '3',
                        'orderby' => 'rand',
                        'paged' => 1,

                    );
                    $my_posts = new WP_Query( $args );
                    if ( $my_posts->have_posts() ) :

                        ?>

                            <?php while ( $my_posts->have_posts() ) : $my_posts->the_post();


                        $hide = '';



                        ?>


                        <div  class="block_posts_single">
                            <div class="block_posts_content">
                                <a  href="<?php the_permalink() ?>" class="animsition-link" data-animsition-out-class="zoom-out-sm">
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




                            <?php endwhile ?>

                            <?php endif;  ?>

                        <div class="tweet-update">
                            <?php echo do_shortcode('[custom-twitter-feeds num=1 ]');    ?>
                        </div>



                </div>







</div>
<div class="loading text-center"><span class="loadmore button-white " id="ctf-more">Load more articles</span></div>

        </div>
    </div>

    <script type="text/javascript">

        jQuery(function($) {

            var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

            var page = 2;
            jQuery(function($) {
                $('body').on('click', '.loadmore', function() {



                    var more =  '<?php echo do_shortcode('[custom-twitter-feeds num=3 ]');    ?>';
                    $('.tweet-update').empty().append(more);
                    $('.tweet-update').contents().unwrap();
                    var data = {
                        'action': 'load_posts_by_ajax',
                        'page': page,
                        'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
                    };

                   /* $.post(ajaxurl, data, function(response) {
                        $('#lazyload').append(response);
                        page++;
                    });
*/
                    $.ajax({
                        url:  "<?php echo admin_url( 'admin-ajax.php' ); ?>",
                        type: 'post',
                        data: {
                            'action': 'load_posts_by_ajax',
                            'page': page,
                            'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
                        },
                        beforeSend: function(xhr) {
                            $('.loadmore').html('Loading...');
                            $('.loading').append('<div class="loader"></div>');
                        },
                        success:function(data){
                            if( data == 0 ) {
                                $('.loadmore').html('No more articles');
                                $('.loadmore').fadeOut(1000);
                                $('.loader').remove();
                            }else {
                               // $('#lazyload').remove().append(data);
                                $('#lazyload').append(data);
                                page++;
                                $('.loadmore').html('Load more articles');
                                $('.loader').remove();
                                $('#ctf, .ctf-tweets').contents().unwrap();
                                $('.ctf-item').addClass('block_posts_single');
                            }

                        }
                    });

                });
            });

        });
    </script>


<?php get_footer(); ?>