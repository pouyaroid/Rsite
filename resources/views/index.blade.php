
	@include('layouts.app')
	@include('layouts.header')
<!--================ Header Menu Area start =================-->

	
<!--================Header Menu Area =================-->

@include('admin.mainpage.herobanner.index')
<!--================Hero Banner Area End =================-->


<!--================Service Area Start =================-->
{{-- @include('admin.mainpage.services.index') --}}
<!--================Service Area End =================-->


@include('admin.mainpage.packages.index')
<!--================Testimonial section Start =================-->
@include('admin.mainpage.testimonials.index')
<!--================Testimonial section End =================-->


<!--================Search Package section Start =================-->

<!--================Search Package section End =================-->


<!--================Blog section Start =================-->
<section class="section-padding bg-gray">
	<div class="container">
		<div class="section-intro text-center pb-90px">
			<img class="section-intro-img" src="pics/home/section-icon.png" alt="">
			<h2>جدیدترین مطالب بلاگ</h2>
			<p>جدیدترین مطالب آموزنده ما را از دست ندهید</p>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
				<div class="card-blog">
					<img class="card-img rounded-0" src="pics/blog/blog-1.png" alt="">
					<div class="card-blog-body">
						<a href="#">
							<h4>سفر به شما یک فرصت نادر برای تنهایی و شروع دوباره می‌دهد</h4>
						</a>
						<ul class="card-blog-info">
							<li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>دوم مهر 98</a></li>
							<li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>سه نظر </a></li>
						</ul>
						<p>شما در شرایط عادی همیشه در دانشگاه، محل کار و... هستید. عملا در دنیای امروز شما امکان تنها بودن یا ندارید. منظورم از تنهایی اینه که برای مدتی بتونید با خودتون خلوت کنید و زندگیتون را هرس کنید.</p>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
				<div class="card-blog">
					<img class="card-img rounded-0" src="pics/blog/blog-2.png" alt="">
					<div class="card-blog-body">
						<a href="#">
							<h4>فرصت دور بودن از تکنولوژی</h4>
						</a>
						<ul class="card-blog-info">
							<li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>پنجم آبان 98</a></li>
							<li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>پنج نظر</a></li>
						</ul>
						<p>همه ما یادمون رفته دوران بدون تلفن همراه، لپ تاپ و اینترنت چطور بود. شما در سفر به صورت اتوماتیک دسترسیتون به تکنولوژی و اینترنت کم میشه.</p>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
				<div class="card-blog">
					<img class="card-img rounded-0" src="pics/blog/blog-3.png" alt="">
					<div class="card-blog-body">
						<a href="#">
							<h4>سفر کمک می‌کند که زمان بیشتری داشته باشید</h4>
						</a>
						<ul class="card-blog-info">
							<li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>یک آردیبهشت 98</a></li>
							<li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>هیچ نظر</a></li>
						</ul>
						<p>اگر همیشه به فکر اتفاق بعدی باشید و انتظار آن را بکشید اصلا سفر خوبی نخواهید داشت. سفر به شما یاد می‌دهد که باید در لحظه زندگی کنید و از زمانی که در حال حاضر دارید بهترین استفاده را کنید.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================Blog section End =================-->


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
</body><!-- This template has been downloaded from Webrubik.com -->
</html>
