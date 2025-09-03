
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
@include('layouts.footer')
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
