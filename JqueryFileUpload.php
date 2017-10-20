<?php

/**
 * @package Jquery File Upload
 * @author Iurii Makukh <gplcart.software@gmail.com>
 * @copyright Copyright (c) 2017, Iurii Makukh <gplcart.software@gmail.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0+
 */

namespace gplcart\modules\jquery_file_upload;

use gplcart\core\Module;

/**
 * Main class for Jquery File Upload module
 */
class JqueryFileUpload extends Module
{

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Implements hook "library.list"
     * @param array $libraries
     */
    public function hookLibraryList(array &$libraries)
    {
        $libraries['jquery_file_upload'] = array(
            'name' => /* @text */'jQuery File Upload',
            'description' => /* @text */'File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery',
            'type' => 'asset',
            'module' => 'jquery_file_upload',
            'url' => 'https://github.com/blueimp/jQuery-File-Upload',
            'download' => 'https://github.com/blueimp/jQuery-File-Upload/archive/v9.19.1.zip',
            'version_source' => array(
                'file' => 'vendor/jquery-file-upload/package.json'
            ),
            'files' => array(
                'vendor/jquery-file-upload/js/jquery.fileupload.js'
            ),
        );
    }

    /**
     * Implements hook "module.enable.after"
     */
    public function hookModuleEnableAfter()
    {
        $this->getLibrary()->clearCache();
    }

    /**
     * Implements hook "module.disable.after"
     */
    public function hookModuleDisableAfter()
    {
        $this->getLibrary()->clearCache();
    }

    /**
     * Implements hook "module.install.after"
     */
    public function hookModuleInstallAfter()
    {
        $this->getLibrary()->clearCache();
    }

    /**
     * Implements hook "module.uninstall.after"
     */
    public function hookModuleUninstallAfter()
    {
        $this->getLibrary()->clearCache();
    }

}
