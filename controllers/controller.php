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
        $data['view'] = student();
        $data['page'] = "test/view";
    }
    function add_form(&$data){
        $data['page']= "test/add";
    }
    
   function add_info(&$data) {
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
?>
