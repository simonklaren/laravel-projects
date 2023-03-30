<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bucketlist-item aanpassen
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="/bucketlist_item/edit/{{ $bucketlistItem->id }}" method="post">
                {{ csrf_field() }}
                @method('put')
                <label for="txtName">Naam: </label>     
                <input type="text" name="txtName" id="txtName" value="{{ $bucketlistItem->title }}"><br><br>
                <label for="selPrioriteit">Prioriteit: </label>
                <select name="selPrioriteit">
                    <option value="{{ $bucketlistItem->prioriteit }}"></option>
                    <option value="None">None</option>
                    <option value="Normal">Normal</option>
                    <option value="High">High</option>
                </select><br><br> 
                <select name="selDone">
                    <option value="{{ $bucketlistItem->done }}"></option>
                    <?php 
                        if($bucketlistItem->done == 'false'){
                            ?><option value="true">true</option><?php 
                        }else{
                            ?><option value="false">false</option><?php 
                        }
                    ?>
                </select>     
                <label for="txtDescription">Omschrijving:</label>     <br>
                <textarea name="txtDescription" rows="4" cols="50">{{ $bucketlistItem->description }}</textarea>
  

                <br>    <input style="padding: 2em; background-color:purple; border-radius: 40px;" type="submit" value="Opslaan">
            </form>
        </div>
    </div>
</x-app-layout>