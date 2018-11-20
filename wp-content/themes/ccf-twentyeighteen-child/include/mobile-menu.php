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

            <button
            data-toggle="collapse" 
            data-target="#about-us" 
            aria-expanded="false" 
            aria-controls="about-us">
                <span class="title">About Us</span>
            </button>

            <div id="about-us" class="collapse" data-parent="#accordion">

                <div class="bg-dark py-3">
                
                    <ul>
                        <li><a href="#">Programs We Support</a></li>
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="#">Board Members</a></li>
                        <li><a href="#">Volunteers</a></li>
                        <li><a href="#">Corporate Sponsors</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    
                </div>

            </div>

        </div>

        <div>
            <button data-toggle="collapse" 
            data-target="#take-action" 
            aria-expanded="false" 
            aria-controls="take-action">
                <span class="title">Get Involved</span>
            </button>

            <div id="take-action" class="collapse" data-parent="#accordion">
                <div class="bg-dark py-3">
                    <ul>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Volunteer in Canada</a></li>
                        <li><a href="#">Young Canadians</a></li>
                        <li><a href="#">International Cheetah Day</a></li>
                        <li><a href="#">Plan a Party</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <a href="#" title="News">
            <span class="title">News</span> 
        </a>
        <a href="#" title="Contact">
            <span class="title">Contact</span> 
        </a>
    </div><!-- #accordion -->

</nav>