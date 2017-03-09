@extends('layouts.base')

@section('body')
<img src="/images/slide.jpg" class="bannerImg">
<div class="courseMetaPage">
	<div class="courseList-box">
		<p class="coursesList-headline">Courses for individuals</p>
		<ul class="courseList">
			<a href=""><li>Adobe Photoshop</li></a>
			<a href=""><li>Business Analytics</li></a>
			<a href=""><li>Supply Chain Management</li></a>
			<a href=""><li>Leadership</li></a>
			<a href=""><li>Visual Design</li></a>
			<a href=""><li>iOS Mobile App Development</li></a>
			<a href=""><li class="courseType">Courses for Organizations</li></a>
			<a href=""><li class="courseType">Online courses</li></a>
		</ul>
		<div class="callbackForm-box">
			<p>Request a call Back</p>
			<form action="">
				<input type="text" name="name" placeholder="Name">
				<input type="text" name="mobile" placeholder="Mobile number">
				<input type="text" name="otp" placeholder="OTP number">
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>
	<div class="courseMetaData-box">
		<p class="courseMetaData-title">Adobe Photoshop CC (2015.5) Basics</p>
		<p class="courseMetaData-description">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, perspiciatis, possimus. Officia amet sit inventore animi non ab ad doloremque iusto quasi aspernatur corporis delectus asperiores rem quos voluptates facilis ducimus veniam ullam ea, tempore distinctio dolor blanditiis soluta. Voluptatum, omnis iusto iure corporis cum debitis tempore fugiat nulla voluptatibus pariatur reiciendis, blanditiis, vero sint aliquam veritatis officia earum. Reprehenderit perspiciatis ullam laudantium, qui eveniet ad optio nostrum blanditiis quasi pariatur, minus voluptatem quod, placeat reiciendis, expedita porro officia voluptatum! Deleniti excepturi eos, tempore error harum repudiandae vel! Ipsam ab laborum nostrum molestiae provident aliquid iure vel necessitatibus, consectetur voluptas?
		</p>
		<p class="courseMetaData-subheading">
			Learning modes available and next batch dates
		</p>
		<div class="courseItemList">
			<div class="courseItem-block">
				<div class="courseItem-modeRow">
					<img src="/images/icon_classroom.png">
					<span>Classroom</span>
				</div>
				<div class="courseItem-box">
					<div class="courseItem-month"><p>December</p></div>
					<div class="courseItem">
						<p class="courseItem-type">Classroom + Online</p>
						<div class="courseItem-date">
							<p class="courseItem-day">23</p>
							<p class="courseItem-weekday">Thursday</p>
						</div>
						<div class="courseItem-info">
							<p class="courseItem-title">EPGDM Supply Chain Management</p>
							<p class="duration">
								<span class="courseItem-subheading">Duration</span>
								 - 2 years weekend batch
							</p>
							<p class="location">
								<span class="courseItem-subheading">Location</span>
								 - AIMS Enrich
							</p>
						</div>
					</div>
					<a href=""><div class="courseItem-apply">
						<p>Apply</p>
					</div></a>
				</div>
			</div>
			<div class="courseItem-block">
				<div class="courseItem-modeRow">
					<img src="/images/icon_classroom.png">
					<span>Classroom</span>
				</div>
				<div class="courseItem-box">
					<div class="courseItem-month"><p>December</p></div>
					<div class="courseItem">
						<p class="courseItem-type">Classroom + Online</p>
						<div class="courseItem-date">
							<p class="courseItem-day">23</p>
							<p class="courseItem-weekday">Thursday</p>
						</div>
						<div class="courseItem-info">
							<p class="courseItem-title">EPGDM Supply Chain Management</p>
							<p class="duration">
								<span class="courseItem-subheading">Duration</span>
								 - 2 years weekend batch
							</p>
							<p class="location">
								<span class="courseItem-subheading">Location</span>
								 - AIMS Enrich
							</p>
						</div>
					</div>
					<a href=""><div class="courseItem-apply">
						<p>Apply</p>
					</div></a>
				</div>
			</div>
		</div> <!-- Course Item List -->
		
		<!-- Accordion -->
		<div class="accordion">
			<div class="panel-group" id="accordion">      
				<div class="panel panel-default panel-faq">
					<div class="panel-heading active-faq">
						<a data-toggle="collapse" data-parent="#accordion" href="#faq-one">
							<h4 class="panel-title">
								<span class="panel-head">
									Who can benefit? 
								</span>
								<span class="pull-right">-</span>
							</h4>
						</a>
					</div><!-- Panel heading -->
					<div id="faq-one" class="panel-collapse collapse collapse in">
						<div class="panel-body">
							<ul class="panel-ul">
								<li>
									<p class="panel-p">
										Anyone who'd like to learn Adobe Photoshop CC
									</p>
								</li>
								<li>
									<p class="panel-p">  
										Those who plan to take The Adobe Cartified Associate (ACA)/Adobe cartified Expert (ACE) Exam 
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div><!-- panel -->

				<div class="panel panel-default panel-faq">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#faq-two">
							<h4 class="panel-title">
								<span class="panel-head">
									What will i learn? 
								</span>
								<span class="pull-right">+</span>
							</h4>
						</a>
					</div>
					<div id="faq-two" class="panel-collapse collapse">
						<div class="panel-body">
							<ul class="panel-ul">
								<li> 
									<p class="panel-p"> 
										Anyone who'd like to learn Business Analytics
									</p>
								</li>
								<li>
									<p class="panel-p">  
										Those who plan to take The Adobe Cartified Associate (ACA)/Adobe cartified Expert (ACE) Exam 
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div> <!-- panel -->

				<div class="panel panel-default panel-faq">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#faq-three">
							<h4 class="panel-title">
								<span class="panel-head">
									Objectives
								</span>
								<span class="pull-right">+</span>
							</h4>
						</a>
					</div>
					<div id="faq-three" class="panel-collapse collapse">
						<div class="panel-body">
							<ul class="panel-ul">
								<li> 
									<p class="panel-p"> 
										sample text
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div> <!-- panel -->

				<div class="panel panel-default panel-faq">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#faq-four">
							<h4 class="panel-title">
								<span class="panel-head">
									Prerequisites
								</span>
								<span class="pull-right">+</span>
							</h4>
						</a>
					</div>
					<div id="faq-four" class="panel-collapse collapse">
						<div class="panel-body">
							<ul class="panel-ul">
								<li> 
									<p class="panel-p"> 
										sample text
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div> <!-- panel -->

				<div class="panel panel-default panel-faq">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#faq-five">
							<h4 class="panel-title">
								<span class="panel-head">
									Course framework
								</span>
								<span class="pull-right">+</span>
							</h4>
						</a>
					</div>
					<div id="faq-five" class="panel-collapse collapse">
						<div class="panel-body">
							<ul class="panel-ul">
								<li> 
									<p class="panel-p"> 
										Sample text
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div> <!-- panel -->
			</div>
		</div>
	</div> <!-- CourseMetaData-box -->
</div>
@endsection