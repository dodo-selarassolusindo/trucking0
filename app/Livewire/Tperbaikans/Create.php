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

    /**
    * store
    *
    * @return void
    */
   public function store()
   {
       $this->validate();

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
