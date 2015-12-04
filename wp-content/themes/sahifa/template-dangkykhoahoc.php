<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng ký khóa học</title>
<?php
	/*
	Plugin Name: Dang Ky khoa hoc
	Plugin URI: http://ultimatemember.com/
	Description: Đăng kí khóa học
	Version: 1.0
	Author: Ngoc
	*/						
?>
<script type="text/javascript">
	function validateForm(){
		var name=document.forms["reg"]["name"].value;
		var sex=document.forms["reg"]["sex"].value;
		var ngay=document.forms["reg"]["ngay"].value;
		var thang=document.forms["reg"]["thang"].value;
		var nam=document.forms["reg"]["nam"].value;
		var email=document.forms["reg"]["email"].value;
		var nhaplaiemail=document.forms["reg"]["nhaplaiemail"].value;
		var phone=document.forms["reg"]["phone"].value;
		var course=document.forms["reg"]["course"].value;
		var time=document.forms["reg"]["time"].value;
		var day=document.forms["reg"]["day"].value;
		if ((name==null || name=="") && (sex==null || sex=="") && (ngay==null || ngay=="") && (thang==null || thang=="") && (nam==null || nam=="") && (email==null || email=="") && (nhaplaiemail==null || nhaplaiemail=="") && (phone==null || phone=="") && (course==null || course=="") && (time==null || time=="") && (day=null || day=="")){
			alert(" Tất cả thông tin phải đầy đủ, không được bỏ trống ");
			return false;
		}
		if (name==null || name==""){
			alert("Phải điền họ và tên");
			return false;
		}
		if (sex==null || sex==""){
			alert("Phải chọn giới tính");
			return false;
		}
		if (ngay==null || ngay=="" || thang==null || thang=="" || nam==null || nam==""){
			alert("Phải chọn ngày tháng năm sinh");
			return false;
		}
		if (email==null || email=="" || nhaplaiemail==null || nhaplaiemai==""){
			alert("Bạn phải nhập email");
			return false;
		}
		if (email!= nhaplaiemail){
			alert("Email không trùng khớp");
			return false;
		}
		if (sdt==null || sdt==""){
			alert("Bạn phải nhập số điện thoại");
			return false;
		}
		if (course==null || course==""){
			alert("Bạn phải chọn khóa học");
			return false;
		}
		if (time==null || time==""){
			alert("Bạn phải chọn thời gian học");
			return false;
		}
		if (day==null || day==""){
			alert("Bạn phải chọn ngày học");
			return false;
		}
}
</script>
</head>

<body>
        <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
        <table width="960px" border="0" align="center" cellpadding="2" cellspacing="0" style="margin:0 auto; padding:10px">
        	<tr>
                <td colspan="2"><div align="left">
                  <?php
                $remarks=$_GET['remarks'];
                if ($remarks==null and $remarks=="")
                {
                echo ' Đăng ký tại đây ';
                }
                if ($remarks=='success')
                {
                //echo ' Bạn đã đăng ký thành công !  ';
                }
                ?>
                </div></td>
        </tr>
        <tr>
            <td width="95"><div align="right">Họ và tên:</div></td>
            <td width="171"><input type="text" name="name" /><span style="color:red">(*)</span></td>
        </tr>
        <tr>
            <td><div align="right">Giới tính:</div></td>
            <td>Nam: <input type="radio" name="sex" checked="checked" value="Nam" />&nbsp;&nbsp;&nbsp;&nbsp;
            	Nữ <input type="radio" name="sex" value="Nữ" />
            </td>
        </tr>
        <tr>
            <td><div align="right">Ngày sinh:</div></td>
            <td>
                    <select name="ngay">
                        <option value="0" selected="1">Ngày</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    
                    <select name="thang">
                        <option value="0" selected="1">Tháng</option><option value="1">Tháng 1</option><option value="2">Tháng 2</option><option value="3">Tháng 3</option><option value="4">Tháng 4</option><option value="5">Tháng 5</option><option value="6">Tháng 6</option><option value="7">Tháng 7</option><option value="8">Tháng 8</option><option value="9">Tháng 9</option><option value="10">Tháng 10</option><option value="11">Tháng 11</option><option value="12">Tháng 12</option>
                    </select>
                    
                    <select name="nam">
                    <option value="0" selected="1">Năm</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select><span style="color:red">(*)</span></td>
        </tr>
        <tr>
            <td><div align="right">Email:</div></td>
            <td><input type="email" name="email" /><span style="color:red">(*)</span></td>
        </tr>
        <tr>
            <td><div align="right">Nhập lại email:</div></td>
            <td><input type="email" name="nhaplaiemail" /><span style="color:red">(*)</span></td>
        </tr>
        <tr>
            <td><div align="right">SĐT:</div></td>
            <td><input type="text" name="phone" /><span style="color:red">(*)</span></td>
        </tr>
        <tr>
            <td><div align="right">Chọn khóa học:</div></td>
            <td><select name="course" >
            	<option value="tinhocvanphong" selected="tinhocvanphong">Tin học văn phòng</option>
            	<option value="web" selected="web">Web</option>
            	<option value="java" selected="java">Java</option>
            	<option value=".net" selected=".net">.Net</option>
            	<option value="php" selected="php">PHP</option>
            	<option value="tienganh" selected="tienganh">Tiếng Anh</option>
            	<option value="tiengnhat" selected="tiengnhat">Tiếng Nhật</option>
                </select>
           <span style="color:red">(*)</span> </td>
        </tr>
        <tr>
            <td><div align="right">Thời gian học:</div></td>
            <td><select name="time" >
            	<option value="ca1A" selected="ca1A">Ca 1A (7h00 - 9h00)</option>
            	<option value="ca1B" selected="ca1B">Ca 1B (9h00 - 11h00)</option>
            	<option value="ca2A" selected="ca2A">Ca 2A (13h00-15h00)</option>
            	<option value="ca2B" selected="ca2B">Ca 2B (15h00 - 17h00)</option>
            	<option value="ca3" selected="ca3">Ca 3 (19h00 - 21h00)</option>
                </select>
           <span style="color:red">(*)</span> </td>
        </tr>
        <tr>
        	<td><div align="right">Ngày học trong tuần: </div></td>
            <td><select name="day">
            	<option value="24" selected="24">2-4</option>
            	<option value="35" selected="35">3-5</option>
            	<option value="68" selected="68">6-CN</option>
            		
            	</select><span style="color:red">(*)</span>
        </tr>
        <tr>
            <td><div align="right"></div></td>
            <td><input name="submit" type="submit" value="Đăng Ký " /></td>
        </tr>
        </table>
        </form>	
</body>
</html>