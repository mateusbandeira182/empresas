<x-guest-layout :message="!is_null($message) ? $message : null" :type="!is_null($type) ? $type : null">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5">
            <x-card-auth-bootstrap5>
                <div class="title-box text-center mb-3">
                    <h2 class="fw-bold mb-0">{{ __('Cadastro de usuário') }}</h2>
                </div>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <!-- Nome -->
                    <div class="form-floating mb-3">
                        <x-input-text-bootstrap5 :disabled="false" type="text" id="name" name="name"
                                                 value="{{ old('name') }}"
                                                 placeholder="Nome Completo" autofocus required/>
                        <label for="name">Nome completo</label>
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('name')" />
                    </div>
                    <!-- CPF -->
                    <div class="form-floating mb-3">
                        <x-input-text-bootstrap5 :disabled="false" type="tel" id="cpf" name="cpf" value="{{ old('cpf') }}" placeholder="CPF" required />
                        <label for="cpf">CPF</label>
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('cpf')"/>
                    </div>
                    <!-- E-mail -->
                    <div class="form-floating mb-3">
                        <x-input-text-bootstrap5 :disabled="false" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="E-mail" required />
                        <label for="email">E-mail</label>
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('email')"/>
                    </div>
                    <!-- Senha -->
                    <div class="form-floating mb-3">
                        <x-input-text-bootstrap5 :disabled="false" type="password" id="password" name="password"
                                                 placeholder="Senha" required/>
                        <label for="name">Senha</label>
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('password')" />
                    </div>
                    <!-- Confirmação de senha -->
                    <div class="form-floating mb-3">
                        <x-input-text-bootstrap5 :disabled="false" type="password" id="password_confirmation"
                                                 name="password_confirmation" placeholder="Confirme sua senha" autofocus
                                                 required/>
                        <label for="name">Confirme sua senha</label>
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('password')" />
                    </div>
                    <!-- Botão -->
                    <x-button-bootstrap5 :type="__('submit')" :text="__('Cadastrar')" class="btn-primary btn-lg w-100" />
                    <div class="has-register mt-3">
                        <a href="{{ route('login') }}" class="text-decoration-none link-primary">
                            {{ __('Já tenho cadastro') }}
                        </a>
                    </div>
                </form>
            </x-card-auth-bootstrap5>
        </div>
    </div>
</x-guest-layout>
