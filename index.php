<?php include 'includes/header.php';?>
 <?php 
    if(isset($_POST['submit']))
    {  
        $message = "<strong>Order Request,</strong><br />
                    <strong>User email ID :</strong> $_POST[email]<br />
                    <strong>Course :-</strong> $_POST[course]<br/>
                    <strong>Deadline :-</strong> $_POST[deadline]<br/>
                    <strong>Page count :-</strong> $_POST[pagecount]<br/>
                    <strong>Description :-</strong> $_POST[description]<br/>
                    ";
        
        sendmail("ngugidavid1001@gmail.com","Assignment helper",$message);
        
    }
 ?>
<body>
<!-- navbar -->
<section id="pricing">
    <div class="container">
        <!-- contact form -->
        
            <div class="row col-md-12">
                    <div class="contact-form col-md-4">
                        <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="text-center" style="font-size:30px;color:#007b5e">Instant Assingment Help</h1>
                                        <h3 class="text-center">Get in Touch</h3>
                                    </div>
                        
                                </div>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="row">
                                                <div class="col-md-12" style="border:2px solid darkslategrey;border-radius:4px" >
                                                <br>

                                                    <div class="form-group">
                                                        <label for="">Enter your email</label>
                                                        <input type="email" name="email" class="form-control" placeholder="Enter your email">
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="">Select Course</label>
                                                      <select class="wide worktype mt-3 col-md-12 dropdown-select" id="services" name="course">
                                                        <span></span>
                                                        <option data-val="21" value="21">Admission Essay</option>
                                                        <option data-val="22" value="22">Annotated Bibliography</option>
                                                        <option data-val="23" value="23">Application Letter</option>
                                                        <option data-val="24" value="24">Argumentative Essay</option>
                                                        <option data-val="19" value="19">Article </option>
                                                        <option data-val="15" value="15">Assignment </option>
                                                        <option data-val="25" value="25">Biography</option>
                                                        <option data-val="8" value="8">Book Rep`ort </option>
                                                        <option data-val="9" value="9">Book Review </option>
                                                        <option data-val="26" value="26">Business Plan</option>
                                                        <option data-val="20" value="20">Case Study </option>
                                                        <option data-val="16" value="16">College Paper </option>
                                                        <option data-val="4" value="4">Coursework </option>
                                                        <option data-val="27" value="27">Cover Letter</option>
                                                        <option data-val="28" value="28">Creative Writing</option>
                                                        <option data-val="29" value="29">Critical Thinking</option>
                                                        <option data-val="5" value="5">Dissertation </option>
                                                        <option data-val="10" value="10">eBook </option>
                                                        <option selected="selected" data-val="1" value="1">Essay</option>
                                                        <option data-val="11" value="11">Homework </option>
                                                        <option data-val="12" value="12">Lab Report </option>
                                                        <option data-val="30" value="30">Literature Review</option>
                                                        <option data-val="13" value="13">Movie Review </option>
                                                        <option data-val="14" value="14">News Release </option>
                                                        <option data-val="31" value="31">Personal Statement</option>
                                                        <option data-val="32" value="32">Presentation</option>
                                                        <option data-val="36" value="36">PowerPoint Presentation</option>
                                                        <option data-val="33" value="33">Report</option>
                                                        <option data-val="3" value="3">Research Paper </option>
                                                        <option data-val="7" value="7">Research proposal </option>
                                                        <option data-val="34" value="34">Scholarship Essay</option>
                                                        <option data-val="17" value="17">School Paper </option> 
                                                        <option data-val="18" value="18">Speech </option>
                                                        <option data-val="2" value="2">Term Paper </option>
                                                        <option data-val="6" value="6">Thesis </option>
                                                        <option data-val="35" value="35">Thesis Proposal</option>
                                                      </select>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="">Assignment Deadline</label>
                                                        <input type="date" name="deadline" class="form-control" placeholder="Deadline">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Page count</label>
                                                        <input type="number" name="pagecount" class="col-md-2 form-control" placeholder="Page count">
                                                    </div>
                                                    <!-- <span class="pages col-2">Pages</span>
                                                    <div class="pages_number col-5">
                                                        <span class="input-group-btn">
                                                            <button class="quantity-left-minus btn bgdarkred white" data-type="minus" data-field="">
                                                                <span class="fa fa-minus"></span>
                                                            </button>
                                                        </span>
                                                        <input type="number" id="pages" maxlength="4" minlenght="1" value="1" name="Pages" class="form-control pages" onkeypress="if(this.value.length==4) return false;">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="quantity-right-plus btn bgdarkred white" data-type="plus" data-field="">
                                                                <span class="fa fa-plus"></span>
                                                            </button>
                                                        </span>
                                                    </div> -->
                                                    <div class="form-group">
                                                        <label for="">Description</label>
                                                        <input type="text" name="description" id="message" cols="30" rows="3" class="form-control" placeholder="Assignment details">
                                                        <label for="">Upload file</label>
                                                        <input type="file" name="file" id="file">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" name="submit" class="btn btn-primary btn-md" value="Send Message">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                        </form>
                    </div>
                    <!-- <br> -->
                    <span></span>
                    <br>
                    <div class="whyus col-md-8">
                        <!-- <br> -->
                        <div class="col-lg-12  col-md-12 ">
                        <div class="title-heading mt-4" >
                            <h1 class="h1 text-white mb-3 text-center" style="color:#007b5e"> Online Assignment Helper</h1>
                            <p class="text-center para-desc text-light hidden-xs">Get fast, reliable and quality online assignment help from our team of experts.</p>
                            <div class="watch-video mt-4 pt-2 d-none d-md-block">
                                <div class="row text-center">
                                    <!-- HERO BOX  -->
                                    <div class="col-lg-4 col-md-6 col-sm-6 mt-6">
                                        <div class="hbox-2 box-icon-sm wow fadeInUp border-right" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                                            <!-- Icon -->
                                            <i style="font-size:40px" class="fa fa-clock"></i>
                                            <!-- Text -->
                                            <div class="hbox-2-txt">
                                                <p>Timely Delivery
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- HERO BOX  -->
                                    <div class="col-lg-4 col-md-6 col-sm-6 mt-6">
                                        <div class="hbox-2 b-right box-icon-sm wow fadeInUp border-right" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                            <!-- Icon -->
                                            <i style="font-size:40px" class="fa fa-graduation-cap"></i>
                                            <!-- Text -->
                                            <div class="hbox-2-txt">
                                                <p>Best Grades Assurance</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- HERO BOX -->
                                    <div class="col-lg-4 col-md-6 col-sm-6 mt-6">
                                        <div class="hbox-2 b-right box-icon-sm wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                        <i style="font-size:40px" class="fa fa-user"></i>
                                            <!-- Text -->
                                            <div class="hbox-2-txt">
                                                <!--<p>Price Starting from 6.00 Only &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>-->
                                                <p>Certified Professional Support 24/7</p>
                                            </div>
                                        </div>
                                    </div>
                                    <span></span>
                                    <br>
                                    <span></span>
                                    <h2 style="margin-top:20%">GET IN TOUCH WITH US ON</h2>
                                    <div class="now" >
                                    <span></span>
                                    <!-- <br> -->
                                    <style>
                                       /* a:hover a i{
                                            color:black;
                                            background:red;
                                        } */
                                    </style>
                                    <a href="www.facebook.com"><i style="font-size:30px" class="fa fa-facebook ml-6 mt-6"></i></a>
                                    <a href="www.twitter.com"><i style="font-size:30px;color:skyblue" class="fa fa-twitter ml-6 mt-6"></i></a>
                                    <a href="#"><i style="font-size:30px;color:yellow" class="fa fa-snapchat ml-6 mt-6"></i></a>
                                    <a href="#"><i style="font-size:30px;color:skyblue" class="fa fa-telegram ml-6 mt-6"></i></a>
                                    <a href="#"><i style="font-size:30px;color:green" class="fa fa-wechat ml-6 mt-6"></i></a>
                                    <a href="#"><i style="font-size:30px" class="fa fa-linkedin ml-6 mt-6"></i></a>     
                                    <a href="#"><i style="font-size:30px" class="fa fa-instagram ml-6 mt-6"></i></a>     
                                    <!-- <a href="#"><i style="font-size:30px;color:red" class="fa fa-google-plus ml-6 mt-6"></i></a>      -->
                                    <!-- <a href="#"><i style="font-size:30px" class="fa fa-gmail ml-6 mt-6"></i></a>      -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        <!-- end contact -->
    </div>
    
</section>
<span>  </span>
<br>
<span></span>
<br>
<style>
    #benefits{
        border-top:1px solid lightgrey !important;
    }
</style>
<!--  -->
<section class="section" id="benefits">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h1 class="title-1" style="font-size:30px; font-weight:bold">WHY US</h1>
                    <p class="text-muted para-desc mx-auto mb-0">We offer quality assignment services to guarantee you Best grades.</p>
                    <p class=" para-desc mx-auto mb-0"><b>Assign Helper ~</b> With us Quality is guaranteed</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-lg-3 col-md-6 mt-5">
                <div class="features">
                    <i class="fa fa-users" style="font-size:30px"></i>
                    <div class="content mt-4">
                        <h4 class="title-2">Proffesional Assignment Experts</h4>
                        <p class="text-muted mb-0">Our team of proffesionals have experience in dealing with assignments of every listed Category.</p>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-3 col-md-6 mt-5">
                <div class="features">
                    <i class="fa fa-clock" style="font-size:30px"></i>
                    <div class="content mt-4">
                        <h4 class="title-2">Timely Delivery</h4>
                        <!-- <span></span> -->
                        <p class="text-muted mb-0">Timely delivery is one of our main objective, we make sure you receive your assignment before the pre-defined deadline date and time. </p>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-3 col-md-6 mt-5">
                <div class="features">
                    <i class="fa fa-clock-o" style="font-size:30px"></i>
                    <div class="content mt-4">
                        <h4 class="title-2">24/7 Customer Support </h4>
                        <p class="text-muted mb-0">We are always there for you, Got any queries, get in touch with us anytime , 24/7 via our livechat, social media or contacts provided.</p>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-3 col-md-6">
                <div class="features mt-5">
                    <i class="fa fa-diamond" style="font-size:30px"></i>
                    <div class="content mt-4">
                        <h4 class="title-2">Premium Quality </h4>
                        <p class="text-muted mb-0">We provide best assignment standards from our team of experts, to assure you of the best grades for your assignment .</p>
                    </div>
                </div>
            </div>
        </div>
            <!--end col-->
        <div class="row">
            <div class="col-lg-3 col-md-6 mt-5">
                <div class="features">
                    <i class="fa fa-shield" style="font-size:30px"></i>
                    <div class="content mt-4">
                        <h4 class="title-2">Complete Confidentiality</h4>
                        <p class="text-muted mb-0"> We have an ultimate policy for keeping your personal information and order-related details a secret, Only you can access the information.</p>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-3 col-md-6 mt-5">
                <div class="features">
                    <i class="fa fa-check" style="font-size:30px"></i>
                    <div class="content mt-4">
                        <h4 class="title-2">Authentic Sources</h4>
                        <p class="text-muted mb-0">We assure you that your document will be thoroughly checked for plagiarism and grammatical errors as we use highly authentic and licit sources. </p>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-3 col-md-6 mt-5">
                <div class="features">
                    <i class="fa fa-undo" style="font-size:30px"></i>
                    <div class="content mt-4">
                        <h4 class="title-2">Moneyback Guarantee</h4>
                        <p class="text-muted mb-0">We provide upto 100% money back if you are not satisfied with the assignment, the moneyback process is simple and only required our management approval.</p>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-3 col-md-6 mt-5">
                <div class="features">
                    <i class="fa fa-phone-volume" style="font-size:30px"></i>
                    <div class="content mt-4">
                        <h4 class="title-2">Order Tracking </h4>
                        <p class="text-muted mb-0">You don’t have to wait for an update for hours; you can track the progress of your order any time you want. We share the status after each step.</p>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="text-center mt-5 wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
            <a href="index.php?#pricing" class="btn btn-primary black-btn2 mt-3 mr-sm-2">Order Now</a>
            <a href="javascript:void(Tawk_API.toggle())" class="btn btn-success black-btn2 mt-3 mr-sm-2 bounce-effect"><i class="fa fa-envelope"></i> Get in touch</a>
        </div>
    </div>
    <!--end container-->
    <div class="container-fluid">
        <div class="row">
            <div class="home-shape-arrow">
                <img alt="image" class="img-fluid mx-auto d-block lazyload" src="includes/galuchat.png" style="">
                <!-- <a class="mouse-down"><i class="fa fa-comments"></i></a> -->
            </div>
            <!--
<li class="quickviewbtn">
                        <a title="Sit voluptatem" href="#gemma14voluptatem" data-quick-id="6891" class="detail-link quickview fa fa-external-link" tabindex="0">Quick</a>
                    </li>
-->
        </div>
        <!--end row-->
    </div> <!-- END CONTAINER -->
</section>

<!-- end of dection clear -->
<!-- start of section nnew -->
<style>
    #areas{
        border-top:1px solid lightgrey !important;
    }
</style>
<section class="section bg-light d-none d-sm-block" id="areas">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-1 pb-1">
                    <h1 class="mb-4" style="font-size:30px; font-weight:bold;">WE COVER THE FOLLOWING ASSIGNMENTS CATEGORIES</h1>
                    <p class="text-muted para-desc mx-auto mb-0">Were Here For You.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <!--end col-->
        <!-- categories -->

        <!--  -->
        
                    <div class="row text-center" id="aa">
                        <a href="#">
                        <style>
                            /* .content:hover{
                                background:#007b5e;
                                padding:5px;
                                border-radius:5px;
                            } */
                            .item{
                                /* border:1px solid grey; */
                            }
                        </style>
                        <div id="" class="item category col-lg-3 col-sm-6 col-6 mt-4 pt-2">
                            <div class="key-feature p-5 rounded shadow bg-white">
                                <div class="icon-1 icon text-center rounded-pill">
                                </div>
                                <div class="content mt-2">
                                    <h4 class="title mb-0"><i class="fa fa-check" style="background:deepskyblue;border-radius:12px;font-size:20px"></i> Essays</h4>
                                </div>
                            </div>
                        </div>
                        </a>
                        <!--end col-->
                        <div class="col-lg-3 col-sm-6 mt-4 pt-2">
                            <div class="key-feature p-5 rounded shadow bg-white">
                                <div class="icon-2 icon text-center rounded-pill">
                                </div>
                                <div class="content mt-2">
                                    <h4 class="title mb-0"><i class="fa fa-check" style="background:deepskyblue;border-radius:12px;font-size:20px"></i>Programming assignements</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mt-4 pt-2">
                            <div class="key-feature p-5 rounded shadow bg-white">
                                <div class="icon-3 icon text-center rounded-pill">
                                </div>
                                <div class="content mt-2">
                                    <h4 class="title mb-0"><i class="fa fa-check" style="background:deepskyblue;border-radius:12px;font-size:20px"></i>Case Study</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mt-4 pt-2">
                            <div class="key-feature p-5 rounded shadow bg-white">
                                <div class="icon-4 icon text-center rounded-pill">
                                </div>
                                <div class="content mt-2">
                                    <h4 class="title mb-0"><i class="fa fa-check" style="background:deepskyblue;border-radius:12px;font-size:20px"></i>Dissertation</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-lg-3 col-sm-6 mt-4 pt-2">
                            <div class="key-feature p-5 rounded shadow bg-white">
                                <div class="icon-5 icon text-center rounded-pill">
                                </div>
                                <div class="content mt-2">
                                    <h4 class="title mb-0"><i class="fa fa-check" style="background:deepskyblue;border-radius:12px;font-size:20px"></i>Term Paper</h4>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-3 col-sm-6 mt-4 pt-2">
                            <div class="key-feature p-5 rounded shadow bg-white">
                                <div class="icon-6 icon text-center rounded-pill">
                                </div>
                                <div class="content mt-2">
                                    <h4 class="title mb-0"><i class="fa fa-check" style="background:deepskyblue;border-radius:12px;font-size:20px"></i>Business Writing</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mt-4 pt-2">
                            <div class="key-feature p-5 rounded shadow bg-white">
                                <div class="icon-7 icon text-center rounded-pill">
                                </div>
                                <div class="content mt-2">
                                    <h4 class="title mb-0"><i class="fa fa-check" style="background:deepskyblue;border-radius:12px;font-size:20px"></i>Book Review</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mt-4 pt-2">
                            <div class="key-feature p-5 rounded shadow bg-white">
                                <div class="icon-9 icon text-center rounded-pill">
                                </div>
                                <div class="content mt-2">
                                    <h4 class="title mb-0"><i class="fa fa-check" style="background:deepskyblue;border-radius:12px;font-size:20px"></i>Report</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        
                        <!--end col-->
                        
                        <div class="col-lg-3 col-sm-6 mt-4 pt-2">
                            <div class="key-feature p-5 rounded shadow bg-white">
                                <div class="icon-12 icon text-center rounded-pill">
                                </div>
                                <div class="content mt-2">
                                    <h4 class="title mb-0"><i class="fa fa-check" style="background:deepskyblue;border-radius:12px;font-size:20px"></i>Article</h4>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-lg-3 col-sm-6 mt-4 pt-2">
                            <div class="key-feature p-5 rounded shadow bg-white">
                                <div class="icon-13 icon text-center rounded-pill">
                                </div>
                                <div class="content mt-2">
                                    <h4 class="title mb-0"><i class="fa fa-check" style="background:deepskyblue;border-radius:12px;font-size:20px"></i>Coursework</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-3 col-sm-6 mt-4 pt-2">
                            <div class="key-feature p-5 rounded shadow bg-white">
                                <div class="icon-15 icon text-center rounded-pill">
                                </div>
                                <div class="content mt-2">
                                    <h4 class="title mb-0"><i class="fa fa-check" style="background:deepskyblue;border-radius:12px;font-size:20px"></i>Q &amp; A</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mt-4 pt-2">
                            <div class="key-feature p-5 rounded shadow bg-white">
                                <div class="icon-16 icon text-center rounded-pill">
                                </div>
                                <div class="content mt-2">
                                    <h4 class="title mb-0"><i class="fa fa-check" style="background:deepskyblue;border-radius:12px;font-size:20px"></i>Critical Thinking
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->


<section style="background:#f8f9fa; border-top:1px solid grey">
    <div class="container" id="faqs">
        <div class="section-title text-center">
            <h1 class="h1" style="font-weight:bold">Frequently Asked Questions</h1>
            <!-- <p class="text-muted para-desc mb-0 mx-auto">.</p> -->
        </div>
        <div class="row  align-items-center">

            <!--end col-->
            <div class="col-lg-6 col-md-6 align-items-center">
                <div class="faq-content mr-lg-5">
                    <div class="accordion" id="accordionExample">
                        <div class="card border rounded shadow mb-2">
                            <a data-toggle="collapse" data-target="#collapseOne" class="faq position-relative" aria-expanded="true" aria-controls="collapseOne">
                                <div class="card-header bg-light p-3" id="headingOne">
                                    <h4 class="title mb-0 faq-question">Which subjects do you cover?</h4>
                                </div>
                            </a>
                            <div id="collapseOne" class="collapse toggle" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p class="text-muted mb-0 faq-ans">We offer a wide range of cources listed in our website, services section. </p>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card border rounded shadow mb-2">
                            <a data-toggle="collapse" data-target="#collapseTwo" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="card-header bg-light p-3" id="headingTwo">
                                    <h4 class="title mb-0 faq-question">How fast do you deliver?</h4>
                                </div>
                            </a>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p class="text-muted mb-0 faq-ans">We deliver your assigment as soon as possible within the requested duration.</p>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card border rounded shadow mb-2">
                            <a data-toggle="collapse" data-target="#collapsethree" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsethree">
                                <div class="card-header bg-light p-3" id="headingthree">
                                    <h4 class="title mb-0 faq-question">Is it possible to meet the very urgent deadlines?</h4>
                                </div>
                            </a>
                            <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p class="text-muted mb-0 faq-ans">Yes of course. Providing urgent assignment help is one of our prominent features. But, to receive the assignment within a short deadline, you need to pay extra amount.</p>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card rounded shadow mb-0">
                            <a data-toggle="collapse" data-target="#collapsefive" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsefive">
                                <div class="card-header bg-light p-3" id="headingfive">
                                    <h4 class="title mb-0 faq-question">How can i pay for my assignment?</h4>
                                </div>
                            </a>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p class="text-muted mb-0 faq-ans">You can trust us with your payments as we use the most secure transaction APIs. We accept card payments from Visa, MasterCard, American Express, and Discover.</p>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 align-items-center">
                <div class="faq-content mr-lg-5">
                    <div class="accordion" id="accordionExample">
                        <div class="card border rounded shadow mb-2">
                            <a data-toggle="collapse" data-target="#collapseOne1" class="faq position-relative" aria-expanded="true" aria-controls="collapseOne">
                                <div class="card-header bg-light p-3" id="headingOne">
                                    <h4 class="title mb-0 faq-question">Can you guarantee plagiarism-free academic work?</h4>
                                </div>
                            </a>
                            <div id="collapseOne1" class="collapse toggle" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p class="text-muted mb-0 faq-ans">Yes, we offer plagiarism-free academic work to our valued customers. </p>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card border rounded shadow mb-2">
                            <a data-toggle="collapse" data-target="#collapseTwo2" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="card-header bg-light p-3" id="headingTwo">
                                    <h4 class="title mb-0 faq-question">Who judges the quality standard of the work I ordered?</h4>
                                </div>
                            </a>
                            <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p class="text-muted mb-0 faq-ans">We have a quality control team that looks after the quality of the work. </p>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card border rounded shadow mb-2">
                            <a data-toggle="collapse" data-target="#collapsethree2" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsethree">
                                <div class="card-header bg-light p-3" id="headingthree">
                                    <h4 class="title mb-0 faq-question">Where should I send my order details?</h4>
                                </div>
                            </a>
                            <div id="collapsethree2" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p class="text-muted mb-0 faq-ans">Wherever you like; you can either send the details directly on the live chat box or send us an email. We are responsive everywhere and will definitely reply.</p>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <!--end card-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <!--  -->
        
    </div>
</section>
<!-- end of faqs -->
<!-- testimonials -->
<div class="row justify-content-center" id="testimonials">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h1 class="main-title" style="color:#007b5e;font-size:30px; font-weight:bold;">TESTIMONIALS</h1>
                    <!-- <p class="text-muted para-desc mx-auto mb-0">Although you can leverage our expertise for any writing task, we have a knack for creating flawless papers for the following document types.</p> -->
                </div>
            </div>
            <!--end col-->
        </div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    <style>
    @media(max-width:450px){
            .item .h1{
                font-size:22px;
            }
            .item{
                height:300px;
            }
    }
    </style>
      <!-- Wrapper for slides -->
      <div class=" c1 carousel-inner" style="margin-top: -1.5%; color:black;">
        <div class="item active col-md-12" style="max-height: 250px;">
          <img src="images/carousel.jpg" width="100%" height="150px">
          <div class="carousel-caption text-primary">
              <p><h4 class="h1 text-center" style="color:#007b5e">David Ngugi | Computer Science student</h4><h6>University of Nairobi</h6></p>
              <h4 class="text-center" style="color:skyblue"><u>Best assignment helper i have seen so far.</u></h4>
            <br>
          </div>
        </div>
    
        <div class="item col-md-12" style="max-height: 250px;">
        <img src="images/carousel.jpg" width="100%" height="100px">
          <div class="carousel-caption">
          <p><h4 class="h1 text-center" style="color:#007b5e">Samuel Kinuthia | Software engineering student</h4><h6>Boston University</h6></p>
              <h4 class="text text-center" style="color:skyblue"><u>I have used this platform for 2 years six months, They are the best.</u></h4>
            <br>
          </div>
        </div>
    
        <div class="item col-md-12" style="max-height: 250px;">
        <img src="images/carousel.jpg" width="100%" height="100px">
          <div class="carousel-caption" >
          <p><h4 class="h1 text-center" style="color:#007b5e">Mercy Mwikali | Clerk</h4><h6>Missisipi County Office</h6></p>
              <h4 class="text text-center" style="color:skyblue"><u>This site is provides great services i can say, thanks to them.</u></h4>
            <br>
          </div>
        </div>
      </div>
    
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<!-- end of testimonials -->
    
<!-- end of testimonials -->
<?php include 'includes/footer.php';?>
</body>
</html>
<script>
$(window).scroll(function() {
        //        alert($("#placeorder_sidebar").height()); //846.6
        //alert($(".promo-error-container").height()); // 918.6
        var sidebar_height = $("#placeorder_sidebar").height();
        var msg_height = $(".promo-error-container").height();
        if ($("#placeorder_sidebar").height() > 900) {
            var scrollPos = $(window).scrollTop();
            if (scrollPos > 80 && scrollPos <= 442) {
                $('#placeorder_sidebar').addClass('sidebar_sticky').removeClass('sidebar_sticky_abs_error');
            } else if (scrollPos > 442) {
                $('#placeorder_sidebar').removeClass('sidebar_sticky').addClass('sidebar_sticky_abs_error');
            } else {
                $('#placeorder_sidebar').removeClass('sidebar_sticky').removeClass('sidebar_sticky_abs_error');
            }

        } else {
            var scrollPos = $(window).scrollTop();
            if (scrollPos > 80 && scrollPos <= 515) {
                $('#placeorder_sidebar').addClass('sidebar_sticky').removeClass('sidebar_sticky_abs');
            } else if (scrollPos > 515) {
                $('#placeorder_sidebar').removeClass('sidebar_sticky').addClass('sidebar_sticky_abs');
            } else {
                $('#placeorder_sidebar').removeClass('sidebar_sticky').removeClass('sidebar_sticky_abs');
            }
        }

    });

</script>
<!-- Main Js -->
<script src="includes/ultraexpeditious.js"></script>
<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/601ed14da9a34e36b9747d72/1ets6377c';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script--><!--  -->


<!--  -->
<!--End of Tawk.to Script-->
<script>
    $(document).ready(function() {
        $('#topnav #nav_responsive.navbar-collapse.collapse a').click(function() {
            $('#topnav #nav_responsive').removeClass('show');
        });
        //Navigation menu on mobile click
        $('#topnav #nav_responsive.navbar-collapse.collapse a').click(function() {
            $('#topnav #nav_responsive').removeClass('show');
        });
        //Call btn dektop disbale
        if ($(window).width() > 767) {
            $('#topnav .navbar_btns li a.btn_tel, .btn_tell').attr("href", "javascript: void(0);");
        }
    });

</script>
<div id="VLOaEf6-1612162005471" class="" style="display: block !important;"><iframe id="bCoM5Nj-1612162005474" src="./Achieve Success in College with Reliable Services Online _ AssignmentMavens_files/saved_resource(1).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: auto !important; left: auto !important; position: static !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 350px !important; height: 520px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; display: none !important;"></iframe><iframe id="Tw6kMDC-1612162005475" src="./Achieve Success in College with Reliable Services Online _ AssignmentMavens_files/saved_resource(2).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; transition-property: none !important; z-index: 1000001 !important; cursor: auto !important; float: none !important; pointer-events: auto !important; box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 10px 0px !important; height: 60px !important; min-height: 60px !important; max-height: 60px !important; width: 60px !important; min-width: 60px !important; max-width: 60px !important; border-radius: 50% !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center !important; margin: 0px !important; top: auto !important; bottom: 20px !important; right: 20px !important; left: auto !important; display: block !important;"></iframe><iframe id="UwJPfVZ-1612162005476" src="./Achieve Success in College with Reliable Services Online _ AssignmentMavens_files/saved_resource(3).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; z-index: 1000003 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; top: auto !important; bottom: 60px !important; right: 15px !important; left: auto !important; width: 21px !important; max-width: 21px !important; min-width: 21px !important; height: 21px !important; max-height: 21px !important; min-height: 21px !important; display: block !important;"></iframe><div class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 100% !important; display: none !important; z-index: 1000001 !important; cursor: move !important; float: left !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="jQs6OPz-1612162005471" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: w-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="okg1x6g-1612162005472" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: n-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="S0yVJuU-1612162005472" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: nw-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><iframe id="g5LsLH3-1612162005547" src="./Achieve Success in College with Reliable Services Online _ AssignmentMavens_files/saved_resource(4).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 378px !important; height: 592px !important; display: none !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; bottom: 100px !important; top: auto !important; right: 20px !important; left: auto !important;"></iframe></div></body></html>
<?php
// include("includes/footer.php");
function sendmail($toaddress,$subject,$message)
{
	require 'phplist3-master/public_html/lists/admin/PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;
	
	$mail->SMTPDebug = 0;                               // Enable verbose debug output
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'ngugidavid1001@gmail.com';                 // SMTP username
	$mail->Password = 'Shadow-walker1';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	
	$mail->From = 'ngugidavid1001@gmail.com';
	$mail->FromName = 'Web Mall';
	$mail->addAddress($toaddress, 'assignment helper');     // Add a recipient
	$mail->addAddress($toaddress);               // Name is optional
	$mail->addReplyTo('ngugidavid1001@gmail.com', 'Information');
	$mail->addCC('ngugidavid46@gmail.com');
	$mail->addBCC('ngugidavid1001@gmail.com');
	
	// $mail->addAttachment('hmss/images/deantal3.png');         // Add attachments
	// $mail->addAttachment('hmss/images/deantal3.png', 'new.png');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = $subject;
	$mail->Body    = $message;
	$mail->AltBody = $subject;
	
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo '<center><strong><font color=green>Mail sent.</font></strong></center>';
	}
}
?>

<!-- https://ads.google.com/aw/signup/payment?ocid=645202755&subid=KE-en-xs-ip-gmb_aw_qual-sf-dw-acce&name=assignment+helper&hl=en&authuser=6&uscid=645202755&__c=6927413995&euid=490232778&__u=5440918522 -->