<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <ol class="breadcrumb">
      <li><a href="/php_mvc_blog">Home</a></li>
      <li><a href="?controller=posts&action=index">Posts</a></li>
    </ol>
    <div class="container-fluid">
      <form action="/php_mvc_blog/">
	<div class="row">
	  <div class="col-md-3">
	    <div class="input-group">
	      <input name="controller" value="posts" type="hidden">
	      <input name="action" value="index_by_content" type="hidden">
	      <span class="input-group-btn">
		<button class="btn btn-default" type="submit">Buscar!</button>
	      </span>
	      <input type="text" class="form-control" placeholder="Buscar..." aria-describedby="sizing-addon1" name="content">
	    </div>
	  </div><!-- /.row -->
	</div>
      </form>
    </div>
    <br/>
    <div class="container-fluid">
      <form action="/php_mvc_blog/">
	<div class="row">
	  <div class="col-md-3">
	    <input name="controller" value="posts" type="hidden">
	    <input name="action" value="crear" type="hidden">
	    <div class="input-group">
	      <input type="text" class="form-control" placeholder="Nombre del Autor" aria-describedby="basic-addon1" name="author">
	    </div>
	    <div class="input-group">
	      <input name="content" type="text" class="form-control" aria-describedby="basic-addon2" placeholder="Contenido">
	    </div>
	    <br/>
	    <button type="submit" class="btn btn-default">Crear</button>
	  </div>
	</div>
      </form>
    </div>

    <?php
     require_once('routes.php');
    ?>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" >
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js" ></script>
  </body>
  <html>
