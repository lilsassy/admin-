<?php
    include "conn.php";

    session_start();


    if(isset($_POST['loginTourist'])){
		$email = $_POST['email'];
		$password = $_POST['pass'];

		$check = mysqli_query($conn, "SELECT * FROM tourist_account WHERE email = '$email' AND password = '$password'");
		$val_row_emailPass = mysqli_num_rows($check);

		if($val_row_emailPass >= 1){
			$_SESSION['email'] = $email;

			?>
				<script>
					alert("Login Successful!");
					window.location.href="index.php";
				</script>
			<?php
		} else {
			?>
				<script>
					alert("Incorrect email and password!");
					window.location.href="login.php";
				</script>
			<?php
		}
	}

?>