<?php
$data = array();
    flexible_function($data);
    function flexible_function(&$data){
        $function = 'view';
        if(isset($_GET['action'])){
            $function = $_GET['action'];
        }
        $function($data);
    }
    function view(&$data){
        $data['club_data'] = m_get_data();
       $data['page'] = 'club/view';
    }
    function add(&$data){
        $data['page'] = 'club/add';
    }
    function add_club(&$data){
        $data_add = m_add($_POST);
        if($data_add){
            $action = 'view';
        }else{
            $action = 'add';
        }
        header("Location: index.php?action=$action");
    }
    function detail(&$data){
        $data['club_data'] = m_detail();
        $data['page']='club/detail';
    }
    function delete(&$data){
        $data_delete = ms_delete($_POST);
        if($data_delete){
            $action = 'view';
        }else{
            $action = 'delete';
        }
        header("Location: index.php?action=$action");
    }
    function edit(&$data){
        $data['page'] = 'club/edit';
        $data['edit_club'] = m_edit_club($_POST);
    }
    function data_edit(&$data){
        $result = m_update($_POST);  
        if($result){
            $action = 'view';
        }else{
            $action = 'edit';
        }
        header("Location: index.php?action=$action");
    }
?>