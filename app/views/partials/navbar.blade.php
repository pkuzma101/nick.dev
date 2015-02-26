<nav class="navbar navbar-default">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
    	</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse nick-navbar" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
	            <li><a href="/">home</a></li>
	            <li><a href="{{ action('HomeController@showVideo') }}">video</a></li>
	            <li><a href="{{ action('HomeController@showStills') }}">stills</a></li>
	            <li><a href="{{ action('HomeController@showAbout') }}">me</a></li>
	            <li><a href="{{ action('HomeController@showContact') }}">contact</a></li>
	            <li><a href="">blog</a></li>
	            <li>
	                @if (Auth::check())
	                <a href="/posts/create">New<span class="sr-only">(current)</span></a>
	                @endif
	            </li>
	        </ul>
	    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>