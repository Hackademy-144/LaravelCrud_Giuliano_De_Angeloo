<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fastbook</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <x-nav />

    <div class="container">
        <div class="row col-12 justify-content-center">
            <h1 class= "mt-5 text-center">FASTBOOK</h1>

            <div class="col-8 border shadow rounded">
                <form method="POST" action="{{route('register')}}">
                  @csrf
                  <div class="m-3">
                    <label  class="form-label">Nome</label>
                    <input type="text" class="form-control" name='name'>
                </div>

                    <div class="m-3">
                        <label  class="form-label ">Inserisci la tua email</label>
                        <input type="email" class="form-control" name='email'>
                    </div>

                    <div class="m-3">
                        <label  class="form-label">Password</label>
                        <input type="password" class="form-control" name='password'>
                    </div>

                    <div class="m-3">
                      <label  class="form-label">Conferma Password</label>
                      <input type="password" class="form-control" name='password_confirmation'>
                  </div>

                    <button type="submit" class="btn btn-primary m-3">Registrati</button>
                </form>

            </div>
        </div>
    </div>

    <div class="min-vh-100"></div>
    <x-foot />
</body>

</html>
