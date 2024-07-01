<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit message #{{ $message->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Editing message #{{ $message->id }}
                    <br><br>
                    <form action='{{ route('updateMessage') }}' method=POST>
                        @csrf
                        <input type=hidden name='id' value='{{ $message->id }}'>
                        <input type=text name='message' value='{{ $message->message }}'>
                        <input type=submit value='Save message'>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
