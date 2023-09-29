<?php

namespace App\Livewire\Tperbaikands;

use App\Models\Armada;
use Livewire\Component;

class Create extends Component
{

    public $tperbaikands = [];
    public $allArmadas = [];

    public function mount()
    {
        $this->tperbaikands = [
            ['armada' => '', 'nilai' => 0]
        ];
        $this->allArmadas = Armada::all();
    }

    public function addTperbaikand()
    {
        $this->tperbaikands[] = ['armada' => '', 'nilai' => 0];
    }

    public function removeTperbaikand($index)
    {
        unset($this->tperbaikands[$index]);
        $this->tperbaikands = array_values($this->tperbaikands);
    }

    public function render()
    {
        return view('livewire.tperbaikands.create');
    }
}
