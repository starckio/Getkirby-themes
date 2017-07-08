<?php if(!$site->user()) go('/') ?>
<?php snippet('header') ?>

<main class="main" role="main">

<?php if(isset($success)): ?>
	<div class="message">
		<?php echo $success; ?>
	</div>
<?php endif ?>

<?php if($alert): ?>
	<div class="alert">
		<ul>
			<?php foreach($alert as $message): ?>
				<li><?php echo html($message) ?></li>
			<?php endforeach ?>
		</ul>
	</div>
<?php endif ?>

<?php if(!isset($success)) {
	 snippet('adding', compact('data'));
} ?>

</main>

<?php snippet('footer') ?>