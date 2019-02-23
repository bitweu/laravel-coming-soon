<?php

/**
 * Package configuration
 */

return [
	/**
	 * Coming soon page title
	 */
	'title' => env('COMINGSOON_TITLE', 'Coming soon'),

	/**
	 * Coming soon page intro text
	 */
	'intro' => env('COMINGSOON_INTRO', 'Something great is coming soon.'),

	/**
	 * Coming soon page background image url
	 */
	'background' => env('COMINGSOON_BACKGROUND', '/vendor/coming-soon/images/coming-soon.jpg')
];