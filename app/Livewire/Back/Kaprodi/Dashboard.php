<?php

namespace App\Livewire\Back\Kaprodi;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout("components.layouts.kaprodi")]
    public function render()
    {
        return view('livewire.back.kaprodi.dashboard');
    }
}
