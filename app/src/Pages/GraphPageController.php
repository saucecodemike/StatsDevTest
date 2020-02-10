<?php


namespace StatsTest\Pages;

use SilverStripe\View\Requirements;
use SilverStripe\View\ThemeResourceLoader;
use StatsTest\DataObjects\CustomGraphRow;

/**
 * Class GraphPageController
 * @package StatsTest\Pages
 */
class GraphPageController extends PageController
{
    /**
     * @param $colName
     * @return false|string
     */
    public function encodeData($colName)
    {
        return json_encode(CustomGraphRow::get()->column($colName), JSON_NUMERIC_CHECK);
    }

    public function getGraphData() {
        $vars = [
            "Category" => $this->encodeData('Category'),
            "Installation" => $this->encodeData('Installation'),
            "Manufacturing" => $this->encodeData('Manufacturing'),
            "SalesAndDistribution" => $this->encodeData('SalesAndDistribution'),
            "ProjectDevelopment" => $this->encodeData('ProjectDevelopment'),
            "Other" => $this->encodeData('Other'),
        ];

        $script = ThemeResourceLoader::inst()->findThemedJavascript('graph.js');
        Requirements::javascriptTemplate($script, $vars);
    }

}