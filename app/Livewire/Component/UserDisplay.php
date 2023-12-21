<?php

namespace App\Livewire\Component;

use App\Data\UserData;
use Livewire\Component;

class UserDisplay extends Component
{
    public UserData $user;

    public function mount()
    {
        $this->user = new UserData(
            firstName: 'Adam',
            lastName: 'Stradovnik',
        );
    }

    public function render()
    {
        return view('livewire.component.user-display');
    }
}
