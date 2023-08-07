<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $label;
    public $name;
    public $demo;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $label, $name, $demo = 0)
    {
       $this -> type = $type; //Is class ke, Type wale variable me assign karenge type ko.
       $this -> label = $label;
       $this -> name = $name;      // Means is class ke member variables ko aap yaha se initialise kar rahe ho.
       $this -> demo = $demo; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
