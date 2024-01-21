<?php

use cweb\Member;

if (!empty($_POST["login-btn"])) {
	require_once __DIR__ . '/Model/Member.php';
	$member = new Member();
	$loginResult = $member->loginMember();
}
?>
<HTML>

<HEAD>
	<!--Meta tag-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Boomer-LTDA" />
        <meta name="copyright" content="© 2024 Boomer">
        <meta name="application-name" content="Boomer website" />
        <meta name="twitter:image" content="./media/imagenes/LOGO-OS" />
        <meta name="twitter:creator" content="@Boomer App" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Boomer: product site" />
        <meta name="twitter:description" content=""/>
        <meta property="og:url" content="" />
        <meta property="og:image" content="./media/imagenes/LOGO-OS" />
        <meta property="og:description" content="" />
        <meta property="og:title" content="Boomer: product site" />
        <meta property="og:type" content="article" />
        <meta property="og:type" content="website">
        <!--Meta tag-->
        <title>Boomer: Acceso al Login</title>
         <!--Imagen-->
         <link rel="icon" href="./media/imagenes/LOGO-app.ico">

         <!--Imagen-->
        <!--CSS/index.css-->
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/mobile.css">
        <link rel="stylesheet" media="(max-width: 800px)" href="./css/mobile.css">
        <!--CSS/index.css-->
        <!--Font Awesome-->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
		  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
		<!--Font Awesome-->
		<link href="assets/css/cweb-style.css" type="text/css" rel="stylesheet" />
	    <link href="assets/css/user-registration.css" type="text/css" rel="stylesheet" />
	    <script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>

<BODY>

<div class="cweb-container">
		<div class="sign-up-container">
			<div class="signup-align">
				<form name="login" action="" method="post" onsubmit="return loginValidation()">
					<div class="signup-heading">Acceder</div>
					<?php if (!empty($loginResult)) { ?>
						<div class="error-msg"><?php echo $loginResult; ?></div>
					<?php } ?>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Usuario<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username" id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Contraseña<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password" name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btn" id="login-btn" value="Acceder">
					</div>
				</form>
			</div>
		</div>
	</div>
		<script>
		function loginValidation() {
			var valid = true;
			$("#username").removeClass("error-field");
			$("#password").removeClass("error-field");

			var UserName = $("#username").val();
			var Password = $('#login-password').val();

			$("#username-info").html("").hide();

			if (UserName.trim() == "") {
				$("#username-info").html("requerido.").css("color", "#ee0000").show();
				$("#username").addClass("error-field");
				valid = false;
			}
			if (Password.trim() == "") {
				$("#login-password-info").html("requerido.").css("color", "#ee0000").show();
				$("#login-password").addClass("error-field");
				valid = false;
			}
			if (valid == false) {
				$('.error-field').first().focus();
				valid = false;
			}
			return valid;
		}
	</script>
</BODY>

</HTML>
