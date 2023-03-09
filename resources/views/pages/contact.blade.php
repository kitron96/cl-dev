<div class="inclusive">
    <!-- page title -->
    <div class="page-caption">
        <h1 class="page-title "><span class="gradient-text">Get in</span><br><span class="white-text-title">Touch</span></h1>
        <h2 class="page-subtitle">Your next level of website building .</h2>
    </div>

    <div class="contact-information row">
        <!-- form -->
        <div class="col-xl-5">
            <div id="contact-formular">
                <div id="message"></div>
                <form method="post" action="#" name="contactform" id="contactform">
                    <!-- name -->
                    <div class="form-group">
                        <div class="placeholder">Je naam</div>
                        <input class="inp" name="name" type="text" id="name">
                    </div>
                    <!-- email -->
                    <div class="form-group">
                        <div class="placeholder">Je e-mailadres</div>
                        <input class="inp" name="email" type="text" id="email">
                    </div>
                    <!-- company -->
                    <div class="form-group">
                        <div class="placeholder">Je bedrijfsnaam</div>
                        <input class="inp" name="company" type="text" id="company">
                    </div>
                    <!-- about project -->
                    <div class="form-group">
                        <div class="placeholder">Vertel ons meer over je project</div>
                        <textarea class="inp" name="comments" id="comments" cols="50"  placeholder=""></textarea>
                    </div>
                    <!-- button -->
                    <div class="form-btn">
                        <input class="site-btn" type="submit" value="Sent it">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xl-6 offset-xl-1">
            <div class="contact-info email">
                <span>Contact</span>
                <a href="mailto:klantenservice@coderslab.nl">klantenservice@coderslab.nl</a>
            </div>
            <div class="contact-info address">
                <span>Onze contactgegevens</span>
                <p>Winkelwaard<br>
                    1824 HN Alkmaar<br>
                    Tel. +31 6 12345678</p>
            </div>
        </div>
    </div>

    @include('partials.footer')

</div>
