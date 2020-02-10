<?php
/**
 * This prevents certain namespacing issues of any page or module that does not need to be aware of the namespacing.
 */

use StatsTest\Pages\Page as NamespacePage;
use StatsTest\Pages\PageController as NamespacePageController;

class Page extends NamespacePage
{
    /**
     * @var string
     */
    private static $table_name = 'zzPage';

    private static $base_description = 'SS Base Page - DON\'T use this one';
}

/**
 * Class PageController
 */
class PageController extends NamespacePageController
{

}