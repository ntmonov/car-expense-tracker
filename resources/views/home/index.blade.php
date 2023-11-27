<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/home.css') }}>
    <title>Car expense tracker</title>
</head>

<body>
    <h1>Welcome to car expense tracker</h1>
    <p>Choose your vehicle from the list, or <a href={{ route('cars.create.index') }}>create a new one</a></p>

    <div class="cars-list">
        @foreach ($cars as $car)
            <div class="card">
                <img src={{ 'images/NotFound.png' }} alt="">
                <div>
                    <span class="brand">{{ $car['brand'] }}</span><span class="model">{{ $car['model'] }}</span>
                </div>
                <div class="desc">{{ $car['description'] }}</div>
                <div class="code">Engine Code: {{ $car['code'] }}</div>
                <div class="buttons">
                    <a class="btn edit" href={{ route('cars.edit.index', ["id"=>$car["id"]]) }}>Edit</a>
                    <a class="btn expenses" href="http://">See expenses</a>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
