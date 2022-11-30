<?php
    $target_dir = "images/";
    $target_file = $target_dir.basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(isset($_POST['post'])){
        $name = $_POST['name'];
        $price= $_POST['price'];
        if(empty($_GET['categories'])){
        } else {
            foreach ($_POST['categories'] as $category) {
                array_push($categories, $category);
            }
        }
        
        $check = getimagesize($_FILES["image"]['tmp_name']);
        if($check !== false){
            echo "File is an image -" . $check["mime"] . '.';
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

    }
?>