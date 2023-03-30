<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bucketlist wijzigen
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="/bucketlist/edit/{{ $bucketlist->id }}" method="post">
                {{ csrf_field() }}
                @method('put')
                <label for="title">Title: </label>
                <input type="text" name="title" id="title" value="{{ $bucketlist->title }}"><br /><br>
                <input style="padding: 2em; background-color:purple; border-radius: 40px;" type="submit" value="Opslaan">
            </form>
        </div>
    </div>
</x-app-layout>