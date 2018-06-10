<?php

use SilverStripe\CMS\Model\SiteTree;

use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\DropdownField;

use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
class Page extends SiteTree
{
  private static $db = [
    'OgTitle' => 'Varchar',
    'OgDescription' => 'Text',
    'OgUrl' => 'Varchar',
    'OgSite_name' => 'Varchar',
    'OgType' => 'Varchar',
    'OgLocale' => 'Varchar',
    'OgImageAlt' => 'Varchar',
    'TwCard' => 'Varchar',
    'TwSite' => 'Varchar',
    'TwTitle' => 'Varchar',
    'TwDescription' => 'Varchar',
    'TwImageAlt' => 'Varchar',
    'TwUrl' => 'Varchar',
    'TwCreator' => 'Varchar',
  ];

    private static $has_one = [
      'OgPhoto' => Image::class,
      'TwPhoto' => Image::class,
    ];

    private static $owns = [
    	'OgPhoto',
      'TwPhoto'
    ];

    public function getCMSFields()
    {
      $fields = parent::getCMSFields();

      $fields->addFieldToTab('Root.OpenGraph', $dropdownField = DropdownField::create('OgType','Type', ['WEB' => 'website', 'PRO' => 'profile', 'BOO' => 'book', 'ART'=> 'article', 'VID' => 'video', 'MUS' => 'music']));
      $dropdownField->setEmptyString('(Select one)');
      $fields->addFieldToTab('Root.OpenGraph', TextField::create('OgLocale','Locale (pl_PL)'));
      $fields->addFieldToTab('Root.OpenGraph', TextField::create('OgTitle','Title'));
      $fields->addFieldToTab('Root.OpenGraph', TextareaField::create('OgDescription','Description'));
      $fields->addFieldToTab('Root.OpenGraph', TextField::create('OgUrl','Url'));
      $fields->addFieldToTab('Root.OpenGraph', TextField::create('OgSite_name','Site name'));
      $fields->addFieldToTab('Root.OpenGraph', $photo = UploadField::create('OgPhoto','Photo'));
      $photo->getValidator()->setAllowedExtensions(array('jpg','png','jpeg','gif'));
      $photo->setFolderName('OpenGraph-photos');
      $fields->addFieldToTab('Root.OpenGraph', TextField::create('OgImageAlt','Image Alt'));

      $fields->addFieldToTab('Root.OpenGraph', $twDropdownField = DropdownField::create('TwCard','Type', ['SUM' => 'summary', 'SUL' => 'summary_large_image', 'PLA' => 'player', 'APP' => 'app']));
      $twDropdownField->setEmptyString('(Select one)');
      $fields->addFieldToTab('Root.OpenGraph', TextField::create('TwSite','Site'));
      $fields->addFieldToTab('Root.OpenGraph', TextField::create('TwCreator', 'Creator'));
      $fields->addFieldToTab('Root.OpenGraph', TextField::create('TwTitle','Title'));
      $fields->addFieldToTab('Root.OpenGraph', TextareaField::create('TwDescription', 'Description'));
      $fields->addFieldToTab('Root.OpenGraph', TextField::create('TwUrl', 'Url'));

      $fields->addFieldToTab('Root.OpenGraph', $twphoto = UploadField::create('TwPhoto','Photo'));
      $twphoto->getValidator()->setAllowedExtensions(array('jpg','png','jpeg','gif'));
      $twphoto->setFolderName('OpenGraph-photos');
      $fields->addFieldToTab('Root.OpenGraph', TextField::create('TwImageAlt','Image Alt'));


      return $fields;
    }
}
