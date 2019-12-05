@extends('home.mainLayout')
@section('content')
	<head>
		<style>
			.container{
				display: grid;
				grid-template-columns: repeat(6, 1fr);
				grid-gap: 1rem;
			}
			.tile img{
				width: 100%;
				height: 100%;
				object-fit: cover;
			}
			.tile:nth-child(1){
				grid-column: span 4;
				grid-row: span 2;
			}

			.tile:nth-child(2),
			.tile:nth-child(3){
				grid-column: span 2;
			}

			.tile:nth-child(4),
			.tile:nth-child(5){
				grid-column: span 3;
			}
			.tile:nth-child(6){
				grid-column: span 2;
				grid-row: span 2;
			}
			.tile:nth-child(7){
				grid-column: span 4;
				grid-row: span 2;
			}
			.tile:nth-child(8){
				grid-column: span 3;
			}
			.tile:nth-child(9){
				grid-column: span 3;
			}
			.tile:nth-child(10){
				grid-column: span 2;
			}
			.tile:nth-child(11){
				grid-column: span 4;
			}
			@media screen and (max-width: 650px){
				.container{
					display: block;
				}
				.tile{
					margin-bottom: 1rem;
				}
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="tile">
				<img src="{{asset('home_asset/images/nature_small_1.jpg')}}">
			</div>
			<div class="tile">
				<img src="{{asset('home_asset/images/nature_small_2.jpg')}}">
			</div>
			<div class="tile">
				<img src="{{asset('home_asset/images/nature_small_3.jpg')}}">
			</div>
			<div class="tile">
				<img src="{{asset('home_asset/images/nature_small_4.jpg')}}">
			</div>
			<div class="tile">
				<img src="{{asset('home_asset/images/nature_small_5.jpg')}}">
			</div>
			<div class="tile">
				<img src="{{asset('home_asset/images/nature_small_6.jpg')}}">
			</div>
			<div class="tile">
				<img src="{{asset('home_asset/images/nature_small_7.jpg')}}">
			</div>
			<div class="tile">
				<img src="{{asset('home_asset/images/nature_small_8.jpg')}}">
			</div>
			<div class="tile">
				<img src="{{asset('home_asset/images/nature_small_9.jpg')}}">
			</div>
		</div>
	</body>
@endsection

@section('title')
	Mosaic view
@endsection