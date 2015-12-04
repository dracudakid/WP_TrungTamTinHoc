<?php
session_start();
include('connection.php'); // kết nối database
$err="";
	
		$name=addslashes($_POST['name']);
		$sex=addslashes($_POST['sex']);
		$birthday=addslashes($_POST['nam'].'-'.$_POST['thang'].'-'.$_POST['ngay']);
		$email=addslashes($_POST['email']);
		$repeatemail = addslashes($_POST['nhaplaiemail']);
		$phone=addslashes($_POST['phone']);
		$patternPhone10="/[\d]{10}/";
		$patternPhone11="/[\d]{11}/";
		$course=addslashes($_POST['course']);
		$time=addslashes($_POST['time']);
		$day=addslashes($_POST['day']);
		if($name=="" || $birthday=="" || $email=="" || $repeatemail == "" || $phone == "" ){
			$err="Vui lòng nhập đầy đủ những thông tin cần thiết!!!";
			header("location: ../../../dang-ky-khoa-hoc-2/?err=$err");	
		}
		else if(date("Y")-addslashes($_POST['nam'])<17){
				$err = "Độ tuổi không hợp lệ để đăng ký khóa học!!!";
				header("location: ../../../dang-ky-khoa-hoc-2/?err=$err");	
		}
			else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$err="Email không hợp lệ!!!";
				header("location: ../../../dang-ky-khoa-hoc-2/?err=$err");	
			}
				else if( $email <> $repeatemail ){
						$err="Email không trùng khớp!!!";
						header("location: ../../../dang-ky-khoa-hoc-2/?err=$err");	
				}
					else if((preg_match($patternPhone10,$phone,$matches) == 0) ||(preg_match($patternPhone11,$phone,$matches) == 0)){
						$err="Bạn nhập số điện thoại không hợp lệ!!!";
						header("location: ../../../dang-ky-khoa-hoc-2/?err=$err");	
					}
					else{
						mysql_query("INSERT INTO db_dangkykhoahoc(name, sex, birthday, email, phone, course, time, day)VALUES('$name', '$sex', '$birthday', '$email', '$phone', '$course', '$time', '$day')");
						header("location: ../../../dang-ky-khoa-hoc-2/?remarks=success");
						mysql_close($con);
					}
?>