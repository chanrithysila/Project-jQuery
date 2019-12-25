<?php
function m_get_data(){
    $query = "SELECT * FROM club";
    include 'conection.php';
    $result = mysqli_query($connection,$query);
    if($result && mysqli_num_rows($result) > 0){
        foreach ($result as $row){
            $rows[] = $row;
        }
    }
    return $rows;
}

function m_add($data){
    include 'conection.php';
    if(isset($_POST['create'])){
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $clubName = $_POST['clubName'];
        $description = $_POST['description'];
        $query = mysqli_query($connection, "INSERT INTO club(username,gender,age,email,clubName,description)
         VALUES ('$username','$gender','$age','$email','$clubName','$description')");
         return $query;
    }
}

function ms_delete()
{
    include 'conection.php';
    $id = $_GET['id'];
    $query = mysqli_query($connection, "DELETE FROM club WHERE clubID='$id'");
    return $query;
}
function m_edit_club(){
    $id = $_GET['id'];
    include "conection.php";
    $query = mysqli_query($connection,"SELECT * FROM club WHERE clubID = '$id'");
    return $query;
}
function m_update(){
    include 'conection.php';
    $id = $_GET['id'];
    if(isset($_POST['edit'])){
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $clubName = $_POST['clubName'];
        $description = $_POST['description'];
        $query = mysqli_query($connection, "UPDATE club SET username='$username',gender='$gender',age='$age',email='$email',clubName='$clubName',description='$description' WHERE clubID='$id'");
        return $query;
        header("Location: index.php?action=view");
    }
}
function m_detail(){
    $id = $_GET['id'];
    include "conection.php";
    $data = mysqli_query($connection,"SELECT * FROM users WHERE userID = '$id'");

    return $data;
}

