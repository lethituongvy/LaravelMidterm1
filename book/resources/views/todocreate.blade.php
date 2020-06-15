<!DOCTYPE html>
<html>
<head>
	<title>Book</title>
</head>
<body>
	<h1>Create Book</h1>
	
	<form method="POST" action="/todos">
		 @csrf
		<input type="title" name="title"><br> <br>
		<input type="description" name="description"><br>
		<input type="submit">
	</form>
</body>
</html>