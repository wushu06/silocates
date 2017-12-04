<!-- hero carousel -->
<div class="block_carousel" >
    <div class="block_container">

        <div class="hero-slider ">

            <?php if( $rows = theme('gallery') ) :

                //var_dump($rows);

                ?>
            <?php foreach( $rows as $i => $slide ):

              //  the_row();
            // vars
            $image = $slide['image'];
            $text = $slide['text'];

                    $rand = mt_rand();
            ?>
            <div class="block_carousel_images" id="block__background--<?php echo $rand; ?>" style="height: 65vh;">




                <div class="block_carousel_images_slide">

                    <div class="block_carousel_images_slide_title block_small_container">
                        <h1 class="big-font js-fadeUp "><?php echo $text; ?></h1>

                    </div>
                </div>
                            <?php echo feature_bg_render( $rand, $image['sizes'] ); ?>





            </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div> <!-- slider ends -->


    </div>
</div>

<div class="clearfix"></div>