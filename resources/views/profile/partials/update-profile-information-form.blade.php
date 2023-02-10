<section>
    <header>
        <h2 class="fw-bold">{{ __('Informações do perfil') }}</h2>
        <p class="mb-0">Atualize o perfil da sua conta</p>
    </header>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-3">
        @csrf
        @method('patch')
        <div class="form-floating mb-3">
            <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                                     type="text" name="name" placeholder="Nome completo" id="name"
                                     value="{{ old('name', $user->name) }}" autofocus required/>
            <label for="name">Nome completo</label>
            <x-invalid-feedback-bootstrap5 :messages="$errors->get('name')" />
        </div>
        <div class="form-floating mb-3">
            <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                                     type="email" name="email" placeholder="E-mail" id="email"
                                     value="{{ old('email', $user->email) }}" autofocus required/>
            <label for="name">E-mail</label>
            <x-invalid-feedback-bootstrap5 :messages="$errors->get('email')" />
        </div>
        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="box-text">
                <p class="mb-3 small">{{ __('Seu e-mail ainda não foi verificado, clique para verificar') }}</p>
                <x-button-bootstrap5 :type="__('submit')" :text="__('Clique para reenviar o e-mail de verificação')" class="btn-secondary btn-sm" form="send-verification" />
                <button form="send-verification" class="btn btn-secondary btn-sm">Clique para reenviar o e-mail de verificação</button>
            </div>
            @if (session('status') === 'verification-link-sent')
                <div class="box-verified">
                    <p class="mb-3 small">Um novo e-mail de verificação foi enviado</p>
                </div>
            @endif
        @endif
        <x-button-bootstrap5 :type="__('submit')" :text="__('Atualizar')" class="btn-primary btn-lg w-100" />
        @if (session('status') === 'profile-updated')
            <p class="small text-success">{{ __('Atualizado') }}</p>
        @endif
    </form>
</section>
