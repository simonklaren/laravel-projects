<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product toevoegen
        </h2>
    </x-slot>

    <div>
        <div style="text-align:center; "class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table id="table_ProdWijzigen">
                <tr>
                    <th style="padding: 1em; border: gray 1px solid;">Product ID</th>
                    <th style="padding: 1em; border: gray 1px solid;">Name</th>
                    <th style="padding: 1em; border: gray 1px solid;">Prijs</th>
                    <th style="padding: 1em; border: gray 1px solid;">Category</th>
                    <th style="padding: 1em; border: gray 1px solid;">Created_at</th>
                    <th style="padding: 1em; border: gray 1px solid;">Updated_at</th>
                    <th style="padding: 1em; border: gray 1px solid;">Wijzigen?</th>
                    <th style="padding: 1em; border: gray 1px solid;">Verwijderen?</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $product->id }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $product->name }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $product->price }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $product->category->name }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $product->created_at }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $product->updated_at }}</td>
                    <td style="padding: 1em; border: gray 1px solid;"><a href="/product/edit/{{$product->id}}">Wijzig</a></td>
                    <td style="padding: 1em; border: gray 1px solid;"><a href="/product/delete/{{$product->id}}">Verwijderen</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>