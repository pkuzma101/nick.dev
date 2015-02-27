@extends('layouts.master')

@section('content')

<div id="title-page">
	<section id="title-section">
		<div class="still-background">
			<div class="title-box">
				<p id="title-box-name"> - nick janecki - </p>
				<p id="title-box-tagline">cgi artist and animator</p>
			</div>
		</div> <!-- still-background -->
	</section>
	<section id="featured-stills-section">
		<div class="title-box">
			<p id="featured-stills-headline">featured stills</p>
		</div>
		<div class="row-fluid">
			<div class="col-md-6" id="jet-blue">
				<img src="stills_folder/jet_blue.jpg" class="featured-square-row1 center-block">
			</div>
			<div class="col-md-6" id="scorpio_001">
				<img src="stills_folder/Scorpio_001.jpg" class="featured-square-row1 center-block">
			</div>
		</div>
		<div class="row-fluid">
			<div class="col-md-4">
				<img src="stills_folder/FCB_Monster.jpg" class="featured-square-row2 center-block">
			</div>
			<div class="col-md-4">
				<img src="stills_folder/samples_honeybee.jpg" class="featured-square-row2 center-block">
			</div>
			<div class="col-md-4">
				<img src="stills_folder/samples_seaworld.jpg" class="featured-square-row2 center-block">
			</div>
		</div>
		<div class="row-fluid">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<span class="button-row">
					<div class="boxed-button center-block">
						<p class="button-text">
							{{ HTML::link("/stills", "view all stills") }}
						</p>
					</div>
				</span>
			</div>
			<div class="col-md-4"></div>
		</div>
	</section>
	<section id="testimonials-section">

	</section>
</div>

@stop