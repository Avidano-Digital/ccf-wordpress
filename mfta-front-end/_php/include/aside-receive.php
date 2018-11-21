<a class="sr-only sr-only-focusable tab-skipper" href="#article-content" id="skip-to-content" title="Skip Navigation">Skip Side Navigation</a>

<div class="btn-toggle d-lg-none py-2">

  <a class="btn btn-block btn-lg btn-secondary text-primary" data-toggle="collapse" href="#aside-nav" aria-expanded="false" aria-controls="aside-nav">
    <span class="title text-capitalize text-primary"><?php echo $section; ?> </span>
  </a>

</div>

<nav class="collapse d-lg-block p-3" id="aside-nav" role="navigation">
  <ul class="link-list fs-md">
    <li>
      <a <?php if( $page == 'receiving-materials'){ echo 'class="active"' ;} ?> href="/receive/receiving-materials.php" title="Receiving Materials">Receiving Materials</a>
    </li>
    <li>
      <a href="#" title="Warehouse Shopping">Warehouse Shopping</a>
    </li>
    <li>
      <a href="#" title="Direct Donations">Direct Donations</a>
    </li>
  </ul>
</nav>