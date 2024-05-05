<?php include "header.php" ?>
<style>
    .reaction-box{
        display: flex;
    }
    
    .reaction-box .reaction{
        width: 60px;
        height: 60px;
        border-radius:50%;
        background: rgb(234,245,255);
        display: flex;
        justify-content: center;
        align-items:center;
        margin-left: 10px;
        transition: ease-in-out 400ms;
        cursor:pointer;
        border:none;
    }
    .reaction-box .reaction .bi{
        font-size: 1.8rem;
        color: rgb(136,160,185);
        transition: ease-in-out 400ms;
    }
    .reaction-box .happy:hover{
        background: rgb(39,129,178);
        color: rgb(39,129,178);
    }
    .reaction-box .happy .bi:hover{
        color: white;
        transform: scale(1.1);
    }
    .reaction-box .reactionless:hover{
        background: rgb(204,210,152);
        color: rgb(39,129,178);
    }
    .reaction-box .reactionless .bi:hover{
        color: white;
        transform: scale(1.1);
    }
    .reaction-box .sad:hover{
        background: rgb(142,85,85);
    }
    .reaction-box .sad .bi:hover{
        color: white;
        transform: scale(1.1);
    }
    .rating-box{
        display: flex;
        justify-content: space-between;
    }
    .rating-box .rating{
        width: 60px;
        height: 60px;
        border-radius:50%;
        background: rgb(234,245,255);
        display: flex;
        justify-content: center;
        align-items:center;
        transition: ease-in-out 400ms;
        cursor:pointer;
        border: none;
        
    }
    .rating-box .rating1:hover{
        background: rgb(135,160,173);
        color: white;
        font-weight:bold;
    }
    .rating-box .rating2:hover{
        background: rgb(150,192,205);
        color: white;
        font-weight:bold;
    }
    .rating-box .rating3:hover{
        background: rgb(127,194,199);
        color: white;
        font-weight:bold;
    }
    .rating-box .rating4:hover{
        background: rgb(127,213,173);
        color: white;
        font-weight:bold;
    }
    .rating-box .rating5:hover{
        background: rgb(102,225,172);
        color: white;
        font-weight:bold;
    }
