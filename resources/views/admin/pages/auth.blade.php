<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau de board | Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card login_card">
            <div class="card-header text-center border-0">
                <img src="{{ asset('logo.png') }}" alt="Az Legal" class="rounded-circle">
                <h2 class="text__semibold">Connexion</h2>
            </div>
            <div class="card-body">
                @if ($message = Session::get('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
                <form action="{{ route('auth.login') }}" method="POST">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="email">Adresse email :</label>
                        <input type="email" name="email" id="email" placeholder="Ex: exemple@gmail.com" class="form-control @error('email') is-invalid @enderror" required><br>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-1">
                        <label for="password">Mot de passe :</label>
                        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn bg__primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>