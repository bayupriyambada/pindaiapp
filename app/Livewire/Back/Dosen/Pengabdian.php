<?php

namespace App\Livewire\Back\Dosen;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Pengabdian extends Component
{
    #[Layout("components.layouts.dosen")]
    public function render()
    {
        return view('livewire.back.dosen.pengabdian');
    }
}
