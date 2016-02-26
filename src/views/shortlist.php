<?php
/**
 * List View Template
 * The wrapper template for a list of events. This includes the Past Events and Upcoming Events views
 * as well as those same views filtered to a specific category.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/shortlist.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

do_action( 'tribe_events_before_template' );
?>

	<!-- Tribe Bar -->
<?php tribe_get_template_part( 'modules/bar' ); ?>

	<!-- Main Events Content -->
<?php tribe_get_template_part( 'shortlist/content' ); ?>

	<div class="tribe-clear"></div>

<?php
do_action( 'tribe_events_after_template' );