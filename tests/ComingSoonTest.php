<?php

namespace Bitweu\ComingSoon\Tests;

use Bitweu\ComingSoon\ComingSoon;
use PHPUnit\Framework\TestCase;

class ComingSoonTest extends TestCase
{
    /** @test */
    public function get_coming_soon_data()
    {
    	$comingSoon = new ComingSoon('Coming soon title', 'Coming soon intro', 'coming-soon-background.jpg');

        $this->assertTrue($comingSoon->title() == 'Coming soon title');
        $this->assertTrue($comingSoon->intro() == 'Coming soon intro');
        $this->assertTrue($comingSoon->background() == 'coming-soon-background.jpg');
    }
}
