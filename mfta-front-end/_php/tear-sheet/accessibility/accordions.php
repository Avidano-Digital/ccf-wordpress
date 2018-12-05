<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once($root . '/include/global-header.php');

  $section = 'tear-sheet';
  $page_title = 'Tear Sheet';
?>

<?php include_once($root . '/include/head.php'); ?>

<main id="content" class="bg-light" role="main">

  <?php include_once($root . '/include/sub-page-header.php'); ?>

  <article role="article">

    <div class="container-fluid wide">

      <div class="row">
        
        <div class="col-lg-4 col-xl-3 py-3 py-lg-5">
          <?php include_once($root . '/tear-sheet/include/aside-nav.php'); ?>
        </div>

        <div class="col-lg-8 col-xl-9 py-3 py-lg-5 px-lg-5 bg-white" id="article-content">

          <div class="narrow">

            <section class="mb-5">

              <header class="mb-4">
                <h1>Accordions</h1>
              </header>
              
              <div id="accordion" class="accordion-group" role="tablist">

              <!-- 01 -->

              <div class="card mb-3">

                <div class="card-header p-0" role="tab" id="headingOne">
                  <h4 class="mb-0">
                    <a class="collapse d-block py-3 px-4" 
                    data-toggle="collapse" 
                    href="#accordion-one" 
                    aria-expanded="true" 
                    aria-controls="accordion-one">
                      <span class="title">Adipiscing ut blandit integer adipiscing</span>
                    </a>
                  </h4>
                </div>

                <div id="accordion-one" 
                class="collapse show" 
                role="tabpanel" 
                aria-labelledby="headingOne" 
                data-parent="#accordion">

                  <div class="card-body">
                    <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
                  </div>

                </div>
              </div>

              <!-- 02 -->

              <div class="card mb-3">

                <div class="card-header p-0" role="tab" id="headingTwo">
                  <h4 class="mb-0">
                    <a class="collapsed d-block py-3 px-4" 
                    data-toggle="collapse" 
                    href="#accordion-two" 
                    aria-expanded="false" 
                    aria-controls="accordion-two">
                      <span class="title">Adipiscing ut blandit integer adipiscing</span>
                    </a>
                  </h4>
                </div>

                <div id="accordion-two" 
                class="collapse" 
                role="tabpanel" 
                aria-labelledby="headingTwo"
                data-parent="#accordion">

                  <div class="card-body">
                    <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
                  </div>

                </div>

              </div>

              <!-- 03 -->

              <div class="card mb-3">

                <div class="card-header p-0" role="tab" id="headingThree">
                  <h4 class="mb-0">
                    <a class="collapsed d-block py-3 px-4" 
                    data-toggle="collapse" 
                    href="#accordion-three" 
                    aria-expanded="false" 
                    aria-controls="accordion-three">
                      <span class="title">Adipiscing ut blandit integer adipiscing</span>
                    </a>

                  </h4>
                </div>

                <div id="accordion-three" 
                class="collapse" 
                role="tabpanel" 
                aria-labelledby="headingThree" 
                data-parent="#accordion">

                  <div class="card-body">
                    <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
                  </div>
                
                </div>

              </div>

              <!-- 04 -->

              <div class="card mb-3">

                <div class="card-header p-0" role="tab" id="headingFour">
                  <h4 class="mb-0">
                    <a class="collapsed d-block py-3 px-4" 
                    data-toggle="collapse" 
                    href="#collapseFour" 
                    aria-expanded="false" 
                    aria-controls="collapseFour">
                      <span class="title">Adipiscing ut blandit integer adipiscing</span>
                    </a>
                  </h4>
                </div>

                <div id="collapseFour" 
                class="collapse" 
                role="tabpanel" 
                aria-labelledby="headingThree" 
                data-parent="#accordion">

                  <div class="card-body">
                    <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
                  </div>
                
                </div>

              </div>

              <!-- 05 -->

              <div class="card">

                <div class="card-header p-0" role="tab" id="headingFive">
                  <h4 class="mb-0">
                    <a class="collapsed d-block py-3 px-4" 
                    data-toggle="collapse" 
                    href="#collapseFive" 
                    aria-expanded="false" 
                    aria-controls="collapseFive">
                      <span class="title">Adipiscing ut blandit integer adipiscing</span>
                    </a>
                  </h4>
                </div>

                <div id="collapseFive" 
                class="collapse" 
                role="tabpanel" 
                aria-labelledby="headingFive" 
                data-parent="#accordion">

                  <div class="card-body">
                    <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
                  </div>
                
                </div>

              </div>

              </div><!-- #accordion -->

            </section>

          </div><!-- .narrow -->

        </div><!-- .col -->

      </div><!-- .row --> 

    </div><!-- .container -->

  </article>

</main><!-- content -->

<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>