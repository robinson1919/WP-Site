<?php
/**
 * Add portfolio form
 *
 * @package Astra Portfolio
 * @since 1.0.2
 */

?>
<div class="wrap">

	<h1><?php _e( 'Add New', 'astra-portfolio' ); ?></h1>

	<p><?php _e( 'Quick create portfolio using below form.', 'astra-portfolio' ); ?></p>

	<form class="astra-portfolio-new-template-form" name="astra-portfolio-new-template-form" method="POST">

		<table class="widefat astra-portfolio-table">

			<tr class="astra-portfolio-row">
				<th class="astra-portfolio-heading">
					<label for="astra-portfolio-template[title]"><?php _e( 'Title', 'astra-portfolio' ); ?></label>
				</th>
				<td class="astra-portfolio-content">
					<input class="astra-portfolio-template-title regular-text" type="text" name="astra-portfolio-template[title]" required />
				</td>
			</tr>

			<tr class="astra-portfolio-row">
				<th class="astra-portfolio-heading">
					<label for="astra-portfolio-template[type]"><?php _e( 'Type', 'astra-portfolio' ); ?></label>
				</th>
				<td class="astra-portfolio-content">
					<select class="astra-portfolio-template-type" name="astra-portfolio-template[type]" required>
						<option value=""><?php _e( 'Select Type...', 'astra-portfolio' ); ?></option>
						<?php foreach ( $types as $type ) : ?>
						<option value="<?php echo esc_attr( $type['key'] ); ?>" <?php selected( Astra_Portfolio_Page::get_instance()->get_default_portfolio_type(), $type['key'] ); ?>>
							<?php echo esc_html( $type['label'] ); ?>
						</option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>

		</table>

		<p class="submit">
			<input type="submit" class="astra-portfolio-template-add button button-primary button-large" value="<?php _e( 'Add Portfolio Item', 'astra-portfolio' ); ?>">
		</p>

		<?php wp_nonce_field( 'astra-portfolio-add-template-nonce', 'astra-portfolio-add-template' ); ?>

	</form>
</div>
