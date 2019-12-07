<!DOCTYPE html>

<html>
	<head>
	</head>
	<body>
		
		<div>
			<form method="post" enctype="multipart/form-data">
				<img src="{{asset('home_asset/images/img_11.jpg')}}" alt="Image" name="tempImage">
				
				<input type="submit" name="rotateLeft" value="rotate Left">
				
				<input type="submit" name="rotateRight" value="rotate Right">
				
				<input type="submit" name="fileSubmit" value="Save">
			</form>
		</div>
		
	</body>
</html>