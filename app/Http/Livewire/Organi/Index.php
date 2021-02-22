<?php

namespace App\Http\Livewire\Organi;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.organi.index')->extends('0 ogani/index')->section('content');
    }
}
