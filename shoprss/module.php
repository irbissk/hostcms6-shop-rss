<?php

defined('HOSTCMS') || exit('HostCMS: access denied.');

/**
 * Модуль создания RSS лент для интернет магазина
 *
 * @author Medvedev Sergey <irbissk@gmail.com>
 * @copyright Copyright (c) 2011, Medvedev Sergey
 * @license http://opensource.org/licenses/gpl-3.0.html GNU General Public License, version 3
 * @since 15.07.2013
 * @version 1.0
 */
class Shoprss_Module extends Core_Module
{
    /**
     * Module version
     * @var string
     */
    public $version = '1.0';

    /**
     * Module date
     * @var date
     */
    public $date = '2013-07-15';

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}