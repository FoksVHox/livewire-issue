<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $photo;

    public function save()
    {
        $this->validate([
            'photo' => 'mimes:mp4,mov,ogg,qt', // 1MB Max
        ]);

        $this->photo->store('photos','s3');
    }
    public function render()
    {
        return view('livewire.upload');
    }
}
