<?php

namespace App\Http\Livewire\User;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Chat extends Component
{

    public $getUsers;

    public function filterUsers()
    {
        $id_user = Auth::user()->id;
        $users = User::where('id', '!=', $id_user)->where(['online' => "on"])->get();
        $this->getUsers = $users;
    }

    public function connect()
    {
        $id_user = Auth::user()->id;

        DB::beginTransaction();
        try {
            $connect = User::find($id_user)->update(['online' => "on"]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function desconnect()
    {
        $id_user = Auth::user()->id;

        DB::beginTransaction();
        try {
            $desconnect = User::find($id_user)->update(['online' => "off"]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function render()
    {
        $data = [
            'title'     => "Chat Online",
            'menu' => "Chat",
            'submenu' => "Amigos Online",
            'type' => "user",
        ];
        return view('livewire.user.chat', $data);
    }
}