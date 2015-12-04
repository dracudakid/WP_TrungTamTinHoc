<?php
/*
Plugin Name: DangKy
Plugin URI: http://loihayydep.esy.es/wordpress/
Description: Dang Ky Khoa Hoc Tin Hoc - Ngoai Ngu
Version: 1.0
Author: TranDinhVi
Author URI: http://loihayydep.esy.es/wordpress/
*/

function html_form_code22() {
	echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
	echo '<p>';
	echo 'Nhập tên của bạn (bắt buộc)<br/>';
	echo '<input style="border:1px #000 solid" type="text" name="cf-name" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) : '' ) . '" size="40" />';
	echo '</p>';
	echo '<p>';
	echo 'Nhập địa chỉa email (bắt buộc)<br/>';
	echo '<input type="email" name="cf-email" value="' . ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) : '' ) . '" size="40" />';
	echo '</p>';
	echo '<p>';
	echo 'Tiêu Ð? (B?t Bu?c) <br/>';
	echo '<input type="text" name="cf-subject" pattern="[a-zA-Z ]+" value="' . ( isset( $_POST["cf-subject"] ) ? esc_attr( $_POST["cf-subject"] ) : '' ) . '" size="40" />';
	echo '</p>';
	echo '<p>';
	echo 'Thông tin dang ký c?a b?n (B?t Bu?c) <br/>';
	echo '<textarea rows="10" cols="35" name="cf-message">' . ( isset( $_POST["cf-message"] ) ? esc_attr( $_POST["cf-message"] ) : '' ) . '</textarea>';
	echo '</p>';
	echo '<p><input type="submit" name="cf-submitted" value="Ðang Ký"></p>';
	echo '</form>';
}

function deliver_mail22() {

	// if the submit button is clicked, send the email
	if ( isset( $_POST['cf-submitted'] ) ) {

		// sanitize form values
		$name    = sanitize_text_field( $_POST["cf-name"] );
		$email   = sanitize_email( $_POST["cf-email"] );
		$subject = sanitize_text_field( $_POST["cf-subject"] );
		$message = esc_textarea( $_POST["cf-message"] );

		// get the blog administrator's email address
		$to = get_option( 'admin_email' );

		$headers = "From: $name <$email>" . "\r\n";

		// If email has been process for sending, display a success message
		if ( wp_mail( $to, $subject, $message, $headers ) ) {
			echo '<div>';
			echo '<p>Xin chúc m?ng!!! B?n dã dang ký thành công khóa h?c c?a chúng tôi.</p>';
			echo '</div>';
		} else {
			echo 'Xin l?i,Thông tin b?n nh?p chua chính xác,Vui lòng nh?p l?i!!!';
		}
	}
}

function cf_shortcode22() {
	ob_start();
	deliver_mail22();
	html_form_code22();

	return ob_get_clean();
}

add_shortcode( 'sitepoint_contact_form', 'cf_shortcode22' );

?>
