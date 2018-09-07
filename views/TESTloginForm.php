<?PHP
/** ===========================================================================================
 *  LOGIN FORM
 * ============================================================================================
 */?>
		<div class="loginBox">
			<img src="test-code/loginForm/user.png" class="user">
			<h2>Log In Here</h2>
			<?php echo isset($msg)?$msg:''; ?>
			<form action="index.php" method="POST">
				<p>Email</p>
				<br>
				<span>
					<?php echo isset($errors['id'])?$errors['id']:'';?>
				</span>
				<input type="text" name="id" placeholder="Enter Email" value="<?php echo isset($id)?$id:'';?>">
				<p>Password</p>
				<br>
				<span>
					<?php echo isset($errors['password'])?$errors['password']:'';?>
				</span>
				<input type="password" name="password" placeholder="••••••"  value="<?php echo isset($pass)?$pass:'';?>">
				<input type="submit" name="login" value="Sign In">
				<span> 
					<a href="#">Forget Password</a>
					<a href="index.php?nav=register">Register</a>
				</span>
			</form>
		</div>