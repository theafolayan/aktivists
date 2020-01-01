@extends('layouts.app')

@section('content')
<div class="dashboard-content">


		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Add Job</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Add Job</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			
			<!-- Table-->
			<div class="col-lg-12 col-md-12">

				<div class="dashboard-list-box margin-top-0">
					<h4>Job Details</h4>
					<div class="dashboard-list-box-content">

					<div class="submit-page">

						<!-- Email -->
						<div class="form">
							<h5>Your Email</h5>
							<input class="search-field" name="email" type="text" placeholder="{{ Auth::user()->email }}" value="{{ Auth::user()->email }}"/>
						</div>

						<!-- Title -->
						<div class="form">
							<h5>Opportunity Title</h5>
							<input class="search-field" type="text" name="title" placeholder="" value=""/>
						</div>

						<!-- Job Type -->
						<div class="form">
							<h5>Job Type</h5>
							<select data-placeholder="Full-Time" class="chosen-select-no-single">
								<option value="full-time">Full Time</option>
								<option value="part-time">Part-Time</option>
								
							</select>
						</div>


						<!-- Choose Category -->
						<div class="form">
							<div class="select">
								<h5>Category</h5>
								<select data-placeholder="Choose Categories" class="chosen-select" multiple>
                                
									<option value="Writing">Writing</option>
									<option value="Logistics">Logistics</option>
									<option value="Teaching">Teaching</option>
									<option value="Writers">Writers</option>
									<option value="Graphics">Graphics</option>
									<option value="Other">Other</option>
									
								</select>
							</div>
						</div>


						<!-- Location -->
						<div class="form">
							<h5>Location <span>(optional)</span></h5>
							<input class="search-field" type="text" placeholder="e.g. London" value=""/>
							<p class="note">Leave this blank if the location is not important</p>
						</div>


						<!-- Tags -->
						<div class="form">
							<h5>Job Tags <span>(optional)</span></h5>
							<input class="search-field" type="text" placeholder="e.g. PHP, Social Media, Management" value=""/>
							<p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
						</div>


						<!-- Description -->
						<div class="form" style="width: 100%;">
							<h5>Description</h5>
							<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
						</div>

						<!-- Application email/url -->
						<div class="form">
							<h5>Application email / URL</h5>
							<input type="text" placeholder="Enter an email address or website URL">
						</div>

						<!-- TClosing Date -->
						<div class="form">
							<h5>Closing Date <span>(optional)</span></h5>
							<input data-role="date" type="text" placeholder="yyyy-mm-dd">
							<p class="note">Deadline for new applicants.</p>
						</div>

					</div>

					</div>
				</div>


				<div class="dashboard-list-box margin-top-30">
					<h4>Company Details</h4>
					<div class="dashboard-list-box-content">

					<div class="submit-page">

						<!-- Company Name -->
						<div class="form">
							<h5>Company Name</h5>
							<input type="text" placeholder="Enter the name of the company">
						</div>

						<!-- Website -->
						<div class="form">
							<h5>Website <span>(optional)</span></h5>
							<input type="text" placeholder="http://">
						</div>

						<!-- Teagline -->
						<div class="form">
							<h5>Tagline <span>(optional)</span></h5>
							<input type="text" placeholder="Briefly describe your company">
						</div>

						<!-- Video -->
						<div class="form">
							<h5>Video <span>(optional)</span></h5>
							<input type="text" placeholder="A link to a video about your company">
						</div>

						<!-- Twitter -->
						<div class="form">
							<h5>Twitter Username <span>(optional)</span></h5>
							<input type="text" placeholder="@yourcompany">
						</div>

						<!-- Logo -->
						<div class="form">
							<h5>Logo <span>(optional)</span></h5>
							<label class="upload-btn">
							    <input type="file" multiple />
							    <i class="fa fa-upload"></i> Browse
							</label>
							<span class="fake-input">No file selected</span>
						</div>


					</div>

					</div>
				</div>
				<a href="#" class="button margin-top-30">Preview <i class="fa fa-arrow-circle-right"></i></a>
			</div>


			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2019 WorkScout. All Rights Reserved.</div>
			</div>
		</div>

	</div>
	<!-- Content / End -->


</div>

@endsection