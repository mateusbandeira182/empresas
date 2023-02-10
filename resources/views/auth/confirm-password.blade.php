<x-guest-layout :message="!is_null($message) ? $message : null" :type="!is_null($type) ? $type : null">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5">
            <x-card-auth-bootstrap5>
                <div class="text-password">
                    <p class="fw-bold">{{ __('Essa é uma área de segunça da aplicação, confirme sua senha antes de continuar') }}</p>
                </div>
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    <div class="mb-3">
                        <x-form-label-bootstrap5 for="password" :content="__('Senha')" />
                        <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required />
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('password')" />
                    </div>
                    <x-button-bootstrap5 :type="__('submit')" :text="__('Confirmar')" class="btn-primary btn-lg" />
                </form>
            </x-card-auth-bootstrap5>
        </div>
    </div>
</x-guest-layout>
