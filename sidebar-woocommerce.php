				<div id="sidebar1" class="col-xs-12 col-md-4 cf" role="complementary">
					
					<div class="sidebar">

					<?php if ( is_active_sidebar( 'woocommerce' ) ) : ?>

						<?php dynamic_sidebar( 'woocommerce' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>
					
				</div>

				</div>
