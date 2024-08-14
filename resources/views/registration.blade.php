<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=-edge">
    <title>Authentification</title>

</head>

<body>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center mb-4">Inscription</h1>
    
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        {!! implode('', $errors->all('<li>:message</li>')) !!}
                                    </ul>
                                </div>
                            @endif
    
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @endif
    
                            <form action="{{ route('registration.process') }}" method="POST">
                                @csrf
    
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nom d'utilisateur</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Saisir le nom ici ..." required>
                                </div>
    
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Saisir l'e-mail ici ..." required>
                                </div>
    
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Saisir le mot de passe ici ..." required>
                                </div>
    
                                <div class="mb-3">
                                    <label for="passwordConfirm" class="form-label">Confirmer mot de passe</label>
                                    <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" placeholder="Confirmer le mot de passe ici ..." required>
                                </div>
    
                                <div class="mb-3">
                                    <a href="{{ route('login') }}">Se connecter</a>
                                </div>
    
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-block">Soumettre</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    

</body>

</htnl