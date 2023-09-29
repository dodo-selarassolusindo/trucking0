<?php

namespace App\Livewire\Tperbaikans;

use App\Models\Tperbaikan;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public function render()
    {
        return view('livewire.tperbaikans.index', [
            'tperbaikans' => Tperbaikan::latest()->paginate(5)
        ]);
    }
}
