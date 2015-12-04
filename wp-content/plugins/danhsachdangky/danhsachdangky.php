<?php
/**
 * Plugin Name: Danh sách đăng ký khóa học
 * Author: Nguyễn Văn Tấn Đạt
 */
// khoi tao doi tuong
$mysqli = new mysqli ( "localhost", "wordpress", "123456", "wordpress" );
// thiet lap font chu tieng viet
$mysqli->set_charset ( "utf8" );
// hien thi thong bao loi neu co
if (mysqli_connect_errno ()) {
	echo "khong the ket noi toi database." . mysqli_connect_errno ();
	exit ();
}

add_shortcode("danhsachdangky","create_danhsach");
function create_danhsach(){
	global $mysqli;
	$query = "select * from db_dangkykhoahoc";
	$result = $mysqli->query($query);
	?>
	<table>
	<tr>
		<th>Họ tên</th>
		<th>Giới tính</th>
		<th>Ngày sinh</th>
		<th>Email</th>
		<th>Số điện thoại</th>
		<th>Khóa học</th>
		<th>Thời gian</th>
		<th>Ngày</th>
	</tr>
	<?php
	while($array = mysqli_fetch_assoc($result)){
		$name = $array['name'];
		$sex = $array['sex'];
		$birthday = $array['birthday'];
		$email = $array['email'];
		$phone = $array['phone'];
		$course = $array['course'];
		$time = $array['time'];
		$day = $array['day'];
		 ?>
		<tr>
		<?php echo ("<td>".$name."</td>");
		echo ("<td>".$sex."</td>");
		echo ("<td>".$birthday."</td>");
		echo ("<td>".$email."</td>");
		echo ("<td>".$phone."</td>");
		echo ("<td>".$course."</td>");
		echo ("<td>".$time."</td>");
		echo ("<td>".$day."</td>");
		?>
		</tr>
		<?php
	}
	?>
	</table>
	<?php
}
?>