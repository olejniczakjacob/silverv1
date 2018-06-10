<?php

namespace Pages;

use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

use Page;

class BlogPage extends Page
{
  private static $table_name = 'BlogPage';

  private static $has_many = [
    'Categories' => ArticleCategory::class,
  ];

  private static $allowed_children = [
  		ArticlePage::class
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->addFieldToTab('Root.Categories', GridField::create(
      'Categories',
      'Article categories',
      $this->Categories(),
      GridFieldConfig_RecordEditor::create()
    ));
    return $fields;
    }
}
