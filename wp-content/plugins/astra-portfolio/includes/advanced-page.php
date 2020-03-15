<?php
/**
 * Astra Demo View.
 *
 * @package Astra Portfolio
 */

defined( 'ABSPATH' ) or exit;

?>

<div class="wrap">

	<form id="astra-portfolio-settings" enctype="multipart/form-data" method="post">

		<table class="form-table">
			<tr>
				<th scope="row"><?php _e( 'Rewrite Slug', 'astra-portfolio' ); ?></th>
				<td>
					<fieldset>
						<label>
							<input type="text" name="rewrite" value="<?php echo esc_attr( $data['rewrite'] ); ?>" class="regular-text" />
							<p class="description"><?php _e( 'Rewrite portfolio url slug.', 'astra-portfolio' ); ?></p>
						</label>
					</fieldset>
					<fieldset>
						<label>
							<input type="text" name="rewrite-tags" value="<?php echo esc_attr( $data['rewrite-tags'] ); ?>" class="regular-text" />
							<p class="description"><?php _e( 'Rewrite portfolio tags url slug.', 'astra-portfolio' ); ?></p>
						</label>
					</fieldset>
					<fieldset>
						<label>
							<input type="text" name="rewrite-categories" value="<?php echo esc_attr( $data['rewrite-categories'] ); ?>" class="regular-text" />
							<p class="description"><?php _e( 'Rewrite portfolio categories url slug.', 'astra-portfolio' ); ?></p>
						</label>
					</fieldset>
					<fieldset>
						<label>
							<input type="text" name="rewrite-other-categories" value="<?php echo esc_attr( $data['rewrite-other-categories'] ); ?>" class="regular-text" />
							<p class="description"><?php _e( 'Rewrite portfolio other categories url slug.', 'astra-portfolio' ); ?></p>
						</label>
					</fieldset>
				</td>
			</tr>
		</table>

		<input type="hidden" name="message" value="saved" />
		<?php wp_nonce_field( 'astra-portfolio-importing', 'astra-portfolio-import' ); ?>

		<?php submit_button(); ?>
	</form>
</div>
