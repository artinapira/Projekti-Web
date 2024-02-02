<?php

include_once __DIR__ . '/../database/databaseConnection.php';

class BlogRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertBlog($blog) {
        $conn = $this->connection;

        $id = $blog->getId();
        $user_name = $blog->getUserName();
        $title = $blog->getTitle();
        $content = $blog->getContent();
        $image = $blog->getImage();

        $sql = "INSERT INTO blog (id,user_name,title,content,image,date) VALUES(?,?,?,?,?,NOW())";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$user_name,$title,$content,$image]);

        echo "<script> alert('Blog has been inserted successfuly!'); </script>";
    }

    function getAllBlogs(){
        $conn = $this->connection;

        $sql = "SELECT * FROM blog";

        $statement = $conn->query($sql);
        $blogs = $statement->fetchAll();

        return $blogs;
    }

    function getBlogById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM blog WHERE id='$id'";

        $statement = $conn->query($sql);
        $blog = $statement->fetch();


        return $blog;
    }

    function updateBlog($id,$user_name,$title,$content,$image,$date,$editDate){
        $conn = $this->connection;


        $sql = "UPDATE blog SET title=?, content=?, image=?, date=?, editDate=? WHERE id=? AND user_name=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$title,$content,$image,$date,$editDate,$id,$user_name]);

        echo "<script>alert('update was successful'); </script>";
    } 

    function deleteBlog($id){
        $conn = $this->connection;

        $sql = "DELETE FROM blog WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
    }
}
?>