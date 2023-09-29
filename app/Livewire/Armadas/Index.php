<?php

namespace App\Livewire\Armadas;

use App\Models\Armada;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        // destroy
        Armada::destroy($id);

        //flash message
        session()->flash('message', 'Data berhasil dihapus');

        //redirect
        return redirect()->route('armadas.index');
    }

    public function render()
    {
        return view('livewire.armadas.index', [
            'armadas' => Armada::latest()->paginate(5)
        ]);
    }
}
