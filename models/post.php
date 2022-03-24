<?php
require_once('config/DBConn.php');
class Post extends DB{

    private $title;
    private $sub_title;
    private $img;
    private $body;
    private $user_name;
    private $created_at;

    public function __construct(){
        parent::__construct();
    }

    public function createPost($post, $img, $date){
        print_r($post);
        
        $this->user_name = $_POST['user_name'];
        $this->title = $_POST['blog_ttl'];
        $this->sub_title = $_POST['blog_subttl'];
        $this->img = $img;
        $this->body = $_POST['blog_body'];

        $this->created_at = $date;
        
        $uQuery = "SELECT user_id FROM users WHERE username = '".$this->user_name."'";
        $stmt = $this->conn->prepare($uQuery);
        $stmt->execute();        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_id = $row['user_id'];
        
        
        // $this->img = $this->storeImag($img);
        // print_r($this->img);
        
        $query = "INSERT INTO posts VALUES (null, '".$user_id."', '".$this->title."', '".$this->sub_title."', '".$this->img."', '".$this->body."', '".$this->created_at."')";
        $this->conn->exec($query);
        // $stmt = $this->conn->prepare($query);
        // $stmt->execute();
        // if (!$stmt->execute()) {
        //     echo "Error: " . $stmt . "<br>" . print_r($this->conn->errorInfo());;
        // }
    }

    public function storeImag($image)
    {
        // $target_dir   = "../assets/imgs/uploads/";
        // $target_dir = $target_dir . basename($_FILES['blog_img']['name']); 
        // $this->img = ($_FILES['blog_img']['name']); 

        // move_uploaded_file($_FILES['blog_img']['tmp_name'], $target_dir);

        // return $new_file_name;

        $img_dir   = "../assets/imgs/uploads/";
        $path      = $blog_img['name'];
        $temp_name = $blog_img['tmp_name'];

        $target_file = $img_dir.basename($path);
        $img_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // png

        $new_file_name=time().".".$img_file_type;

        move_uploaded_file($temp_name, $img_dir.$new_file_name);

        return $new_file_name;
    }
}