<x-guest-layout :message="!is_null($message) ? $message : null" :type="!is_null($type) ? $type : null">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5">
            <x-card-auth-bootstrap5>
                <div class="info-box mb-3">
                    <p class="fw-bold">Obrigado por se cadastrar! Antes de continuar verifique seu endereço de e-mail no link que enviamos via e-mail no momento do cadastro.</p>
                    <p class="mb-0">Caso não tenha recebido o e-mail, clique no botão abaixo que enviaremos um novo.</p>
                </div>

                @if (session('status') == 'verification-link-sent')
                    <p class="fw-bold">Um novo e-mail de verificação foi enviado, verifique sua caixa de e-mails.</p>
                @endif

                <div class="mt-3 d-flex align-items-center">
                    <form method="post" action="{{ route('verification.send') }}">
                        @csrf
                        <x-button-bootstrap5 :type="__('submit')" :text="__('Reenviar e-mail')" class="btn-primary btn-lg me-3" />
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-button-bootstrap5 :type="__('submit')" :text="__('Logout')" class="btn-secondary btn-lg" />
                    </form>
                </div>
            </x-card-auth-bootstrap5>
        </div>
    </div>
</x-guest-layout>
