<?php snippet('header') ?>

<main class="main" role="main">

	<h1><?php echo $page->title()->html() ?></h1>

	<ul class="meta cf">

		<?php if($page->author() != ''): ?>
		<li><b>Creator:</b> <?php echo $page->author() ?></li>
		<?php endif ?>

		<li><b>Category:</b> <?php echo $page->category() ?></li>
		<li><b>Price:</b> <?php echo $page->price() ?>$</li>
		<li><a href="<?php echo $page->demo() ?>">Demo</a></li>
		<li><a href="<?php echo $page->market() ?>">Buy</a></li>
		
		<?php if($user = $site->user() and $site->user()->is($site->user($page->author()))): ?>
		<li><a href="<?php echo url('edit') ?>">Edit theme</a></li>
		<?php endif ?>
	</ul>

	<div class="text">
		<?php echo $page->text()->kirbytext() ?>

		<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
		<figure>
			<img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
		</figure>
		<?php endforeach ?>
	</div>

	<nav class="nextprev cf" role="navigation">
		<?php if($prev = $page->prevVisible()): ?>
		<a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
		<?php endif ?>
		<?php if($next = $page->nextVisible()): ?>
		<a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
		<?php endif ?>
	</nav>

</main>

<?php snippet('footer') ?>