<form action="{{route('updaloadMyFile')}}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="file" name="myFile">
	<input type="submit">
</form>