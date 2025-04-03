<div class="d-flex align-items-center justify-content-center vh-100 bg-light">
  <div class="card shadow-sm p-4" style="width: 400px">
        @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        <form wire:submit.prevent="login">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" wire:model="email"
                class="form-control" placeholder="Ex.: test@gmail.com">
                @error('email')
                    <span class="text-danger small">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password">Senha</label>
                <input type="password" wire:model="password" id="password"
                class="form-control" placeholder="Informe sua senha">
                @error('password')
                    <span class="text-danger small">{{$message}}/</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
  </div>
</div>