</style>
    <div class="overlay"></div>
    <div class="section page-banner">

                <img class="shape-1 animation-round" src="assets/Image/shape/shape-8.png" alt="Shape">

                <img class="shape-2" src="assets/Image/shape/shape-23.png" alt="Shape">

                <div class="container">
                    <!-- Page Banner Start -->
                    <div class="page-banner-content">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Feedback</li>
                        </ul>
                        <h2 class="title">Feedback <span>IGrow++</span></h2>
                    </div>
                    <!-- Page Banner End -->
                </div>

                <!-- Shape Icon Box Start -->
                <div class="shape-icon-box">

                    <img class="icon-shape-1 animation-left" src="assets/Image/shape/shape-5.png" alt="Shape">

                    <div class="box-content">
                        <div class="box-wrapper">
                            <i class="flaticon-badge"></i>
                        </div>
                    </div>

                    <img class="icon-shape-2" src="assets/Image/shape/shape-6.png" alt="Shape">

                </div>
                <!-- Shape Icon Box End -->

                <img class="shape-3" src="assets/Image/shape/shape-24.png" alt="Shape">

                <!-- <img class="shape-author" src="assets/Image/images/author 1.jpg" alt="Shape"> -->
                <img class="shape-author" src="author 1.jpg" alt="Shape">


    </div>
            <div class="section section-padding">
                <div class="container">

                    <!-- Contact Wrapper Start -->
                    <div class="contact-wrapper">
                        <div class="row align-items-center">
                            <div class="col-lg-6">

                                <!-- Contact Info Start -->
                                <div class="contact-info">

                                    <img class="shape animation-round" src="assets/Image/shape/shape-12.png" alt="Shape">

                                    <div class="about-content">
                                    <h5 class="sub-title">Welcome to feedback IGrow++.</h5>
                                    <h2 class="main-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. <span>lorem ipsum .</span></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae reiciendis, sunt numquam nesciunt rerum ea optio dolor culpa eos nisi eveniet voluptates error aspernatur provident nihil tenetur saepe dicta nostrum. Molestias, libero. Laborum eaque repellat dolore aliquid facere, cupiditate earum quae excepturi consequuntur vel consequatur iure ea sed velit magni.</p>
                                </div>                          
                                </div>                            
                                <!-- Contact Info End -->

                            </div>
                            <div class="col-lg-6">

                                <!-- Contact Form Start -->
                                <div class="contact-form">
                                    <h3 class="title">Feedback <span>Us</span></h3>

                                    <div class="form-wrapper">
                                        <form id="" action="sendsms.php" method="POST">
                                        <!-- <form id="contact-form" action="/sendsms.php" method="POST"> -->
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <p>How would you described your mood after using our product for first time ?</p>
                                                <ul class='reaction-box'>
                                                    <li >
                                                        <button title='Happy' class="happy reaction">
                                                            <i class='bi bi-emoji-smile-fill'></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button title='No reaction' class="reactionless reaction">
                                                            <i class="bi bi-emoji-expressionless-fill"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button  title='Sad' class="sad reaction">
                                                            <i class="bi bi-emoji-frown-fill"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mt-2">
                                                <p>How would you rate the quality of our product</p>
                                                <ul class='rating-box'>
                                                    <li><input class='rating rating1' type="button" name="rate1" id="" Value='1'></li>
                                                    <li><input class='rating rating2' type="button" name="rate1" id="" Value='2'></li>
                                                    <li><input class='rating rating3' type="button" name="rate1" id="" Value='3'></li>
                                                    <li><input class='rating rating4' type="button" name="rate1" id="" Value='4'></li>
                                                    <li><input class='rating rating5' type="button" name="rate1" id="" Value='5'></li>
                                                </ul>
                                            </div>
                                            <div class="single-form">
                                                <input type="text" name="name" placeholder="Name" required="">
                                            </div>
                                            <!-- Single Form End -->
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input type="email" name="email" placeholder="Email" required="">
                                            </div>

                                                    <!-- ---------Dropdown with Country Code Start--------- -->
                                            <div class="single-form">
                                            <input class="mt-1" type="text" name="phone" id="contact" placeholder="Enter phone number" required="">
                                            <p id="result"></p>
                                            </div>
                                            <div class="single-form">
                                                <textarea type="text" name="feedback" id="feedback" placeholder="Anything you'd like to add? Your input is valuable to us" required cols="30" rows="10"></textarea>
                                                <p id="result"></p>
                                            </div>
                                            <div class="single-form">
                                                <button type="submit" class="btn btn-primary btn-hover-dark w-100">Send Feedback <i class="flaticon-right"></i></button>
                                            </div>
                                            <!-- Single Form End -->
                                        </form>
                                    </div>
                                </div>
                                <!-- Contact Form End -->

                            </div>
                        </div>
                    </div>
                    <!-- Contact Wrapper End -->

                </div>
            </div>
    <!-- Footer Start  -->
    <div class="section footer-section">

        <!-- Footer Widget Section Start -->
        <div class="footer-widget-section">

            <img class="shape-1 animation-down" src="assets/Image/shape/shape-21.png" alt="Shape">

            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">

                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <div class="widget-logo">
                                <a href="index.php"><img src="assets/Image/Logo-1.png" width="160px" height="55px" alt="Logo"></a>
                            </div>

                            <div class="widget-address">
                                <h4 class="footer-widget-title"></h4>
                            </div>
                            
                            <ul class="widget-social">
                                <li><a href="https://www.facebook.com/igrowplusplus" target="_blank"><i class="flaticon-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/igrowplusplus/" target="_blank"><i class="flaticon-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/company/igrowplusplus/" target="_blank"><i class="flaticon-linkedin"></i></a></li>
                <li style="margin-top: -3px;"><a href="https://www.youtube.com/@I-Growplusplus" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer Widget End -->

                    </div>
                    <div class="col-lg-6 order-md-3 order-lg-2">

                        <!-- Footer Widget Link Start -->
                        <div class="footer-widget-link">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Category</h4>

                                <ul class="widget-link">
                                    <li><a href="#">All Courses</a></li>
                                    <li><a href="#">International Courses</a></li>
                                </ul>

                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Quick Links</h4>

                                <ul class="widget-link">
                                    <li><a href="about.php">About</a></li>
                                    <!-- <li><a href="blog.">Blog</a></li> -->
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="policy.php">Privacy policy</a></li>
                                    <!-- <li><a href="#">International Course</a></li> -->
                                    <!-- <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li> -->
                                </ul>

                            </div>
                            <!-- Footer Widget End -->

                        </div>
                        <!-- Footer Widget Link End -->

                    </div>
                    <div class="col-lg-3 col-md-6 order-md-2 order-lg-3">

                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Office Address</h4>

                            <div class="widget-subscribe">
                                <p>Harbans Niwas Hill colony Kulti. Dist-Bardhman <br> Pin-713343 <br> West Bengal.</p>
                                <ul class="widget-info">
                                    <li>
                                        <p><i class="fa fa-whatsapp"></i> <a href="https://wa.me/918733060035">+91 8733060035</a></p>
                                        <p><i class="flaticon-phone-call"></i> <a href="tel:+91 9832838960">+91 9832838960</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget End -->

                    </div>
                </div>
            </div>

            <img class="shape-2 animation-left" src="assets/Image/shape/shape-22.png" alt="Shape">

        </div>
        <!-- Footer Widget Section End -->

        <!-- Footer Copyright Start -->
        <div class="footer-copyright">
            <div class="container">

                <!-- Footer Copyright Start -->
                <div class="copyright-wrapper">
                    <!-- <div class="copyright-link">
                        <a href="#">Terms & Conditions</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Sitemap</a>
                        <a href="#">Security</a>
                    </div> -->
                    <div class="copyright-text">
                        <p>&copy; <?php echo date('Y');?> | All Right Reserved.<span> IGrow++ </span> Powered By <a href="https://ficuslot.com/" target="_blank">Ficuslot Innovation Pvt Ltd.</a></p>
                    </div>
                </div>
                <!-- Footer Copyright End -->

            </div>
        </div>
        <!-- Footer Copyright End -->

    </div>
    <!-- Footer End -->

<!--Back To Start-->
<a href="#" class="back-to-top">
<i class="icofont-simple-up"></i>
</a>
<!--Back To End-->
</div>
</body>
</html>