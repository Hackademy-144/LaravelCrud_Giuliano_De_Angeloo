<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title class="roboto-bold-italic">fastbook</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <x-nav />




    <div class="container">
        <div class="row col-12 justify-content-center">
            <h1 class= "mt-5 text-center roboto-black fsh1">fastbook</h1>
        </div>
    </div>

    <div class="min-vh-100">
        {{$slot}}
            
    </div>
    <x-foot />
</body>

</html>
