<?php

namespace App\Livewire\Back\Kaprodi\Publikasi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Form extends Component
{
    #[Layout("components.layouts.kaprodi")]

    public int $publikasiId;

    public function mount(int $publikasiId = null){
        if($publikasiId){
            $this->publikasiId = $publikasiId;
            $this->loadPublikasi();
        }else{
            // $this->publikasiId = $publikasiId;
        }
    }

    public function loadPublikasi(){
        // load data publikasi
        $this->publikasiId = (int) $this->publikasiId;
    }

    public function save(){
        // menyimpan data baru atau memperbarui data lama
    }

    public function render()
    {
        return view('livewire.back.kaprodi.publikasi.form');
    }
}
