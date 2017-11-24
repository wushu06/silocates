<!-- sec carousel -->
<div class="block_sec_carousel">
    <div class="block_small_container">

        <div class="row ">
            <div>
                <h1><?php echo theme('title'); ?></h1>
            </div>
            <div class="block_sec_carousel_images">



                    <?php if( $images = theme( 'gallery' ) ) { ?>
                    <?php foreach( $images as $i => $image ) { ?>
                <div class="block_sec_carousel_images_slide">

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width='300px' />
                </div>
                    <?php } ?>
                    <?php } ?>



            </div>
        </div>



    </div>  
</div>