<?php

namespace App\Livewire\Tperbaikans;

use App\Models\Tperbaikan;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{

    // nomor
    #[Rule('required', message: 'Masukkan Nomor Transaksi Perbaikan')]
    public $nomor;

    // tanggal
    #[Rule('required', message: 'Masukkan Tanggal Transaksi Perbaikan')]
    public $tanggal;

    public $armada2 = [];

    public $tperbaikands = [];

    /**
     * mount
     *
     * @return void
     */
    // public function mount($tperbaikands)
    public function mount()
    {
        // code...
        // var_dump($this->armada2);

        var_dump($this->tperbaikands);
        if ($this->tperbaikands) die();
    }

    /**
     * store
     *
     * @return void
     */
    public function store()
    {
        $this->validate();

        // var_dump($this->armada2);
        //
        // var_dump($this->tperbaikands);
        // die();

        // create armada
        Tperbaikan::create([
           'nomor' => $this->nomor,
           'tanggal' => $this->tanggal,
        ]);

        //flash message
        session()->flash('message', 'Data berhasil disimpan');

        //redirect
        return redirect()->route('tperbaikans.index');
    }

    public function render()
    {
        return view('livewire.tperbaikans.create');
    }
}
