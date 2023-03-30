<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bucketlist all</title>
</head>

<body>
    <h1>Alle Bucketlists</h1>
    @foreach($bucketlists as $bucketlist)
    <h2>{{ $bucketlist->name }}</h2>
    @foreach($bucketlist->bucketlist_items as $bucketlist_item)
    <p class="menu-item">{{ $bucketlist_item->name }}</p>
    @endforeach
    @endforeach
</body>

</html>