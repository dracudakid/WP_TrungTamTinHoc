<?php
/*
 Template Name: Login Page
 */
?>
<style>
        body {
                background: #2E8D41;
                font-family: Arial, sans-serif;
                font-size: 14px;
                line-height: 1.5em;
        }
        .login-area {
                background: #FFF;
                margin: 100px auto;
                width: 960px;
                padding: 1em;
                overflow: hidden;
        }
        .note {
                float: left;
                margin-right: 20px;
        }
        .form {
                float: right;
                width: 250px;
                text-align: center;
        }
        label {
                display: block;
        }
        input[type=email], input[type=number], input[type=password], input[type=search], input[type=tel], input[type=text], input[type=url], select, textarea {
                border: 1px solid #DDD;
                -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.07);
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.07);
                background-color: #FFF;
                color: #333;
                -webkit-transition: .05s border-color ease-in-out;
                transition: .05s border-color ease-in-out;
                padding: 5px 10px;
        }
        input[type=submit] {
                        background: #51a818;
                        background-image: -webkit-linear-gradient(top, #51a818, #3d8010);
                        background-image: -moz-linear-gradient(top, #51a818, #3d8010);
                        background-image: -ms-linear-gradient(top, #51a818, #3d8010);
                        background-image: -o-linear-gradient(top, #51a818, #3d8010);
                        background-image: linear-gradient(to bottom, #51a818, #3d8010);
                        -webkit-border-radius: 10px;
                        -moz-border-radius: 10px;
                        border-radius: 10px;
                        font-family: Arial;
                        color: #ffffff;
                        padding: 10px 20px 10px 20px;
                        border: solid #32a840 2px;
                        text-decoration: none;
        }
</style>
<div class="login-area">
        <div class="note">
                <h3>Login</h3>
                <p>Login <a href="<?php bloginfo('url'); ?>/wp-login.php?action=register">Register</a>.</p>
        </div>
        <div class="form">
		<?php
        $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
        if ( $login === "failed" ) {
                echo '<p><strong>ERROR:</strong> Username or password is wrong.</p>';
        } elseif ( $login === "empty" ) {
                echo '<p><strong>ERROR:</strong> Username or password is not null.</p>';
        } elseif ( $login === "false" ) {
                echo '<p><strong>ERROR:</strong> You had logout.</p>';
        }
?>
                <?php
                        $args = array(
                                'redirect'       => site_url( $_SERVER['REQUEST_URI'] ),
                                'form_id'        => 'dangnhap', //Ð? dành vi?t CSS
                                'label_username' => __( 'Usename' ),
                                'label_password' => __( 'Password' ),
                                'label_remember' => __( 'remember' ),
                                'label_log_in'   => __( 'Login' ),
                        );
                        wp_login_form($args);
                ?>
        </div>
</div>