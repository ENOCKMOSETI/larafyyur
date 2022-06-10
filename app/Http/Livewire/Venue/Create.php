<?php

namespace App\Enum;
namespace App\Http\Livewire\Venue;

use Enum\Genre;
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
    public $lookingForTalent;
    public $description;

    public function render()
    {
        return view('livewire.venue.create');
    }
}
