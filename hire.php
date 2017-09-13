<?php date_default_timezone_set('Europe/London'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>The Pineapple: Irish Pub London Waterloo | Hire Our Space</title>
    <meta charset="utf-8">
    <meta name="description" content="At The Pineapple we host birthdays, staff parties, christenings, funerals and other private occasions. Use our booking form to organise your event now.">
    <?php require_once('php/header.php');?>
    <section class="leadspace" style='background-image: url("img/Hire-The-Pineapple.jpg");'>
        <h1 class="wrapper">Hire this space</h1>
        <p class="leadspace__summary">
            Private bar, catered food, open fire and  dedicated staff included.
        </p>
        <a class="button button--primary" href="#maintop">Book now</a>
    </section>
    <section class="wrapper">
        <a href="#maintop"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
        <h2>Book an event</h2>
        <h3>At The Pineapple</h3>
        <p class="focus">
            Our function room has a capacity of 100 and is great for birthdays, parties, music events and all other friendly occasions.
            <br><br>
            Use the form below to request The Pineapple for an event and we’ll confirm your booking as soon as possible.
        </p>
    </section>
    <section class="gray-section" id="main">
        <form class="booking-form wrapper" action="hire-booking.php" method="POST" name="bookingForm">
            <h2>Event booking form</h2>
            <div class="booking-form__feature">
                <fieldset class="booking-form__column">
                    <p class="booking-form__field-text">Full name <span class="booking-form__field-text--required">*</span></p>
                    <input name="name" type="text" class="booking-form__field" placeholder="John Smith" maxlength="50">
                    <p id="error--name" class="booking-form__field-text--error-text"></p>
                    <p class="booking-form__field-text">Event date <span class="booking-form__field-text--required">*</span></p>
                    <input name="event-date" type="date" class="booking-form__field" value="<?php echo date('Y-m-d')?>" placeholder="dd/mm/yyyy">
                    <p id="error--date" class="booking-form__field-text--error-text"></p>
                    <p class="booking-form__field-text">Event type <span class="booking-form__field-text--required">*</span></p>
                    <select name="event-type" class="booking-form__field">
                        <option>Birthday</option>
                        <option>Staff party</option>
                        <option>Christening</option>
                        <option>Funeral</option>
                        <option>Music event</option>
                        <option>Other</option>
                    </select>
                    <p class="booking-form__field-text--error-text"></p>
                    <p class="booking-form__field-text">Phone number <span class="booking-form__field-text--required">*</span></p>
                    <input name="phone" type="number" class="booking-form__field" placeholder="07123 456 789">
                    <p id="error--phone" class="booking-form__field-text--error-text"></p>
                </fieldset>
                <fieldset class="booking-form__column booking-form__column--2">
                    <div class="booking-form__field--half">
                        <p class="booking-form__field-text">Expected attendance <span class="booking-form__field-text--required">*</span></p>
                        <input name="attendance" type="number" class="booking-form__field" placeholder="25" min="1" max="100">
                        <p id="error--attendance" class="booking-form__field-text--error-text"></p>
                    </div><!--Removing inline-block spacing
                    --><div class="booking-form__field--half">
                        <p class="booking-form__field-text">Email address <span class="booking-form__field-text--required">*</span></p>
                        <input name="email" type="email" class="booking-form__field" placeholder="johnsmith@email.com" maxlength="50">
                        <p id="error--email" class="booking-form__field-text--error-text"></p>
                    </div>
                    <p class="booking-form__field-text">Extra message (Optional)</p>
                    <textarea name="extra-message" type="text" class="booking-form__field--textarea" placeholder="We need food!" maxlength="250"></textarea>
                </fieldset>
            </div>
            <p>After all fields marked with '<span class="booking-form__field-text--required">*</span>' have been filled in, the 'Book now' button will become available</p>
            <input name="submit" type="submit" class="button button--primary booking-form__button" value="Book now" disabled="true">
        </form>
    </section>
    <section class="yellow-section--tall">
        <div class="feature wrapper">
            <article class="feature__card">
                <h2 class="feature__card-title text-left">Events</h2>
                <p class="feature__card-content--small text-left">Come and enjoy the latest sport live on our large screens. Expect football, Gaelic football, rugby, big fights and live music nights, which are free to everyone!</p>
                <a class="button button--secondary feature__card-button--left" href="whats-on">What’s on</a>
            </article>
            <article class="feature__card">
                <h2 class="feature__card-title text-left">Food</h2>
                <p class="feature__card-content--small text-left">We serve quality pub food all day. Pop in after exploring the sights of London to enjoy a traditional pub lunch or dinner.</p>
                <a class="button button--secondary feature__card-button--left" target="_blank" href="hosting/pineapple-menu.pdf">Food menu</a>
            </article>
            <article class="feature__card">
                <h2 class="feature__card-title text-left">Drinks</h2>
                <p class="feature__card-content--small text-left">Here at The Pineapple we serve a range of ales and traditional Guinness from Ireland. We also stock a collection of wine and spirits to suit all tastes.</p>
                <a class="button button--secondary feature__card-button--left" target="_blank" href="hosting/pineapple-wine.pdf">Drinks menu</a>
            </article>
        </div>
    </section>
    <?php require_once('php/footer.php');?>
    <script type="text/javascript" src="js/booking-validation.js"></script>
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