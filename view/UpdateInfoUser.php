<?php 
$formData=$_REQUEST["formData"];   
$arrays=array("duc"=>"chun");
$arrays=serialize($arrays);
$array=unserialize($arrays);
var_dump($array);
/* idUpdate=6&idUser=324324&MailUser=324324&NameUser=432432&
NumberPhoneUser=4324234&birthDay=32432432&GrantUser=Admin&CountryUser=432432432432 */
/* include "../model/manager_user.php";
Model_qlsv::inst()->UpdateInfoUser($id); */

?>