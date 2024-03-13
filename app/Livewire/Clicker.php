<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Clicker extends Component
{
use WithPagination;

public $name;
public $email;
public $password;
    public function createNewUser()
    {
        $this->validate([
            'name'=>'required|min:2|max:70',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);
        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->save();

        $this->reset(['name','email','password']);
        request()->session()->flash('success', 'User created Successfully!');
    }

    public function render()
    {

        $data['title'] = "test";
        $data['users'] = User::paginate(2);
        return view('livewire.clicker', $data);
    }
}
