
<!-- This calls the header files and uses them on the page. Can be used across all pages without the need to add the header -->
<?php
$cards = [];


	include('header.php');
	include('news__card__info.php');
	include ('db__connection.php');



$conn = OpenCon();


?>


<body>

	<!--___-___-->
	<!-- Main header -->
	<div class="header__sticky"  >
		<header class="header">
			<div class="header__inner">
				<div class="header_inner_top">
					<a class="netmatters__logo" href="#">
						<img src="assets/f-logo.png" alt="Logo for netmatters company" class="netmatters__logo__img">
					</a>
					<div class="header__phone">
						<i class="fas fa-2x fa-phone-volume">
						</i>
					</div>
					
					<div id="search__hide__990" class="header__inner__search__large">
						<div class="header__inner__search__large__inner">
							<input class="search__bar" placeholder= "Search...">
							</input>
							<div class="search__magnifying__glass" style="cursor: pointer">
								<i id="magiglass" class="fas fa-search fa-2x"></i>
							</div>
						</div>
					</div>
					<div id="menu__hide__990"class="header__button__menu" style="cursor: pointer" onclick="openNav()">&#9776;>

						<div class="header__button__menu__burger">
						</div>

						<div class="header__button__menu__burger">
						</div>

						<div class="header__button__menu__burger">
						</div>


						<div class="header__button__menu__text">
							Menu
						</div>
					</div>
					<div class="header__button__990__wrapper">
						<div class=" header__button__support header__button__large ">
							<i class="fas fa-mouse"></i>
							Support
						</div>
						<div class=" header__button__contact header__button__large ">
							<i class="far fa-paper-plane"></i>
							Contact
						</div> 
						<div class="header__inner__search__large">
							<div class="header__inner__search__large__inner">
								<input class="search__bar" placeholder= "Search...">
								</input>
								<div class="search__magnifying__glass" style="cursor: pointer">
									<i id="magiglass" class="fas fa-search fa-2x"></i>
								</div>
							</div>
						</div>
						<div class="header__button__menu" style="cursor: pointer " onclick="openNav()";>
							
							<div class="header__button__menu__burger">
							</div>

							<div class="header__button__menu__burger">
							</div>

							<div class="header__button__menu__burger">
							</div>


							<div class="header__button__menu__text">
								Menu
							</div>
						</div>
					</div>

							
				</div>
				<!--  -->
				<div class="header__inner__bottom">
					<form class="header__search__box" action="#">
						<input type="text" placeholder="Search..." name="search">
						<i class="fas fa-search search__icon"></i>
					</form>
				</div>
				<!--  -->
			</div>
		</header>
	
		<!--  -->
		<!-- Main Nav -->
		<div class="main__nav">
			<div class="main__nav__inner">
				<div  class="main__nav__inner__button ">
					&nbsp
				</div>
				<div id="main__nav__inner__button__one" class="main__nav__inner__button">
					<div class="main__nav__inner__button__name">
						<i class="fas fa-code"></i>
						<span class="main__nav__inner__button__name__small">
							web
						</span>
						<span class="main__nav__inner__button__name__large">
							design
						</span>
					</div>
					
				</div>
				<div id="main__nav__inner__button__two"class="main__nav__inner__button">
					<div class="main__nav__inner__button__name">
						<i class="fas fa-desktop"></i>
						<span class="main__nav__inner__button__name__small">
							it
						</span>
						<span class="main__nav__inner__button__name__large">
							support
						</span>
					</div>
				</div>
				<div id="main__nav__inner__button__three"class="main__nav__inner__button">
					<div class="main__nav__inner__button__name">
						<i class="fas fa-phone-alt"></i>
						<span class="main__nav__inner__button__name__small">
							telecoms
						</span>
						<span class="main__nav__inner__button__name__large">
							services
						</span>
					</div>
				</div>
				<div id="main__nav__inner__button__four"class="main__nav__inner__button">
					<div class="main__nav__inner__button__name">
						<i class="fas fa-th"></i>
						<span class="main__nav__inner__button__name__small">
							besoke
						</span>
						<span class="main__nav__inner__button__name__large">
							software
						</span>
					</div>
				</div>
				<div id="main__nav__inner__button__five"class="main__nav__inner__button">
					<div class="main__nav__inner__button__name">
						<i class="fas fa-signal fa-lg"></i>
						<span class="main__nav__inner__button__name__small">
							digital
						</span>
						<span class="main__nav__inner__button__name__large">
							marketing
						</span>
					</div>
				</div>
				<div id="main__nav__inner__button__six"class="main__nav__inner__button">
					<div class="main__nav__inner__button__name">
						<i class="fas fa-shield-alt"></i>
						<span class="main__nav__inner__button__name__small">
							cyber
						</span>
						<span class="main__nav__inner__button__name__large">
							security
						</span>
					</div>
				</div>
				<div class="main__nav__inner__button">
					&nbsp
				</div>
			</div>	
		</div>
		<div class="nav__under__bar">
			<div class="nav__under__bar__list__one">
				<div>stylish websites</div>
				-
				<div>ecommerce stores</div>
				-
				<div>branding</div>
				-
				<div>apps</div>
				-
				<div>web hosting</div>
				-
				<div>pay monthly websites</div>
			</div>
			<!--  -->
			<div class="nav__under__bar__list__two">
				<div>stylish websites</div>
				-
				<div>ecommerce stores</div>
				-
				<div>branding</div>
				-
				<div>apps</div>
				-
				<div>web hosting</div>
				-
				<div>pay monthly websites</div>
			</div>
			<!--  -->
			<div class="nav__under__bar__list__three">
				<div>stylish websites</div>
				-
				<div>ecommerce stores</div>
				-
				<div>branding</div>
				-
				<div>apps</div>
				-
				<div>web hosting</div>
				-
				<div>pay monthly websites</div>
			</div>
			<!--  -->
			<div class="nav__under__bar__list__four">
				<div>stylish websites</div>
				-
				<div>ecommerce stores</div>
				-
				<div>branding</div>
				-
				<div>apps</div>
				-
				<div>web hosting</div>
				-
				<div>pay monthly websites</div>
			</div>
			<!--  -->
			<div class="nav__under__bar__list__five">
				<div>stylish websites</div>
				-
				<div>ecommerce stores</div>
				-
				<div>branding</div>
				-
				<div>apps</div>
				-
				<div>web hosting</div>
				-
				<div>pay monthly websites</div>
			</div>
			<!--  -->
			<div class="nav__under__bar__list__six">
				<div>stylish websites</div>
				-
				<div>ecommerce stores</div>
				-
				<div>branding</div>
				-
				<div>apps</div>
				-
				<div>web hosting</div>
				-
				<div>pay monthly websites</div>
			</div>
			<!--  -->
		</div>
	</div>
	<!--  -->
	<!--Side Menu  -->
	<div id="main">
		<div id="mySidenav" class="sidenav">
			<div class="my__side__nav__innner">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			</div>	
		</div>
	</div>
	<!--  -->
	<!-- Slider -->
	<div class="slideshow-container">

		<div class="mySlides fade">
			<!-- <div class="numbertext">1 / 3</div> -->
			<img src="assets\slider__1.jpg" style="width:100%">
			<!-- <div class="text">Caption Text</div> -->
		</div>
		
		<div class="mySlides fade">
			<!-- <div class="numbertext">2 / 3</div> -->
			<img src="assets\slider__2.jpg" style="width:100%">
			<!-- <div class="text">Caption Two</div> -->
		</div>
		
		<div class="mySlides fade">
			<!-- <div class="numbertext">3 / 3</div> -->
			<img src="assets\slider__3.jpg" style="width:100%">
			<!-- <div class="text">Caption Three</div> -->
		</div>
		
		<div style="text-align:center">
			<span onclick="currentSlide(1)" class="dot"></span> 
			<span onclick="currentSlide(2)" class="dot"></span> 
			<span onclick="active" class="dot"></span> 
			</div>
	</div>
	<!--  -->
	<!--  Middle Nav-->
	<div class="container">
		<div class="middle__nav">
			<!-- Middle nav card 1 -->
			<a class="middle__nav__text__style top__cards__750" href="#">
				<div class="middle__nav__card card__hover__blue">
					<div class="middle__nav__card__icon">
						<i class="fas fa-l fa-th"></i>
					</div>
					<!--  -->
					<div class="middle__nav__card__text">
						<h2 class="card__header__font">Bespoke Software</h2>
						<hr class="middle__nav__card__break">
						<p>
							Tailored software
							solutions to improve
							business productivity
							and online profits.
							Our expert team
							will ensure a software
							solution.
						</p>
					</div>
					<div class="middle__nav__read__more">
						Read More
					</div>
				</div>
			</a>
			<!-- Middle nav card 2  -->
			<a class="middle__nav__text__style top__cards__750" href="#">
				<div class="middle__nav__card card__hover__light__blue">
					<div class="middle__nav__card__icon card__color__light__blue">
						<i class="fas fa-desktop fa-2"></i>
					</div>
					<!--  -->
					<div class="middle__nav__card__text">
						<h2 class="card__header__font">
							IT Support
						</h2>
						<hr class="middle__nav__card__break">
						<p>
							Remotely managed IT services
							that is catered to your businesses
							needs, adds value and reduces costs.
						</p>
					</div>
					<div class="middle__nav__read__more card__color__light__blue ">
						Read More
					</div>
				</div>
			</a>
			<!-- Middle nav card 3 -->
			<a class="middle__nav__text__style top__cards__750" href="#">
				<div class="middle__nav__card card__hover__green">
					<div class="middle__nav__card__icon card__color__green">
						<i class="fas fa-signal fa-2x"></i>
					</div>
					<!--  -->
					<div class="middle__nav__card__text">
						<h2 class="card__header__font">
							Digital Marketing
						</h2>
						<hr class="middle__nav__card__break">
						<p>
							Driving brand awareness and ROI
							through creative digital marketing
							campaigns. We review and monitor
							online performances.
						</p>
					</div>
					<div class="middle__nav__read__more card__color__green">
						Read More
					</div>
				</div>
			</a>
			<!-- Middle nav card 4 -->
			<a class="middle__nav__text__style card__wrapper__750" href="#">
				<div class="middle__nav__card card__hover__red">
					<div class="middle__nav__card__icon card__color__red">
						<i class="fas fa-phone-alt fa-2x"></i>
					</div>
					<!--  -->
					<div class="middle__nav__card__text">
						<h2 class="card__header__font">Bespoke Software
						</h2>
						<hr class="middle__nav__card__break">
						<p>
							Stay connected with bespoke
							telecoms solutions when you
							need it most.
						</p>
					</div>
					<div class="middle__nav__read__more card__color__red">
						Read More
					</div>
				</div>
			</a>
			<!-- Middle nav card 5 -->
			<a class="middle__nav__text__style card__wrapper__750" href="#">
				<div class="middle__nav__card card__hover__purple">
					<div class="middle__nav__card__icon card__color__purple">
						<i class="fas fa-code fa-2x"></i>
					</div>
					<!--  -->
					<div class="middle__nav__card__text">
						<h2 class="card__header__font">Web Design
						</h2>
						<hr class="middle__nav__card__break">
						<p>
							User-centric design for businesses
							looking to make a lasting first
							impression.
						</p>
					</div>
					<div class="middle__nav__read__more card__color__purple">
						Read More
					</div>
				</div>
			</a>
			<!-- Middle nav card 6 -->
			<a class="middle__nav__text__style card__wrapper__750" href="#">
				<div class="middle__nav__card card__hover__light__red">
					<div class="middle__nav__card__icon card__color__light__red">
						<i class="fas fa-shield-alt fa-2x"></i>
					</div>
					<!--  -->
					<div class="middle__nav__card__text">
						<h2 class="card__header__font">Cyber Security
						</h2>
						<hr class="middle__nav__card__break">
						<p>
							Ensuring your online business stays
							secure 24/7, 365 days of the year.
					</div>
					<div class="middle__nav__read__more card__color__light__red">
						Read More
					</div>
				</div>
			</a>
			<!-- Middle nav card 7 -->
			<a class="middle__nav__text__style card__wrapper__750" href="#">
				<div class="middle__nav__card card__hover__purple">
					<div class="middle__nav__card__icon card__color__purple">
						<i class="fas fa-graduation-cap fa-2x"></i>
					</div>
					<!--  -->
					<div class="middle__nav__card__text">
						<h2 class="card__header__font">Developer Training</h2>
						<hr class="middle__nav__card__break">
						<p>
							Have you considered a career in web
							development but you aren???t sure where</p>
					</div>
					<div class="middle__nav__read__more card__color__purple">Read More</div>
				</div>
			</a>
			<div class="card__media__750">
				<div class="card__media__750__inner">
					<!-- Middle nav card 4 -->
					<a id="card__750__a" class="middle__nav__text__style" href="#">
						<div   class="middle__nav__card card__hover__red">
							<div class="middle__nav__card__icon card__color__red">
								<i class="fas fa-phone-alt fa-2x"></i>
							</div>
							<!--  -->
							<div class="middle__nav__card__text">
								<h2 class="card__header__font">Bespoke Software
								</h2>
								<hr class="middle__nav__card__break">
								<p>
									Stay connected with bespoke
									telecoms solutions when you
									need it most.
								</p>
							</div>
							<div class="middle__nav__read__more card__color__red">
								Read More
							</div>
						</div>
					</a>
					<!-- Middle nav card 5 -->
					<a class="middle__nav__text__style" href="#">
						<div class="middle__nav__card card__hover__purple">
							<div class="middle__nav__card__icon card__color__purple">
								<i class="fas fa-code fa-2x"></i>
							</div>
							<!--  -->
							<div class="middle__nav__card__text">
								<h2 class="card__header__font">Web Design
								</h2>
								<hr class="middle__nav__card__break">
								<p>
									User-centric design for businesses
									looking to make a lasting first
									impression.
								</p>
							</div>
							<div class="middle__nav__read__more card__color__purple">
								Read More
							</div>
						</div>
					</a>
					<!-- Middle nav card 6 -->
					<a id="card__750__b" class="middle__nav__text__style" href="#">
						<div class="middle__nav__card card__hover__light__red">
							<div class="middle__nav__card__icon card__color__light__red">
								<i class="fas fa-shield-alt fa-2x"></i>
							</div>
							<!--  -->
							<div class="middle__nav__card__text">
								<h2 class="card__header__font">Cyber Security
								</h2>
								<hr class="middle__nav__card__break">
								<p>
									Ensuring your online business stays
									secure 24/7, 365 days of the year.
							</div>
							<div class="middle__nav__read__more card__color__light__red">
								Read More
							</div>
						</div>
					</a>
					<!-- Middle nav card 7 -->
					<a class="middle__nav__text__style" href="#">
						<div class="middle__nav__card card__hover__purple">
							<div class="middle__nav__card__icon card__color__purple">
								<i class="fas fa-graduation-cap fa-2x"></i>
							</div>
							<!--  -->
							<div class="middle__nav__card__text">
								<h2 class="card__header__font">Developer Training</h2>
								<hr class="middle__nav__card__break">
								<p>
									Have you considered a career in web
									development but you aren???t sure where</p>
							</div>
							<div class="middle__nav__read__more card__color__purple">Read More</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!--  -->
	<!-- Deascription Aside -->
	<div class="description__aside">
		<div class="description__aside__inner">
			<h1> Netmatters
			</h1>
			<!-- Need to make bold -->
			<!-- Could use an nth selector but have opted for ID because of time restraints -->
			<p id="bold__paragraph"> Netmatters Ltd is a leading web design, IT support and digital marketing
				agency based in the East of England with offices in Cambridge, Wymondham
				and Great Yarmouth.
			</p>
			<p>
				Founded in 2008, we work with businesses from a variety of industries to
				gain new prospects, nurture existing leads and further grow their sales.
			</p>
			<p>
				We provide cost effective, reliable solutions to a range of services;
				from bespoke cloud-based management systems, workflow and IT solutions
				through to creative website development and integrated digital campaigning.
			</p>
			<a class="description_link" href="">
			<div>
				our culture
				<i class="fas fa-arrow-right"></i>
			</div>
			</a>
		</div>
	</div>
	<!--  -->
	<!-- Brand Banner -->
	<!-- <div class="container">
		<aside class="brand_banner">
			<h1>
				Netmatters
			</h1>
			<div class="brand__banner__paragraph">
			</div>
			<div class="brand__banner__paragraph">
			</div>
			<div class="brand__banner__paragraph">
			</div>
			<div>
			</div>
		</aside>
	</div> -->
	<!--  -->
	<!-- Latest News -->
	<div class="latest__news__wrapper"> 
		<div class= "latest__news__header">	
			latest 
			<hr>
		</div>
	</div>
	<div class="container news__container">
		<div class="latest__news">
			<!--  -->
			<div id="news__lower__card" class="latest__news__card">

				<div class="latest__news__card__header ">
					<img src="<?= array_key_exists("1", $cards) ? $cards["1"]["headerImage"] : "Error loading headerImage" ?>" alt="Top subject picture of news cards">
					<div class="latest__news__card__header__news__box">news</div>
					<!-- <img src="\assets\card__pic__2.jpg" alt=""> -->
				</div>

				<div class="latest__news__card__body">
					<div class="latest__news__card__body__inner__top">
						<a  href="#">
						<?= array_key_exists("1", $cards) ? $cards["1"]["cardTitle"] : "Error loading cardTitle" ?>
						</a>
						<p >
						<?= array_key_exists("1", $cards) ? $cards["1"]["blurb"] : "Error loading Blurb" ?>
						</p>
						<a class="read__more__button" href="#">
							<div >
								Read More
							</div>
						</a>
					</div>
					<hr> 

					<div class="latest__news__card__footer">

						<img class="latest__news__card__footer__logo" src="<?= array_key_exists("1", $cards) ? $cards["1"]["footerImage"] : "Error loading footerImage" ?>"></img>

						<p>
							<span><?= array_key_exists("1", $cards) ? $cards["1"]["createdBy"] : "Error loading createdBy" ?>
							</span>

							<time datetime="<?= array_key_exists("1", $cards) ? $cards["1"]["dateOfPost"] : "Error loading dateOfPost" ?>">8th June 2021
							</time>
						</p>

					</div>
				</div>

			</div>
			<div class="latest__news__card">


				<div class="latest__news__card__header ">
					<img src="<?= array_key_exists("2", $cards) ? $cards["2"]["headerImage"] : "Error loading headerImage" ?>" alt="Top subject picture of news cards">
					<div class="latest__news__card__header__news__box">news</div>
					<!-- <img src="\assets\card__pic__2.jpg" alt=""> -->
				</div>

				<div class="latest__news__card__body">
					<div class="latest__news__card__body__inner__top">
						<a href="#"><?= array_key_exists("2", $cards) ? $cards["2"]["cardTitle"] : "Error loading cardTitle" ?>
						</a>
						<p >
						<?= array_key_exists("2", $cards) ? $cards["2"]["blurb"] : "Error loading blurb" ?>
						</p>
							<div>
								Read More
							</div>
					</div>
					<hr> 

					<div class="latest__news__card__footer">

					<img class="latest__news__card__footer__logo" src="<?= array_key_exists("2", $cards) ? $cards["2"]["footerImage"] : "Error loading footerImage" ?>"></img>

						<p>
							<span>
								<?= array_key_exists("2", $cards) ? $cards["2"]["createdBy"] : "Error loading createdBy" ?>
							</span>

							<time datetime="<?= array_key_exists("2", $cards) ? $cards["2"]["dateOfPost"] : "Error loading dateOfPost" ?>">8th June 2021
							</time>
						</p>

					</div>
				</div>


			</div>
			<div id="news__hide__card" class="latest__news__card">

				<div class="latest__news__card__header ">
					<img src="<?= array_key_exists("3", $cards) ? $cards["3"]["headerImage"] : "Error loading cardTitle" ?>" alt="Top subject picture of news cards">
					<div class="latest__news__card__header__news__box">news</div>
					<!-- <img src="\assets\card__pic__2.jpg" alt=""> -->
				</div>

				<div class="latest__news__card__body">
					<div class="latest__news__card__body__inner__top">
						<a href="#"><?= array_key_exists("3", $cards) ? $cards["3"]["cardTitle"] : "Error loading cardTitle" ?>
						</a>
						<p >
																					<!-- Error message if a number of row is selected that is not in the database -->
						<?= array_key_exists("3", $cards) ? $cards["3"]["blurb"] : "Error loading blurb" ?>
						</p>
						<a href="#">
							<div>
								Read More
							</div>
						</a>
					</div>
					<hr> 

					<div class="latest__news__card__footer">

					<img class="latest__news__card__footer__logo" src="<?= array_key_exists("3", $cards) ? $cards["3"]["footerImage"] : "Error loading footerImage" ?>"></img>

						<p>
							<span>
							<?= array_key_exists("3", $cards) ? $cards["3"]["createdBy"] : "Error loading createdBy" ?>
							</span>

							<time datetime="<?= array_key_exists("3", $cards) ? $cards["3"]["dateOfPost"] : "Error loading dateOfPost" ?>">8th June 2021
							</time>
						</p>

					</div>
				</div>


			</div>
			
		</div>
	</div>
	<!--  -->
	<!-- Brand logos -->
	<div class="container">
		<!--  -->
		<div class="brand__logos">
			<img src="#" alt="Busseys company Logo.">
			<img src="#" alt="Crane company Logo">
			<img src="#" alt="Beat company Logo">
			<img src="#" alt="Northern Diver company Logo">
		</div>
		<!--  -->
	</div>
	<!--  -->
	<!-- News letter sign-up -->
		<!--  -->
		<div class="news__letter__sign__up">
			<!--  -->
			<div class="news__letter__sign__up__inner">
				<h1>Email Newsletter Sign-Up
				</h1>
				<!--  -->
				<div>
					<div class="news__letter__sign__up__inner__name">
						<h3>Your Name
						</h3>
						<div class="red__astrix">*</div>
					</div>
					<form action="#">
						<input type="text" name="search" id="your__name__search__input">
					</form>
				</div>
				<!--  -->
				<div >
					<div class="news__letter__sign__up__inner__email">
						<h3>Your Email
						</h3>
						<div class="red__astrix">*</div>
					</div>
					<form action="#">
						<input type="text" name="search" id="your__email__search__input">
					</form>
				</div>
				<!--  -->
				<div class="news__letter__tickbox">
					<form action="#">
						<input type="checkbox" id="sign__up" name="tickbox1" />
						<label for="sign__up">
							Please tick this box if you wish to receive marketing information from us.
							Please see our <a href="">Privacy Policy</a> for more information on how we use your data.
						</label>
					</form>
				</div>
				<!--  -->
				<div class="news__letter__sign__up__subscribe">
					Subscribe
				</div>
			</div>
			<!--  -->
		</div>
	<!--  -->
	
			<!--  -->
			<!-- <div class="awards__and__partners">
				<ul>
					<li class="awards__and__partners__google"></li>
					<li class="awards__and__partners__microsoft"></li>
					<li class="awards__and__partners__future__50"></li>
					<li class="awards__and__partners__qms"></li>
					<li class="awards__and__partners__carbon__charter"></li>
					<li class="awards__and__partners__investing__in__future__growth"></li>
					<li class="awards__and__partners__Princess__royal"></li>
					<li class="awards__and__partners__skills_of_tomorrow"></li>
				</ul>
			</div> -->
		<!-- </div> -->
		<!--___-___-->

	
	<script src="main.js"></script>
	<script src="Slider.js"></script>
	<script src="side__menu.js"></script>
	
</body>

</html>


<!-- This calls the footer files and uses them on the page. Can be used across all pages without the need to add the footer -->
<?php
	include('footer.php');
?>