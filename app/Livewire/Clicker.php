<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Request;

class Clicker extends Component
{
public $name;
public $email;
public $password;
    public function createNewUser()
    {
        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->save();
    }

    public function render()
    {
        $data['title'] = "test";
        $data['users'] = User::all();
        return view('livewire.clicker', $data);
    }
}
