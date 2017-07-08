<form class="event-registration" action="<?= $page->url() ?>" method="post">

	<div class="field">
		<label for="username">Userame:</label>
		<?php if($user = $site->user()): ?>
		<input type="text" id="username" name="username" placeholder="Username" value="<?php echo $user->username() ?>" />
		<?php endif ?>
	</div>

	<div class="field">
		<label for="theme">Theme Name: *</label>
		<input type="text" id="theme" name="theme" placeholder="Theme name" value="<?= isset($data['title']) ? $data['title'] : '' ?>" required/>
	</div>

	<div class="field">
		<label for="price">Price: *</label>
		<input type="text" id="price" name="price" placeholder="Price" value="<?= isset($data['price']) ? $data['price'] : '' ?>" required/>
	</div>

	<div class="field">
		<label for="market">Market link: *</label>
		<input type="text" id="market" name="market" placeholder="Market link" value="<?= isset($data['market']) ? $data['market'] : '' ?>" required/>
	</div>

	<div class="field">
		<label for="demo">Demo link: *</label>
		<input type="text" id="demo" name="demo" placeholder="Demo link" value="<?= isset($data['demo']) ? $data['demo'] : '' ?>" required/>
	</div>

	<div class="field">
		<label for="message">Message:</label>
		<textarea name="message" id="message" placeholder="Do you have any comments?"><?= isset($data['message']) ? $data['message'] : '' ?></textarea>
	</div>

	<div class="field">
		<label for="category">Category: *</label>
		<input type="text" id="category" name="category" placeholder="category" value="<?= isset($data['category']) ? $data['category'] : '' ?>" required/>
	</div>

	<div class="honey">
		 <label for="message">If you are a human, leave this field empty</label>
		 <input type="website" name="website" id="website" placeholder="http://example.com" value="<?= isset($data['website']) ? $data['website'] : '' ?>"/>
	</div>
	<p>* required</p>

	<button class="btn" type="submit" name="register" value="Register">Register</button>

</form>