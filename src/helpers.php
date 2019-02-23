<?php

if(!function_exists('comingsoon_title')) {
	function comingsoon_title()
	{
	    return app('coming-soon')->title();
	}
}

if(!function_exists('comingsoon_intro')) {
	function comingsoon_intro()
	{
	    return app('coming-soon')->intro();
	}
}

if(!function_exists('commingsoon_background')) {
	function commingsoon_background()
	{
		$backgroundImage = app('coming-soon')->background();
	    
	    echo '<style>body{background-image: url('.$backgroundImage.')}</style>';
	}
}