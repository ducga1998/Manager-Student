<?php
class Controller_qlsv
{
    static $_inst;
    function __construct()
    {
        if(Controller_login::is_login() == true){
            if( $_SESSION["current_id"]==3)
            {
                $this->xuly_action();
            }
            elseif($_SESSION["current_id"]==1){
                $this->PageUser();
            }
            elseif($_SESSION["current_id"]==2){
                $this->PageEdit();
            }
            
        } 

    }
    function xuly_action()
    {

        $action = ST_Input::inst()->request("action");
        

       
        /*bây h action của nó là một mỡ hỗn độn*/
        $action = base64_decode($action);
        /*giải mã nó*/
        $action = unserialize($action);
        $case = '';
       
        
        if(is_array($action) && $action['current_id']==1){
            $case = $action['action'];
           
        }
        if($case=="delete_sv"){
            $case="delete_sv";
        }
        else
        {
            $case=ST_Input::inst()->request("action");
        }
        echo $case;
        
        switch($case){
            case "add_sv":
                isset($_POST["id"])?$idNew=$_POST["id"]:1000;
                isset($_POST["NumberPhone"])?$NumberPhone=$_POST["NumberPhone"]:1000;
                isset($_POST["birthDay"])?$birthDay=$_POST["birthDay"]:1000;
                isset($_POST["FirstName"])?$email=$_POST["FirstName"]:1000;
                isset($_POST["LastName"])?$LastNameNew=$_POST["LastName"]:1000;
                $nameFile= ST_Input::inst()->GetFile();

                $model_addStudent = new Model_qlsv();
                /*$id,$email,$lastname,$avatar,$NumberPhone,$birthday*/
                $model_addStudent->add_sv($idNew,$email,$LastNameNew,$nameFile,$NumberPhone,$birthDay);
               header('Location: ../index.php');
                break;
                 
            case "update_sv":

        isset($_POST["idUpdate"])?$idUpdate=$_POST["idUpdate"]:1000;
        isset($_POST["EmailNew"])?$EmailNew=$_POST["EmailNew"]:1000;
        isset($_POST["NameNew"])?$NameNew=$_POST["NameNew"]:1000;
          
        isset($_POST["NumberPhoneUpdate"])?$NumberPhoneUpdate=$_POST["NumberPhoneUpdate"]:1000;
        isset($_POST["birthDay"])?$birthDay=$_POST["birthDay"]:1000;
     $nameFile= ST_Input::inst()->GetFile();
       
       
        $model_update = new Model_qlsv();
                 /*id,$email,$lastname,$avatar,$NumberPhone,$birthday*/
        $model_update->update_sv($idUpdate,$EmailNew,$NameNew,$nameFile,$NumberPhoneUpdate,$birthDay);
                header('Location: ../index.php');
                
                break;

            case "delete_sv":
            
            var_dump($action);
            isset($action['user_id'])?$id_delete=$action['user_id']:$id_delete=13;
            $model_qlsv = new Model_qlsv();
            $model_qlsv->delete_sv($id_delete);
               header('Location: ./index.php');           
                break;
                
        }

        $this->load_view_qlsv();
    }
    public function PageUser()
    {
        # code...
        $model_qlsv=new Model_qlsv();
       /*  isset( $_SESSION["NameUser"])?$userName= $_SESSION["NameUser"]:1;
        $RowDetailInfoStudent= $model_qlsv->GetStudentAsGmail($userName); */
        include "./view/PageUser.php";
    }
    public function PageEdit()
    {
        $model_qlsv=new Model_qlsv();
        include "./view/PageEditer.php";
        
    }

    function load_view_qlsv(){

        /* $model_qlsv = new Model_qlsv();
        $current_page=isset($_REQUEST["page"])?$_REQUEST["page"]:1;
        $limit = 10;
        $start = ($current_page - 1) * $limit;
       
        isset($_REQUEST["search"])?$search=$_REQUEST["search"]:$search="";
       
        /*do function get_list_sv đảm nhiệm*/
        /*
        $totalPage=$model_qlsv->handingPaGination();
        $rows = $model_qlsv->get_list_sv($search ,$start,10); */
        
        $id=$_SESSION["idUser"];
        $model_qlsv = new Model_qlsv();
        $rows= $model_qlsv->GetInfoUserById($id);
      



        include "view/PageAdmin.php";
    }

    static function inst()
    {
        if (!self::$_inst) {
            self::$_inst = new self();
        }
        return self::$_inst;
    }
}
Controller_qlsv::inst();








