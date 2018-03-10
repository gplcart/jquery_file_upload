<?php

/**
 * @package Jquery File Upload
 * @author Iurii Makukh <gplcart.software@gmail.com>
 * @copyright Copyright (c) 2017, Iurii Makukh <gplcart.software@gmail.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0+
 */

namespace gplcart\modules\jquery_file_upload;

use gplcart\core\Library;

/**
 * Main class for Jquery File Upload module
 */
class Main
{

    /**
     * Library class instance
     * @var \gplcart\core\Library $library
     */
    protected $library;

    /**
     * @param Library $library
     */
    public function __construct(Library $library)
    {
        $this->library = $library;
    }

    /**
     * Implements hook "library.list"
     * @param array $libraries
     */
    public function hookLibraryList(array &$libraries)
    {
        $libraries['jquery_file_upload'] = array(
            'name' => 'jQuery File Upload', // @text
            'description' => 'File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery', // @text
            'type' => 'asset',
            'module' => 'jquery_file_upload',
            'url' => 'https://github.com/blueimp/jQuery-File-Upload',
            'download' => 'https://github.com/blueimp/jQuery-File-Upload/archive/v9.19.1.zip',
            'version' => '9.19.1',
            'files' => array(
                'js/jquery.fileupload.js'
            ),
        );
    }

    /**
     * Implements hook "module.enable.after"
     */
    public function hookModuleEnableAfter()
    {
        $this->library->clearCache();
    }

    /**
     * Implements hook "module.disable.after"
     */
    public function hookModuleDisableAfter()
    {
        $this->library->clearCache();
    }

    /**
     * Implements hook "module.install.after"
     */
    public function hookModuleInstallAfter()
    {
        $this->library->clearCache();
    }

    /**
     * Implements hook "module.uninstall.after"
     */
    public function hookModuleUninstallAfter()
    {
        $this->library->clearCache();
    }

}
