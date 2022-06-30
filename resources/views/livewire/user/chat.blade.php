<div>
    @section('title', $title)
    @section('menu', $menu)
    @section('submenu', $submenu)
    @section('type', $type)

        <h3>{{ $menu }}</h3>

        <div class="chatcomponent">
            <div class="status" wire:poll.200ms>
                @if (Auth::user()->online == 'off')
                    <a href="#" class="btn btn-success" wire:click="connect">Ligar Chat</a>
                @else
                    <a href="#" class="btn btn-danger" wire:click="desconnect">Desligar Chat</a>
                @endif
            </div>


            @if (Auth::user()->online == 'off')
                <div class="info">
                    <p>Deve Ligar o chat para ver os amigos online</p>
                </div>
            @else
                <div class="chat">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Amigos Online</th>
                            </tr>
                        </thead>

                        <tbody wire:poll.200ms="filterUsers">
                            @if ($getUsers)
                                @foreach ($getUsers as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>

                    </table>
                </div>
            @endif
        </div>




    </div>
