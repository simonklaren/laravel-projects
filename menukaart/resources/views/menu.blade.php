<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menukaart</title>
</head>

<body>
    <h1>Menu</h1>
    @foreach($categories as $category)
    <h2>{{ $category->name }}</h2>
    @foreach($category->products as $product)
    <p class="menu-item">{{ $product->name }}</p>
    @endforeach
    @endforeach
</body>

</html>