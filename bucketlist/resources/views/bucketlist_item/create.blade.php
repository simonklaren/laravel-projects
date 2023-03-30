<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bucketlist-item toevoegen
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="{{ route('bucketlist_item.create.post') }}" method="post">
                {{ csrf_field() }}
                
                <label for="txtName">Naam: </label>
                <input type="text" name="txtName" id="txtName">
                <br />

                <label for="txtDescription">Omschrijving: </label>
                <textarea name="txtDescription" rows="4" cols="50"></textarea>
                <br />

                <label for="selPrioriteit">Prioriteit: </label>
                <select name="selPrioriteit">
                    <option value="None">None</option>
                    <option value="Normal">Normal</option>
                    <option value="High">High</option>
                </select>
                <br />

                <label for="txtBucketlist">Bucketlist naam: </label>
                <select name="selBucketlist">
                    @foreach($bucketlist as $bucketlists)
                    <option value="{{ $bucketlists->id }}">{{ $bucketlists->title }}</option>
                    @endforeach
                </select>

                <br />
                <input style="background-color: hotpink; padding: 2em; border-radius: 5px; color: yellow;" type="submit"
                    value="Opslaan">
            </form>
        </div>
    </div>
</x-app-layout>