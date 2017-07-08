<?php
return [
  'name'        => 'Editor',
  'default'     => false,
  'permissions' => [
    '*'                 => true,
    'panel.site.update' => false,
    'panel.user.*'      => false,
    'panel.user.read' => function() {
      return $this->user()->is($this->target()->user());
    },
    'panel.user.update' => function() {
      return $this->user()->is($this->target()->user());
    },
    'panel.widget.account' => true,
    'panel.widget.history' => false,
    'panel.widget.site'    => false,
    'panel.widget.pages'   => true,
	'panel.page.create'    => function() {
	  return $this->target()->page()->template() === 'themes';
	},
    'panel.page.update' => function() {
      return $this->target()->page()->template() === 'theme';
    },
	'panel.page.delete' => function() {
	  return $this->target()->page()->intendedTemplate() === 'theme';
	},
	'panel.page.visibility' => false
  ]
];