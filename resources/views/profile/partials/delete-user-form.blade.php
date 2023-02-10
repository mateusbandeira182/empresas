<section class="mt-3">
    <header>
        <h2 class="fw-bold">{{ __('Deletar conta') }}</h2>
        <p>{{ __('Uma vez deleta todos os dados serão APAGADOS da base de dados. Antes de deletetar certifique-se
            de realizar o backup.') }}</p>
    </header>
    <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#modalDelete">Deletar</button>
    <!-- Modal -->
    <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalDeleteLabel">{{ __('Excluir') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('profile.destroy') }}" method="post">
                        @csrf
                        @method('delete')
                        <h2 class="fw-bold">{{ __('Você tem certeza que deseja deletar sua conta?') }}</h2>
                        <p>{{ __('Uma vez deleta todos os dados serão APAGADOS da base de dados. Antes de deletetar certifique-se
            de realizar o backup.') }}</p>
                        <div class="mb-3">
                            <x-form-label-bootstrap5 for="password" :content="__('Senha')" />
                            <x-input-text-bootstrap5 type="password" name="password" id="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" required />
                            <x-invalid-feedback-bootstrap5 :messages="$errors->get('password')" />
                        </div>
                        <x-button-bootstrap5 :type="__('submit')" :text="__('Deletar')" class="btn-danger btn-lg" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
