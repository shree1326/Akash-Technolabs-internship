<?php
$conn = mysqli_connect('localhost','root','','db_internship');
if(isset($_POST['submit']))
{
  $id=$_POST['id'];
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $DOB=$_POST['b_date'];
  $email=$_POST['email'];
  $mobile=$_POST['number'];
  $address=$_POST['address'];
  $password=$_POST['pass'];
  $area=$_POST['area'];
  $pincode=$_POST['pincode'];
  $blodgroup=$_POST['blodgroup'];
   $sql="insert into tbl_student (st_id,st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_password,st_area,st_pincode,st_bloodgroup)
         values('$id','$name','$gender','$DOB','$email','$mobile','$address','$password','$area','$pincode','$blodgroup')";
   $result=mysqli_query($conn,$sql);
}
if($sql)
{
	echo "<script> alert('Record Added successfully !!');</script>";
	echo $sql;
}


 ?>