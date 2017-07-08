<h2>Latest themes</h2>

<ul class="teaser cf">
  <?php foreach(page('themes')->children()->visible()->limit(3) as $theme): ?>
  <li>
    <h3><a href="<?php echo $theme->url() ?>"><?php echo $theme->title()->html() ?></a></h3>
    <p><?php echo $theme->text()->excerpt(80) ?> <a href="<?php echo $theme->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $theme->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $theme->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $theme->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
