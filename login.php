
<?php
require "header.php"
?>

<main class="form-content">
    <div class="content">
<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="./includes/login.inc.php">

		<div class="input-group">
			<input type="email" name="email" placeholder="E-mail" >
		</div>
		<div class="input-group">
			<input type="password" name="password" placeholder="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a acount? <a href="register.php">Sign up</a>
		</p>
	</form>
    </div>
</main>


<?php
require "footer.php"
?>