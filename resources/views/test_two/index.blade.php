<x-app-layout>
    <div x-data="{arr: true, newArray: false, regenerate: false, reduce: false, reverse: false}">
        <span>Array</span><br/>
        <div class="flex" x-show="arr">
            @foreach ($arr as $item)
                <span class="py-0 w-10 border border-gray-300 text-center text-xl">{{ $item }}</span>
            @endforeach
        </div>
        <span>Item da terceira posição: {{ $thirdPosition }}</span><br/>
        <span>Array transformado em string: {{ $string }}</span><br>

        <div>
            <button class="py-2 px-6 rounded transition duration text-white bg-green-400 hover:bg-green-600 my-4"
                x-on:click="newArray = true, arr = false">
                Gerar novo array
            </button>
            <div x-show="newArray">
                <div class="flex">
                    @foreach ($newArr as $item)
                        <span class="py-0 w-10 border border-gray-300 text-center text-xl">{{ $item }}</span>
                    @endforeach
                </div>
                <div class="mt-1">O número 14 está no array?
                    <span class="px-2 py-0 rounded text-white {{ $fourteenExists ? 'bg-green-400' : 'bg-red-400' }}">{{ $fourteenExists ? 'sim' : 'não' }}</span>
                </div>
                <button class="py-2 px-6 rounded transition duration text-white bg-green-400 hover:bg-green-600 my-4"
                    x-on:click="regenerate = true">
                    Reduzir array
                </button>
            </div>
        </div>

        <div x-show="regenerate">
            <div class="flex">
                @foreach ($reducedArr as $item)
                    <span class="py-0 w-10 border border-gray-300 text-center text-xl">{{ $item }}</span>
                @endforeach
            </div>
            <button class="py-2 px-6 rounded transition duration text-white bg-green-400 hover:bg-green-600 my-4"
                x-on:click="reduce = true">
                Excluir última posição
            </button>
        </div>

        <div x-show="reduce">
            <div class="flex" id="">
                @foreach ($arrayWithoutLastIndex as $item)
                    <span class="py-0 w-10 border border-gray-300 text-center text-xl">{{ $item }}</span>
                @endforeach
            </div>
            <div>O array atual possue {{ $arrayLength }} elementos</div>
            <button class="py-2 px-6 rounded transition duration text-white bg-green-400 hover:bg-green-600 my-4"
                x-on:click="reverse = true">
                Reverter array
            </button>
        </div>

        <div x-show="reverse">
            <div class="flex">
                @foreach ($arrayReverse as $item)
                    <span class="py-0 w-10 border border-gray-300 text-center text-xl">{{ $item }}</span>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
