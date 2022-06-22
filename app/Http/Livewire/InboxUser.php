<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\SuratMasuk;

class InboxUser extends Component
{
	public $surat_masuk;

    public function render()
    {
    	$this->surat_masuk = SuratMasuk::latest()->get();
        return view('livewire.inbox-user');
    }
}
