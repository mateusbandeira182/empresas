<x-guest-layout :message="!is_null($message) ? $message : null" :type="!is_null($type) ? $type : null">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5">
            <x-card-auth-bootstrap5>
                <div class="mb-4">
                    <p class="fw-bold mb-0">{{ __('Esqueceu sua senha? Sem problema. Basta digitar o e-mail do cadastro que enviamos um link de resete da senha') }}</p>
                </div>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-3">
                        <x-form-label-bootstrap5 for="email" :content="__('E-mail')" />
                        <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" required />
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('email')" />
                    </div>
                    <x-button-bootstrap5 :type="__('submit')" :text="__('Enviar link de resete')" class="btn-primary btn-lg" />
                </form>
            </x-card-auth-bootstrap5>
        </div>
    </div>
</x-guest-layout>
