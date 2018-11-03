<div class="container-fluid bg-light py-3">

    <div class="row matrix-gutter">

        <div class="col-xs">
            <?php echo do_shortcode('[gtranslate]'); ?>
        </div>
        <!-- .col -->

        <div class="col-xs">            
            <?php get_template_part('template-parts/site-search'); ?>
        </div>
        <!-- .col -->

    </div>
    <!-- .row -->

</div>

<nav class="shadow-sm">

    <div id="accordion" class="accordion-group" role="tablist">

        <div>

            <button data-toggle="collapse" data-target="#about-us" aria-expanded="false" aria-controls="about-us">
                <span class="title">About Us</span>
            </button>

            <div id="about-us" class="collapse" data-parent="#accordion">

                <div class="bg-dark py-3">

                    <ul>
                        <li class="leader">What We Do</li>
                        <li><a href="/about-us/what-we-do/research/">Research</a></li>
                        <li><a href="/about-us/what-we-do/education/">Education</a></li>
                        <li><a href="#">Conservation</a></li>
                        <li><a href="#">International Cheetah Day</a></li>
                    </ul>

                    <ul>
                        <li class="leader">Who We Are</li>
                        <li><a href="#">Mission and Vision</a></li>
                        <li><a href="/about-us/who-we-are/dr-laurie-marker/">Dr. Laurie Marker</a></li>
                        <li><a href="#">Our Centre</a></li>
                        <li><a href="#">Staff and Board</a></li>
                        <li><a href="/about-us/who-we-are/ccf-global/">CCF Global</a></li>
                    </ul>

                </div>

            </div>

        </div>

        <div>
            <button data-toggle="collapse" data-target="#take-action" aria-expanded="false" aria-controls="take-action">
                <span class="title">Get Involved</span>
            </button>

            <div id="take-action" class="collapse" data-parent="#accordion">
                <div class="bg-dark py-3">
                    <ul>
                        <li><a href="#">Ways to Give</a></li>
                        <li><a href="#">Volunteer Locally</a></li>
                        <li><a href="#">Volunteer in Namibia</a></li>
                        <li><a href="#">Visit CCF</a></li>
                        <li><a href="#">Share</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div>
            <button data-toggle="collapse" data-target="#learn" aria-expanded="false" aria-controls="learn">
                <span class="title">Learn</span>
            </button>

            <div id="learn" class="collapse" data-parent="#accordion">
                <div class="bg-dark py-3">
                    <ul>
                        <li><a href="#">Resource Library</a></li>
                        <li><a href="#">About Cheetahs</a></li>
                        <li><a href="#">Human Wildlife Conflict</a></li>
                        <li><a href="#">Illegal Pet Trade</a></li>
                        <li><a href="#">Habitat Loss</a></li>
                        <li><a href="#">CCF Videos</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div>
            <button data-toggle="collapse" data-target="#news" aria-expanded="false" aria-controls="news">
                <span class="title">News</span>
            </button>

            <div id="news" class="collapse" data-parent="#accordion">
                <div class="bg-dark py-3">
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press Releases</a></li>
                        <li><a href="#">Press Kit</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div><!-- #accordion -->

</nav>