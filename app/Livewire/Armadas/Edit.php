<?php

namespace App\Livewire\Armadas;

use App\Models\Armada;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Edit extends Component
{

    // id armada
    public $armadaID;

    // merk
    #[Rule('required', message: 'Masukkan Merk Armada')]
    public $merk;

    // nopol
    #[Rule('required', message: 'Masukkan Nopol Armada')]
    public $nopol;

    /**
     * mount
     *
     * @return void
     */
    public function mount($id)
    {
        // get armada
        $armada = Armada::find($id);

        // assign
        $this->armadaID = $armada->id;
        $this->merk = $armada->merk;
        $this->nopol = $armada->nopol;
    }

    /**
     * update
     *
     * @return void
     */
    public function update()
    {
        $this->validate();

        // get armada
        $armada = Armada::find($this->armadaID);

        // update armada
        $armada->update([
            'merk' => $this->merk,
            'nopol' => $this->nopol,
        ]);

        //flash message
        session()->flash('message', 'Data berhasil diupdate');

        //redirect
        return redirect()->route('armadas.index');
    }

    public function render()
    {
        return view('livewire.armadas.edit');
    }
}
