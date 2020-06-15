<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{'/display/'.$photo->id}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method("PATCH")
		<input type="" name="title" value="{{$photo->title}}">
		<input type="" name="description" value="{{$photo->description}}">
		<input type="file" name="photo">
		<button type="submit">Update</button>
	</form>

</body>
</html>