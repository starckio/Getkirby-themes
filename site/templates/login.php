<?php snippet('header') ?>

<main class="main" role="main">

	<div class="text">
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>
	</div>

	<?php if($error): ?>
	<div class="alert"><?php echo $page->alert()->html() ?></div>
	<?php endif ?>
	
	<form method="post">
		<div class="field">
			<label for="username"><?php echo $page->username()->html() ?></label>
			<input type="text" id="username" name="username">
		</div>
		<div class="field">
			<label for="password"><?php echo $page->password()->html() ?></label>
			<input type="password" id="password" name="password">
		</div>
		<div class="center">
			<input class="btn" type="submit" name="login" value="<?php echo $page->button()->html() ?>">
		</div>
	</form>

</main>

<?php snippet('footer') ?>