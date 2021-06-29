<?php

namespace App\Http\Livewire;


use App\Models\User;

use Livewire\Component;


class UserLivewire extends Component
{
    public $name, $password, $photouser, $user_id, $email;
    protected $rules = [
        'name' => 'required',
        'password' => 'required',
        'email' => 'required',

    ];
    public $accion = "store";
    public function render()
    {
        $users=User::all();
        return view('livewire.user-livewire',compact('users'));

    }
    public function store()
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'password' => $this->password,
            'email' => $this->email,

            
        ]);

        $this->reset(['name', 'password','accion', 'email']);
    }
    public function edit(User $user)
    {
        $this->name = $user->name;
        $this->password = $user->password;
        $this->user_id = $user->id;
        $this->email = $user->email;
        $this->accion = "update";
    }
    public function update()
    {
        $this->validate();
        $user = User::find($this->user_id);
        $user->update([
            'name' => $this->name,
            'password' => $this->password,
            'email'=> $this->email,
        ]);
        $this->reset(['name', 'password','accion','email']);

    }
    public function
    default()
    {
        $this->reset(['name', 'password','accion', 'email']);

    }
    public function destroy(User $user)
    {
        $user->delete();
    }
}