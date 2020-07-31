<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/app.css" rel="stylesheet">
    <title>services</title>
</head>
<body>
    
<h1>Welcome on this survey</h1>

<form action="../public/service" method="post">
    <input type="text" name="nameText" autocomplete="off">
    @csrf
    <button>Add service</button>
</form>

<p style="color: red;">@error('nameText') {{$message}} @enderror
</body>
</html>