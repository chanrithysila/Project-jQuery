<?php
function m_view()
{
    include "conection.php";
    $query = mysqli_query($connection, "SELECT * FROM users");
    $rows = [];
    if ($query && mysqli_num_rows($query)) {
        foreach ($query as $record) {
            $rows[] = $record;
        }
    }
    return $rows;
}
// function m_add()
// {
//     if (isset($_POST['add'])) {
//         include "conection.php";
//         $userName = $_POST['userName'];
//         $gender = $_POST['gender'];
//         $age = $_POST['age'];
//         $height = $_POST['height'];
//         $role = $_POST['role'];
//         $email = $_POST['email'];
//         $address = $_POST['address'];
//         $description = $_POST['description'];
//         $clubID = $_POST['club'];
//         $query = mysqli_query($connection, "INSERT INTO users(username, gender, age,height, role, email, address, description,clubID)
//         VALUES ('$userName','$gender','$age','$height','$role','$email','$address','$description','$clubID)");
//         var_dump($query);
//         die;
//         return $query;
//     }
// }
function m_add()
{
    if (isset($_POST['add'])) {
        include "conection.php";
        $username = $_POST['userName'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $height = $_POST['height'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $club = $_POST['club'];
        $description = $_POST['description'];
        $query = "INSERT INTO users(username, gender,age,height,role,email, address, clubID ,description)
        VALUES ('$username','$gender','$age','$height','$role','$email','$address','$club','$description')";
        $result = mysqli_query($connection, $query);
        // var_dump($query);
        // die;
        return $result;
    }
}
function m_delete()
{
    include 'conection.php';
    $id = $_GET['id'];
    $query = mysqli_query($connection, "DELETE FROM users WHERE userID='$id'");
    return $query;
}
function get_data_user()
{
    $id = $_GET['id'];
    include "conection.php";
    $query = mysqli_query($connection, "SELECT * FROM users WHERE userID = '$id'");
    return $query;
}
function m_edit_user()
{
    if (isset($_POST['editUser'])) {
        $id = $_GET['id'];
        $userName = $_POST['userName'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $height = $_POST['height'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $clubId = $_POST['club'];
        $description = $_POST['description'];
        include "conection.php";
        $query = mysqli_query($connection, "UPDATE users SET 
        username=' $userName',gender='$gender',age='$age', height='$height',role='$role', email='$email', address='$address',description='$description',clubID='$clubId' WHERE userID = '$id'");
        return $query;
    }
}
