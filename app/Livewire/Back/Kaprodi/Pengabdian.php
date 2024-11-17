<?php

namespace App\Livewire\Back\Kaprodi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Pengabdian extends Component
{
    #[Layout("components.layouts.kaprodi")]
    public function render()
    {
        return view('livewire.back.kaprodi.pengabdian');
    }
}
