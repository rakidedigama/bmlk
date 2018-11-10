<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>@yield('pageTitle') {{-- App Name --}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- 
	//////////////////////////////////////////////////////

	Social Sharing 
	DESIGNED & DEVELOPED by Byte Zappers
		
	Website: 		http://bytezappers.com/
	Email: 			info@bytezappers.com
	Facebook: 		https://www.facebook.com/bytezappers

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:500|Roboto:300,400|Source+Sans+Pro:700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ url('/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ url('/fonts/icomoon/style.css') }}">

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/check-box.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ url('/css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ url('/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ url('/css/owl.theme.default.min.css') }}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ url('/css/flexslider.css') }}">
	<!-- Scroll -->
	<link rel="stylesheet" type="text/css" href="{{ url('/css/scroll.css') }}">
	<!-- Chosen js -->
	<link rel="stylesheet" type="text/css" href="{{ url('/css/chosen.css') }}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ url('/css/style.css') }}">
	<!-- iao Alert  -->
	<link rel="stylesheet" href="{{ url('/css/iao-alert.min.css') }}">
	@yield('header')
	<!-- Modernizr JS -->
	<script src="{{ url('/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	    <div class="fh5co-loader"></div>
    
	    <div id="page" class="dashboard-page-lay">
	        @include('layouts.nav', ['active' => 'dashboard'])

	    <div id="fh5co-counter" class="fh5co-counters fh5co-bg-section dashboard-page" style="background-image: url({{ url('/images/Background.jpg') }});">
	        <div class="container">
	            <div class="row">	                
	                @yield('content')
	            </div>
	        </div>
<div class="footer small-footer" style="background-image: url('{{ url('/images/word-bg.jpg') }}');">
		<footer>
			<div class="container">
				<div class="row">
					<p class="copyright-line">© 2018-2019 bookmate - All Rights Are Reserved</p>
				</div>
			</div>

			<div class="modal fade" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">ADD NEW BOOK</h4>
			      </div>
			      <div class="modal-body">
			            @include('layouts.newbookpopup', ['active' => 'add_item'])
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</footer>
	</div>
	        
	    </div>
	    <div class="clearfix"></div>
	    
	<div class="clearfix"></div>
	    </div>

	

		<!-- BEGIN MESSAGE -->
        <div id="message" style="display: none;">
            <div style="padding: 5px;" >
                <div id="inner-message" class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <span></span>
                </div>
            </div>
        </div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
		</div>
		{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
		<!-- jQuery -->
		<script src="{{ url('/js/jquery.min.js') }}"></script>
		<!-- jQuery Easing -->
		<script src="{{ url('/js/jquery.easing.1.3.js') }}"></script>
		<!-- Bootstrap -->
		<script src="{{ url('/js/bootstrap.min.js') }}"></script>
		<!-- Waypoints -->
		<script src="{{ url('/js/jquery.waypoints.min.js') }}"></script>
		<!-- Stellar Parallax -->
		<script src="{{ url('/js/jquery.stellar.min.js') }}"></script>
		<!-- Carousel -->
		<script src="{{ url('/js/owl.carousel.min.js') }}"></script>
		<!-- Flexslider -->
		<script src="{{ url('/js/jquery.flexslider-min.js') }}"></script>
		<!-- countTo -->
		<script src="{{ url('/js/jquery.countTo.js') }}"></script>
		<!-- Magnific Popup -->
		<script src="{{ url('/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ url('/js/magnific-popup-options.js') }}"></script>
		<!-- Scroll -->
		<script type="text/javascript" src="{{ url('/js/scroll.js') }}"></script>
		<!-- Image-upload -->
		<script type="text/javascript" src="{{ url('/js/upload-image.js') }}"></script>
		<!-- Chosen js -->
		<script type="text/javascript" src="{{ url('/js/chosen/init.js') }}"></script>
		<script type="text/javascript" src="{{ url('/js/chosen/chosen.js') }}"></script>
		<!--<script type="text/javascript" src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>-->
		<script type="text/javascript" src="{{ url('/js/masonry.pkgd.min.js') }}"></script>
		<!-- iao Alert -->
		<script type="text/javascript" src="{{ url('/js/iao-alert.jquery.min.js') }}"></script>
		<!-- Main -->
		<script type="text/javascript" src="{{ url('/js/main.js') }}"></script>
		<!-- Custom JS -->
		<script type="text/javascript" src="{{ url('/js/custom.js') }}"></script>


		@yield('footer')

		<script type="text/javascript">
			$(document).ready(function(){
				$('#user_image_form').submit(function(e) {
			        e.preventDefault();
			        changeImage('{{ route('change-user-image') }}');
		        });
		        function checkNotify(){
		        	$.ajax({
			        	url:'{{ route('checknoti') }}',
			        	dataType:'JSON',
			        	cache:true,
			        	success:function(data){
			        		if( data['receivedRequests'] == 0 ) 
			        			$('#recRequests').children('span').text('');
			        		else 
			        			$('#recRequests').children('span').text(data['receivedRequests'])
			        	},
			        	error:function(){
			        		$('#recRequests').children('span').text('');
			        	}
			        });
		        }
		        checkNotify();
		        setInterval(checkNotify,10000);
			})
		</script>

	</body>
</html>
