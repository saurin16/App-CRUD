<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        <br>
        <label for="qty">Quantity:</label>
        <input type="number" name="qty" id="qty" value="{{ $product->qty }}" required>
        <br>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price" value="{{ $product->price }}">
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $product->description }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
