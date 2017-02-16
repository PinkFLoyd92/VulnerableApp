<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <label>Información del post</label>
                @foreach($data as $d)
                    <label>Id:  </label>{!! $d->id !!}<br>
                    <label>Autor:  </label>{!! $d->author !!}<br>
                    <!-- Vulnerable { !!   !! }    Se renderiza como elemento html-->
                    {{-- <label>Contenido:</label>   {!!$d->content !!}<br> --}}
                    <!-- No vulnerable   { {    } }   Se renderiza como string-->
                    <label>Contenido:</label>   {{$d->content}}<br>
                @endforeach
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
