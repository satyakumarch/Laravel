<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog</title>
</head>
<body>
    <h1>Product Catalog</h1>
    <ul>
        @foreach($products as $id => $product)
            <li>
                <a href="{{ url('products/' . $id) }}">{{ $product['name'] }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
