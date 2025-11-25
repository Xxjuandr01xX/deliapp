<?php

namespace App\Livewire\App;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class AlertCenter extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.app.alert-center');
    }
}
