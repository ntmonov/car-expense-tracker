<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/create.css') }}>
    <title>Add car</title>
</head>
<body>
    <h1>Add car to the expense tracker</h1>
    <form method="POST" action={{ route('cars.create.store') }}>
        @csrf
        <div class="form-control">
            <label for="brand">Brand</label>
            <input type="text" name="brand">
        </div>
        <div class="form-control">
            <label for="model">Model</label>
            <input type="text" name="model">
        </div>
        <div class="form-control">
            <label for="description">Description</label>
            <input type="text" name="description">
        </div>
        <div class="form-control">
            <label for="code">Code</label>
            <input type="text" name="code">
        </div>
        <div class="form-control">
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>
        <div class="form-control">
            <label for="price">Purchase price</label>
            <input type="text" name="price" id="price">
        </div>
        <div class="form-control">
            <label for="dateOfPurchase">Date of purchase</label>
            <input type="date" name="dateOfPurchase" id="image">
        </div>
        <div class="form-control">
            <a class="btn btn-close" href="{{{ URL::route('home.index') }}}">Discard</a>
            <input class="btn btn-add" type="submit" value="Add">
        </div>
    </form>

    @if ($errors->any())
        <div class="errors">
            <h4>Errors in form</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-error">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
