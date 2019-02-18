<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{route('myPostForm1')}}" method="post">
	@csrf
	Name <input type="text" name="HoTen"><br>
	Password <input type="password" name="MatKhau"><br>
	<input type="submit" name="submit_button">
</form>

</body>
</html>
