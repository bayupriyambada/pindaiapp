<?php

namespace App\Livewire\Back\Kaprodi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Publikasi extends Component
{
    #[Layout("components.layouts.kaprodi")]
    public function render()
    {
        return view('livewire.back.kaprodi.publikasi');
    }
}
