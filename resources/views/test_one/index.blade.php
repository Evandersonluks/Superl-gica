<x-app-layout>
    <div class="mb-8">
        <x-link url="{{ route('first-test-create') }}" class="bg-green-500 hover:bg-green-600 py-2 px-6">Criar cliente</x-link>
    </div>
    <div class="w-100">
        <table class="w-full relative overflow-x-auto">
            <thead>
                <tr class="border">
                    <th class="py-2">Nome</th>
                    <th>Nome de usuário</th>
                    <th>CEP</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border hover:bg-gray-200 {{ $loop->index % 2 == 0 ? 'bg-gray-100' : '' }}">
                        <td class="text-center py-2">{{ $user->name }}</td>
                        <td class="text-center">evandersoluks</td>
                        <td class="text-center">59258-000</td>
                        <td class="text-center">{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
