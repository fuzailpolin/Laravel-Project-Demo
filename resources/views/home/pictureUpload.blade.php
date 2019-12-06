@extends('home.mainLayout')
@section('content')

<head>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="{{asset('home_asset/css/fileupload.css')}}">
	
</head>

<div class="main_full">
	<div class="container">
		<div class="panel">
			<div class="button_outer">
				<div class="btn_upload">
					<input type="file" id="upload_file" name="picture">
					Upload Image
				</div>
				<div class="processing_bar"></div>
				<div class="success_box"></div>
			</div>
		</div>
		<div class="error_msg"></div>
		<div class="uploaded_file_view" id="uploaded_view">
			<span class="file_remove">X</span>
			
		</div>
		<div class="panel">
			<div class="button3">
				<input type="submit" name="fileSubmit" value="Submit">
			</div>
		</div>
	</div>
</div>

@endsection

@section('title')
	Picture Upload
@endsection