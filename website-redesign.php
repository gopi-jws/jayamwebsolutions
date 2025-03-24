<?php include 'connect/header.php' ?>

<section class="service-banner">
    <div class="container">
        <div class="service-banner-content">
            <div class="row">
                <div class="col-lg-6 d-flex">
                    <!-- Left Side: Title & Breadcrumb -->
                    <div class="service-banner-left">
                        <h1>Website Design</h1>
                        <nav class="service-breadcrumb">
                            <a href="index.html">Home</a> &raquo;
                            <span>Website Design</span>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Right Side: Contact Form -->
                    <div class="service-banner-right p-4 rounded">
                        <form class="service-contact-form">
                            <h2 class="text-center mb-3">Get in Touch</h2>

                            <div class="row g-3">
                                <!-- Name & Phone (One Row, Two Columns) -->
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Phone" required>
                                </div>

                                <!-- Email & Message (One Row, Two Columns) -->
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" placeholder="Your Phone" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" rows="3" placeholder="Your Message" required></textarea>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-warning w-100">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="service-counter-section py-5 text-center text-white">
    <div class="container">
        <div class="row">
            <!-- Counter 1 -->
            <div class="col-md-4">
                <div class="counter-box">
                    <h2 class="counter" data-target="1800">1800+</h2>
                    <p>Completed Projects</p>
                </div>
            </div>

            <!-- Counter 2 -->
            <div class="col-md-4">
                <div class="counter-box">
                    <h2 class="counter" data-target="1300">1300+</h2>
                    <p>Happy Clients</p>
                </div>
            </div>

            <!-- Counter 4 -->
            <div class="col-md-4">
                <div class="counter-box">
                    <h2 class="counter" data-target="18">18+</h2>
                    <p>Years of Experience</p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'connect/footer.php' ?>