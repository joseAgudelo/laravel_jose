<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <h1 class="text-center">Participantes</h1>
        <div class="row ">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-success">
            <div class="panel-heading">
            <h2>Lista de participantes</h2> 
            <button type="button" class="btn btn-success pull-right">Crear nuevo</button>
            </div>

            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>E-mail</th>
                            <th>Edad</th>
                            <th>Telefono</th>
                            <th>Ciudad</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($participants as $participant)
                            <tr>
                                <td>{{ $participant->id }}</td>
                                <td>{{ $participant->name }}</td>
                                <td>{{ $participant->email }}</td>
                                <td>{{ $participant->age }}</td>
                                <td>{{ $participant->phone }}</td>
                                <td>{{ $participant->city->name }}</td>
                                <th><a href=""></a></th>
                                <th><button type="button" class="btn btn-primary">Actualizar</button></th>  
                                <th><button type="button" class="btn btn-danger">Eliminar</button>
                                </th>                         
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-md-8 col-md-offset-3">
                {{ $participants->links() }}
                </div>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>
