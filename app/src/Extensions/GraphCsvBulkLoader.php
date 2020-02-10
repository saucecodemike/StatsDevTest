<?php


namespace StatsTest\Extensions;


use SilverStripe\Dev\CsvBulkLoader;

/**
 * Class GraphCsvBulkLoader
 * @package StatsTest\Extensions
 */
class GraphCsvBulkLoader extends CsvBulkLoader
{
    /**
     * @var array
     */
    public $columnMap = [
        'Category' => 'Category',
        'Installation' => 'Installation',
        'Manufacturing' => 'Manufacturing',
        'Sales & Distribution' => 'SalesAndDistribution',
        'Project Development' => 'ProjectDevelopment',
        'Other' => 'Other',
    ];

}