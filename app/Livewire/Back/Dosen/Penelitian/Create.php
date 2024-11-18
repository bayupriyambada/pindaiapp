<?php

namespace App\Livewire\Back\Dosen\Penelitian;

use App\Helpers\JenisIndeksasi;
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

    // public function toggleModal($modal, $action)
    // {
    //     switch ($action) {
    //         case 'open':
    //             $this->dispatch('openModal' . ucfirst($modal)); // Mengirimkan event untuk membuka modal
    //             break;
    //         case 'close':
    //             $this->dispatch('closeModal' . ucfirst($modal)); // Mengirimkan event untuk menutup modal
    //             break;
    //         default:
    //             // Jika tidak ada action yang valid
    //             break;
    //     }
    // }

    public function openModalAnggotaTerdaftar()
    {
        $this->dispatch('openModalTerdaftar');
    }
    public function openModalAnggotaManual()
    {
        $this->dispatch('openModalManual');
    }
    public function closeModalAnggotaManual()
    {
        $this->dispatch('closeModalManual');
    }
    
    public function closeModalAnggotaTerdaftar()
    {
        $this->dispatch('closeModalTerdaftar');
    }

    public function openModalJenisPenelitian()
    {
        $this->dispatch('openModalJenisPenelitian');
    }
    public function openModalJenisIndeksasi()
    {
        $this->dispatch('openModalJenisIndeksasi');
    }

        public function render()
    {
       
        return view('livewire.back.dosen.penelitian.create',
        [
            'listJenisIndeksasi' => JenisIndeksasi::listJenisIndeksasi(),
            'selectJenisIndeksasi' => JenisIndeksasi::filtering(),
            'selectJenisPenelitian' => JenisPenelitian::filtering(),
            'listJenisPenelitian' => JenisPenelitian::listJenisPenelitian()
        ]);
    }
}
