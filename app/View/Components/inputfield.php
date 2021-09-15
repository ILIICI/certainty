<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputfield extends Component
{
    public $id;
    public $name;
    public $inputlabel;
    public $placeholder;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$name,$inputlabel,$placeholder)
    {
        $this->id = $id;
        $this->name = $name;

        $this->inputlabel = $inputlabel;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputfield');
    }
}
