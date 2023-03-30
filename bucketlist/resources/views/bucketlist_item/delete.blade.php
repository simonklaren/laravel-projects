<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bucketlist item verwijderen
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="{{ route('bucketlist_item.delete.delete', ['bucketlist_item' => $bucketlist_item->id])}}" method="post">
                {{ csrf_field() }}
                @method('delete')
                <p>Naam: {{$bucketlist_item->title}}</p>
                <p>Bucketlist title: {{$bucketlist_item->bucketlist->title}}</p>
                <input style="padding: 2em; border-radius: 40px;" type="submit" value="Verwijderen">
            </form>
        </div>
    </div>
</x-app-layout>