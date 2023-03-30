<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categorie toevoegen
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="{{ route('category.create.post') }}" method="post">
                {{ csrf_field() }}
                <label for="txtName">Naam: </label>
                <input type="text" name="txtName" id="txtName"><br />
                <input style="background-color: green; padding: 2em; border-radius: 40px;" type="submit"
                    value="Opslaan">
            </form>
        </div>
    </div>
</x-app-layout>