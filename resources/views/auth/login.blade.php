<x-guest-layout :message="!is_null($message) ? $message : null" :type="!is_null($type) ? $type : null">
    <!-- Session Status -->
    <x-auth-session-status class="alert alert-danger" :status="session('status')" />
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5">
            <x-card-auth-bootstrap5>
                <div class="title-box text-center mb-3">
                    <h2 class="fw-bold">Entrar na plataforma</h2>
                </div>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <!-- E-mail -->
                    <div class="form-floating mb-3">
                        <x-input-text-bootstrap5 :disabled="false" type="email" id="email" name="email" placeholder="E-mail" autofocus required />
                        <label for="email">E-mail</label>
                    </div>
                    <!-- Senha -->
                    <div class="form-floating mb-3">
                        <x-input-text-bootstrap5 :disabled="false" type="password" name="password" placeholder="Senha" required />
                        <label for="password">Senha</label>
                    </div>
                    <!-- Lembrar-me -->
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember">
                        <label class="form-check-label" for="remember_me">
                            Lembrar-me
                        </label>
                    </div>
                    <x-button-bootstrap5 :type="__('submit')" :text="__('Entrar')" class="btn-primary btn-lg w-100" />
                    @if (Route::has('password.request'))
                        <div class="box-links mt-3">
                            <a href="{{ route('password.request') }}" class="text-decoration-none link-primary">Esqueceu sua senha?</a>
                        </div>
                    @endif
                </form>
            </x-card-auth-bootstrap5>
        </div>
    </div>
</x-guest-layout>
