@extends('layouts.base')

@section('body')
<img src="/images/slide.jpg" class="bannerImg">
<p class="headline">Individual Courses</p>
<div class="coursesIcons-box">
	<a href="/individual-courses/adobe-photoshop">
		<div class="courseIcon">
			<img src="/images/icons/courses/adobe_photoshop.png" class="bannerImg">	
			<p class="courseName">Adobe Photoshop</p>
		</div>
	</a>
	<a href="">
		<div class="courseIcon">
			<img src="/images/icons/courses/business_analytics.png" class="bannerImg">	
			<p class="courseName">Business Analytics</p>
		</div>
	</a>
	<a href="">
		<div class="courseIcon">
			<img src="/images/icons/courses/supply_chain.png" class="bannerImg">	
			<p class="courseName">Supply Chain Management</p>
		</div>
	</a>
	<a href="">
		<div class="courseIcon">
			<img src="/images/icons/courses/leadership.png" class="bannerImg">	
			<p class="courseName">Leadership</p>
		</div>
	</a>
	<a href="">
		<div class="courseIcon">
			<img src="/images/icons/courses/visual_design.png" class="bannerImg">	
			<p class="courseName">Visual Design</p>
		</div>
	</a>
	<a href="">
		<div class="courseIcon">
			<img src="/images/icons/courses/ios_mobile.png" class="bannerImg">	
			<p class="courseName">iOS Mobile App Development</p>
		</div>
	</a>
</div>
@endsection