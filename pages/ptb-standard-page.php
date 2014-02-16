<?php

class PTB_Standard_Page extends PTB_Base {

  public function __construct () {
    parent::__construct(array(
      'name' => '',
      'page_type' => '',
      'description' => '',
      'filename' => '',
      'availablepagetypes' => ''
    ));

    $this->property(array(
      'type' => self::PropertyString,
      'title' => 'Name of the person',
      'key' => 'name-of-the-person',
      'priority' => 'default',
      'disable' => true,
      'require' => false
    ));

    $this->property(array(
      'type' => self::PropertyDivider,
      'title' => 'Sociala medier',
      'key' => 'twitter',
      'priority' => 'default',
      'show_ui' => true,
      'require' => false,
      'box' => 'Hello, world'
    ));

    $this->property(array(
      'type' => self::PropertyUrl,
      'title' => 'Facebook länk',
      'key' => 'name-of-the-person',
      'priority' => 'default',
      'show_ui' => true,
      'require' => false,
      'box' => 'Hello, world'
    ));

    $this->property(array(
      'type' => self::PropertyUrl,
      'title' => 'Twitter länk',
      'key' => 'name-of-the-person',
      'priority' => 'default',
      'show_ui' => true,
      'require' => false,
      'box' => 'Hello, world'
    ));

    $this->property(array(
      'type' => self::PropertyUrl,
      'title' => 'Instagram länk',
      'key' => 'name-of-the-person',
      'priority' => 'default',
      'show_ui' => true,
      'require' => false,
      'box' => 'Hello, world'
    ));


  }

}