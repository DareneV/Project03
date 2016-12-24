<?php include "inc/top.inc" ?>

	<?php include "inc/nav.inc" ?>

<section>
	<h2>Contact Me</h2>

	<div class="form">

		<script type="text/javascript" src="js/validate.js"></script>
		<form method="post" action="database-read.php" onsubmit="return(validate());" name="myForm">

			<div>
				<label for="firstname">First Name: </label><br>
				<input type="text" name="firstname" id="firstname" required> 
			</div>

			<div>
				<label for="lastname">Last Name: </label><br>
				<input type="text" name="lastname" id="lastname" required> 
			</div>

			<div>
				<label for="email">Email: </label><br>
				<input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required> 

			</div>

			<div>
				<label for="phone">Telephone: </label><br>
				<input type="tel" name="phone" id="phone" required> 
			</div>

			<label for="message">Message: </label> <br>
			<textarea name="message" id="message"></textarea><br>


			<input type="submit" value="Send">

		</form>		

	<br>
	<div class="back">
	Or Go: <a href="index.php"> Back to the Main Page</a>
	</div>

	</div>
</section>

<?php include "inc/bottom.inc" ?>

</body>
</html>