<nav role="navigation">

  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li><a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
    <?php endforeach ?>

    <?php if($user = $site->user()): ?>
    <li style="border-left: 1px solid #ddd;"><a href="<?php echo url('adding') ?>">Add theme</a></li>
    <li><a href="<?php echo url('logout') ?>">Logout</a></li>
    <?php else: ?>
    <li style="border-left: 1px solid #ddd;"><a<?php e($pages->find('login')->isOpen(), ' class="active"') ?>  href="<?php echo url('login') ?>">Login</a></li>
    <?php endif ?>
  </ul>

</nav>