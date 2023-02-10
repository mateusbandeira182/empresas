<x-app-layout :message="!is_null($message) ? $message : ''" :type="!is_null($type) ? $type : ''">
    <div class="row mt-5">
        <div class="col-12">
            @if(count($companies) != 0)
                <x-card-bootstrap5>
                    <div class="info-box">
                        <h3 class="fw-bold">Empresas cadastradas</h3>
                        <p class="mb-0 display-4 mb-0">{{ count($companies) }}</p>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Razão Social</th>
                            <th scope="col">CNPJ</th>
                            <th scope="col">Dono</th>
                            <th scope="col">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <th scope="row">{{ $company->id }}</th>
                                <th scope="row">{{ $company->name }}</th>
                                <td class="cnpj">{{ $company->cnpj }}</td>
                                <td>{{ $company->user->name }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('company.edit', $company->id) }}" class="btn btn-secondary btn-sm me-3">Editar</a>
                                        <form action="{{ route('company.destroy', $company->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <x-button-bootstrap5 :type="__('submit')" :text="__('Excluir')" class="btn-danger btn-sm" id="btnDel" />
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </x-card-bootstrap5>
            @endif
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            @if(count($users) != 0)
                <x-card-bootstrap5 class="mt-4">
                    <div class="info-box">
                        <h3 class="fw-bold">Usuários cadastrados</h3>
                        <p class="mb-0 display-4 mb-0">{{ count($users) }}</p>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">CPF</th>
                                <th scope="col">E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td class="cpf">{{ $user->cpf }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </x-card-bootstrap5>
            @endif
        </div>
    </div>
    @push('plugins-scripts')
        <script src="{{ asset('assets/plugins/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
    @endpush
    @push('custom-scripts')
        <script src="{{ asset('assets/js/user/panel.js') }}"></script>
    @endpush
</x-app-layout>
