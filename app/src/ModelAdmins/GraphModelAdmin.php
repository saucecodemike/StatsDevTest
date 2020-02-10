<?php


namespace StatsTest\ModelAdmins;

use SilverStripe\Admin\ModelAdmin;
use StatsTest\DataObjects\CustomGraphRow;

/**
 * Class GraphModelAdmin
 * @package StatsTest\ModelAdmins
 */
class GraphModelAdmin extends ModelAdmin
{
    /**
     * @var array
     */
    private static $managed_models = [
        CustomGraphRow::class,
    ];

    /**
     * @var string
     */
    private static $menu_icon_class = 'font-icon-database';

    /**
     * @var string
     */
    private static $url_segment = 'graph-management';

    /**
     * @var string
     */
    private static $menu_title = 'Graph Management';

}