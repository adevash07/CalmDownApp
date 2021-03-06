<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CalmDown</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link href='https://fonts.googleapis.com/css?family=Nunito+Sans' rel='stylesheet' type='text/css'>
 <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Started project here-->  
  <header class="mb-5">
    <section class="nav container-fluid py-1 fixed-top">
      <div class="container">
        <div class="row">
          <nav class="col-12 navbar">
            <a href="#" class="navbar-brand">CalmDown</a>
            <p class="mb-0">Coming to your mobile soon...</p>
          </nav>
      </div>
    </div>
  </section>
<section id="header" class="container-fluid headerInto mt-5 pt-3">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-7 flex-column flex-start my-5">
        <h1 class="headerH5 mb-3"> &mdash;  AI Voice Assitant</h1>
        <h5 class="headerH1 mb-4">Conversation <br> Regulator</h5>
        <h5 class="headerH6 mt-3 mb-4">The artificial intelligence voice assistant that helps you 
        to regulate your conversations and not go overboard. Coming
        soon, join the waitlist now..</h5>
        <form action="php/signUp.inc.php" method="POST" class="d-none d-md-block">
          <div class="formInput searchWrapper input-group mb-5">
            <input type="search" name="email" id="searchBar" class="form-control rounded-pill" placeholder="Email Address" aria-label="searchBar"
                      aria-describedby="searchBar" required>
            <div class="input-group-append">
              <button type="submit" class="input-group-text text-white rounded-pill bg-primary px-5" id="success1">Subcribe</button>
            </div>
          </div>
        </form>
        
        
        <!-- Optional Input  -->
        <form action="php/signUp.inc.php" method="POST" class="d-block d-md-none mt-5">
          <div class="formInput col-12 input-group mb-3">
            <input type="search" name="email" id="searchBar2" class="form-control text-center rounded-pill" placeholder="Enter Email Address" aria-label="searchBar"
                      aria-describedby="searchBar" required>
            </div>
            <div class="formInput col-12">
              <button type="submit" class="input-group-text searcher w-100 d-flex justify-content-center text-white rounded-pill bg-primary px-5" id="success1"><span class="text-center">Subcribe<span></button>
            </div>
        </form>
      </div>

      <div class="col-12 col-md-5 d-flex justify-content-center justify-content-md-end pr-0">
        <img src="img/headerImg.svg" class="pr-0 rotate img-fluid wow slideInRight slow" alt="CalmDown App Image Prototype">
      </div>
    </div>
  </div>
</section>
  </header>
<script type="text/javascript">
        alert('Subcribtion to our newsletters was sucessful, thanks');
        window.location.replace('https://calmdown.herokuapp.com/calm.php');
</script>
  <!--HEADER END HERE-->
 
  <section id="services" class="container-fluid p-5">
  <div class="container p-3">
    <div class="row justify-content-center">
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center flex-wrap flex-md-nowrap">
          <div class="rounded mb-3 yourDash mr-0 mr-md-3 ml-0 ml-lg-5 animated pulse slow infinite">
            <div class="media my-4 pl-4 pr-3">
                <img src="img/put.svg" class="img-fluid icon" alt="..."></span>
            </div>
            <div class="pl-4 pr-4 pb-3">
              <div class="media-body auth">
                <h5 class="mt-0 mb-1"><span class="stronger animated">Equalizer</span></h5>
                Voice tone equalizer and regulation suggestion, helps to keep you calm and reserved
              </div>
            </div>
          </div>

          <div class="rounded mb-3 activeDash mr-0 mr-md-3 animated pulse slow delay-1s infinite">
            <div class="media my-4 pl-4 pr-3">
              <img src="img/put2.svg" class="img-fluid icon" alt="..."></span>
            </div>
            <div class="pl-4 pr-4 pb-3">
              <div class="media-body auth">
                <h5 class="mt-0 mb-1"><span class="stronger">AI Assistant</span></h5>
                With your very own personal conversation expert in your pocket, you won’t get to say a wrong word again
              </div>
            </div>
          </div>

          <div class="rounded mb-3 yourDash mr-0 mr-md-3 animated pulse slow infinite">
            <div class="media my-4 pl-4 pr-3">
              <img src="img/put33.svg" class="img-fluid icon" alt="..."></span>
            </div>
            <div class="pl-4 pr-4 pb-3">
              <div class="media-body auth">
                <h5 class="mt-0 mb-1"><span class="stronger">Handsfree</span></h5>
                Headset, headphone and audio wireless devices supported, have your app operating without having to touch it.
              </div>
            </div>
          </div>

          <div class="rounded mb-3 yourDash mr-0 mr-md-3 pulse animated slow delay-1s infinite">
            <div class="media my-4 pl-4 pr-3">
              <img src="img/put4.svg" class="img-fluid icon" alt="..."></span>
            </div>
            <div class="pl-4 pr-4 pb-3">
              <div class="media-body auth">
                <h5 class="mt-0 mb-1"><span class="stronger">Recorder</span></h5>
                Voice recorder to record your business and sensitive conversations for future purposes.
              </div>
            </div>
          </div>
      </div>
    </div>
   </div>
</section>

