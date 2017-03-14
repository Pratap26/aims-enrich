@extends('layouts.base')

@section('body')
<script type="text/javascript">
	var thisCourse = "adobe_photoshop";
</script>

<img src="/images/slide.jpg" class="bannerImg">

<div class="courseMetaPage">
	@include('includes.individual_course_list')
	<div class="courseMetaData-box">
		<section class="branchSection">
			<p class="courseMetaData-title">Adobe Photoshop CC</p>
			<p class="courseMetaData-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus odio laborum possimus vitae quam voluptates sit nobis, asperiores, sint ipsa dolores! Atque doloremque ipsam, fugit deleniti unde. Distinctio nisi, nulla fuga, ex eius rem velit ratione officiis aliquid, veritatis rerum! Fugiat vitae beatae, consequuntur eaque accusamus repudiandae. Fugiat, reiciendis, odit!
			</p>
		</section>
		<section class="branchSection">
			<p class="courseMetaData-title">Adobe Photoshop CC Basics</p>
			<p class="courseMetaData-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus odio laborum possimus vitae quam voluptates sit nobis, asperiores, sint ipsa dolores! Atque doloremque ipsam, fugit deleniti unde. Distinctio nisi, nulla fuga, ex eius rem velit ratione officiis aliquid, veritatis rerum! Fugiat vitae beatae, consequuntur eaque accusamus repudiandae. Fugiat, reiciendis, odit!
			</p>
			<p class="knowMore">
				<a href="{{ route('adobe_photoshop_basics') }}">KNOW MORE &raquo;</a>
			</p>
		</section>
		<section class="branchSection">
			<p class="courseMetaData-title">Adobe Photoshop CC Advanced</p>
			<p class="courseMetaData-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus odio laborum possimus vitae quam voluptates sit nobis, asperiores, sint ipsa dolores! Atque doloremque ipsam, fugit deleniti unde. Distinctio nisi, nulla fuga, ex eius rem velit ratione officiis aliquid, veritatis rerum! Fugiat vitae beatae, consequuntur eaque accusamus repudiandae. Fugiat, reiciendis, odit!
			</p>
			<p class="knowMore">
				<a href="">KNOW MORE &raquo;</a>
			</p>
		</section>
	</div> <!-- CourseMetaData-box -->
</div>
@endsection