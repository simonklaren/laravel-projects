<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categorie toevoegen
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table>
                <tr>
                    <th style="padding: 1em; border: gray 1px solid;">ID</th>
                    <th style="padding: 1em; border: gray 1px solid;">Name</th>
                    <th style="padding: 1em; border: gray 1px solid;">Created_at</th>
                    <th style="padding: 1em; border: gray 1px solid;">Updated_at</th>
                    <th style="padding: 1em; border: gray 1px solid;">Wijzigen?</th>
                    <th style="padding: 1em; border: gray 1px solid;">Verwijderen??</th>
                </tr>
                @foreach($categories as $category)
                <tr>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $category->id }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $category->name }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $category->created_at }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $category->updated_at }}</td>
                    <td style="padding: 1em; border: gray 1px solid;"><a href="/category/edit/{{$category->id}}">Wijzig</a></td>
                    <td style="padding: 1em; border: gray 1px solid;"><a href="/category/delete/{{$category->id}}">Verwijderen</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>