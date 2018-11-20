<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once($root . '/include/global-header.php');

  $section = 'tear-sheet';
  $page_title = 'Tear Sheet';
?>

<?php include_once($root . '/include/head.php'); ?>

<main id="content" role="main">

  <?php include_once($root . '/include/sub-page-header.php'); ?>

  <div class="container py-5">

    <div class="narrow">

      <section class="mb-5">
        <h1 class="display-1">Display 1</h1>
        <h1 class="display-2">Display 2</h1>
        <h1 class="display-3">Display 3</h1>
        <h1 class="display-4">Display 4</h1>
      </section>

      <section class="mb-5">

        <h1>Here is an h1</h1>

        <p class="lead">Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>

        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
        
        <ul class="fa-ul">
          <li class="d-flex flex-row flex-nowrap">
            <span class="fa-li order-2" style="flex-order: 2;">
              <span class="fas fa-star fa-sm fa-circle text-primary"></span>
            </span>
            <span class="order-1" style="flex-order: 1;">The quick brown fox jumped over the lazy dog. The quick brown fox jumped over the lazy dog.</span>
          </li>
          <li>
            <span class="fa-li">
              <span class="fas fa-star fa-sm fa-circle text-primary"></span>
            </span>The quick brown fox jumped over the lazy dog.</li>
          <li>
            <span class="fa-li">
              <span class="fas fa-star fa-sm fa-circle text-primary"></span>
            </span>The quick brown fox jumped over the lazy dog.</li>
        </ul>

        <ul class="icon-bullet">
            <li>The quick brown fox jumped over the lazy dog. The quick brown fox jumped over the lazy dog.</li>
            <li>The quick brown fox jumped over the lazy dog.</li>
            <li>The quick brown fox jumped over the lazy dog.</li>
        </ul>
        <ul>
            <li>The quick brown fox jumped over the lazy dog. The quick brown fox jumped over the lazy dog.</li>
            <li>The quick brown fox jumped over the lazy dog.</li>
            <li>The quick brown fox jumped over the lazy dog.</li>
        </ul>
        <ol>
            <li>The quick brown fox jumped over the lazy dog.</li>
            <li>The quick brown fox jumped over the lazy dog.</li>
            <li>The quick brown fox jumped over the lazy dog.</li>
        </ol>

        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>

        <h2>Here is an h2</h2>

        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>

        <h3>Here is an h3</h3>

        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>

        <h4>Here is an h4</h4>

        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>

        <h5>Here is an h5</h5>

        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>

        <h6>Here is an h6</h5>

        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>

      </section>
    
    </div><!-- .narrow -->

  </div><!-- .container -->

</main><!-- content -->

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>