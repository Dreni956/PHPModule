<?php include("header.php"); ?>

<div class="signup">
		
	<form class="form-signin" action="signupLogic.php" method="post">
		
		<h1 class="h3 mb-3 font-weight-normal">Please Add products</h1>

		<label for="inputEmail" class="sr-only">Id</label>
		<input type="text" id="inputEmail" class="form-control" placeholder="Id" name="name" required autofocus>

		<label for="inputEmail" class="sr-only">Title</label>
		<input type="text" id="inputEmail" class="form-control" placeholder="Title" name="surname" required autofocus>

		<label for="inputEmail" class="sr-only">Description</label>
		<input type="text" id="inputEmail" class="form-control" placeholder="Description" name="username" required autofocus>
		

		<label for="inputEmail" class="sr-only">Quantity</label>
		<input type="email" id="inputEmail" class="form-control" placeholder="Quantity" name="email" required autofocus>

		<label for="inputPassword" class="sr-only">Price</label>
		<input type="text" id="inputPassword" class="form-control" placeholder="Price" name="password" required>

		<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Add product</button>


		<p class="mt-5 mb-3 text-muted">Digital School &copy; 2023</p>
	</form>
</div>

<?php include("footer.php"); ?>