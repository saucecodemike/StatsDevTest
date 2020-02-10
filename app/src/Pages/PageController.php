<?php

    namespace StatsTest\Pages;

    use SilverStripe\CMS\Controllers\ContentController;

    /**
     * Class PageController
     * @package StatsTest\Pages
     */
    class PageController extends ContentController
    {

        private static $allowed_actions = [];

        protected function init()
        {
            parent::init();
            // You can include any CSS or JS required by your project here.
            // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/
        }
    }

