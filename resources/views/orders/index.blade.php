<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>
</head>
<body>
    <h1>Orders List</h1>
    @foreach ($orders as $order)
        <h2>Order Number: {{ $order->order_number }}</h2>
        <ul>
            @foreach ($order->products as $product)
                <li>{{ $product->name }} - ${{ $product->price }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
