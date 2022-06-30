@section('title', $title)
@section('menu', $menu)
@section('submenu', $submenu)
@section('type', $type)



    <div class="form-login">
        <form wire:submit.prevent="submit">
            <fieldset>
                <legend>
                    Registro
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
                        <input type="text" class="form-control" placeholder="Nome completo" wire:model="name" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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

                    <div class="col-md-12 col">
                        <input type="password" class="form-control" placeholder="Confirmar Palavra-Passe" wire:model="confirmpassword" />
                        @error('confirmpassword')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-12 col">
                        <input type="tel" class="form-control" placeholder="Telefone" wire:model="phone" />
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-12 col">
                        <input type="text" class="form-control" placeholder="Morada" wire:model="morada" />
                        @error('morada')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-12 col">
                        <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                    </div>
                    <div class="col-md-12 col">
                        <p class="create">Já possui uma conta? <a href="/user/login">Entrar</a></p>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
