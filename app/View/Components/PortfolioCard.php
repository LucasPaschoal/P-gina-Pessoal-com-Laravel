<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PortfolioCard extends Component
{
    public $badgeColor;
    public $badgeText;
    public $title;
    public $description;
    public $link;

    public function __construct($badgeColor, $badgeText, $title, $description, $link)
    {
        $this->badgeColor = $badgeColor;
        $this->badgeText = $badgeText;
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.portfolio-card');
    }
}
