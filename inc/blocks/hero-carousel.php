<!-- hero carousel -->
<div class="block_carousel">
    <div class="block_container">

        <div class="row ">
            <div class="block_carousel_images">



                    <?php if( $images = theme( 'gallery' ) ) { ?>
                    <?php foreach( $images as $i => $image ) { ?>
                <div class="block_carousel_images_slide">

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width='300px' />
                </div>
                    <?php } ?>
                    <?php } ?>



            </div>
        </div>


    </div>  
</div>