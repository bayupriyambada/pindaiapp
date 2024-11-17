<?php

namespace App\Livewire\Back;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout("components.layouts.app")]
    public function render()
    {
        return view('livewire.back.dashboard');
    }
}
