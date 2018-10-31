<footer>

    <?php if( have_rows('footer_features', 'option') ): ?>

    <section class="row no-gutters" id="touts">

        <?php while( have_rows('footer_features', 'option') ): the_row();

        $image = get_sub_field('image');
        $link = get_sub_field('link');

        ?>

        <div class="featured-block col-lg-4">

            <div class="card">

                <div class="overlay-gradient-y-black">
                    <img class="card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                </div>

                <div class="card-img-overlay d-flex p-md-3">
                    <div class="align-self-end">
                        <a class="btn btn-block btn-primary" href="<?php echo $link['url']; ?>" title="Resource Library"><?php echo $link['title']; ?></a>
                    </div>
                </div>

            </div>
            <!-- .card -->

        </div>

        <?php endwhile; ?>

    </section>

    <?php endif; /* footer_features */ ?>

    <section id="newsletter" class="container-fluid px-0 py-6 cheetah-spots">

        <div class="narrow px-3">

            <form>
                <h3 class="text-info text-center mb-3">Join Our Newsletter</h3>
                <div class="input-group shadow-sm">
                    <input class="form-control form-control-lg border-0" placeholder="Your email address">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-lg btn-info">
                            <span class="d-none d-sm-block">Subscribe</span>
                            <span class="fas fa-plus d-sm-none"></span>
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <!-- .narrow -->

    </section>

    <section class="container-fluid d-none" id="all-links">

        <div class="wide py-5">

            <nav class="row">

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="link-list px-0">
                        <li>
                            <a href="#" title="What We Do">
                                <span class="font-weight-bold mb-2">What We Do</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Research</a>
                        </li>
                        <li>
                            <a href="#">Education</a>
                        </li>
                        <li>
                            <a href="#">Conservation</a>
                        </li>
                        <li>
                            <a href="#">International Cheetah Day</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="link-list px-0">
                        <li>
                            <a href="#" title="What We Do">
                                <span class="font-weight-bold mb-2">Who We Are</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Mission and Vision</a>
                        </li>
                        <li>
                            <a href="#">Dr. Laurie Marker</a>
                        </li>
                        <li>
                            <a href="#">Our Centre</a>
                        </li>
                        <li>
                            <a href="#">Staff and Board</a>
                        </li>
                        <li>
                            <a href="#">International Affiliates</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="link-list px-0">
                        <li>
                            <a href="#" title="Get Involved">
                                <span class="font-weight-bold mb-2">Get Involved</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Ways to Give</a>
                        </li>
                        <li>
                            <a href="#">Events</a>
                        </li>
                        <li>
                            <a href="#">Volunteer Locally</a>
                        </li>
                        <li>
                            <a href="#">Volunteer in Namibia</a>
                        </li>
                        <li>
                            <a href="#">Visit CCF</a>
                        </li>
                        <li>
                            <a href="#">Share</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="link-list px-0">
                        <li>
                            <a href="#" title="Learn">
                                <span class="font-weight-bold mb-2">Learn</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Resource Library</a>
                        </li>
                        <li>
                            <a href="#">About Cheetahs</a>
                        </li>
                        <li>
                            <a href="#">Human Wildlife Conflict</a>
                        </li>
                        <li>
                            <a href="#">Illegal Pet Trade</a>
                        </li>
                        <li>
                            <a href="#">Habitat Loss</a>
                        </li>
                        <li>
                            <a href="#">CCF Videos</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="link-list px-0">
                        <li>
                            <a href="#" title="News">
                                <span class="font-weight-bold mb-2">News</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Press Releases</a>
                        </li>
                        <li>
                            <a href="#">Press Kit</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="link-list px-0">
                        <li>
                            <a href="#" title="Events">
                                <span class="font-weight-bold mb-2">Events</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Upcoming Events</a>
                        </li>
                        <li>
                            <a href="#">Past Event Highlights</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" title="For Kids">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ccf-kids-logo.svg" alt="Placeholder">
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

            </nav>
            <!-- .row -->

        </div>

    </section>

    <section class="container-fluid bg-dark">

<div class="wide py-5">

    <div class="row">

        <div class="col-sm-10 col-lg-4 mb-4 mb-lg-0 mx-auto">

            <h5 class="text-primary mb-2">Cheetah Conservation Fund Canada</h5>

            <div class="row">

                <div class="col-xxl mb-2 mb-xxl-0 text-white">
                    <address class="f-serif fs-md">
                        <strong>Address:</strong>
                        <br> Fond canadien de preservation des guépards
                        <br> 443 Tatlock Road
                        <br> Carleton Place, ON  K7C 0C5
                    </address>
                </div>
                <!-- .col -->

                <div class="col-xxl text-white">
                    <p class="fs-md">
                        <strong>Phone:</strong> 819-271-8529
                        <br>
                        <strong>Email:</strong>
                        <a class="blended-link" href="mailTo:ccfinfo@iway.na">canada@cheetah.org</a>
                    </p>
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .col -->

        <div class="col-sm-10 col-lg-4 mb-4 mb-lg-0 mx-auto text-white">

            <h5 class="text-primary mb-2">CCF Global</h5>
            <p class="fs-md">CCF is an international non-profit organization headquartered in Namibia, with operations and partners
                around the world.</p>
            <p class="fs-md">
                <a class="blended-link" href="/about-us/who-we-are/ccf-global.php">Where We Work</a>
            </p>

        </div>
        <!-- .col -->

        <div class="col-sm-10 col-lg-4 mb-4 mb-lg-0 mx-auto text-white">

            <div class="row">

                <div class="col-xxl mb-4 mb-xxl-0">
                    <h5 class="text-primary mb-2">Follow Us</h5>

                    <ul class="link-list horizontal p-0">
                        <li>
                            <a href="#">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fab fab fa-instagram"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fab fab fa-youtube"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fab fa-pinterest"></span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- .col -->

                <div class="col-xxl">

                    <div class="row matrix-border">

                        <div class="col-sm-6 col-lg-12">
                            <a class="btn btn-block btn-primary" href="#" title="Donate">Donate</a>
                        </div>
                        <!-- .col -->

                        <div class="col-sm-6 col-lg-12 d-none">
                            <a class="btn btn-block btn-primary" href="#" title="Sponsor a Cheetah">Sponsor a Cheetah</a>
                        </div>
                        <!-- .col -->

                    </div>
                    <!-- .matrix-border -->

                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .col -->

    </div>
    <!-- .row -->

</div>
<!-- .wide -->

</section>


    <hr class="dark">

    <div class="container-fluid bg-dark">
        <div class="wide py-2">
            <p class="fs-md text-white">
                <span class="d-block d-sm-inline-block">© 2019 Cheetah Conservation Fund</span>
                <span class="d-none d-sm-inline-block mx-1">•</span>
                <a class="blended-link" href="#">Privacy Policy</a>
            </p>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>