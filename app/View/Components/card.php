<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card extends Component
{


    public $original_title;
    public $nationality;
    public $date;
    public $vote;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($originalTitle,$nationality,$date,$vote)
    {
        $this->original_title = $originalTitle;
        $this->nationality = $nationality;
        $this->date = $date;
        $this->vote = $vote;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
