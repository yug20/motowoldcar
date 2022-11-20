<?php include("header.php"); ?>

<!-- Home banner -->
<div id="fullpage">
    <section class="herohome section" id="section1">
        <div class='container'>
            <div class='img background-img'></div>
            <div class='img foreground-img'></div>
            <input type="range" min="1" max="99" value="50" class="slider" name='slider' id="slider">
            <div class='slider-button'></div>

            <div class="homeheroinfo">
                <h1>MOTOWOLD</h1>
                <p class="text">MOTOWOLD is a unique community that blends an exclusive social club with vehicle storage
                    and
                    collection
                    management. Our Scottsdale, AZ vehicle storage facility incorporates private club space.
                </p>
            </div>
        </div>
    </section>
    <section class="vihiclestorage section" id="section2">
        <div class="storage">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="storageinfo">
                        <h2>Vehicle Storage</h2>
                        <ul class="storagesubinfo">
                            <li>COLLECTION AREA
                                <p class="text">Our main collection area spans 32,000 square feet of column-free space.
                                </p>
                                <p class="text">This area is access-controlled, air conditioned, carbon monoxide
                                    protected
                                    and monitored
                                    on a 24/7 basis.</p>
                            </li>
                            <li>STORAGE AREA
                                <p class="text">MOTOWOLD offers three types of vehicle storage: main floor, stacker
                                    suites
                                    and
                                    private
                                    garages.</p>

                            </li>

                        </ul>
                        <div class="whitebtn"><a href="storage.php">Storage Option</a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="storageimg">
                        <img src="assets/images/carstorage.png">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="vihiclestorage section" id="section03">
        <div class="storage">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="storageimg">
                        <img src="assets/images/hostevent.jpg">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="storageinfo hostevent">
                        <h2>Host Event</h2>
                        <ul class="storagesubinfo">
                            <li>EVENT ALLOWANCE
                                <p class="text">In addition to our member activities at MOTOWOLD, we welcome private
                                    events
                                    for
                                    individuals,
                                    corporations and non-profit organizations alike </p>
                            </li>
                            <li>PARTNERSHIP
                                <p class="text">We host and produce end-to-end client experiences and have partnered
                                    with M
                                    Culinary
                                    Concepts as our exclusive caterer.</p>

                            </li>

                        </ul>
                        <div class="whitebtn"><a href="storage.php">Storage Option</a></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="storieroad section" id="section3">
        <div class="storieroadtitle">
            <h2>Stories from the road</h2>
        </div>
        <div class="slider-counter"></div>
        <div class="roadstorieimg">

            <div class="owl-carousel owl-theme" id="road">

                <div class="item">
                    <img src="assets/images/storyroad.jpg">
                </div>
                <div class="item">
                    <img src="assets/images/storyroad2.jpg">
                </div>

                <div class="item">
                    <img src="assets/images/storyroad3.jpg">
                </div>
            </div>
        </div>
    </section>
    <section class="contact section" id="section4">
        <div class="container">
            <div class="contactinfo">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contactinfoinner">
                            <form>
                                <input type="text" name="fname" placeholder="Enter name" class="contactinfo"><br>
                                <input type="mail" name="mail" placeholder="Email" class="contactinfo"><br>
                                <input type="text" name="zip" placeholder="Zipcode" class="contactinfo"><br>
                                <input type="text" name="number" placeholder="Phone Number" class="contactinfo"><br>
                                <p>I would like Information about</p>
                                <div class="form-group">
                                    <input type="checkbox" id="tour">
                                    <label for="tour">Scheduling a Tour</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="member">
                                    <label for="member">Becoming a Member</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="event">
                                    <label for="event">Hosting an Event</label>
                                </div>
                                <div class="whitebtn btnblack"><a href="storage.php">Storage Option</a></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contacttitleinfo">
                            <p class="title">Contact us</p>
                            <h2>Inquire</h2>
                            <p class="text">If you are interested in becoming a member of MOTOWOLD, would like to
                                schedule a
                                tour of our
                                facility or host an event, please submit an inquiry below and a member of our team will
                                get
                                in touch with you as soon as possible.</p>
                        </div>
                        <div class="contactimg">
                            <img src="assets/images/indiqryimg.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<?php include("footer.php"); ?>