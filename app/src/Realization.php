<?php

namespace Pages;

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Versioned\Versioned;

class Realization extends DataObject
{
  private static $table_name = 'Realization';

  private static $db = [
         'Title' => 'Varchar',
         'Description' => 'Text',
     ];

     private static $has_one = [
         'Photo' => Image::class,
         'RealizationsPage' => RealizationsPage::class,
     ];

     private static $owns = [
         'Photo',
     ];

    private static $extensions = [
        Versioned::class,
    ];

    private static $summary_fields = [
        'Photo.Filename' => 'Photo file name',
        'Title' => 'Title',
        'Description' => 'Description'
    ];

    private static $versioned_gridfield_extensions = true;

        public function getGridThumbnail()
        {
            if($this->Photo()->exists()) {
                return $this->Photo()->ScaleWidth(100);
            }

            return "(no image)";
        }

     public function getCMSFields()
     {
         $fields = FieldList::create(
             TextField::create('Title'),
             TextareaField::create('Description'),
             $uploader = UploadField::create('Photo')
         );

         $uploader->setFolderName('realization-photos');
         $uploader->getValidator()->setAllowedExtensions(['png','gif','jpeg','jpg']);

         return $fields;
     }
}
