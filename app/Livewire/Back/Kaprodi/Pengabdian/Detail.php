<?php

namespace App\Livewire\Back\Kaprodi\Pengabdian;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Detail extends Component
{
    public $pengabdianId;

    public function mount($pengabdianId)
    {
        $this->pengabdianId = $pengabdianId;
    }

    #[Layout("components.layouts.kaprodi")]
    public function render()
    {
        return view('livewire.back.kaprodi.pengabdian.detail');
    }
}
