<?php

namespace App\Livewire\Back\Kaprodi\Penelitian;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Detail extends Component
{
    public $penelitianId;

    public function mount($penelitianId)
    {
        $this->penelitianId = $penelitianId;
    }

    #[Layout("components.layouts.kaprodi")]
    public function render()
    {
        return view('livewire.back.kaprodi.penelitian.detail');
    }
}
