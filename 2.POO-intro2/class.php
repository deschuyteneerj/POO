<?php

class Connection{
    private $db;

    function __construct($host, $dbName, $login, $password){
        try{
            $this->db = new PDO('mysql:host='.$host.'; dbname='.$dbName.'; charset=utf8', $login, $password);
        }catch(Exception $e){
		    die('Error : '.$e->getMessage());
	    }
    }

    static function connect($host, $dbName, $login, $password){
        return new PDO('mysql:host='.$host.'; dbname='.$dbName.'; charset=utf8', $login, $password);
    }
}

class Post{
    private $id_post = null;
    private $title_post;
    private $content_post;

    function __construct($id, $title, $content){
        $this->id_post = $id;
        $this->title_post = $title;
        $this->content_post = $content;
    }

    function addPost(){
        $connect = Connection::connect("localhost", "post", "root", "Password_1");
        $temp = $connect->prepare("INSERT INTO post VALUES (NULL, :post, :content)");
        $temp->bindParam(':post', $this->title_post);
        $temp->bindParam(':content', $this->content_post);
        echo $temp->execute();
    }

    static function removePost($id){
        $connect = Connection::connect("localhost", "post", "root", "Password_1");
        $query = $connect->prepare("DELETE FROM post WHERE id_post = ".$id);
        $query->execute();
    }
    
    static function findAllPost(){
        $allPost= [];
        $connect = Connection::connect("localhost", "post", "root", "Password_1");
        $query = $connect->prepare("SELECT * FROM post");
        $query->execute();
        while($fetch = $query->fetch()){
            $allPost[] = new Post($fetch['id_post'],$fetch['title_post'],$fetch['content_post']);
        }
        return $allPost;
    }

    function getId(){return $this->id_post;}
    function getTitle(){return $this->title_post;}
    function getContent(){return $this->content_post;}
}
?>