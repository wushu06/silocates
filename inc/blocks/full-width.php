<!-- full width block -->
<div class="block_full" >
	<div class="block_small_container">

		<div class="row">
			<div class="col-md-12">
                <h5 class="block_full_small-title"><?php echo theme( 'small_title' ); ?></h5>

				<div class="block_full_title ">
					<h1>
						<?php echo theme( 'title' ); ?>
					</h1>
				</div>
				<div class="block_full_content">
					<?php echo theme( 'content' ); ?>
				</div>
                <?php if(theme( 'button' )) : ?>
                <div class="block_full_button">
                    <a class="button-white" href="<?php echo theme( 'button_url' ); ?>">
                        <?php echo theme( 'button' ); ?>
                    </a>
                </div>
                <?php endif; ?>

			</div>
		</div>

	</div>
</div>