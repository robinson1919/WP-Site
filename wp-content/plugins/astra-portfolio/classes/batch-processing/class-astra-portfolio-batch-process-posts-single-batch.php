<?php
/**
 * Batch Process for Single Post
 *
 * @package Astra Portfolio
 * @since 1.4.2
 */

if ( class_exists( 'WP_Background_Process' ) ) :

	/**
	 * Image Background Process
	 *
	 * @since 1.4.2
	 */
	class Astra_Portfolio_Batch_Process_Posts_Single_Batch extends WP_Background_Process {

		/**
		 * Image Process
		 *
		 * @var string
		 */
		protected $action = 'import_astra_single_site';

		/**
		 * Task
		 *
		 * Override this method to perform any actions required on each
		 * queue item. Return the modified item for further processing
		 * in the next pass through. Or, return false to remove the
		 * item from the queue.
		 *
		 * @since 1.4.2
		 *
		 * @param object $single_site Queue item object.
		 * @return mixed
		 */
		protected function task( $single_site ) {
			Astra_Portfolio_Batch_Process_Posts::get_instance()->import_single_post( $single_site );
			return false;
		}

		/**
		 * Complete
		 *
		 * Override if applicable, but ensure that the below actions are
		 * performed, or, call parent::complete().
		 *
		 * @since 1.4.2
		 */
		protected function complete() {
			parent::complete();
		}

	}

endif;
