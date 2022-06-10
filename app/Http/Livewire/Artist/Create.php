<?php

namespace App\Http\Livewire\Artist;

use Livewire\Component;

class Create extends Component
{

    public $name;
    public $city;
    public $state;
    public $address;
    public $phone;
    public $facebookLink;
    public $imageLink;
    public $websiteLink;
    public $lookingForVenue;
    public $description;

    public function render()
    {
        return view('livewire.artist.create');
    }
}
