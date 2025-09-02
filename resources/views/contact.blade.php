@include('layouts.app')
@include('layouts.header')
<!--================Header Menu Area =================-->


<!--================Hero Banner SM Area Start =================-->
<section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
	<div class="container">
		<div class="hero-banner-sm-content">
			<h1>تماس با ما</h1>
			<p>نظرات و پیشنهادات خود را با ما در میان بگذارید و با ما در ارتباط باشید</p>
		</div>
	</div>
</section>
<!--================Hero Banner SM Area End =================-->

<!-- ================ contact section start ================= -->
<section class="section-margin">
	<div class="container">
		<div class="d-none d-sm-block mb-5 pb-4">
			<div id="map" style="height: 480px;"></div>
			<script>
				function initMap() {
					var uluru = {lat: -25.363, lng: 131.044};
					var grayStyles = [
						{
							featureType: "all",
							stylers: [
								{ saturation: -90 },
								{ lightness: 50 }
							]
						},
						{elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
					];
					var map = new google.maps.Map(document.getElementById('map'), {
						center: {lat: -31.197, lng: 150.744},
						zoom: 9,
						styles: grayStyles,
						scrollwheel:  false
					});
				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
		</div>
		<div class="row">
			<div class="col-12">
				<h2 class="contact-title">در ارتباط باشید</h2>
			</div>
			<div class="col-lg-8">
				<form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="متن پیام ..."></textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control" name="name" id="name" type="text" placeholder="نام خود را وارد کنید">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control" name="email" id="email" type="email" placeholder="ایمیل خود را وارد کنید">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<input class="form-control" name="subject" id="subject" type="text" placeholder="موضوع خود را وارد کنید">
							</div>
						</div>
					</div>
					<div class="form-group mt-3">
						<button type="submit" class="button button-contactForm">ارسال پیام</button>
					</div>
				</form>
			</div>
		@include('admin.contact.index')
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-email"></i></span>
					<div class="media-body">
						<h3><a href="mailto:support@colorlib.com">nfo@webrubik.com</a></h3>
						<p>برای ما پیام بگذارید</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ================ contact section end ================= -->


<!-- ================ start footer Area ================= -->
<footer class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>در مورد آژانس</h6>
					<p>
						سفر پر از شرایط متفاوت و غیرقابل پیش بینی است. فرض کنید شما با نامزدتان یا کسی که قرار است در کار با آن شریک بشوید به سفر بروید. در حین سفر می‌توانید اخلاقیات طرف مقابل را بفهمید.
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>دسترسی سریع</h6>
					<div class="row">
						<div class="col">
							<ul>
								<li><a href="#">صفحه نخست</a></li>
								<li><a href="#">امکانات</a></li>
								<li><a href="#">سرویس ها</a></li>
							</ul>
						</div>
						<div class="col">
							<ul>
								<li><a href="#">قیمت</a></li>
								<li><a href="#">بلاگ</a></li>
								<li><a href="#">تماس با ما</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>خبرنامه</h6>
					<p>در خبرنامه ثبت نام کنید تا از آخرین اخبار و تخفیف های ما با خبر شوید</p>
					<div id="mc_embed_signup">
						<form target="_blank" action="" method="get" class="subscription relative">
							<div class="input-group d-flex flex-row">
								<input name="EMAIL" placeholder="ایمیل" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ایمیل '" required="" type="email">
								<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
							</div>
							<div class="mt-10 info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget mail-chimp">
					<h6 class="mb-20">اخرین پست اینستا</h6>
					<ul class="instafeed d-flex flex-wrap">
						<li><img src="pics/instagram/i1.jpg" alt=""></li>
						<li><img src="pics/instagram/i2.jpg" alt=""></li>
						<li><img src="pics/instagram/i3.jpg" alt=""></li>
						<li><img src="pics/instagram/i4.jpg" alt=""></li>
						<li><img src="pics/instagram/i5.jpg" alt=""></li>
						<li><img src="pics/instagram/i6.jpg" alt=""></li>
						<li><img src="pics/instagram/i7.jpg" alt=""></li>
						<li><img src="pics/instagram/i8.jpg" alt=""></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="row align-items-center">
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-right"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					CopyRight &copy; <script>document.write(new Date().getFullYear());</script> All Rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<div> فارسی و راست چین شده توسط <a href="https://www.webrubik.com" target="_blank">Webrubik.com</a></div>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<div class="col-lg-4 col-sm-12 footer-social text-center text-lg-left">
					<a href="#"><i class="fa fa-facebook-f"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- ================ End footer Area ================= -->




<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact.js"></script>
</body><!-- This template has been downloaded from Webrubik.com -->
</html>
