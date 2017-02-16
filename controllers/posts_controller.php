<?php
  class PostsController {
    public function index() {
      $posts = Post::all();
      require_once('views/posts/index.php');
    }

    public function index_by_content() {
      if (!isset($_GET['content']))
        return call('pages', 'error');

      $posts = Post::find_by_content($_GET['content']);
      require_once('views/posts/index.php');
    }
      public function crear(){
      $posts = Post::nuevo($_GET['author'],$_GET['content']);
      require_once('views/posts/index.php');
      }
public function show() {
      if (!isset($_GET['id']))
        return call('pages', 'error');

      $post = Post::find($_GET['id']);
      require_once('views/posts/show.php');
    }
  }
?>
