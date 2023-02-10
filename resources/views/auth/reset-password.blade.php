<x-guest-layout :message="!is_null($message) ? $message : null" :type="!is_null($type) ? $type : null">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <x-card-auth-bootstrap5>
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="mb-3">
                        <x-form-label-bootstrap5 for="email" :content="__('E-mail')" />
                        <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" :value="old('email', $request->email)" autofocus required />
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('email')" />
                    </div>

                    <div class="mb-3">
                        <x-form-label-bootstrap5 for="password" :content="__('Senha')" />
                        <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required />
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('password')" />
                    </div>

                    <div class="mb-3">
                        <x-form-label-bootstrap5 for="password_confirmation" :content="__('Senha')" />
                        <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" type="password" name="password_confirmation" id="password_confirmation" required />
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('password_confirmation')" />
                    </div>

                    <x-button-bootstrap5 :type="__('submit')" :text="__('Resetar senha')" class="btn-primary btn-lg" />
                </form>
            </x-card-auth-bootstrap5>
        </div>
    </div>
</x-guest-layout>
