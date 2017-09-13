<!DOCTYPE html>
<html>
<head>
    <title>The Pineapple: Irish Pub London Waterloo | Get to Us</title>
    <meta charset="utf-8">
    <meta name="description" content="Looking for a place to relax with real ales and quality food? View our traditional Irish pub on the map and get directions from nearby landmarks to visit us.">
    <link href="css/get-me-there.css" rel="stylesheet">
    <?php require_once('php/header.php');?>
    <section class="leadspace" style='background-image: url(img/Say-hello.jpg);''>
        <h1 class="wrapper">Come and say hello</h1>
        <p class="leadspace__summary">
            Take a break from busy London life and visit  our friendly pub just south of The River Thames.
        </p>
        <a class="button button--primary" href="#maintop">View on map</a>
    </section>
    <section class="wrapper" id="main">
        <a href="#maintop"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
        <h2>Find us</h2>
        <article class="get-me-there">
            <div class="get-me-there__item" id="map"></div>
            <div class="get-me-there__item directions text-left">
                <h4>Directions</h4>
                <div id="imperial-war-museum" class="directions__landmark"><i class="fa fa-street-view" aria-hidden="true"></i>Imperial War Museum<i class="fa fa-times directions__landmark--clear" aria-hidden="true"></i></div>
                <div id="waterloo-station" class="directions__landmark"><i class="fa fa-street-view" aria-hidden="true"></i>Waterloo Station<i class="fa fa-times directions__landmark--clear" aria-hidden="true"></i></div>
                <div id="bfi" class="directions__landmark"><i class="fa fa-street-view" aria-hidden="true"></i>BFI IMAX<i class="fa fa-times directions__landmark--clear" aria-hidden="true"></i></div>
                <div id="london-eye" class="directions__landmark"><i class="fa fa-street-view" aria-hidden="true"></i>London Eye<i class="fa fa-times directions__landmark--clear" aria-hidden="true"></i></div>
                <div id="big-ben" class="directions__landmark"><i class="fa fa-street-view" aria-hidden="true"></i>Big Ben<i class="fa fa-times directions__landmark--clear" aria-hidden="true"></i></div>
                <p class="directions__address">Address: The Pineapple, 53 Hercules Road, London. SE1 7DZ</p>
                <a id="clear-all" class="button button--secondary" href="javascript:void(0);">Clear directions</a>
        </div>
        </article>
    </section>
    <section class="yellow-section--tall">
        <div class="feature wrapper">
            <article class="feature__card feature__card--grow">
                <h2 class="feature__card-title text-left">What’s at The Pineapple?</h2>
                <p class="feature__card-content--small text-left">
                    You’ll find The Pineapple just a short walk from Waterloo or Lambeth North tube station.<br><br>
                    Take a break from the hustle and bustle of London in a traditional Irish pub, serving real ales and quality food. Enjoy lunch with colleagues, drinks with friends or a cozy meal for two by an open fire. We hold regular live music events and take private bookings.
                </p>
                <a class="button button--secondary feature__card-button--left" href="#maintop">Get directions</a>
            </article>
            <article class="feature__card yellow">
                <div class="feature__card-content--padded text-left white">
                    <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    <blockquote class="feature__quote">“Possibly the greatest pub south of the river”</blockquote>
                    <a class="text-link bold feature__link" href="https://www.tripadvisor.co.uk/ShowUserReviews-g186338-d5915863-r260944757.html" target="_blank"><i class="fa fa-tripadvisor" aria-hidden="true"> </i>Read more</a>
                </div>
            </article>
        </div>
    </section>
    <section class="promo wrapper">
        <i class="fa fa-map-marker promo__icon" aria-hidden="true"></i>
        <h3 class="promo__tagline">We are 4 minutes walk from<br>  The Imperial War Museum</h3>
        <a id="imperial-war-museum2" class="button button--secondary promo__button" href="#maintop">Get directions</a>
    </section>
    <?php require_once('php/footer.php');?>
    <script type="text/javascript" src="js/map.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeqrqhLA9YBLgGjxtwd0L9XtU9NrdcAVg&callback=initMap"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-103703402-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>