<?php

namespace Bitweu\ComingSoon;

class ComingSoon
{
    /**
     * Store coming soon page title.
     * @var string
     */
    protected $title;

    /**
     * Store coming soon page intro text.
     * @var string
     */
    protected $intro;

    /**
     * Store coming soon page background image url.
     * @var string
     */
    protected $background;

    public function __construct(string $title, string $intro, string $background)
    {
        $this->title = $title;
        $this->intro = $intro;
        $this->background = $background;
    }

    public function title() : string
    {
        return $this->title;
    }

    public function intro() : string
    {
        return $this->intro;
    }

    public function background() : string
    {
        return $this->background;
    }
}
