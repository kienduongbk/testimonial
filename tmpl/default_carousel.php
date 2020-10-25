<?php

/**
 * @package     joomladdons.com
 * @subpackage  mod_js_testimonials
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory as JFactory;

$doc = JFactory::getDocument();
$doc->addStyleSheet('modules/mod_js_testimonials/assets/css/owl.carousel.min.css');
$doc->addStyleSheet('modules/mod_js_testimonials/assets/css/style.css');
$doc->addScript('modules/mod_js_testimonials/assets/js/owl.carousel.min.js');
$doc->addScript('modules/mod_js_testimonials/assets/js/script.js');
