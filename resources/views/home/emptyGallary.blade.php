@extends('home.mainLayout')
@section('content')


<div>
	
	<h5 class="mb-1">Sorry the Gallary is Empty!!
	@if(Session::get('user') != 'guest')
	<a href="{{route('image.upload')}}"> Upload Photo</a> and come back next time.</h5> 
	@endif
	

</div>


@endsection

@section('title')
	Home Page
@endsection