<section class="container-fluid my-3">
  <div class="container py-3">
    <div id="show" class="row my-5 wow slideInLeft fast">
          <div class="col-5 wrapper py-5">
              <div class="mx-auto d-flex justify-content-end animated pulse slow delay-1s infinite"><img src="img/fone1.svg" class="ml-3 img-fluid icon" width="100%"
                alt="...">
              </div>
            </div>
            <div class="case col-7 wow slideInRight slow d-flex flex-column justify-content-center align-items-center">
              <div class="animated pulse slow infinite"><h5>Total control over app activities</h5>
              <p>App only follow your command, we will not interfare in your conversations without your permission, you have absolute
              control over application activities</p></div>
            <!--<a href="#" class="btn-warning bg-primal btn-lg mt-4 p-3"> Read More </i></a>-->
            </div>
      </div><!--FIRST PROTOTYPE-->
    
  <div id="show" class="row my-3 py-4 wow slideInLeft fast">
    <div class="col-5 order-2 wrapper">
      <div class="mx-auto d-flex justify-content-start animated pulse slow delay-1s infinite"><img src="img/fone2.svg" class="ml-3 img-fluid icon" width="100%" alt="...">
      </div>
    </div>
    <div class="case col-7 order-1 wow slideInRight slow d-flex flex-column justify-content-center align-items-start">
      <div class="animated pulse slow infinite"><h5>Personalize your app</h5>
      <p>With your very own personal conversation expert in your pocket, you won’t get to say a wrong word again</p></div>
      <!--<a href="#" class="btn-warning bg-primal btn-lg mt-4 p-3"> Read More </i></a>-->
    </div>
  </div>
  <!--SECOND PROTOTYPE-->
</div>
</section>

<!--LAST PROTOTYPE-->
  <section class="my-5 container-fluid" id="last">
    <div class="container py-5 mx-3 row d-flex align-items-center justify-content-center mx-auto">
      <div class="case col-12 text-center mb-4 p-1 p-md-5">
        <h5>Never want to say regretful words when angry?</h5>
        <p class="px-0 px-md-5 mt-5">Control all your tone of voice and conversations with the new <strong>CalmDown</strong>, coming soon to your mobiles. Join the
        limited list of beta testers and be one of the first to try it out</p>
        <!--<a href="#" class="btn-warning bg-primal btn-lg mt-4 p-3"> Read More </i></a>-->
      </div>
      <div id="flipper" class="wrapper col-md-6 mb-3 animated flipInY slower">
        <div class="about-img mx-auto d-flex justify-content-center"><img src="img/lastimg.svg" class="mx-auto img-fluid icon" 
          width="100%" alt="...">
        </div>
      </div>
    </div>
  </section><!--Thrid PROTOTYPE-->
<section id="letter" class="container my-5 rounded-lg d-flex flex-column justify-content-between align-items-center p-5">
  <h6 class="headerH5 pt-2 text-center">Join Our Monthly Newsletter</h6>

  <p class="HeaderH6 mt-3 px-2 px-md-5 text-center">Never miss out when we launch and our regular article newsletters,<br>
                                              subscribe now</p>
  
  <form action="php/signUp.inc.php" method="POST" class="col-12 justify-content-center d-none d-md-flex">
    <div class="formInput searchWrapper w-75 input-group mb-5 rounded-pill mt-4">
    <input type="search" id="dEmail" name="email" class="form-control  rounded-pill pl-5" placeholder="Email address" aria-label="searchBar"
      aria-describedby="searchBar">
    <div class="input-group-append bg-primary rounded-pill">
      <button type="submit" class="input-group-text text-white px-5 bg-primary rounded-pill" id="success">Subcribe</button>
    </div> 
  </div>
  </form>

  <!-- Optional Input  -->
        <form action="php/signUp.inc.php" method="POST" class="d-block d-md-none col-12 mt-5">
          <div class="formInput col-12 input-group mb-3 p-0">
            <input type="search" name="email" id="Dmail" class="form-control text-center rounded-pill" placeholder="Enter Email Address" aria-label="searchBar"
                      aria-describedby="searchBar">
            </div>
            <div class="formInput col-12 p-0">
              <button type="submit" class="input-group-text searcher w-100 d-flex justify-content-center text-white rounded-pill bg-primary px-5" id="success1"><span class="text-center">Subcribe<span></button>
            </div>
        </form>
      </div>

      
  
</section>
<footer class="footer p-5">
  <div class="text-center text-white"><marquee>Coming Soon...<span>&nbsp</span> Coming soon.. <span>&nbsp</span> Coming soon</marquee></div>
  <div class="container text-center text-white px-5 d-flex justify-content-between">
    <p>Designer by @popsabey</p>
    <p>Coded by @debugger</p>
  </div>
</footer>  
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- SMTP.JS -->
 <script type="text/javascript">
var Email = { send: function (a) { return new Promise(function (n, e) { a.nocache = Math.floor(1e6 * Math.random() + 1), a.Action = "Send"; var t = JSON.stringify(a); Email.ajaxPost("https://smtpjs.com/v3/smtpjs.aspx?", t, function (e) { n(e) }) }) }, ajaxPost: function (e, n, t) { var a = Email.createCORSRequest("POST", e); a.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), a.onload = function () { var e = a.responseText; null != t && t(e) }, a.send(n) }, ajax: function (e, n) { var t = Email.createCORSRequest("GET", e); t.onload = function () { var e = t.responseText; null != n && n(e) }, t.send() }, createCORSRequest: function (e, n) { var t = new XMLHttpRequest; return "withCredentials" in t ? t.open(e, n, !0) : "undefined" != typeof XDomainRequest ? (t = new XDomainRequest).open(e, n) : t = null, t } };
 </script>
 <!--- Custom js _-->
<script src="js/calm.js" type="text/javascript">
</script>
</body>
</html>
