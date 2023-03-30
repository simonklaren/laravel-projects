<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product toevoegen
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="{{ route('product.create.post') }}" method="post">
                {{ csrf_field() }}
                <label for="txtName">Naam: </label>
                <input type="text" name="txtName" id="txtName"><br />
                <label for="txtPrice">Prijs: </label>
                <input type="text" name="txtPrice" id="txtPrice"><br />
                <label for="txtCategory">Category: </label>
                <select name="selCategory">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <br />
                <input style="background-color: hotpink; padding: 2em; border-radius: 5px; color: yellow;" type="submit"
                    value="Opslaan">
            </form>
        </div>
    </div>
</x-app-layout>