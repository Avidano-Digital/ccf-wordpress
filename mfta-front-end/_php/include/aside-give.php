<a class="sr-only sr-only-focusable tab-skipper" href="#article-content" id="skip-to-content" title="Skip Navigation">Skip Side Navigation</a>

<div class="btn-toggle d-lg-none py-2">

  <a class="btn btn-block btn-lg btn-secondary text-primary" data-toggle="collapse" href="#aside-nav" aria-expanded="false" aria-controls="aside-nav">
    <span class="title text-capitalize text-primary"><?php echo $section; ?> </span>
  </a>

</div>

<nav class="collapse d-lg-block p-3" id="aside-nav" role="navigation">
  <ul class="link-list fs-md">
    <li>
      <a <?php if( $page == 'donating-materials'){ echo 'class="active"' ;} ?> href="/give/donating-materials.php" title="Donating Materials">Donating Materials</a>
    </li>
    <li>
      <a <?php if( $page == 'volunteer'){ echo 'class="active"' ;} ?> href="/give/volunteer.php" title="Volunteer">Volunteer</a>
    </li>
    <li>
      <a <?php if( $page == 'financial-contributions'){ echo 'class="active"' ;} ?> href="/give/financial-contributions.php" title="Financial Contributions">Financial Contributions</a>
    </li>
  </ul>
</nav>