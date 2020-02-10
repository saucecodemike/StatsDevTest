<?php
namespace StatsTest\DataObjects;

use SilverStripe\ORM\DataObject;

/**
 * Class CustomGraphRow
 * @package StatsTest\DataObjects
 */
class CustomGraphRow extends DataObject
{

    /**
     * @var string 
     */
    private static $table_name = 'CustomGraphRow';

    /**
     * @var array
     */
    private static $db = [
        'Category' => 'Varchar(255)',
        'Installation' => 'Varchar(255)',
        'Manufacturing' => 'Varchar(255)',
        'SalesAndDistribution' => 'Varchar(255)',
        'ProjectDevelopment' => 'Varchar(255)',
        'Other' => 'Varchar(255)',
    ];

    /**
     * @var array
     */
    private static $summary_fields = [
        'Category' => 'Category',
        'Installation' => 'Installation',
        'Manufacturing' => 'Manufacturing',
        'SalesAndDistribution' => 'Sales & Distribution',
        'ProjectDevelopment' => 'Project Development',
        'Other' => 'Other',
    ];

    /**
     * @return \SilverStripe\Forms\FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }
}
