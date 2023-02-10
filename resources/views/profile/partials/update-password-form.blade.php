<section>
    <header>
        <h2 class="fw-bold">{{ __('Trocar a senha') }}</h2>
        <p class="mb-0">{{ __('Mantenha seus dados atualizados, e troque sua senha constantemente para mantela segura') }}</p>
    </header>
    <form method="post" action="{{ route('password.update') }}" class="mt-3">
        @csrf
        @method('put')
        <div class="form-floating mb-3">
            <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('current_password') ? 'is-invalid' : '' }}"
                                     type="password" name="current_password" placeholder="Senha atual" id="current_password" required/>
            <label for="current_password">Senha atual</label>
            <x-invalid-feedback-bootstrap5 :messages="$errors->updatePassword->get('current_password')" />
        </div>
        <div class="form-floating mb-3">
            <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                                     type="password" name="password" placeholder="Nova senha" id="password" required/>
            <label for="current_password">Nova senha</label>
            <x-invalid-feedback-bootstrap5 :messages="$errors->updatePassword->get('password')" />
        </div>
        <div class="form-floating mb-3">
            <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                     type="password" name="password_confirmation" placeholder="Confirme nova senha" id="password_confirmation" required/>
            <label for="current_password">Confirme nova senha</label>
            <x-invalid-feedback-bootstrap5 :messages="$errors->updatePassword->get('password_confirmation')" />
        </div>
        <x-button-bootstrap5 :type="__('submit')" :text="__('Trocar senha')" class="btn-primary btn-lg w-100" />
        @if (session('status') === 'password-updated')
            <p class="mt-3 mb-0">Salvo</p>
        @endif
    </form>
</section>
