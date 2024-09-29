<?php
    /**
     * Copyright (c) 2015 - 2017 by KAA Soft. All rights reserved.
     */

    namespace KAASoft\Controller\Admin\Util;


    use KAASoft\Controller\AdminActionBase;
    use KAASoft\Util\DisplaySwitch;

    class ImportExportAction extends AdminActionBase {

        /**
         * ImportExportAction constructor.
         * @param null $activeRoute
         */
        public function __construct($activeRoute = null) {
            parent::__construct($activeRoute);
        }

        protected function action($args) {
            return new DisplaySwitch('admin/csv/importExport.tpl');
        }
    }