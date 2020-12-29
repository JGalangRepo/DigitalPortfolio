<div class="container-fluid" id="contactFormContainer">
            <div class="row" id="contactContainer">
                <div class="col-sm-6">
                <div class="container jumbotron">
                    <h3 class="text-center" id="contactTitle"> Contact Details</h3>
                    <div class="container" >
                        <p id="paragraphContact"> Do you want to ask more about the details that I shared with my portofolio?
                            Don't hesitate to contact me.</p>
                        </div>
                    <div class="container">
                        <p class="mt-5 designText"> <i class="fa fa-envelope-square fa-lg" aria-hidden="true"> Email</i> </p>
                         <p class="contactName"> jape.galang@up.phinma.edu.ph </p>
                        <h3 class="mt-5 designText"> <i class="fa fa-twitter-square fa-lg" aria-hidden="true"> Twitter</i> </h3>
                        <p class="contactName"> @galangjairus </p>
                        <h3 class="mt-5 designText"> <i class="fa fa-phone-square fa-lg" aria-hidden="true"> Phone Number</i> </h3>
                        <p class="contactName"> 09182530466 </p>
                        </div>
                    </div>    
                </div>
                <div class="col-sm-6">
                    <div class="container jumbotron">
                    <form action="./includes/insertdata.php" method="POST">
                    <div class="form-group text-center">
                        <p id="titleForm"> Let me kow your feedback </p>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Your Name</label>
                        <input type="text" name="fullname" class="form-control" id="inputName" placeholder="Enter your name...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="emailaddress" class="form-control" id="exampleInputEmail1" placeholder="Enter your email...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSubject">Subject</label>
                        <input type="text" name="mailSubject" class="form-control" id="exampleInputSubject" placeholder="Enter the subject...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your message here..."></textarea>
                    </div>
                    <div class="form-group text-center" style="margin-top: 10px;">
                        <input type="submit" name="submit" class="btn btn-primary form-control" value="Send">
                    </div>
                    </form>
                    </div>
                </div>
        </div>
    </div>
    <div class="container mt-5" id="testimonialForms">
            <div class="container">
                <h3 class="text-center" id="testimonialTitle"> Testimonials</h3>
            </div>
        <div class="container" id="testimonialsContainer">
            <!-- First Testimonial -->
                <div class="col-md-12 col-lg-4 col-sm-6 mt-2">
                    <div class="card" style="width: 18rem;">
                    <div class="embed-responsive embed-responsive">
                        <img class="card-img-top img-responsive zoom" height="230" width="350" src="./images/IntroductDSC.png" alt="Card image cap">
                    </div>
                        <div class="card-body">
                            <h5 class="card-title">Introduction to DSC</h5>
                            <p class="card-text">A webinar that was conducted by DSC UPang Chapter to Introduce what is Developer Stdents Club...</p>
                            <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#DSCIntroductionModal">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
            <!-- Second Testimonial -->
                <div class="col-md-12 col-lg-4 col-sm-6 mt-2">
                    <div class="card" style="width: 18rem;">
                    <div class="embed-responsive embed-responsive">
                        <img class="card-img-top img-responsive zoom" height="230" width="350" src="./images/DSCUPANG.png" alt="Card image cap">
        </div>
                        <div class="card-body">
                            <h5 class="card-title">Google Dev Badges</h5>
                            <p class="card-text">The badges that I earned during DSCPH Android Week. We did some activities using Kotlin...</p>
                            <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#GoogleDevModal">
        Read more
        </button>
                        </div>
                    </div>
                </div>
                <!-- Third Testimonial -->
                <div class="col-md-12 col-lg-4 col-sm-6 mt-2">
                    <div class="card" style="width: 18rem;">
                    <div class="embed-responsive embed-responsive">
                        <img class="card-img-top img-responsive zoom" height="230" width="350" src="./images/FetchAPI.jpg" alt="Card image cap">
        </div>
                        <div class="card-body">
                            <h5 class="card-title">Introduction to Fetch API</h5>
                            <p class="card-text">A webinar conducted by DSC UPang and the speaker was Sir Chester Bautista...</p>
                            <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#IntroToFetchAPI">
        Read more
        </button>
                        </div>
                    </div>
                </div>
                <!-- Fourth Testimonial -->
                <div class="col-md-12 col-lg-4 col-sm-6 mt-2">
                    <div class="card" style="width: 18rem;">
                    <div class="embed-responsive embed-responsive">
                        <img class="card-img-top img-responsive zoom" height="230" width="350" src="./images/GDGCertificate.png" alt="Card image cap">
        </div>
                        <div class="card-body">
                            <h5 class="card-title">GDG Devfest Certificate</h5>
                            <p class="card-text">A webinar conducted by Google, wherein we explore new technologies and current trends...</p>
                            <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#GDGDevfestModal">
        Read more
        </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>