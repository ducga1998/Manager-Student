<?php

class Model_qlsv
{
    static $_inst;
    public $conn;
    function __construct()
    {
        $this->_init();
    }
    function _init()
    {
        //setup connect

        $this->connect();
    }

function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $nameDB="projectbig";

    // Create connection
    $this->conn = mysqli_connect($servername, $username, $password,$nameDB);

    // Check connection
}
function CoutRow(){
    $sql="SELECT COUNT(id)FROM infouser";
    $result = $this->conn->query($sql);
    $row=array();
     $row = $result->fetch_assoc();
     
     return $row;

}
 public function GetInfoUser()
{
     $sql="SELECT UserName, PassWord, Name,BirthDay,Country,id,Current_id,Mail,Avatar,Number FROM infouser";
    $result = $this->conn->query($sql);
   $rows=array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
   
}
public function GetInfoUserById($id)
{
     $sql="SELECT UserName, PassWord, Name,BirthDay,Country,id,Current_id,Mail,Avatar,Number FROM infouser where id=$id";
    $result = $this->conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $rows = $row;
    }
    return $rows;
   
}
public function GetInfoPost()
{
    $sql="SELECT id, UserName, Title,Content,view,view,DateUp,Category,Ava FROM post";
    $result = $this->conn->query($sql);
    $rows=array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
   
    return $rows;
}
public function check_login($user_name , $pass){
    
            $sql = "SELECT id,UserName, PassWord,Current_id,Name FROM infouser where UserName='$user_name' and PassWord='$pass'" ;
            $result = $this-> conn->query($sql);
    
    
            /*if (mysqli_num_rows($result) > 0) {
                // output data of each row
                if($row = mysqli_fetch_assoc($result)) {
                   return true;
                }
            } else {
                return false;
            }*/
           if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
    
            mysqli_close($this->conn);
    
    
           }
           else{
            return false;
            mysqli_close($this->conn);
    
           }
           
        }
        /* end check login */
        function addAccoutIntoPageAdmin($user_name,$gmail,$pass,$number,$country){
            $idS=$this->CoutRow();
            $id=$idS["COUNT(id)"]+1;
            $sql = "INSERT INTO infouser (UserName,Mail,PassWord,NumberPhone,Country,Current_id,id) VALUES ('$user_name', '$gmail', '$pass','$number','$country',1,$id)";
          
            mysqli_query($this->conn, $sql);
        }
            



static function inst(){
    if(!self::$_inst){
        self::$_inst=new self();
        return self::$_inst;
    }
}


}

?>