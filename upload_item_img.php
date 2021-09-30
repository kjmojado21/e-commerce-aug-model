<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="picture" id="">
    <button type="submit" name="upload">upload</button>
</form>

<?php
if(isset($_POST['upload'])){
    include 'functions/functions.php';
    $picture = $_FILES['picture']['name'];
    $id = $_GET['item_id'];
    $dir = "uploads/";
    $file_dir = $dir.basename($picture);

    $validate = upload_item_img($picture,$id);

    if($validate == 1){
        move_uploaded_file($_FILES['picture']['tmp_name'],$file_dir);
        header('location:admin_add_item.php');
    }else{
        echo "sayop";
    }

}


?>