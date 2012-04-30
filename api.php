<?php

Jojo::addHook('foot', 'loadjs', 'jojo_lightbox');
Jojo::addHook('customhead', 'customhead', 'jojo_lightbox');

$_options[] = array(
    'id' => 'lightbox_version',
    'category' => 'Lightbox',
    'label' => 'Lightbox version',
    'description' => 'The lightbox implementation to use.',
    'type'        => 'radio',
    'default' => 'huddletogether',
    'options' => 'huddletogether,jqlightbox,shadowbox,colorbox,ryrych',
    'plugin' => ''
);

$_options[] = array(
    'id' => 'lightbox_head',
    'category' => 'Lightbox',
    'label' => 'Lightbox code position',
    'description' => 'The lightbox code is placed in the head or foot?',
    'type'        => 'radio',
    'default' => 'head',
    'options' => 'head,foot',
    'plugin' => ''
);
