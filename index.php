<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Living Hope Fellowship -- Ithaca, NY</title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>

  </header>
  <div role="main" class='container'>
     <div class='row'>
        <div class='span3 sidebar'>
          <img src='img/LivingHopeLogo.png' alt='Living Hope Fellowship Logo' />

          <?php include 'navigation.php' ?>

          <div class='info-box'>
            Welcoming all to search with us with honesty and integrity, desiring to learn from each other.
          </div>

        </div>

        <div class='span9 content'>
          <img alt='header' src='img/header1.jpg' />

          <div class='info-box'>
            <span class='highlight'>Living Hope Fellowship</span> is a welcoming and inclusive, informal, lay-led church, seeking to understand, experience and demonstrate God's love as revealed by <span class='highlight'>Jesus Christ.</span>
          </div>

          <ul class='information'>
            <li>We are a small congregation of mixed ages. We gather informally in a circle to sing, talk, and pray about our joys, concerns, and dreams.</li>

            <li>We discuss faith journeys and issues of interest to people in the group.</li>

            <li>While many of us share a Mennonite/Peace Church tradition, we seek to celebrate our varied faith backgrounds.</li>

            <li>We have a Sunday school for young children and a youth group.</li>

            <li>We have been meeting since the early 1980s. Since then our group has grown and changed in many ways.</li>

            <li>We welcome new ideas and new people.</li>
          </ul>

          <h3>For information, call:</h3>
          
          <p class='contact'><strong>John Finn</strong><br/>
          607-351-2317</p>

          <p class='contact'><strong>Juanita Weber-Shirk</strong><br/>
          607-227-1950</p>
        </div>
     </div>
  </div>
  <footer>

  </footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>
