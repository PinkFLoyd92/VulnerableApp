<?php
 class Post {
   // we define 3 attributes
   // they are public so that we can access them using $post->author directly
   public $id;
   public $author;
   public $content;

   public function __construct($id, $author, $content) {
     $this->id      = $id;
     $this->author  = $author;
     $this->content = $content;
   }

   public static function all() {
     $list = [];
     $db = Db::getInstance();
     $req = $db->query('SELECT * FROM posts');

     // we create a list of Post objects from the database results
     foreach($req->fetchAll() as $post) {
       $list[] = new Post($post['id'], $post['author'], $post['content']);
     }

     return $list;
   }

   public static function find($id) {
     $db = Db::getInstance();

     $id = intval($id);
     $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
     $req->execute(array('id' => $id));
     $post = $req->fetch();
     echo($post);
     return new Post($post['id'], $post['author'], $post['content']);
   }


   public static function find_by_content($content) {
       try{
     $db = Db::getInstance();
     $list = [];
     $query = "SELECT * FROM posts WHERE content = '{$content}'";
     // the query was prepared, now we replace :id with our actual $id value
     $db->beginTransaction();
     $req = $db->query($query);
     foreach($req->fetchAll() as $post) {
       $list[] = new Post($post['id'], $post['author'], $post['content']);
     }
     return $list;
       }catch (PDOException $e){
       echo $query;
       echo $e->getMessage();
     }

   }
   public static function nuevo($author, $content){
     try{
     $db = Db::getInstance();
     $req = $db->prepare('insert into posts (author, content) values (:author, :content)');
     $req->execute(array('author' => $author, 'content'=> $content));
     return Post::all();
       }catch (PDOException $e){
       echo $query;
       echo $e->getMessage();
     }
   }
 }
?>
