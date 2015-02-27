@extends('layouts.master')

@section('content')

<div id="stills-page">
	<section id="bxslide-section">
		<div class="container-fluid" id="slide-container">
			<ul class="bxslider">
				<li><img src="/stills_folder/Cheetah_Speedform2.jpg" class="slide-image center-block"></li>
				<li><img src="/stills_folder/jet_black2.jpg" class="slide-image center-block"></li>
				<li><img src="/stills_folder/Rott_High_0022.jpg" class="slide-image center-block"></li>
				<li><img src="/stills_folder/jet_blue2.jpg" class="slide-image center-block"></li>
				<li><img src="/stills_folder/samples_honeybee2.jpg" class="slide-image center-block"></li>
				<li><img src="/stills_folder/jumpball_bubble2.jpg" class="slide-image center-block"></li>
				<li><img src="/stills_folder/jumpball_feather.jpg" class="slide-image center-block"></li>
			</ul>
		</div>
			<div id="bx-pager">
				<a data-slide-index="0" href""><img src="/stills_folder/Cheetah_Speedform2.jpg" class="slide-thumbnail"></a>
				<a data-slide-index="1" href""><img src="/stills_folder/jet_black2.jpg" class="slide-thumbnail"></a>
				<a data-slide-index="2" href""><img src="/stills_folder/Rott_High_0022.jpg" class="slide-thumbnail"></a>
				<a data-slide-index="3" href""><img src="/stills_folder/jet_blue2.jpg" class="slide-thumbnail"></a>
				<a data-slide-index="4" href""><img src="/stills_folder/samples_honeybee2.jpg" class="slide-thumbnail"></a>
				<a data-slide-index="5" href""><img src="/stills_folder/jumpball_bubble2.jpg" class="slide-thumbnail"></a>
				<a data-slide-index="6" href""><img src="/stills_folder/jumpball_feather.jpg" class="slide-thumbnail"></a>
			</div>
		
	</section>
</div>

@stop