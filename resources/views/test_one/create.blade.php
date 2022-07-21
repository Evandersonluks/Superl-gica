<x-app-layout>
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
                    <x-input type="text" id="userName" name="userName" />
                </div>
                <div class="flex flex-col">
                    <label for="zipCode">CEP</label>
                    <x-input type="text" id="zipCode" name="zipCode" />
                </div>
                <div class="flex flex-col">
                    <label for="email">Email:</label>
                    <x-input type="text" id="email" name="email" />
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
