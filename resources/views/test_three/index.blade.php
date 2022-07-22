<x-app-layout>
    <div>
        <x-link url="{{ route('third-test-generate') }}" class="py-2 px-6 rounded transition duration text-white bg-green-400 hover:bg-green-600 my-4">
            Gerar dados do teste
        </x-link>
        <hr class="my-4">
        @if ($users->count() > 0)
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-4">
                <div>
                    <span class="text-2xl">Usuários</span>
                    <table class="w-full relative overflow-x-auto">
                        <thead>
                            <tr class="border">
                                <th class="py-2">ID</th>
                                <th>CPF</th>
                                <th>Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="border hover:bg-gray-200 {{ $loop->index % 2 == 0 ? 'bg-gray-100' : '' }}">
                                    <td class="text-center py-2">{{ $user->id }}</td>
                                    <td class="text-center">{{ $user->cpf }}</td>
                                    <td class="text-center">{{ $user->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    <span class="text-2xl">Informações</span>
                    <table class="w-full relative overflow-x-auto">
                        <thead>
                            <tr class="border">
                                <th class="py-2">ID</th>
                                <th>CPF</th>
                                <th>Genero</th>
                                <th>Ano de nascimento</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($infos as $info)
                                <tr class="border hover:bg-gray-200 {{ $loop->index % 2 == 0 ? 'bg-gray-100' : '' }}">
                                    <td class="text-center py-2">{{ $info->id }}</td>
                                    <td class="text-center">{{ $info->cpf }}</td>
                                    <td class="text-center">{{ $info->genero }}</td>
                                    <td class="text-center">{{ $info->ano_nascimento }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <span class="text-2xl">Resultado</span>
                <table class="w-full relative overflow-x-auto">
                    <thead>
                        <tr class="border">
                            <th class="py-2">Usuário</th>
                            <th>maior_50_anos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $result)
                            <tr class="border hover:bg-gray-200 {{ $loop->index % 2 == 0 ? 'bg-gray-100' : '' }}">
                                <td class="text-center py-2">{{ $result->name . ' - ' . $result->genero }}</td>
                                <td class="text-center">{{ $result->ano_nascimento > Carbon\Carbon::now()->subYear(50) ? 'Não' : 'Sim' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <span class="text-xl">Não há usuários cadastrados</span>
        @endif
    </div>
</x-app-layout>
