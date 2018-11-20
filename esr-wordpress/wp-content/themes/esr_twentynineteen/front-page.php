<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

 get_header(); ?>

  <main id="content">

    <section class="py-7" id="introduction">

      <div class="container-fluid wide">

        <div class="narrow mb-5">
          <h1 class="text-center">We help the world’s greatest scientists save endangered animals</h1>      
        </div>

      <div class="row matrix-border border">

        <div class="col-6">

          <img src="https://via.placeholder.com/800x400" alt="Placeholder">

        </div>
        <!-- .col -->

        <div class="col-6">
        
        </div>
        <!-- .col -->

      </div>
      <!-- .row -->
      </div>
      <!-- .container-fluid -->


    </section>
    <!-- #introduction -->

  </main>
  <!-- #content -->

  <?php get_footer(); ?>