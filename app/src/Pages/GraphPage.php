<?php
namespace StatsTest\Pages;

use SilverStripe\Forms\TextField;

/**
 * Class GraphPage
 * @package StatsTest\Pages
 */
class GraphPage extends Page
{
    /**
     * @var string
     */
    private static $table_name = 'GraphPage';

    /**
     * @var string
     */
    private static $description  = 'Display data uploaded by the user';

    /**
     * @var array
     */
    private static $db = [
        'GraphTitle' => 'Varchar(255)',
        'GraphSubTitle' => 'Varchar(255)',
        'yAxis' => 'Varchar(255)',
        'xAxis' => 'Varchar(255)',
    ];

    /**
     * @return \SilverStripe\Forms\FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', TextField::create('GraphTitle','Graph Title'));
        $fields->addFieldToTab('Root.Main', TextField::create('GraphSubTitle','Graph Sub Title'));
        $fields->addFieldToTab('Root.Main', TextField::create('yAxis','yAxis'));
        $fields->addFieldToTab('Root.Main', TextField::create('xAxis','xAxis'));
        $fields->removeFieldFromTab("Root.Main","Content");
        return $fields;
    }

}
