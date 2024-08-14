<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>
</head>
<body>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1>Tableau de bord</h1>
                            <a href="{{ route('logout') }}" class="btn btn-danger">Se déconnecter</a>
                        </div>
                        <h3>Bienvenue, {{ Auth::user()->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</body>
</html>