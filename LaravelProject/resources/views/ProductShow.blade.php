<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>
    <h1>{{ $product['name'] }}</h1>
    <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}" width="300">
    <br>
    <a href="{{ url('products') }}">Back to Catalog</a>
</body>
</html>
  