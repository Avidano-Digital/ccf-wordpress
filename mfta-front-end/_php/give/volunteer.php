<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once($root . '/include/global-header.php');

  $section = 'give';
  $page_title = 'Support local NYC artists';
  $hero_image = '02';
?>

<?php include_once($root . '/include/head.php'); ?>

<main id="content" class="bg-light" role="main">

  <?php include_once($root . '/include/sub-page-header.php'); ?>
  
  <article role="article">

    <div class="container-fluid wide">

      <div class="row">
        
        <div class="col-lg-4 col-xl-3 py-3 py-lg-5">
          <?php include_once($root . '/include/aside-give.php'); ?>
        </div>

        <div class="col-lg-8 col-xl-9 py-3 py-lg-5 px-lg-5 bg-white" id="article-content">

          <div class="narrow">

            <?php include_once($root . '/include/article-content/' . $page . '.php'); ?>

            <?php include_once($root . '/include/article-footer.php'); ?>

          </div><!-- .narrow -->

        </div><!-- .col -->

      </div><!-- .row --> 

    </div><!-- .container -->

  </article>

</main><!-- content -->

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>