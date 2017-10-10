<?php 
class Controller_Registration{

    public function __construct()
    {
      $this->ViewRegistration();
    }
    static $_inst;


    public function ViewRegistration()

    {
        if(isset($_REQUEST["actionBtn"]))
        {

                      
          if($_REQUEST["actionBtn"]=="registration")
          {
              header("location:../view/RegistrationPage.php");
          }
         
       

        }
        if(isset($_REQUEST["usernameDK"]))
        {
            $useName=$_REQUEST["usernameDK"]; 
            $emailDK=$_REQUEST["emailDK"];
            $passwordDK=$_REQUEST["passwordDK"];
            $NumberPhoneDK=$_REQUEST["NumberPhoneDK"];
            $CountryDK=$_REQUEST["CountryDK"];
            
            
            
            Model_qlsv::inst()->addAccoutIntoPageAdmin($useName,$emailDK,$passwordDK,$NumberPhoneDK,$CountryDK);
          
            
            
            
        }
        # code...
        // nếu có dữ liêu trả về từ form thì kiểm tra xem có ko nm nếu có thi khởi tao dữ liệu
        // đưa thông tin thằng đó vào database
    }
    static function inst(){
        if(!self::$_inst)
        {
            self::$_inst=new self();
            return self::$_inst;
        }
    }

}
Controller_Registration::inst();



?>