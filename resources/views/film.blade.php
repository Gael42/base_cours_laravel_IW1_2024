<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Détails du film : <b>{{ $film->titre }}</b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <br><br>
                    <b>Titre :</b> {{ $film->titre }} (durée : {{$film->duree_minutes}} minutes)<br><br>
                    <b>Année de production :</b> {{$film->annee_production}}<br>
                    <b>Genre :</b> <a href="{{ route('genre', $film->genre->id_genre) }}">{{$film->genre->nom}}</a><br>
                    <b>Distributeur :</b> {{$film->id_distributeur}}<br>
                    Ce film sera diffusé du

{{ \Carbon\Carbon::parse($film->date_debut_affiche)->translatedFormat('j F, Y') }}
{{ \Carbon\Carbon::parse($film->date_debut_affiche)->translatedFormat('j F, Y') }}
au {{ \Carbon\Carbon::parse($film->date_fin_affiche)->translatedFormat('j F, Y') }}
                    <br><br>
                    <b>Résumé:</b><br>
                    <i>{{$film->resum}}</i>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
