<?php
    $data = array();
    flexible_function($data);
    function flexible_function(&$data){
        $function = "view";
        if(isset($_GET['action'])){
            $function = $_GET['action'];
        }
        $function($data);
    }
    function view(&$data){
        $data['view'] = view_student();
        $data['page'] = "test/view";
    }
    function add_form(&$data){
        $data['page']= "test/add";
    }
    
   function add_student(&$data) {
       $result = m_add($_POST);
       if($result){
           $action = "view";
       }else{
           $action = "add_form";
       }
       header("Location: index.php?action=$action");
   }

   function detail(&$data) {
       $data['view'] = m_detail();
       $data['page'] = "test/detail";
   }
   function delete(&$data) {
       $data['view']= m_delete();
       $data['page'] = "test/delete";
   }

   function edit(&$data) {
        $data['view'] = m_edit();
        $data['page'] = "test/edit";
   }

   function edit_form(&$data) {
    $result = update_data($_POST);
    if($result){
        $action = "view";
    }else{
        $action = "edit";
    }
    header("Location: index.php?action=$action");
}

function profile(&$data) {
    $data['view'] = m_profile();
    $data['page'] = "test/profile";
}

function change_profile(&$data) {
    $profile = update_profile($_POST);
    $id = $_GET['id'];
    if($profile) {
        $action = "detail&id";
    }else{
        $action = "profile";
    }
    header("Location: index.php?action=$action");
    }

?>
