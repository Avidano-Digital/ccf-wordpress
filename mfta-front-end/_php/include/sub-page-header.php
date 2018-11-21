<?php if( $section == 'tear-sheet' ) : ?>

<header class="container-fluid bg-primary py-5">

	<div class="wide">
		<p class="display-3 font-weight-bold text-center text-secondary">
			<?php echo $page_title; ?>
		</p>
	</div>

	<nav class="mt-2" id="tear-sheet-top-nav" role="navigation">

		<ul class="link-list horizontal justify-content-center responsive-md">
			<li>
				<a class="<?php if( $parent == 'accessibility'){ echo 'active' ;} ?>" href="/tear-sheet/accessibility/" title="Accessibility">Accessibility</a>
			</li>
			<li>
				<a class="<?php if( $parent == 'design'){ echo 'active' ;} ?>" href="/tear-sheet/design/" title="Design">Design</a>
			</li>
			<li>
				<a class="<?php if( $parent == 'containers'){ echo 'active' ;} ?>" href="/tear-sheet/containers/" title="Containers">Containers</a>
			</li>
			<li>
				<a class="<?php if( $parent == 'typography'){ echo 'active' ;} ?>" href="/tear-sheet/typography/" title="Typography">Typography</a>
			</li>
		</ul>
	</nav>

</header>

<?php else : ?>

<header class="container-fluid bg-primary px-0">

<div class="featured-panel responsive-md">
	<div class="card bg-primary">
		<img class="card-img opacity-30" src="/images/hero/<?php echo $hero_image; ?>.jpg" alt="Card image">
		<div class="card-img-overlay d-flex">
			<div class="container align-self-center w-100">
				<div class="narrow">
					<p class="display-4 text-center text-white">
						<?php echo $page_title; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

</header>

<?php endif; ?>
