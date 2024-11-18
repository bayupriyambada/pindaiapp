<?php

namespace App\Livewire\Back\Dosen\Penelitian;

use App\Helpers\JenisPenelitian;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Create extends Component
{
    #[Layout("components.layouts.dosen")]


    public $members = [
        [
            "name"=> "Anggota 1",
            "nidn"=> "0011231",
            "no_hp"=> "00123456789",
            "prodi"=> "TI",
            "email"=> "test@test",
        ],
    ];

    public function openModalAnggotaTerdaftar()
    {
        $this->dispatch('openModalTerdaftar');
    }
    
    public function closeModalAnggotaTerdaftar()
    {
        $this->dispatch('closeModalTerdaftar');
    }

    public function openModalJenisPenelitian()
    {
        $this->dispatch('openModalJenisPenelitian');
    }

    public function selectMember($index)
    {
        $this->members[$index] = [
            "name"=> "",
            "nidn"=> "",
            "no_hp"=> "",
        ];

        $this->members = array_values($this->members);
    }
    public function render()
    {
       
        return view('livewire.back.dosen.penelitian.create',
        [
            'selectJenisPenelitian' => JenisPenelitian::filtering(),
            'listJenisPenelitian' => JenisPenelitian::listJenisPenelitian()
        ]);
    }


    
}
