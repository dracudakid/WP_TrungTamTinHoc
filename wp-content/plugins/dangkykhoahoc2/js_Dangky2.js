// JavaScript Document
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
		if (email==null || email==""){
			alert("Bạn phải nhập email");
			return false;
		}
		if(nhaplaiemail==null || nhaplaiemail==""){
			alert("Bạn phải nhập lại email");
			return false;
		}
		if (email!= nhaplaiemail){
			alert("Email không trùng khớp");
			return false;
		}
		if (phone==null || phone==""){
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