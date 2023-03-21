

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hot_Pot_Events</title>

    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="common.css" rel="stylesheet" />
    <link href="property_detail.css" rel="stylesheet" />
    <style>
    .dfle{
        float:right;
    }
</style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="logout.php">Log_Out</a>
                </li>
                
              </ul>
            </div>
            <div class="dfle">
              <form class="d-flex" role="search" >
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
            
          </div>
        </nav>
      </header>
      

    <div id="loading">
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Hot Pot Events</a>
            </li>
           
        </ol>
    </nav>

    <div id="property-images" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#property-images" data-slide-to="0" class="active"></li>
            <li data-target="#property-images" data-slide-to="1" class=""></li>
            <li data-target="#property-images" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="new-year-event.png" alt="slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Vajra_Events_Wedding.png" alt="slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="download.png" alt="slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#property-images" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#property-images" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="property-summary page-container">
        <div class="row no-gutters justify-content-between">
            <div class="star-container" title="4.8">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="interested-container">
                <i class="is-interested-image far fa-heart"></i>
                <div class="interested-text">
                    <span class="interested-user-count">6</span> Likes
                </div>
            </div>
        </div>
        <div class="detail-container">
            <div class="property-name">Honey Pot Events</div>
            <div class="property-address">Flat No:302,Andhra bank building,Banjara Hills,Hyderabad-500034</div>
            
        </div>
        <div class="row no-gutters">
            <div class="rent-container col-6">
                <div class="rent">From 50,000/-</div>
                <div class="rent-unit">per event</div>
                
            </div>
            <div class="button-container col-6">
                <a href="https://forms.gle/4BYhy3jy3P6X233EA" class="btn btn-primary">Book Now</a>
            </div>
        </div>
    </div>

    <div class="property-amenities">
        <div class="page-container">
            <h1>Amenities</h1>
            <div class="row justify-content-between">
                <div class="col-md-auto">
                    <h5>Power Backup</h5>
                    <h5>Catering</h5>
                    <h5>Cooking</h5>
                    <h5>Stage Decor</h5>
                    <h5>Sound System</h5>
                    <h5>Fans</h5>
                    <h5>Projectors</h5>
                    <h5>Bands</h5>
                    <h5>Live Singers</h5>
                    <h5>Orchestra</h5>
                    <h5>Lighting</h5>
                    
                </div>
            </div>
        </div>
    </div>


    <div class="property-about page-container">
        <h1>About</h1>
        <p>Our event management company specializes in creating memorable and successful events for our clients. We provide a wide range of services, including event planning, coordination, and execution. Our team of experienced professionals is dedicated to understanding our clients' needs and creating custom solutions to exceed their expectations. Whether it's a corporate event, a private party, or a public festival, we have the skills and resources to make it a success. From venue selection to entertainment, catering to logistics, we handle every aspect of event planning and execution. Contact us today to discuss how we can make your next event truly special.</p>
    </div>

    <div class="property-rating">
        <div class="page-container">
            <h1>Property Rating</h1>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">
                    <div class="rating-criteria row">
                        <div class="col-6">
                            <i class="rating-criteria-icon fas fa-broom"></i>
                            <span class="rating-criteria-text">Cleanliness</span>
                        </div>
                        <div class="rating-criteria-star-container col-6" title="4.3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>

                    <div class="rating-criteria row">
                        <div class="col-6">
                            <i class="rating-criteria-icon fas fa-utensils"></i>
                            <span class="rating-criteria-text">Food Quality</span>
                        </div>
                        <div class="rating-criteria-star-container col-6" title="3.4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>

                    <div class="rating-criteria row">
                        <div class="col-6">
                            <i class="rating-criteria-icon fa fa-lock"></i>
                            <span class="rating-criteria-text">Safety</span>
                        </div>
                        <div class="rating-criteria-star-container col-6" title="4.8">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="rating-circle">
                        <div class="total-rating">4.2</div>
                        <div class="rating-circle-star-container">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="property-testimonials page-container">
        <h1>What people say</h1>
        <div class="testimonial-block">
           
            <div class="testimonial-text">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p><br/> Excellent service...Vijay was very professional and helpful to find out what exactly we were looking for.Event was fabulous,experienced,and very affordable.The team did a great job</p>
            </div>
            <div class="testimonial-name">- Ravinder </div>
        </div>
        <div class="testimonial-block">

            <div class="testimonial-text">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p><br/>Superb....</p>
            </div>
            <div class="testimonial-name">- Chenna </div>
        </div>
    </div>
    
                

    <footer class="container">
        <hr class="featurette-divider"> 
        <!--Section: Contact v.2-->
    <section class="mb-4">
    
      <!--Section heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
          a matter of hours to help you.</p>
    
      <div class="row">
    
          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form" action="mail.php" method="POST">
    
                  <!--Grid row-->
                  <div class="row">
    
                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="text" id="name" name="name" class="form-control">
                              <label for="name" class="">Your name</label>
                          </div>
                      </div>
                      <!--Grid column-->
    
                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="text" id="email" name="email" class="form-control">
                              <label for="email" class="">Your email</label>
                          </div>
                      </div>
                      <!--Grid column-->
    
                  </div>
                  <!--Grid row-->
    
                  <!--Grid row-->
                  <div class="row">
                      <div class="col-md-12">
                          <div class="md-form mb-0">
                              <input type="text" id="subject" name="subject" class="form-control">
                              <label for="subject" class="">Subject</label>
                          </div>
                      </div>
                  </div>
                  <!--Grid row-->
    
                  <!--Grid row-->
                  <div class="row">
    
                      <!--Grid column-->
                      <div class="col-md-12">
    
                          <div class="md-form">
                              <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                              <label for="message">Your message</label>
                          </div>
    
                      </div>
                  </div>
                  <!--Grid row-->
    
              </form>
    
              <div class="text-center text-md-left">
                  <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
              </div>
              <div class="status"></div>
          </div>
          <!--Grid column-->
    
          <!--Grid column-->
          <div class="col-md-3 text-center">
              <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>Cbit,Gandipet,500075.</p>
                  </li>
    
                  <li><i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>+91-9876543210</p>
                  </li>
    
                  <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>cbit12@gmail.com</p>
                  </li>
              </ul>
          </div>
          <!--Grid column-->
    
      </div>
    
    </section>
    <!--Section: Contact v.2-->
    
        <!-- /END THE FEATURETTES -->
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; @it3 miniproject batch8 &middot; <a href="privacy.html">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>
