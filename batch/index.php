<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Eventify</title>
  <!-- Bootstrap -->
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
<!-- fontawesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- css -->
  <link rel="stylesheet" href="css/styles.css">
  <!-- google fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;900&family=Ubuntu:wght@300;400;700&display=swap"
    rel="stylesheet">

</head>
<style>
  #title{
    background-color: #85CDFD;
    color:#f8f9fA;
}
body{
    font-family: "Montserrat";
}
h1{
    font-family: "Montserrat";
    font-size: 3.5rem;
    line-height: 1.5;
    font-weight:900;
  
}
h2{
    font-family: "Montserrat";
    font-weight: bold;
    font-size: 3rem;
    line-height: 1.5;
}
h3{
    font-family: "Montserrat";
    font-weight: bold;
}
p{
    color:#8f8f8f;
}
.container-fluid{
    padding : 3% 15% 7%;
}
.navbar{
    padding: 0 0 4.5rem 0;
}
.navbar-brand{
    font-family: "Ubuntu";
    font-size: 2.5rem;
    font-weight: 510;
   
}
.nav-item{
    padding :0 18px;
    
}
 .image{
   transform:  rotate(25deg);
   position:absolute;
   right: 30%;
   width: 60%;
} 
@media (max-width:1028px){
    #title{
        text-align: center;
    }
    .image{
        position: static;
        transform: rotate(0);
        
    }
    .title-image{
        position: static;
    }
}
.title-image{
   
   position:relative;
   
}
.nav-link{
    font-size: 1.2rem;
    font-family: "Montserrat";
    font-weight: 300;
}

/* Download-button */
.download-button{
    margin:5% 3% 5% 0;
}
#features{
    padding:7% 15%;
    background-color: #fff;
    position: relative;
    z-index: 1;
}
.feature-box{
    text-align: center;
    padding: 5%;
}
.icon{
    color : #ef8172; 
    margin-bottom: 1rem;

}
.icon:hover{
    color:#ff4c68;
}
#testimonials{
    
    text-align: center;
    background-color: #ef8172;
    color: #fff;
}
.carousel-item{
    padding:7% 15%;
}
.testimonial-image{
    width: 10%;
    border-radius: 100%;
    margin :20px;
}
#press{
    background-color: #ef8172;
    text-align: center;
    padding-bottom: 3%;
}
.press-logo{
    width: 15%;
    padding:20px 20px 50px;
}
#pricing{
    padding:100px;
    text-align: center;
}
.pricing-column {
    padding: 3% 2%;
}
#cta{
    background-color: #ff4c68;
    text-align: center;
    padding: 7% 15%;
}
.h3-text{
    color: #fff;
    
    font-family: "Montserrat";
    font-weight: bold;
    font-size: 3.5rem;
    line-height: 1.5;
}
.download-button-2{
    margin: 5% 3% 0% 0%;
}
#footer{
    padding: 7% 15%;
    text-align: center;
}
.social-icons{
    color: black;
    margin: 20px 10px;
}
.copyright{
    margin: 2% 3% 2% 3%;   
}
</style>


<body>

  <section id="title">

    <!-- Nav Bar -->
    <div class="container-fluid">
      <nav class="navbar navbar-expand-md navbar-dark ">
        <a class="navbar-brand"><i class="fa-solid fa-camera"></i> Eventify</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="login.php">LOGIN</a>
            </li >
            <li class ="nav-item">
              <a class="nav-link" href="signup.php">SIGNUP</a>
            </li>
            
          </ul>
        </div>

      </nav>



      <!-- Title -->
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <h1>GET NEW EVENTS ALL AT ONE PLACE .</h1>
         </div>
      
      </div>
    </div>
  </section>


  <!-- Features -->
  <section id="features">
    <div class = "row">
    <div class="feature-box col-lg-4">
      <i class="icon fa-solid fa-circle-check fa-4x"></i>
      <h3>Easy to use.</h3>
      
    </div>
    <div class="feature-box col-lg-4">
      <i class="icon fa-solid fa-bullseye fa-4x"></i>
      <h3>Elite Clientele</h3>
  
    </div>
    <div class="feature-box col-lg-4">
      <i class="icon fa-solid fa-heart fa-4x"></i>
      <h3>Guaranteed to work.</h3>
     
    </div>
  </div>
  </section>


  


  <!-- Footer -->

  <footer id="footer">
    <div>
      <a class="social-icons" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
      <a class="social-icons" href="https://twitter.com/?lang=en-in">
        <i class="fa-brands fa-twitter"></i>
      <a class="social-icons" href="mailto:prashant@gmail.com"><i class="fa-solid fa-envelope"></i></a>
    </a>
    <a class="social-icons" href="https://www.facebook.com/">
      <i class="fa-brands fa-facebook"></i>
    </a>
    
    <p class="copyright">© Copyright 2023 it3_Mini project</p>

  </footer>


</body>

</html>