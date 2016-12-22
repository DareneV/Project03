<?php include "inc/top.inc" ?>

	<?php include "inc/nav.inc" ?>

	<h2>Contact Me</h2>

	<div class="form">

		<form method="post" action="database-write.php">

			<div>
				<label for="firstname">First name: </label>
				<input type="text" name="firstname" id="firstname" required> 
			</div>

			<div>
				<label for="lastname">Last name: </label>
				<input type="text" name="lastname" id="lastname" required> 
			</div>

			<div>
				<label for="email">Email: </label>
				<input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{----}$" required>  <!-- I don't think there should be a retraint to how many characters come after the . and how can you have multiple periods after the @ symbol (since @u.rochester.edu)? -->
			</div>

			<div>
				<label for="phone">Telephone: </label>
				<input type="tel" name="phone" id="phone" required> 
			</div>

			<label for="message">Message: </label> <br>
			<textarea name="message" id="message"></textarea>


			<input type="submit" value="Send">

		</form>		

	<br>
	Or Go <a href="."> Back to the Index</a>

	</div>

</body>
</html>