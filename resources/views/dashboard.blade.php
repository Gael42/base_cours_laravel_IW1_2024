<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        @if (session('status'))
            <div class="alert alert-success" style="color:green;">
                {{ session('status') }}
            </div>
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Welcome on the Wall
                    <br><br>
                    <form action='{{ route('publishMessage') }}' method=POST>
                        @csrf
                        <input type=text name='message'>
                        <input type=submit value='Post on the Wall'>
                    </form>
                    <br><br>
                    <ul>
                    @foreach($messages as $message)
                        <li>
                        - {{ $message->message }}
                        - <i>{{ $message->created_at->format('d/m/Y H:i') }}</i>
                        @if($message->author == Auth::id())
[<a href={{ route('deleteMessage', $message->id) }}>delete</a>] 
[<a href={{ route('editMessageForm', $message->id) }}>edit</a>]
                        @endif
                        </li>
                    @endforeach
                    </ul>
                    <br>
                    {{ $messages->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
