<!DOCTYPE html>
     <?php
        function getBaseUrl() 
        {
            // output: /myproject/index.php
            $currentPath = $_SERVER['PHP_SELF']; 
            
            // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
            $pathInfo = pathinfo($currentPath); 
            
            // output: localhost
            $hostName = $_SERVER['HTTP_HOST']; 
            
            // output: http://
            $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
            
            // return: http://localhost/myproject/
            return $protocol.$hostName.$pathInfo['dirname']."/";
        }
        ?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <title>Total Credit Awarness</title>
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="resources/img/logo_logo_white.png" alt="TCA logo" class="logo">
                    <img src="resources/img/logo-logo.png" alt="TCA logo" class="logo-black">
                    <ul class="main-nav js--main-nav">
                        <li><a href="#features">About US</a></li>
                        <li><a href="#works">How it Works</a></li>
                        <li><a href="#plans">Our Services</a></li>
                        <li><a id="login-btn" href="#">Client LogIn</a></li>
                        <li><a href="#find-us">Contact US</a></li>
                        <!-- <li><a href="#plans">Client Portal</a></li> -->
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Perfect Credit.<br>Made Simple.</h1>
                <a class="btn btn-full js--scroll-to-plans" href="#plans">Restore my Credit Now</a>
                <a class="btn btn-ghost js--scroll-to-start" href="#find-us">Learn more</a>
            </div>

        </header>

        <section class="section-features js--section-features" id="features">
            <div class="row">
                <h2>Rapid Structure &mdash; The fastest way to become Debt Free with Perfect Credit </h2>
                <p class="long-copy">
                    We offer the only FICO compliant credit restoration program in the country that uses
                    Debt Filtration. Now you can use our award winning 4-Step System to take control over your
                    finances in months instead of years: For the first time ever, you can control,
                    restore and or enhance your credit at will and accurately forecast your borrowing power.
            </div>

            <div class="row js--wp-1">
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-color-wand-outline icon-big"></i>
                    <h3>DEBT FILTRATION</h3>
                    <p>
                        Debt Filtration is a system of 48 government laws and programs that will quickly eliminate your bad debt while simultaneously restoring your credit,
                        legally and permanently, without payment, bankruptcy, consumer credit counselling or debt consolidation companies
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-calculator-outline icon-big"></i>
                    <h3>STRATEGIC CREDIT RESTORATION</h3>
                    <p>
                        We are not a credit repair company and we will never offer any credit repair products.
                        Our products are based on a new FICO-driven technique called Rapid Restructure. Comparing credit repair to Rapid Restructure is like comparing a horse and buggy to a Ferrari.
                        Yes, they are both transportation but the technology differential makes them light years apart
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-cog-outline icon-big"></i>
                    <h3>SCORE ENHANCEMENT ALGORITHM</h3>
                    <p>
                        Your credit score is created by using complex algorithms. Therefore it takes an algorithm to beat an algorithm.
                        That is why our founder wrote the only FICO restoration algorithm available in this country.
                        Using this algorithm we currently hold all three credit industry records.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-compose-outline icon-big"></i>
                    <h3>PRE UNDERWRITING</h3>
                    <p>
                        Pre-underwriting takes the credit restoration process one step further by putting your credit through a more thorough review process after you have reached your desired score.
                        The pre-underwriting process will filter and identify any barriers to the loan qualification process.
                        You now have a tool that will allow you to be approved for every loan, now you can turn your credit into money.
                    </p>
                </div>
            </div>
        </section>
        <section class="section-steps" id="works">
            <div class="row">
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box app">
                    <img src="resources/img/sss.png" alt="Omnifood app on iPhone" class="app-screen js--wp-2">
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step clearfix">
                        <div>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="works-step clearfix">
                        <div>2</div>
                        <p>Sign up using our mobile app or website. Or you can even call us!</p>
                    </div>
                    <div class="works-step clearfix">
                        <div>3</div>
                        <p>Enjoy your new perfect credit debt free life...!</p>
                    </div>

                    <a href="index_tca.html" class="btn-app"><img src="resources/img/download-app.svg" alt="App Store Button"></a>
                    <a href="index_tca.html" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play Store Button"></a>
                </div>
            </div>
        </section>


        <section class="vids-class">
          <div class="row">
            <h2>
              WE HAVE ALL THREE CREDIT INDUSTRY RECORDS <!-- &mdash; Ipsum Lorem-->
            </h2>
          </div>
          <div class="row">
            <div class="col span-1-of-2 steps-box" id="video-play">
              <video id="myVideo" width="320" height="240" controls="true">
                <source src="resources/video/vid.mp4?" type="video/mp4">
                  <source src="resources/video/vid.mp4?" type="video/ogg">
                    Your browser does not support the video tag.
                  </video>
            </div>
            <div class="col span-1-of-2 steps-box">
                <div class="works-step clearfix">
                    <div>1</div>
                    <p>World's highest credit score</p>
                </div>
                <div class="works-step clearfix">
                    <div>2</div>
                    <p>Fastest credit turnaround</p>
                </div>
                <div class="works-step clearfix">
                    <div>3</div>
                    <p>Most deletion in a single dispute..!</p>
                </div>
            </div>
          </div>
        </section>

        <section class="section-cities" id="cities">
            <div class="row">
                <h2>OUR PROGRAM WILL HELP YOU ACHIEVE ZERO DEROGATORY CREDIT(ZDC)</h2>
            </div>
            <div class="row js--wp-3">
                <div class="col span-1-of-4 box">
                    <img src="resources/img/LOANS.jpeg" alt="Lisbon" class="img">
                    <h3 class="bigger-header">STUDENT LOAN PROBLEMS</h3>
                    <div class="city-feature">
                        <!-- <i class="ion-ios-person icon-small"></i> -->
                        Currently in this country it is impossible to have a student loan debt problem.
                    </div>
                    <div class="city-feature">
                        <!-- <i class="ion-ios-star icon-small"></i> -->
                        Using existing debt filtration programs, you can have a payment as low as $0.00 per month
                    </div>
                    <div class="city-feature">
                        <!-- <i class="ion-social-twitter icon-small"></i> -->
                         And have your student loan completely forgiven after 20 years.
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/chargeoff.jpg" alt="San Francisco" class="img">
                    <h3 class="bigger-header">CHARGE OFFS, LATE PAYMENTS &amp; EXCESSIVE INQUIRIES</h3>
                    <div class="city-feature">
                        <!--<i class="ion-ios-person icon-small"></i> -->
                        No matter what your credit problem, there is a corresponding debt filter.
                    </div>
                    <div class="city-feature">
                        <!-- <i class="ion-ios-star icon-small"></i> -->
                        Credit repair is only designed to remove misstates or errors from your credit.
                    </div>
                    <div class="city-feature">
                        <!-- <i class="ion-social-twitter icon-small"></i>-->
                        If you are like most people you will need a system that can handle any issue.
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/bankruptcy.jpg" alt="Berlin" class="img">
                    <h3 class="bigger-header">PUBLIC RECORDS, BANKRUPTCY, TAX LIENS &mdash; JUDGMENTS</h3>
                    <div class="city-feature">
                        <!-- <i class="ion-ios-person icon-small"></i> -->
                        A paid judgment scores the same as an unpaid judgment.
                    </div>
                    <div class="city-feature">
                        <!-- <i class="ion-ios-star icon-small"></i> -->
                        Therefore, you will need a legal remedy program like ours to eliminate the debt and remove it successfully from your credit.
                    </div>
                    <div class="city-feature">
                        <!-- <i class="ion-social-twitter icon-small"></i> -->
                        Attorneys are too expensive and the ones that you can afford are not credit experts
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/foreclosure.jpg" alt="London" class="img">
                    <h3 class="bigger-header">FORECLOSURES AND REPOSSESIONS</h3>
                    <div class="city-feature">
                        <!-- <i class="ion-ios-person icon-small"></i> -->
                        One of the cornerstones of our business that sets us apart from anyone else in this business is our foreclosure and repossession abatement team.
                    </div>
                    <div class="city-feature">
                        <!-- <i class="ion-ios-star icon-small"></i> -->
                        Let our experts stop, remove, eliminate or mitigate problems like these for you.
                    </div>
                    <div class="city-feature">
                        <!-- <i class="ion-social-twitter icon-small"></i> -->
                        Satisfactiion is 100% Guarantee.
                    </div>
                </div>
            </div>

        </section>

        <section class="section-testimonials">
            <div class="row">
                <h2>Our customers can't live without us</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>
                        Once CDMI had finished my credit it felt like I had just gotten out of prison.
                        Dr Grayson gave me the highest credit score in the world, a perfect 990.
                        <cite><img src="resources/img/richard.jpg">Richard Humphrey, president Entrepreneurs Organization</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                       I tried for over three years To get my credit fix. I hired attorneys and so called credit experts who all failed.
                       Fortunately, a dear friend recommended Dr. Grayson and within 60 days I had an 850 credit score.
                        <cite><img src="resources/img/ross.jpg">Dr Allen Ross, Economics Professor Columbia University</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        Dr. Michael Grayson is brilliant. He is my #1 resource to repair personal or business credit.
                        He has helped hundreds of business owners that I have referred to him.
                        If you need to repair your credit call Dr. Grayson today. .
                    <cite><img src="resources/img/test.jpg">Barbara S.</cite>
                    </blockquote>
                </div>
            </div>
        </section>


        <section class="section-plans js--section-plans" id="plans">
            <div class="row">
                <h2> Select which plans best suit you!</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2">
                    <div class="plan-box js--wp-4">
                        <div>
                            <h3>Perfect Credit</h3>
                            <p class="plan-price">$99 <span>/ month</span></p>
                            <p class="plan-price-meal">$ 299 Down</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i><strong> Cancel Anytime </strong></li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Unlimited Credit Scrubbing </li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Unlimited Administrative Remedies</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Credit cards optimization programs</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>On demand Debt Filtration</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Trade line enhancement programs</li>
                            </ul>
                        </div>
                        <div>
                            <!-- Paypal Button -->
                            <form action="<?php echo getBaseUrl() ?>pay.php?type=0" method="post" target="_top">
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <input type="hidden" name="hosted_button_id" value="XME6HCCMTZX5E">
                              <input type="submit" value="Enroll Now">
                              </form>
                                    <!-- Paypal Button -->

                        </div>
                    </div>
                </div>
                <div class="col span-1-of-2">
                    <div class="plan-box">
                        <div>
                            <h3>Perfect Business Credit</h3>
                            <p class="plan-price">$99 <span>/ month</span></p>
                            <p class="plan-price-meal">$ 999 Down</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i><strong> Cancel Anytime</strong></li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Trade lines building</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Three bureau Score Builder Program</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Compliance filter </li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Vendor Lines of Credit</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Integrate with Your Startup or Existing Business</li>
                            </ul>
                        </div>
                        <div>
                             <!-- Paypal Button -->
                             <form action="<?php echo getBaseUrl() ?>pay.php?type=1" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="XME6HCCMTZX5E">
                                 <input type="submit" value="Enroll Now">
                                </form>
                                <!-- Paypal Button -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-form">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>
            <div class="row">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="friends" selected>Friends</option>
                                <option value="search">Search engine</option>
                                <option value="ad">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Newsletter?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked> Yes, please
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!">
                        </div>
                    </div>

                </form>

            </div>
        </section>

        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#features">About us</a></li>
                        <li><a href="www.smallbusinesscreditexpert.com/">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms.html">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/Total-Credit-Awareness-1623633131054747/"><i class="ion-social-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>

            <!-- Begin Constant Contact Active Forms -->
  <script> var _ctct_m = "13a53617d5230a2e25c213a03bb76337"; </script>
  <script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
  <!-- End Constant Contact Active Forms -->


            <div id="loginModal" class="modal">


      <!-- Modal content -->

