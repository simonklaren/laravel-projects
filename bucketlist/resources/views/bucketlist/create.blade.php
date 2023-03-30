<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bucketlist aanmaaken
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="{{ route('bucketlist.create.post') }}" method="post">
                {{ csrf_field() }}
                <label for="title">Naam: </label>
                <input type="text" name="title" id="title"><br />
                <input style="background-color: green; padding: 2em; border-radius: 40px;" type="submit"
                    value="Opslaan">
            </form>
        </div>
    </div>
</x-app-layout>