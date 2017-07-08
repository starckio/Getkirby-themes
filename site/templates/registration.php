<?php snippet('header') ?>

<main class="main" role="main">

	<?php foreach($page->children()->visible()->flip() as $register): ?>
	<ul>
		<li><?php echo $register->firstname()->html() ?></li>
		<li><?php echo $register->lastname()->html() ?></li>
		<li><?php echo $register->company()->html() ?></li>
		<li><?php echo $register->email()->html() ?></li>
		<li><?php echo $register->message()->html() ?></li>
		<li><?php echo $register->website()->html() ?></li>
	</ul>
	<hr />
	<?php endforeach ?>

</main>
  
<?php snippet('footer') ?>