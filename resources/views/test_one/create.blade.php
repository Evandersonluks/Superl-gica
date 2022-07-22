<x-app-layout>
    <div class="text-red-400 list-none">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
    <div>
        <form method="post" action="{{ route('first-test-store') }}">
            @csrf
            <div class="grid grid-cols-2 gap-8 mb-8">
                <div class="flex flex-col">
                    <label for="name">Nome completo:</label>
                    <x-input type="text" id="name" name="name" />
                </div>
                <div class="flex flex-col">
                    <label for="userName">Nome de login:</label>
                    <x-input type="text" id="userName" name="user_name" />
                </div>
                <div class="flex flex-col">
                    <label for="zipCode">CEP <span class="text-gray-400">Ex... 12345-678</span></label>
                    <x-input x-mask="99/99/9999" type="text" id="zipCode" name="zip_code" />
                </div>
                <div class="flex flex-col">
                    <label for="email">Email:</label>
                    <x-input type="email" id="email" name="email" />
                </div>
                <div class="flex flex-col">
                    <label for="password">Senha (8 caracteres mínimo, contendo pelo menos 1 letra e 1 número):</label>
                    <x-input type="password" id="password" name="password" />
                </div>
            </div>
            <input class="bg-blue-400 hover:bg-blue-600 rounded shadow py-2 px-6 text-white" type="submit" value="Cadastrar">
        </form>
    </div>
</x-app-layout>
