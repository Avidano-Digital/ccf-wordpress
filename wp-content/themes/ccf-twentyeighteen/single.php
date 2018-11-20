<?php

/*
Template Name: Post
*/

get_header(); ?>

<main id="content">

    <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

    <article class="container-fluid blog">

        <div class="row">

            <div class="col-xl-3 bg-dark">

                <div class="sticky-top py-xl-5">

                    <div class="btn-toggle d-xl-none offset-gutter-x">

                        <a class="btn btn-lg btn-block btn-primary" data-toggle="collapse" href="#aside-nav" aria-expanded="false" aria-controls="collapseExample">
                            <span class="title">Jump To</span>
                        </a>

                    </div>

                    <?php

                    global $blog_id;
                    $current_blog_details = get_blog_details( $blog_id );
                    $current_site = $current_blog_details->blogname; 
                    
                    if ($current_site == 'Cheetah Conservation Fund'){
                        get_template_part('template-parts/aside-global'); 
                    } else {
                        get_template_part('template-parts/aside-affiliate'); 
                    }

                    ?>

                </div>
            </div>
            <!-- .col -->

            <div class="col-xl-9 pt-4 pt-xl-6">

                <header class="narrow mb-5">

                    <?php $postcat = get_the_category( $post->ID ); ?>
                    <?php foreach ($postcat as $cat): if ($cat->parent != 0):

                    // get_category_link( $cat->term_id )
                    
                    ?>

                    <p class="mb-0"><a class="no-link-style text-body" href="#"><em><?php echo $cat->name ?></em></a></p>
                
                    <?php endif; endforeach; ?> 
                
                    <h1 class="display-3"><?php the_title(); ?></h1>
                    <ul class="link-list horizontal fs-md">
                        <?php $author = get_field('author'); ?>

                        <li class="font-weight-bold">by&nbsp;<a href="#" class="blended-link"><?php echo $author; ?></a></li>
                        
                        <li><?php the_date(); ?></li>
                    </ul>
                    <p class="f-sans-serif "> </p>
                </header>

                <?php $featured_image = get_field('featured_image');	
                
                if( $featured_image ): ?>

                <div class="narrow mb-5">

                    <figure class="figure my-0">
                        <img class="figure-img" src="<?php echo $featured_image['image']; ?>" alt="<?php the_title(); ?>" />
                        <?php if( $featured_image['caption'] ): ?>
                            <figcaption class="figure-caption"><?php echo $featured_image['caption'] ?></figcaption>
                        <?php endif; ?>
                    </figure>

                </div>
                <!-- .narrow -->

                <?php endif; /* featured_image */ ?>

                <?php get_template_part('template-parts/flexible-content-post'); ?>

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