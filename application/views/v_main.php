
<?php
$this->load->view('parts/main_top');
$this->load->view('parts/main_navigation');
?>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Scrolling Nav</h1>
                    <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>
                    <a class="btn btn-default page-scroll" href="#map">Click Me to Scroll Down!</a>

                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="map" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <code><h2>Lokasi-Lokasi Murid Dalam MAPS</h2></code>
                    <center><a href="#map" class="btn btn-success" id="btnShow">Click Untuk Membuka MAP</a></center>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Services Section</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                </div>
            </div>
        </div>
    </section>

    <div id="dialog" style="display: none">
        <div id="dvMap" style="height: 880px; width: 950px;">
        </div>
    </div>

   <?php
   $this->load->view('parts/main_bot');
   ?>