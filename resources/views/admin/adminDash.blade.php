<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des Livres</h1>
            <div class="mb-3">
                <a href="#" class="btn btn-success">Ajouter un Livre</a>
                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
</a>
                        </form>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Couverture</th>
                        <th>Titre</th>
                        <th>Genre</th>
                        <th>Date de Publication</th>
                        <th>Copies Totales</th>
                        <th>Copies Disponibles</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

