<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Liste des films du genre : <b>{{ $genre->nom }}</b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <br><br>
                    <b>Films du genre :</b> {{ $genre->nom }}<br><br>
                    <ul>
                    	@foreach($films_genre as $film)
                    	<li>
                    	- <a href="{{ route('film', $film->id_film) }}">{{ $film->titre }}</a>
                    	</li>
                    	@endforeach
                    </ul>
                    <br>
                    {{ $films_genre->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
