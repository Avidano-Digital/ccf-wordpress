<footer>

    <?php if( have_rows('footer_features', 'option') ): ?>

    <section class="row no-gutters" id="touts">

        <?php while( have_rows('footer_features', 'option') ): the_row();
    
        $image = get_sub_field('image');
        $link = get_sub_field('link');

        ?>

        <div class="featured-block col-lg-4">

            <div class="card bg-dark">

                <div class="overlay-gradient-y-black">
                    <img class="card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
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
    
    <section class="container-fluid" id="all-links">

        <div class="wide py-6">

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
                            <a href="#" title="Take Action">
                                <span class="font-weight-bold mb-2">Take Action</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Ways to Give</a>
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

    <section class="container-fluid bg-light">

        <div class="wide py-5">

            <div class="row">

                <div class="col-sm-10 col-md-6 col-xl-3 mb-4 mb-lg-0 mx-auto">

                    <h5 class="">Cheetah Conservation Fund</h5>
                    <p class="fs-md">Our Research and Education Centre is located in Otjiwarongo, Namibia. We encourage
                        visitors to see our facilities in person.</p>
                    <p class="fs-md"><a class="blended-link" href="/about-us/who-we-are/ccf-global.php">Come Join Us!</a></p>
                </div>
                <!-- .col -->

                <div class="col-sm-10 col-md-6 col-xl-3 mb-4 mb-lg-0 mx-auto">

                    <h5 class="">Where We Work</h5>
                    <p class="fs-md">Cheetah Conservation Fund is an international non-profit organization with fundraising
                        operations located in: Australia, Canada, Italy, The United Kingdom, and The United States, working
                        in cooperation with staff and partners around the world.</p>
                    <p class="fs-md">
                        <a class="blended-link" href="/about-us/who-we-are/ccf-global.php">Contact Us</a>
                    </p>

                </div>
                <!-- .col -->

                <div class="col-sm-10 col-md-6 col-xl-3 mb-4 mb-lg-0 mx-auto">
                    <h5 class="">Keep Up With the Cheetahs</h5>
                    <p class="fs-md">Never miss an update. Subscribe to the <a href="#" class="blended-link">CCF Newsletter</a>
                        and follow us on social media.</p>

                    <ul class="link-list horizontal">
                        <li>
                            <a class="text-body" href="#">
                                <span class="fas fa-envelope"></span>
                            </a>
                        </li>
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fab fa-instagram"></span>
                            </a>
                        </li>
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fab fa-youtube"></span>
                            </a>
                        </li>
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fa-pinterest"></span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- .col -->

                <div class="col-sm-10 col-md-6 col-xl-3 mx-auto">
                    <h5 class="">Support CCF</h5>
                    <p class="fs-md">You can help save the cheetah from exinction! Support our research and conservation initiatives.</p>

                    <div class="row matrix-border mt-3">

                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                            <a class="btn btn-block btn-primary" href="#" title="Donate">Donate</a>
                        </div>
                        <!-- .col -->

                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                            <a class="btn btn-block btn-primary" href="#" title="Sponsor a Cheetah">Sponsor a Cheetah</a>
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