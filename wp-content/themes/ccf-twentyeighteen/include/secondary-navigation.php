<ul class="link-list horizontal justify-content-end">
               
    <li>
        <a href="/tear-sheet/accessibility" title="For Kids">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ccf-kids-logo.svg" alt="Placeholder">
        </a>
    </li>
    
    <!-- <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
    <li><a href="#"><span class="fab fab fa-instagram"></span></a></li>
    <li><a href="#"><span class="fab fab fa-youtube"></span></a></li>
    <li><a href="#"><span class="fab fa-pinterest"></span></a></li>    -->
               
    <!-- Language --> 
    <li>
        <?php echo do_shortcode('[gtranslate]'); ?>
    </li>        
    <!-- Search --> 
    <li>
        <button class="btn no-btn-style"
            type="button" 
            data-toggle="collapse" 
            data-target="#desktop-search" 
            aria-controls="desktop-search"
            aria-expanded="false" 
            aria-label="Toggle Search">
                <span class="fas fa-search fs-lg"></span>
                <span class="sr-only">Global Search</span>
        </button>
    </li>
</ul>