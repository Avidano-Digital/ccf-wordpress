<?php

/*
Template Name: About
*/

get_header(); ?>

<main id="content">

    <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

    <section class="banner">

        <div class="card bg-white">
            <div class="overlay-gradient-y-black">
                <?php if ( has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail( 'Hero', array( 'class' => 'card-img' ) ); ?>
                <?php else : ?>
                    <img class="card-img" src="http://via.placeholder.com/1500x500/000000/333333/.jpg" alt="Placeholder">
                <?php endif; ?>
            </div>
            <div class="card-img-overlay d-flex">
                <div class="align-self-end container-fluid">
                    <h1 class="display-1 text-right text-muted">
                    
                        <?php                             
                            $current = $post->ID;
                            $parent = $post->post_parent;
                            $grandparent_get = get_post($parent);
                            $grandparent = $grandparent_get->post_parent;
                            $siblings = wp_list_pages('title_li=&child_of=' . $parent . '&echo=0&post_type=about');
                        ?>

                        <?php echo get_the_title($parent); ?>

                    </h1>
                </div>
                <!-- .align-self-center -->
            </div>
        </div>

    </section>
    <!-- .banner -->

    <article class="container-fluid">

        <div class="row">

            <div class="col-xl-3 bg-dark">

                <div class="py-xl-5">

                    <div class="btn-toggle d-xl-none offset-gutter-x">

                        <a class="btn btn-lg btn-block btn-primary" data-toggle="collapse" href="#aside-nav" aria-expanded="false" aria-controls="collapseExample">
                            <span class="title">Jump To</span>
                        </a>

                    </div>

                    <nav class="collapse d-xl-block mb-xl-5" id="aside-nav">

                        <?php if ($siblings) : ?>

                        <ul class="link-list text-white py-4 py-xl-0 d-none">
                            <?php echo $siblings; ?>
                        </ul>

                        <?php endif; ?>

                        <ul class="link-list text-white py-4 py-xl-0">
                            <li><a href="#" title="Mission and Vision">Mission and Vision</a></li>
                            <li <?php if ( is_single( 'dr-laurie-marker' ) ){ echo 'class="current_page_item"'; } ?>><a href="/about-us/who-we-are/dr-laurie-marker/" title="Dr. Laurie Marker">Dr. Laurie Marker</a></li>
                            <li><a href="#" title="Our Center">Our Center</a></li>
                            <li><a href="#" title="History of CCF">History of CCF</a></li>
                            <li><a href="#" title="Staff and Board">Staff and Board</a></li>
                            <li <?php if ( is_single( 'ccf-global' ) ){ echo 'class="current_page_item"'; } ?>><a href="/about-us/who-we-are/ccf-global/" title="CCF Global">CCF Global</a></li>
                        </ul>


                    </nav>

                    <?php get_template_part('template-parts/aside-donate'); ?>

                </div>
            </div>
            <!-- .col -->

            <div class="col-xl-9 pt-4 pt-xl-6">

                <header class="narrow">
                    <h1 class="display-3 text-center mb-3"><?php the_title(); ?></h1>
                </header>

                <section class="mb-5">

                    <div class="narrow">
                        <p><?php the_content(); ?></p> 
                    </div>
                    <!-- .narrow -->

                </section>

                <?php if ( is_single( 'ccf-global' ) ) : ?>
                
                    <?php get_template_part('template-parts/content-ccf-global'); ?>

                <?php else : ?>

                    <?php get_template_part('template-parts/flexible-content-article'); ?>

                <?php endif; ?>

                <?php if ( is_single( 'dr-laurie-marker' ) ) : ?>
                
                    <?php get_template_part('template-parts/dr-laurie-awards-and-activities'); ?>

                <?php endif; ?>

                </section>
                <!-- end article -->

                <?php get_template_part('template-parts/article-footer'); ?>

            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </article>

    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer(); ?>