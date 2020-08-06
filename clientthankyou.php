<div class="clearfix"></div>
		<!-- ================ Start Page Title ======================= -->
		<section class="title-transparent page-title" style="background:url(<?=base_url()?>assets/img/l-20.jpg);">
			<div class="container">
			
			
			
			
		 
			
			 <div class="wizard">
			
			 <div class="wizard-inner">
	                <div class="active-line"></div>
	                <ul class="nav nav-tabs" role="tablist">
	                    <li role="presentation" class="active stepactive1">
	                		<div class="connecting-line border-right"></div>
	                        <a href="#"   role="tab" title="Step 1">
	                            <span class="round-tab">
	                            	1
	                            </span>
	                            <p>Organisation Details</p>
	                        </a>
	                    </li>
	                    <li role="presentation" class="active stepactive2">
	                		<div class="connecting-line border-right border-left"></div>
	                        <a href="#"  role="tab" title="Step 2">
	                            <span class="round-tab">
	                            	2
	                            </span>
	                            <p>	 Admin Details</p>
	                        </a>
	                    </li>
	                    <li role="presentation" class="active stepactive3">
	                		<div class="connecting-line border-right border-left"></div>
	                        <a href="#"   role="tab" title="Step 3">
	                            <span class="round-tab">
	                            	3
	                            </span>
	                            <p>Client Enquiry Form</p>
	                        </a>
	                    </li>
	                    <li role="presentation" class="active stepactive4">
	                		<div class="connecting-line" style="border-radius: 0px 10px 10px 0px; -moz-border-radius: 0px 10px 10px 0px; -webkit-border-radius: 0px 10px 10px 0px;"></div>
	                        <a href="#"   role="tab" title="Complete">
	                            <span class="round-tab">
	                            	4
	                            </span>
	                            <p>Complete Registration</p>
	                        </a>
	                    </li>
	                </ul>
	            </div>
			
			
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			</div>
		</section>
		<div class="clearfix"></div>
		<!-- ================ End Page Title ======================= -->
		<!-- ================ Edit Section Start ======================= -->
		<section class="padd-0">
			<div class="container">
			
			<form action="linkedinprofile.html">
				<div class="col-md-12 translateY-60 col-sm-12 ">
					<!-- General Information -->
					<div class="add-listing-box edit-info mrg-bot-25 padd-bot-30 padd-top-25">
						  <!-- <div class="listing-box-header">	 
							<h3>CLIENT REGISTRATION: Admin Details</h3>
							<p>Please enter your details as Admin of your organisation's client account</p>
						</div>  -->  
						 
						
							<div class="row mrg-r-10 mrg-l-10">
								
								 <div class="  mrg-bot-25 padd-bot-30 padd-top-25">
					 
							
							
							<div class="booking-confirm padd-top-30 padd-bot-30">
						<i class="fa fa-check" aria-hidden="true"></i>
						<h2 class="mrg-top-15">Thank You for registering on our Experts platform</h2>
						<?php if($userdata->req_skip==1&&$userdata->clientreq_status!=1){?>
						<p>If you have a requirement for experts for an engagement </p>
						<a href="<?=base_url()?>home/create_requirement" class="btn theme-btn mrg-top-20">Click Here</a><?php }?>
					</div>
								
								
							
							
							
								</div>
								 
								 
							
								
							</div>
						
					</div>
					 
			 
				 
				</div>
			</div></form>
		</section>
		