<?php

namespace App\Livewire\Back\Dosen\Penelitian;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Preview extends Component
{
    #[Layout("components.layouts.dosen")]
    public string $kodePenelitianId;

    public function mount( $kodePenelitianId ){
       $this->kodePenelitianId = $kodePenelitianId; 
    }
    public function render()
    {
        return view('livewire.back.dosen.penelitian.preview');
    }
}
