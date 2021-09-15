<?php

namespace App\View\Components;

use Illuminate\View\Component;

class textarea extends Component
{
    public $id;
    public $name;

    public $toplabel;
    public $placeholder;
    public $bottomlabel;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$name,$toplabel,$placeholder,$bottomlabel)
    {
        $this->id = $id;
        $this->name = $name;

        $this->toplabel = $toplabel;
        $this->placeholder = $placeholder;
        $this->bottomlabel = $bottomlabel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.textarea');
    }
}
