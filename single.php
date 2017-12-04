<?php get_header();?>
<!-- single -->

<div class="block_single">
    <div class="block_small_container">
        <div class="row">
            <div class="col-md-12">

                <div class="block_single_title">
                    <h5><?php echo get_the_date('m F Y'); ?> </h5><h5> <?php the_category(); ?></h5>
                    <div class="clearfix"></div>

                    <h1>
                        <?php the_title(); ?>
                    </h1>
                </div>
                <div class="block_single_content">
                    <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post();
                            //
                            // Post Content here
                            the_content();
                            //
                        } // end while
                    } // end if
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="block_single_author">
                    <?php
                    // Retrieve The Post's Author ID
                    $user_id = get_the_author_meta('ID');
                    // Set the image size. Accepts all registered images sizes and array(int, int)
                    $size = 'thumbnail';

                    // Get the image URL using the author ID and image size params
                    $imgURL = get_cupp_meta($user_id, $size);

                    // Print the image on the page
                    echo '<img src="'. $imgURL .'" alt="" width="95">';
                    echo '<p class="name"> Written by<br><strong>'.get_the_author().'</strong></p>';
                    ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12  col-md-6">
                <div class="block_single_social">

                    <div class="at-share-btn-elements">
                        <a class="at-icon-wrapper at-share-btn at-svc-facebook" role="button" style="background-color: rgb(255, 255, 255); border-radius: 0%; margin-right: 10px;" tabindex="1">
                                <span class="at4-visually-hidden">
                                </span>
                            <span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;">
                                <svg aria-labelledby="at-svg-facebook-1"  class="at-icon at-icon-facebook" role="img" style="width: 32px; height: 37px;" version="1.1" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <title>Facebook</title>
                                    <g>
                                        <path fill="rgb(59, 89, 152)" d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>
                                    </g>
                                </svg>

                                </span></a>
                        <a class="at-icon-wrapper at-share-btn at-svc-twitter" role="button" style="background-color: rgb(255, 255, 255); border-radius: 0%;  margin-right: 10px;" tabindex="1"><span class="at4-visually-hidden">Share to Twitter</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;">
                                    <svg aria-labelledby="at-svg-twitter-2" class="at-icon at-icon-twitter" role="img" style="width: 32px; height: 37px;" version="1.1" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <title>Twitter</title>
                        <g>
                            <path fill="rgb(29, 161, 242)" d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path>
                        </g>
                                    </svg></span>
                        </a>

                        <a class="at-icon-wrapper at-share-btn at-svc-google_plusone_share" role="button" style="background-color: rgb(255, 255, 255); border-radius: 0%;  margin-right: 10px;" tabindex="1"><span class="at4-visually-hidden">Share to Google+</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;">
                                    <svg aria-labelledby="at-svg-google_plusone_share-3" class="at-icon at-icon-google_plusone_share" role="img" style="width: 32px; height: 37px;" version="1.1" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <title>Google+s</title>
                        <g>
                            <path fill="rgb(220, 78, 65)" d="M12 15v2.4h3.97c-.16 1.03-1.2 3.02-3.97 3.02-2.39 0-4.34-1.98-4.34-4.42s1.95-4.42 4.34-4.42c1.36 0 2.27.58 2.79 1.08l1.9-1.83C15.47 9.69 13.89 9 12 9c-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.72-2.84 6.72-6.84 0-.46-.05-.81-.11-1.16H12zm15 0h-2v-2h-2v2h-2v2h2v2h2v-2h2v-2z" fill-rule="evenodd"></path>
                        </g></svg></span></a>
                    </div>

                </div>


            </div>
        </div>

        <!-- prev and next posts -->



        </div>
    
    </div> <!--end container -->

</div> <!-- end block -->
<div class="single_more">

    <div class="single_more_content">
        <div class="row">
        <h1 class="text-center"> You might also like <strong>these articles...</strong></h1>
        <div class="col-sm-12 col-md-6">
            <?php
            $prev_post = get_previous_post();
            if (!empty($prev_post)): ?>
            <div class="single_more_prev" style="background: url(  <?php echo get_the_post_thumbnail_url($prev_post->ID ) ?> ) no-repeat; background-size: 100%; height: 330px;  background-position: center; ">

                    <a href="<?php echo $prev_post->guid ?>" >

                        <h2><?php echo $prev_post->post_title ?></h2>
                        <div class="overlay"></div>
                    </a>


            </div>
            <?php endif?>
        </div>
        <div class="col-sm-12 col-md-6">
            <?php
            $next_post = get_next_post();

            if (!empty($next_post)): ?>
            <div class="single_more_next" style="background: url(  <?php echo get_the_post_thumbnail_url($next_post->ID ) ?> ) no-repeat; background-size: 100%; height: 330px;  background-position: center; ">

                    <a href="<?php echo $next_post->guid ?>" >
                        <?php echo get_the_post_thumbnail($next_post->ID, 'post_thumbnail', array( 'class' =>'img-responsive' )); ?>
                        <h2><?php echo $next_post->post_title; ?></h2>
                        <div class="overlay"></div>
                    </a>

            </div>
            <?php endif?>
        </div>


    </div>
</div>
</div>
<div class="clearfix"></div>


<?php get_footer();?>






