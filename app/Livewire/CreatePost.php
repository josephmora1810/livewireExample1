<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class CreatePost extends Component
{
    // Se pueden almacenar tipos de datos como Array, String, Integer, Float, Boolean y null
    //Tambien podemos almacenar Colecciones, modelos, datetime (estos los convierten en json, los deshidrata e hidrata almomento de ejecucuion)
    public $title, $user;

    public function mount($user){
        $this->user = User::find($user);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
