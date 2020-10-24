<?php

/**
 * @package     joomladdons.com
 * @subpackage  mod_js_testimonials
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
// Include the languages functions only once
JLoader::register('ModJSTestimonialsHelper', __DIR__ . '/helper.php');

$headerText      = $params->get('header_text');
$footerText      = $params->get('footer_text');
// $list            = ModJSTestimonialsHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

require ModuleHelper::getLayoutPath('mod_js_testimonials', $params->get('layout', 'default'));
