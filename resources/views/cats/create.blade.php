<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Cat</title>
</head>

<body>
    <h1>Add New Cat</h1>
    <form action="{{ route('cats.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="">
        <br>
        <label for="breed">Breed</label>
        <input type="text" name="breed" id="breed" value="">
        <br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age" value="">
        <br>
        <label for="color">Color</label>
        <input type="text" name="color" id="color" value="">
        <br>
        <button type="submit">Add</button>
    </form>
    </form>
</body>

</html>
