<br/>
<br/>
<div class="container">
  <h2>CONTENIDO EN BASE DE DATOS</h2>
  <p>Lista de contenidos</p>
  <br/>
  <table class="table">
    <thead>
      <tr>
        <th>Autor</th>
        <th>Contenido</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($posts as $post) { ?>
	<tr>
          <td><?php echo $post->author; ?></td>
          <td><?php echo $post->content; ?></td>
	</tr>
      <?php } ?>
    </tbody>
  </table>
</div>
