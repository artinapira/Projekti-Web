<?php
include __DIR__ . '/../repository/blogsRepository.php';
include __DIR__ . '/../models/blogs.php';

if(isset($_POST['blogBtn'])) {
    if(empty($_POST['title']) || empty($_POST['content'])){
        echo "Fill all fields!";
    }else {
        // Check if the user is logged in
        if (isset($_SESSION['user_id'])) {
            $user_name = $_SESSION['username'];

            $title = $_POST['title'];
            $content = $_POST['content'];
            $date = date('Y-m-d H:i:s');
            $editDate = null; 
            $id = rand(100, 999);
            $baseUrl = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
            $baseUrl .= "://" . $_SERVER['HTTP_HOST'];
            $targetDir = $baseUrl . "/Projekti-Web/uploads/";

            $targetFile = $targetDir . basename($_FILES["image"]["name"]);

            $check = getimagesize($_FILES["image"]["tmp_name"]);

            if ($check !== false) {

                echo "Target Dir: " . $targetDir . "<br>";
                echo "Target File: " . $targetFile . "<br>";

                // Move the uploaded file to the target directory
                move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
                
                // Create Blog object
                $blog = new Blog($id, $user_name, $title, $content, $targetFile, $date, $editDate);
        
                // Insert Blog
                $blogsRepository = new BlogRepository();
                $blogsRepository->insertBlog($blog);
                $_SESSION['id'] = $blog->getId();
                header("location: ../Blogs.php");
            } else {
                echo "<script>alert('Invalid image file.'); </script>";
            }

        } 
    }
}
?>