<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bucketlist-naam aanpassen
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table>
                <tr>
                    <th style="padding: 1em; border: gray 1px solid;">ID</th>
                    <th style="padding: 1em; border: gray 1px solid;">Title</th>
                    <th style="padding: 1em; border: gray 1px solid;">Created_at</th>
                    <th style="padding: 1em; border: gray 1px solid;">Updated_at</th>
                    <th style="padding: 1em; border: gray 1px solid;">Wijzigen?</th>
                    <th style="padding: 1em; border: gray 1px solid;">Verwijderen??</th>
                </tr>
                @foreach($bucketlist as $bucketlists)
                <tr>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $bucketlists->id }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $bucketlists->title }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $bucketlists->created_at }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $bucketlists->updated_at }}</td>
                    <td style="padding: 1em; border: gray 1px solid;"><a href="/bucketlist/edit/{{$bucketlists->id}}">Wijzig</a></td>
                    <td style="padding: 1em; border: gray 1px solid;"><a href="/bucketlist/delete/{{$bucketlists->id}}">Verwijderen</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>