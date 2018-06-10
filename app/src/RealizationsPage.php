<?php

namespace Pages;

use Page;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class RealizationsPage extends Page
{
  private static $table_name = 'RealizationsPage';

  private static $has_many = [
    'Realizations' => Realization::class,
  ];

  private static $owns = [
    'Realizations'
  ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Realizations', GridField::create(
            'Realizations',
            'Realizations on this page',
            $this->Realizations(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }
}
