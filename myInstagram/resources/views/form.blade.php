<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<style type="text/css">
	</style>
</head>
<body>
	<h2>Create Instagram</h2>
	<div id="display">
	<form method="POST" action="display" enctype="multipart/form-data">
		<div>
			@csrf
			<input type="text" name="title">
			<input type="text" name="description">
			<input type="file" name="photo">
			<button type="submit"> add </button>
		</div>
	</form>
</div>
</body>
</html>
