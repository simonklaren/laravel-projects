<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bucketlist item aanpassen
        </h2>
    </x-slot>

    <div>
        <div style="text-align:center; "class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table id="table_BucketlistItemsWijzigen">
                <tr>
                    <th style="padding: 1em; border: gray 1px solid;">Bucketlist Item ID</th>
                    <th style="padding: 1em; border: gray 1px solid;">Title</th>
                    <th style="padding: 1em; border: gray 1px solid;">Omschrijving</th>
                    <th style="padding: 1em; border: gray 1px solid;">Prioriteit</th>
                    <th style="padding: 1em; border: gray 1px solid;">Done?</th>
                    <th style="padding: 1em; border: gray 1px solid;">Bucketlist ID</th>
                    <th style="padding: 1em; border: gray 1px solid;">created_at</th>
                    <th style="padding: 1em; border: gray 1px solid;">updated_at</th>
                    <th style="padding: 1em; border: gray 1px solid;">Wijzigen?</th>
                    <th style="padding: 1em; border: gray 1px solid;">Verwijderen?</th>
                </tr>
                @foreach($bucketlistItem as $bucketlist_items)
                <tr>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $bucketlist_items->id }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $bucketlist_items->title }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $bucketlist_items->description }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $bucketlist_items->prioriteit }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $bucketlist_items->done }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $bucketlist_items->bucketlist_id }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $bucketlist_items->created_at }}</td>
                    <td style="padding: 1em; border: gray 1px solid;">{{ $bucketlist_items->updated_at }}</td>
                    <td style="padding: 1em; border: gray 1px solid;"><a href="/bucketlist_item/edit/{{$bucketlist_items->id}}">Wijzig</a></td>
                    <td style="padding: 1em; border: gray 1px solid;"><a href="/bucketlist_item/delete/{{$bucketlist_items->id}}">Verwijderen</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>