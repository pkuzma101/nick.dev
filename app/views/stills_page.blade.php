@extends('layouts.master')

@section('content')

<div id="stills-page">
<section id="stills-intro-section">
	<div class="container-fluid" id="stills-title-container">
		<h1> - stills - </h1>
	</div>		
</section>
<section id="stills-pic-section">
	<div class="container-fluid" id="thumbnail-container">
		<div class="row-fluid">
			<div class="col-xs-6 col-sm-3">
				<a class="popup-link" href="stills_folder/jet_blue.jpg">
					<img src="stills_folder/jet_blue.jpg" class="stills-thumbnail center-block">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<a class="popup-link" href="stills_folder/jet_black.jpg">
					<img src="stills_folder/jet_black.jpg" class="stills-thumbnail center-block">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<a class="popup-link" href="stills_folder/Cheetah_Speedform.jpg">
					<img src="stills_folder/Cheetah_Speedform.jpg" class="stills-thumbnail center-block">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<a class="popup-link" href="stills_folder/mountain_dew_billboard.jpg">
					<img src="stills_folder/mountain_dew_billboard.jpg" class="stills-thumbnail center-block">
				</a>
			</div>
		</div>
	</div>
</section>
</div>

@stop