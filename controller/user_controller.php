<?php
    $data = array();
    flexible_function($data);
    function flexible_function(&$data){
        $function = "viewUser";
        if(isset($_GET['action'])){
            $function = $_GET['action'];
        }
        $function($data);
    }
    function viewUser(&$data){
        $data['viewUser'] = m_view();
        $data['page'] = 'user/viewUser';
    }
    //add
    function add_form(&$data){
        $data['page'] = 'user/addUser';
    }
    function add_users(&$data){
        $data_add = m_add($_POST);
        if($data_add){
            $action = 'viewUser';
        }else{
            $action = 'add_form';
        }
        header("Location: index2.php?action=$action");
    }
    function delete(&$data){
        $data_delete = m_delete($_POST);
        if($data_delete){
            $action = 'viewUser';
        }else{
            $action = 'delete';
        }
        header("Location: index2.php?action=$action");
    }
    function editUser(&$data){
        $data['page'] = "user/editUser";
        $data['data_user'] = get_data_user();
    }
    function edit_users(&$data){
        $data = m_edit_user($_POST);
        if($data){
            $action = 'viewUser';
        }else{
            $action = 'editUser';
        }
        header("Location: index2.php?action=$action");
    }
?>