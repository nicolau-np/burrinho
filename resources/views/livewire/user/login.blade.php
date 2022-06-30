<div>
    @section('title', $title)
    @section('menu', $menu)
    @section('submenu', $submenu)
    @section('type', $type)



        <div class="form-login">
            <form wire:submit.prevent="submit">
                <fieldset>
                    <legend>
                        Iniciar Sessão
                    </legend>
                    <div class="row">
                        <div class="col-md-12">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>

                            @endif
                        </div>

                        <div class="col-md-12 col">
                            <input type="text" class="form-control" placeholder="Email" wire:model="email" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 col">
                            <input type="password" class="form-control" placeholder="Palavra-Passe" wire:model="password" />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <p class="forget"><a href="/user/forget">Esqueceu Palavra-Passe</a></p>
                        </div>
                        <div class="col-md-12 col">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                        <div class="col-md-12 col">
                            <p class="create">Não possui uma conta? <a href="/user/register">Criar</a></p>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>
