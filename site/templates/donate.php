<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>

      <form name="_xclick" action="https://www.paypal.com/fr/cgi-bin/webscr" method="post">
      	<input type="hidden" name="cmd" value="_xclick">
      	<input type="hidden" name="business" value="christopher.boutille@me.com">
      	<input type="hidden" name="item_name" value="Donate">
      	<input type="hidden" name="currency_code" value="EUR">
      	<input type="hidden" name="amount" value="5">
      	<a>Donate ;)</a>
      	<div>
      		<ul id="options">
      			<li onclick="selectUSD()" class="">1</li>
      			<li onclick="selectUSD()" class="active">5</li>
      			<li onclick="selectUSD()" class="">10</li>
      			<li onclick="selectUSD()" class="">20</li>
      		</ul>
      		<button type="submit" border="0" name="submit">Donate</button>
      	</div>
      </form>
    </div>

  </main>

<?php echo js('assets/js/donate.js') ?>
<?php snippet('footer') ?>