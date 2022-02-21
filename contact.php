<!-- This calls the header files and uses them on the page. Can be used across all pages without the need to add the header -->
<?php
	include('header.php');
	include ('db__connection.php');

$conn = OpenCon();
?>
<!--  -->
<!--  -->
<!--  -->
<body id="contact__body">
    <div class="contact__top__banner" >
        <h1 >Our Offices</h1>
    </div>
    <div class="container">
        <div class="contact__body__inner">      
            <div class="contact__card" >
                <img class="contact__card__header__image" src="assets\cambridge.jpg" alt="Picture of Cambridge office">
                <h3 class= "contact__card__title">
                Cambridge Office
                </h3>
                <p class="contact__card__address">
                Unit 15,
                Penfold Drive,
                Gateway 11 Business Park,
                Wymondham, Norfolk,
                NR18 0WZ
                </p>
                <a class="contact__card__phone" href="#">01603 70 40 20</a>
                <div class="contact__card__button">
                    VIEW MORE
                </div>
            </div>
            <iframe class="contact__card__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2424.644199034708!2d1.1343817159548206!3d52.57604533982637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8dba0b4b%3A0x9c77ffbfe7911dab!2sNetmatters!5e0!3m2!1sen!2suk!4v1645463440752!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
        
            <div class="contact__card" >
                <img class="contact__card__header__image" src="assets\cambridge.jpg" alt="Picture of Cambridge office">
                <h3 class= "contact__card__title">
                Cambridge Office
                </h3>
                <p class="contact__card__address">
                Unit 15,
                Penfold Drive,
                Gateway 11 Business Park,
                Wymondham, Norfolk,
                NR18 0WZ
                </p>
                <a class="contact__card__phone" href="#">01603 70 40 20</a>
                <div class="contact__card__button">
                    VIEW MORE
                </div>
            </div>
            <iframe class="contact__card__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2424.6443782027554!2d1.1365703999999999!3d52.576042099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8dba0b4b%3A0x9c77ffbfe7911dab!2sNetmatters!5e0!3m2!1sen!2suk!4v1645466455711!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
        
            <div class="contact__card" >
                <img class="contact__card__header__image" src="assets\cambridge.jpg" alt="Picture of Cambridge office">
                <h3 class= "contact__card__title">
                Cambridge Office
                </h3>
                <p class="contact__card__address">
                Unit 15,
                Penfold Drive,
                Gateway 11 Business Park,
                Wymondham, Norfolk,
                NR18 0WZ
                </p>
                <a class="contact__card__phone" href="#">01603 70 40 20</a>
                <div class="contact__card__button">
                    VIEW MORE
                </div>
            </div>
            <iframe class="contact__card__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2425.758210037856!2d1.7130451!3d52.5558984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47da04f37d5f7dad%3A0x25a3836b6c0d66b1!2sBeacon%20Innovation%20Centre!5e0!3m2!1sen!2suk!4v1645466479704!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
                
                <span class="contact__lower__text__plain">Email us on:</span>

                <a class="contact__lower__email" href="mailto:sales@netmatters.com">sales@netmatters.com</a>

                <span class="contact__lower__text__plain">Business hours:</span>

                <span class="contact__lower__text__plain">Monday - Friday 07:00 - 18:00 </span>
                
                <div class="contact__out__of__hours">
                    Out of Hours IT Support 
                    <div class="out__of__hours__hidden">
                        <p class="contact__out__of__hours"></p>
                        <p></p>
                        <p class="contact__out__of__hours"></p>
                    </div>
                </div>
                
				<!--  -->
				<div >
					<div class="news__letter__sign__up__inner__email">
						<h3>Company Name
						</h3>
						<div class="red__astrix">*</div>
					</div>
					<form method="post"  action="contact__submit.php">
						<input type="text" name="search" id="your__email__search__input">
					</form >
				</div>
                <div >
					<div class="news__letter__sign__up__inner__email">
						<h3>Your Email
						</h3>
						<div class="red__astrix">*</div>
					</div>
					<form method="post"  action="contact__submit.php">
						<input type="text" name="search" id="your__email__search__input">
					</form >
				</div>
                <div >
					<div class="news__letter__sign__up__inner__email">
						<h3>Your Telephone Number
						</h3>
						<div class="red__astrix">*</div>
					</div>
					<form  method="post"  action="contact__submit.php">
						<input type="text" name="search" id="your__email__search__input">
					</form >
				</div>
                <div >
					<div class="news__letter__sign__up__inner__email">
						<h3>Subject
						</h3>
						<div class="red__astrix">*</div>
					</div>
					<form  method="post"  action="contact__submit.php">
						<input type="text" name="search" id="your__email__search__input">
					</form >
				</div>
                <div >
					<div class="news__letter__sign__up__inner__email">
						<h3>Message
						</h3>
						<div class="red__astrix">*</div>
					</div>
					<form method="post"  action="contact__submit.php">
						<input type="text" name="search" id="your__email__search__input">
					</form >
				</div>
				<!--  -->
				<div class="news__letter__tickbox">
					<form  method="post"  action="contact__submit.php">
						<input type="checkbox" id="sign__up" name="tickbox1" />
						<label for="sign__up">
							Please tick this box if you wish to receive marketing information from us.
							Please see our <a href="">Privacy Policy</a> for more information on how we use your data.
						</label>
					</form >
				</div>
				<!--  -->
                <input type="submit" name="Submit" id="Submit" value="Submit">
				<!-- <div class="news__letter__sign__up__subscribe">
					Send Enquiry
				</div>
        </div> -->
    </div>
    <!--  -->
    <!--  -->
    <!-- These are the javascript files that are bing used on the page -->
    <script src="main.js"></script>
	<script src="side__menu.js"></script>
    <!--  -->
    <!--  -->
    <!--  -->
</body>
<!--  -->
<!--  -->
<!--  -->
<!-- This calls the footer files and uses them on the page. Can be used across all pages without the need to add the footer -->
<?php
	include('footer.php');
?>