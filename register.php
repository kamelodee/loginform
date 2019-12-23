<?php
require "header.php"
?>


<main class="form-content">
<div class="content">
<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="./includes/signup.php">

		<div class="input-group">
			<input id="name" type="text" name="fullname" placeholder="full Name">
		</div>
		<div class="input-group">
			<input id="email" type="email" name="email" placeholder="E-mail">
		</div>
		<div class="input-group">
			<input id="password" type="password" name="password" placeholder="password">
		</div>
		
		<div class="input-group">
			<button id="buttom"  type="submit" class="btn" name="reg_user"  onclick="myFunction()">Register</button>
		</div>
		<p>
			Already a have acount? <a href="login.php">Sign in</a>
		</p>
    </form>
</div>
</main>

<?php
require "footer.php"
?>