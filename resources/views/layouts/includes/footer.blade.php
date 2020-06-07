<!-- Footer
================================================== -->
<div class="margin-top-0"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img src="{{ Voyager::image(setting('index.logo')) }}" alt="">
				<br><br>
				{!! setting('footer.description') !!}
				<a href="{{ setting('footer.fb_link') }}" class="button social-btn"><i class="fa fa-facebook-official"></i> {{ setting('footer.fb_label') }}</a>
			</div>

			<div class="col-md-4  col-sm-6">
                <h4>Полезные сылки</h4>
                {{ menu('Footer menu', 'layouts.includes.partials.footer_menu') }}
			</div>

			<div class="col-md-3  col-sm-12">
				<h4>{{ setting('footer.contact') }}</h4>
				<div class="text-widget">
					{{ setting('contact.phone_label') }} <span>{{ setting('contact.phone_number') }} </span><br>
					{{ setting('contact.email_label') }}<span> {{ setting('contact.email') }} </span><br>
				</div>
			</div>

		</div>

		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">©  Copyright {{ date('Y') }} by <a href="#">Atlas Software</a>. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
