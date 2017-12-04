<!-- half carousel -->
<div class="block_half-carousel">
    <div class="block_small_container ">
        <h1 class="before-title"><?php echo theme('title'); ?></h1>
        <div class="half_slide">

                        <?php
                            if(have_rows('content')):
                                while ( have_rows('content') ) : the_row();

                        ?>

                <div class="row">

                        <div class="col-sm-12 col-md-6">
                                <div class="block_half-carousel_image">
                                    <img class="img-responsive" src="<?php echo get_sub_field( 'content_image' )['url']; ?>" alt="" width='450' />
                                </div>
                        </div>
                        <div class="col-sm-12 col-md-6 block_half-carousel_content">

                                <div class="block_half-carousel_title js-fadeUp" >
                                    <h1>
                                       <strong><?php echo  the_sub_field( 'content_title' ); ?></strong>
                                    </h1>
                                </div>
                                <div class="block_half-carousel_body">
                                    <?php echo  the_sub_field( 'content_body' ); ?>
                                </div>
                                <div class="block_half-carousel_button">
                                    <a class="button-white" href="">Find out more about </a>

                                </div>
                         </div>
                </div>

                        <?php endwhile; endif; ?>


        </div>

    </div>
</div>