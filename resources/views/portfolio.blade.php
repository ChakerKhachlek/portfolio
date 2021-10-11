<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('img/coding.png')}}" type="image/png">
        <title>Chaker Khachlek | Freelancer</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/animate-css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/popup/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/flaticon/flaticon.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
		<link rel="stylesheet" href="{{asset('css/scroll_behaviour.css')}}">
        @livewireStyles
</head>
    <body>
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light primary-nav" id="primary-nav">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" id="logo" href="{{Route::currentRouteName()}}"><img src="{{asset('img/Chaker Khachlek-logos_white.png')}}" height="150" width="150" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">

								<li class="nav-item"><a class="nav-link" href="#aboutme">About</a></li>
								<li class="nav-item"><a class="nav-link" href="#experiences">Experiences</a></li>
								<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
								<li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
								<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
							</ul>
						</div>
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

        <!--================Home Banner Area =================-->
        <section class="home_banner_area" id="home">
           	<div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex">
								<img src="img/206181800_4084473581642965_3157738002039744127_n.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="personal_text">
									<h6>Hello Everybody, i am</h6>
									<h3>Chaker Khachlek</h3>
									<h4>Web Developer</h4>
									<p>“ It's not about what you know. It's about what you can figure out. ”</p>
									<ul class="list basic_info">
										<li><a href="#"><i class="lnr lnr-calendar-full"></i> 31st August, 1999</a></li>
										<li><a href="#"><i class="lnr lnr-phone-handset"></i> +216 24211273</a></li>
										<li><a href="#"><i class="lnr lnr-envelope"></i> chaker_khachlek@outlook.com</a></li>
										<li><a href="#"><i class="lnr lnr-home"></i> Tunis,Tunisia</a></li>
									</ul>
									<ul class="list personal_social">
										<li><a href="https://www.facebook.com/Solari2666"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/ChakerKhachlek"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.linkedin.com/in/chaker-khachlek-4894821a3/"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>

        <!--================End Home Banner Area =================-->

        <!--================Welcome Area =================-->
        <section class="welcome_area p_120" id="aboutme">
        	<div class="container" >
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_text">
        					<h4>About Myself</h4>
        					<p>Hmm , i love what they call tech.</p>
        					<div class="row">

        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-book"></i>
        								<h4>11</h4>
        								<p>Total Projects</p>
        							</div>
        						</div>

        					</div>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="tools_expert">
        					<div class="skill_main">
                                         @foreach($technologies as $technology)
                                <div class="skill_item">
                                    <h4>{{$technology->name}} <span class="counter">{{$technology->pourcentage}}</span>%</h4>
                                    <div class="progress_br">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="{{$technology->pourcentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Welcome Area =================-->

        <!--================My Tabs Area =================-->
        <section class="mytabs_area p_120" id="experiences" >
        	<div class="container" >
        		<div class="tabs_inner">

					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" >
							<div>
                                <h3 class="h3 " style="color : white" >My Experiences</h3>
                            <ul class="list">
                                @foreach($experiences as $experience)
                                    <li >
                                        <span></span>
                                        <div class="media">
                                            <div class="d-flex">
                                                <p class="pr-5">{{$experience->start_date}} to {{$experience->end_date}}</p>
                                            </div>
                                            <div class="media-body">
                                                <h4>{{$experience->enterprise}}</h4>
                                                <p>{{$experience->title}} <br/> {{$experience->address}}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
							</ul>
                                <h3 class="h3 " style="color : white" >My Educations</h3>
                                <ul class="list">
                                    @foreach($educations as $experience)
                                        <li >
                                            <span></span>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <p class="pr-5">{{$experience->start_date}} to {{$experience->end_date}}</p>
                                                </div>
                                                <div class="media-body">
                                                    <h4>{{$experience->enterprise}}</h4>
                                                    <p>{{$experience->title}} <br/> {{$experience->address}}</p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
						</div>
                    </div>
        		</div>
        	</div>
        </section>
        <!--================End My Tabs Area =================-->

        <!--================Feature Area =================-->
        <section class="feature_area p_120" id="services">
        	<div class="container">
        		<div class="main_title">
        			<h2>Services</h2>

        		</div>
        		<div class="feature_inner row text-center">
        			<div class="col-lg-6 col-md-6">
        				<div class="feature_item align-text-center">
        					<img src="{{asset('img\analyse.png')}}" height="80" width="80">
        					<h4 style="padding-top: 20px">Requirement Analysis</h4>
        				</div>
        			</div>
        			<div class="col-lg-6 col-md-6">
        				<div class="feature_item align-items-center">
							<img src="{{asset('img\coding.png')}}" height="80" width="80">
        					<h4 style="padding-top: 20px">Implementation</h4></div>
        			</div>
        			<div class="col-lg-6 col-md-6">
        				<div class="feature_item">
        					<img src="{{asset('img\rocket.png')}}" height="80" width="80">
        					<h4 style="padding-top: 20px">Deployement</h4>
        				</div>
        			</div>
					<div class="col-lg-6 col-md-6">
        				<div class="feature_item">
        					<img src="{{asset('img\web-maintenance.png')}}" height="80" width="80">
        					<h4 style="padding-top: 20px">Maintenance</h4>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->

        <!--================Home Gallery Area =================-->
        <section class="home_gallery_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Our Latest Featured Projects</h2>
        			<p>Who are in extremely love with eco friendly system.</p>
        		</div>
        		<div class="isotope_fillter">
        			<ul class="gallery_filter list">
                        <li class="active" data-filter="*"><a href="#">All</a></li>
                        @foreach($categories as $category)
						<li data-filter=".{{$category->name}}"><a href="#">{{$category->name}}</a></li>
                        @endforeach
					</ul>
        		</div>
        	</div>
        	<div class="container">
        		<div class="gallery_f_inner row imageGallery1">
                    @foreach($categories as $category)
        			@foreach($category->projects as $project)

        			<div class="col-lg-4 col-md-4 col-sm-6 {{$project->category->name}}">
        				<div class="h_gallery_item" >
        					<div class="g_img_item ">
        						<img class="img-fluid image-responsive " src="{{$project->banner_image_link}}"  alt="">

        						<a class="light"  data-toggle="modal" data-target="#portfolioModal{{$project->id}}" href="#portfolioModal{{$project->id}}"><img src="{{asset('img/gallery/icon.png')}}" alt=""></a>
                                <div wire:ignore.self class="modal fade " id="portfolioModal{{$project->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="portfolioModal{{$project->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h1 class="modal-title w-100" style="color : black">{{$project->title}}</h1>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>

                                            </div>
                                            <div class="align-items-center d-flex">
                                                <div class="modal-body pt-3 ">
                                                         <h4 style="color:black">Stack  </h4><p>{{$project->stack}}</p>
                                                        <h4 style="color:black">Description  </h4><p>{{$project->description}}</p>

                                                        <h4 style="color:black">Snips  </h4>
                                                        @foreach($project->screenshots as $screenshot)
                                                        <div class="row justify-content-center pt-4">
                                                        <div class="col-md-10 text-center">

                                                            <img src="{{$screenshot->link}}" style="width:100%;border: 5px solid #766dff ; border-radius: 30px;" class="image-fluid" >

                                                        </div>
                                                        </div>
                                                            @endforeach

                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>

                            </div>
        					<div class="g_item_text">
        						<h4>{{$project->title}}</h4>

        					</div>
        				</div>
        			</div>


                        @endforeach
                    @endforeach
        		</div>
        		<div class="more_btn d-none">
        			<a class="main_btn" href="#">Load More Items</a>
        		</div>
        	</div>
        </section>
        <!--================End Home Gallery Area =================-->

        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120" id="contact">
        	<div class="container">
        		<div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Tunis, Tunisia</h6>
                                <p>Kram</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">+216 24211273</a></h6>
                                <p>Mon to Sun 6 pm to 10 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">chaker_khachlek@outlook.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                   @livewire('contact-component')
                </div>

        	</div>
        </section>
        <!--================End Testimonials Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container text-center">
        		<div class="row footer_inner">
        			<div class="col-lg-2">
					</div>
        			<div class="col-lg-8">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h4 style="color:white">Copyright © www.chakerkhachlek.tech 2021</h4>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="https://www.facebook.com/Solari2666"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/ChakerKhachlek"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/in/chaker-khachlek-4894821a3/"><i class="fa fa-linkedin"></i></a></li>

        					</ul>
        				</aside>
        			</div>
					<div class="col-lg-2">
					</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->




        @livewireScripts

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/stellar.js')}}"></script>
        <script src="{{asset('vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('vendors/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('vendors/popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('vendors/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('vendors/counter-up/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('js/mail-script.js')}}"></script>
        <script src="{{asset('js/theme.js')}}"></script>

		<script>
			$(document).on("scroll", function(){

if ($(document).scrollTop() > 80){
	$(".primary-nav").addClass("shrink");

} else {
	$(".primary-nav").removeClass("shrink");
}

});
//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

            // this is not firing too
            window.livewire.on('added', response => {
                $('[href="#home"]').tab('show');
            });

            window.livewire.on('added', response => {
                $('[href="#profile"]').tab('show');
            });
		</script>
    </body>
</html>