<form action="https://www.creditstatusnow.com/default.aspx" method='POST'>
     <table width="263" border="0" cellspacing="0" cellpadding="0" style="border: 2px solid #666666;font-family: Arial, Helvetica, sans-serif;">
          <tr>
               <td width="259" style="padding: 5px; line-height: 25px; font-size: 24px; background-color: #999999;TabChar(1) & color: #FFFFFF; border-bottom: 2px solid #666666;">
                    Login to Your Account</td>
          </tr>
          <tr>
               <td style="padding: 5px;">
                    <p>
                         User Name:<br />
                         <input type="text" name="username" id="username" style="font-size: 16px;" />
                    </p>
                    <p>
                         Password:<br />
                         <input type="password" name="password" id="password" style="font-size: 16px;" />
                    </p>
                    <p>
                         <input type="submit" name="button" id="button" value="Submit" style="font-size: 16px;padding: 5px;" />
                    </p>
               </td>
          </tr>
     </table>
</form>

    </div>
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '547043285678689');
        fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=547043285678689&ev=PageView&noscript=1"
      /></noscript>
      <!-- End Facebook Pixel Code -->

      <!-- GOOGLE -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115645728-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-115645728-1');
    </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script>
        <script src="resources/js/script.js"></script>

        </footer>



    </body>

</html>
