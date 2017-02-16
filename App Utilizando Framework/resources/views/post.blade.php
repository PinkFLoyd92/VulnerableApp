<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="container col-xs-12">
                <label>Todos los posts    (#   /   Autor  /  Contenido)</label>
                <br>
                @foreach($data as $d)
                    <label>Post {{ $d->id }}                   /                  {{ $d->author }}                   /                  {{ $d->content }}</label>
                    <br>
                @endforeach
                <p>Buscar posts por autor</p>
                <form role="form" action="/postCont" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="data">
                        <button type="submit" class="btn btn-primary" id="buscar">Buscar</button>
                </form>
            </div>
            <div class="container col-xs-12">
                <label>Crear Post</label>
                <form role="form" action="/postCrear" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="autor" placeholder="Autor"><br>
                    <textarea name="contenido" placeholder="contenido"></textarea>
                    <button type="submit" class="btn btn-primary" id="buscar">Crear</button>
                </form>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
