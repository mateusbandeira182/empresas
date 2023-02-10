<x-app-layout :message="!is_null($message) ? $message : ''" :type="!is_null($type) ? $type : ''">
    <div class="row justify-content-center mt-5">
        <div class="col-sm-12 col-md-6 col-lg-5">
            <x-card-bootstrap5>
                <div class="title-box text-center mb-4">
                    <h3 class="fw-bold mb-0">Cadastro de empresas</h3>
                </div>
                <form action="{{ route('company.store') }}" method="post" id="formCad">
                    @csrf
                    <!-- Razão Social -->
                    <div class="mb-3">
                        <x-form-label-bootstrap5 for="name" :content="__('Razão Social')" />
                        <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name') }}" required autofocus />
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('name')" />
                    </div>
                    <!-- Nome Fantasia -->
                    <div class="mb-3">
                        <x-form-label-bootstrap5 for="alias" :content="__('Nome Fantasia')" />
                        <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('alias') ? 'is-invalid' : '' }}" type="text" name="alias" id="alias" value="{{ old('alias') }}" required />
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('alias')" />
                    </div>
                    <!-- CNPJ -->
                    <div class="mb-3">
                        <x-form-label-bootstrap5 for="cnpj" :content="__('CNPJ')" />
                        <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('cnpj') ? 'is-invalid' : '' }}" type="tel" name="cnpj" id="cnpj" value="{{ old('cnpj') }}" required />
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('cnpj')" />
                    </div>
                    <!-- E-mail -->
                    <div class="mb-3">
                        <x-form-label-bootstrap5 for="email" :content="__('E-mail')" />
                        <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required />
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('email')" />
                    </div>
                    <!-- Telefone -->
                    <div class="mb-3">
                        <x-form-label-bootstrap5 for="telefone" :content="__('Telefone')" />
                        <x-input-text-bootstrap5 :disabled="false" class="{{ $errors->has('phone') ? 'is-invalid' : '' }}" type="tel" name="phone" id="phone" value="{{ old('phone') }}" required />
                        <x-invalid-feedback-bootstrap5 :messages="$errors->get('phone')" />
                    </div>
                    <!-- Usuário -->
                    <div class="mb-3">
                        <x-form-label-bootstrap5 for="owner" :content="__('Dono da empresa')" />
                        <x-input-select-bootstrap5 :selectOption="null" :options="$users" :disabled="false" id="owner" name="owner" required />
                    </div>
                    <x-button-bootstrap5 :type="__('submit')" :text="__('Cadastrar')" class="btn-primary btn-lg w-100" id="btnCad" />
                </form>
            </x-card-bootstrap5>
        </div>
    </div>
    @push('plugins-scripts')
        <script src="{{ asset('assets/plugins/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
    @endpush
    @push('custom-scripts')
        <script src="{{ asset('assets/js/company/company.js') }}"></script>
    @endpush
</x-app-layout>
