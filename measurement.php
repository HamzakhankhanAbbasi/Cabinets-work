<?php include 'includes/header.php';?>


<style>
    .measureSec .heading{
        text-align: center;
        font-size: 24px;
        font-weight: 600;
        margin: 20px 0;
    }
    .measurementStep{
        margin: 10px 0;
    }
    .measurementStep ul{
        list-style: auto;
        padding-left: 10px;
    }
    .measurementStep ul li{
        font-weight: 500;
        margin-bottom: 5px;
    }
    .measureSec .innerHeading{
        margin: 30px 0;
    }
    .measureCab{
        max-width: 400px;
        width: 100%;
        position: relative;
        margin: 0 auto;
        overflow: hidden;
        box-shadow: 0px 0px 5px 1px #2b374557;
        border-radius: 10px;
    }
    .measureCab:before{
        content: '';
        position: absolute;
        top: -1px;
        left: 0.5px;
        width: 100%;
        height: 100%;
        background: var(--theme-color-1);
        opacity: 0.75;
        clip-path: polygon(100% 0, 100% 0, 100% 100%);
        transition: all 0.5s;
    }
    .measureCab:hover:before{
        clip-path: polygon(100% 0, 80% 0, 100% 100%);
    }
    .measureSec .uploadFiles{
        position: relative;
        width: 100%;
        background: #2b3745;
        border-radius: 10px;
        padding: 10px;
        color: #fff;
        text-align: center;
        transition: all 0.5s ease-in-out;
    }
    .measureSec .uploadFiles:hover{
        background: #000;
        transition: all 0.5s ease-in-out;
    }
    .measureSec .uploadFiles input{
        position: absolute;
        z-index: -1;
        visibility: hidden;
        top: 0;
        left: 0;
        right: 0;
    }
    .measureSec .uploadFiles label{
        display: block;
    }
    .measureSec .appendWrapper{
        background: #fff;
        height: 130px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .ui-sortable-placeholder { 
    	border: 1px dashed black!important; 
        visibility: visible !important;
        background: #eeeeee78 !important;
       }
    .ui-sortable-placeholder * { visibility: hidden; }
        .RearangeBox.dragElemThumbnail{opacity:0.6;}
        .RearangeBox {
            max-width: 100px;
            padding: 5px;
            cursor: all-scroll;
            float: left;
            font-family: sans-serif;
            text-align: center;
            color: #673ab7;
            background: #61daff;
            overflow: hidden;
        }
        .IMGthumbnail{
            max-width: 90px;
            padding: 2px;
            border: none;
        }

        .IMGthumbnail img{
            max-width: 90px;
            width: 100%;
            max-height: 90px;
            height: 100%;
        }

        .imgThumbContainer{
            margin:4px;
            display: inline-block;
            justify-content: center;
            position: relative;
            border: 1px solid rgba(0,0,0,0.14);
            -webkit-box-shadow: 0 0 4px 0 rgba(0,0,0,0.2);
            box-shadow: 0 0 4px 0 rgba(0,0,0,.2);
        }
        
        .imgThumbContainer > .imgName{
            text-align: center;
            padding: 2px 6px;
            margin-top: 4px;
            font-size: 12px;
            height: 15px;
        }
    
        .imgThumbContainer > .imgRemoveBtn{
            position: absolute;
            color: #fff;
            background: #000;
            right: 5px;
            top: 2px;
            cursor: pointer;
            display: none;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            font-size: 20px;
        }

        .RearangeBox:hover > .imgRemoveBtn{ 
            display: block;
        }
</style>

<section class="inner-pg-banner about-banner">
	<div class="container">
		<div class="inner-banner-text">
		    <p class="heading">Measurement Guide</p>
		</div>
	</div>	
</section>

<section class="measureSec about-sec-2">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-6 col-lg-6">
		    	<p>
		    	    Measurement guides are needed to give your designer a basic outline of your project.
                    No experience required. All that is needed is a clear and specific drawing of the space 
                    you want to change. Don’t forget we are here for you! Call our office with any questions 
                    at #205-494-2540
		    	</p>
		    	<div class="measurementStep">
		    	    <ul>
		    	        <li>Step back and draw your kitchen space like a box, including any appliances, sinks and other utilities</li>
		    	        <li>Make sure to include any doorways and label all appliances.</li>
		    	        <li>Use your tape measure to measure all the openings, from outside edge to outside edge. Your designer will confirm these measurements later during the design.</li>
		    	        <li>Confirm your layout by including any other ideas you would like to add or remove while designing your space.</li>
		    	        <li>Lastly take pictures of your current kitchen and include them with your measurements</li>
		    	    </ul>
		    	</div>
			</div>
			<div class="col-12 col-md-6 col-lg-6">
			    <!--<p class="heading text-center mt-0">It’s as simple as A, B, C</p>-->
			    <form class="contact-form">
			        <p class="heading bg text-center mt-0">It’s as simple as A, B, C</p>
					<div class="row m-0">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-floating mb-3">
							  <input type="email" class="form-control" id="floatingInput1" placeholder="First Name">
							  <label for="floatingInput1">First Name</label>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-floating mb-3">
							  <input type="email" class="form-control" id="floatingInput2" placeholder="Last Name">
							  <label for="floatingInput1">Last Name</label>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-floating mb-3">
							  <input type="email" class="form-control" id="floatingInput3" placeholder="name@example.com">
							  <label for="floatingInput2">Email address</label>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-floating mb-3">
							  <input type="email" class="form-control" id="floatingInput4" placeholder="Phone">
							  <label for="floatingInput3">Phone</label>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-floating mb-3">
							  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea5" style="height: 100px"></textarea>
							  <label for="floatingTextarea5">Message</label>
							</div>
						</div>
						<div class="col-lg-12">
						    <div class="uploadFiles mb-3">
                                <label for="files">Upload Files </label>
                                <input id="files" type="file" multiple/>        
                            </div>
                            <div class="appendWrapper mb-3">
                                <div id="sortableImgThumbnailPreview"></div>
                            </div>
						</div>
						<div class="col-lg-12">
							<div class="form-group mt-3">
								<button type="submit" class="gen-btn gen-btn-2 m-0">Submit<span></span></button>
							</div>
						</div>
					</div>
				</form>
			    
			</div>
		</div>
	</div>
</section>
<section class="measureSec about-sec-2 pt-0">
    <div class="container">
        <div class="row">
		    <div class="innerHeading">
		        <p class="heading text-center mb-2">Send it to Cabinets for You:</p>
                <p class="text-center">Forward your measurements and pictures three simple ways:</p>
		    </div>
		</div>
		<div class="row">
		    <div class="col-12 col-md-3 col-lg-3 mb-4">
		        <div class="measureCab">
		           <a href="assets/images/measure-step-1.jpg" data-fancybox="gallery"> 
		            <img src="assets/images/measure-step-1.jpg" class="img-fluid large-img"> 
		           </a>
		        </div>
		    </div>
		    <div class="col-12 col-md-3 col-lg-3 mb-4">
		        <div class="measureCab">
		           <a href="assets/images/measure-step-5.jpg" data-fancybox="gallery"> 
		            <img src="assets/images/measure-step-5.jpg" class="img-fluid large-img"> 
		           </a>
		        </div>
		    </div>
		    <div class="col-12 col-md-3 col-lg-3 mb-4">
		        <div class="measureCab">
		           <a href="assets/images/measure-step-7.jpg" data-fancybox="gallery"> 
		            <img src="assets/images/measure-step-7.jpg" class="img-fluid large-img"> 
		           </a>
		        </div>
		    </div>
		    <div class="col-12 col-md-3 col-lg-3 mb-4">
		        <div class="measureCab">
		           <a href="assets/images/measure-step-8.jpg" data-fancybox="gallery"> 
		            <img src="assets/images/measure-step-8.jpg" class="img-fluid large-img"> 
		           </a>
		        </div>
		    </div>
	    </div>
        
    </div>
</section>

<section class="index-sec-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-9 col-md-12 py-20">
				<div class="index-5-text">
					<p class="heading">We can build you the Cabinets of your Dreams</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 py-20">
				<!--<div class="index-5-text">-->
				<!--	<a href="#!" class="gen-btn gen-btn-1 mr-0" id="popup-btn">Get A Quote</a>-->
				<!--</div>-->
			</div>
		</div>
	</div>
</section>
<?php include 'includes/footer.php';?>
