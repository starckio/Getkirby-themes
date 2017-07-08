<?php snippet('header') ?>

<main class="main" role="main">

	<div class="text">
		<h1><?php echo $page->subtitle()->or($page->title()) ?></h1>
		<?php echo $page->text()->kirbytext() ?>

		<?php if($user = $site->user() and $user->hasRole('editor')): ?>
		<div class="alert">
			<p>This part of the page is only visible for users with the role editor</p>
		</div>
		<?php endif ?>
	</div>

	<hr>

	<?php snippet('themes') ?>

</main>

<?php snippet('footer') ?>