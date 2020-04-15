<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'sanjeev');
class database
{
	function __construct(){
		$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
		$this->db=$con;
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	}
//Data Insertion Function
	public function insert($table,$name,$email,$phone,$services,$ip){
		$result=mysqli_query($this->db,"insert into ".$table."(name,email,phone,services,ip) values('$name','$email','$phone','$services','$ip')");
		if ($result) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
//Data Get All Data Function
	public function get_all($table){
		$result=mysqli_query($this->db,"select * from ".$table);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		}else{
			return FALSE;
		}
	}

	public function get_single($table,$field,$where){
		$result = mysqli_query($this->db,"select * from ".$table." where ".$field."='$where'");
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			return $row;
		}else{
			return FALSE;
		}
	}

//Data update Function
	public function update($table,$id,$name,$email,$phone,$services){
		$result=mysqli_query($this->db,"update  ".$table." set name='$name',email='$email',phone='$phone',services='$services' where id = $id");
		if ($result) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
//Data Delete Function
	public function delete($table,$id){
		$deleterecord=mysqli_query($this->db,"delete from ".$table." where id=$id");
		if ($result) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
}
?>