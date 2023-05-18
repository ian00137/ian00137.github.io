<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <div class="flex-center w-100 h-100vh">
        <form class="login mg-1 pd-3 bg-primary shadow flex-column br-4" method="POST" action="">
            @csrf
            <h1 class="mgy-2">Login</h1>
            <input type="text" class="input1 mgy-1 pd-2 br-2 bg-in inner-shadow" placeholder="Username" name='username'>
            <input type="password" class="input1 mgy-1 pd-2 br-2 bg-in inner-shadow" placeholder="Password" name='password'>
            <div class="flex-end mgy-2">
                <button class="button1 pd-2 br-1 bg-second">Login</button>
            </div>
        </form>
    </div>
</body>
</html>