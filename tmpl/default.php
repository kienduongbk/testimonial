<?php

/**
 * @package     joomladdons.com
 * @subpackage  mod_js_testimonials
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$data = (array)$params->get('testimonial');
//get params
$show_heading = $params->get('show_heading');
$heading_title = $params->get('heading_title');
$heading_desc = $params->get('heading_desc');
$count = !empty($data) ? count($data) : 0;
$colum = $params->get('col', 2);
$i = 0;
if (!$count) return true;
?>
<div id="js-testimonial" class="js-section<?php echo $moduleclass_sfx; ?>" role="testimonial">
    <div class="js-testimonial-inner container">
        <?php if ($show_heading) : ?>
            <div class="section-heading text-center">
                <h2><?php echo $heading_title; ?></h2>

                <p><?php echo $heading_desc; ?></p>
            </div>
        <?php endif; ?>

        <?php foreach ($data as $item) : ?>
            <?php $rowcount = ((int)$i % (int) $colum) + 1; ?>
            <?php if ($rowcount === 1) : ?>
                <ul class="testimonial-list row">
                <?php endif; ?>
                <li class="item col-md-<?php echo (12 / $colum); ?>">
                    <div class="testimonial-block">
                        <img src="<?php echo $item->testimonial_img; ?>" alt="Sample image" class="img-circle" />
                        <h4 class="author-name"><?php echo $item->testimonial_name; ?></h4>
                        <h4 class="author-position"><?php echo $item->testimonial_position; ?></h4>

                        <p>
                            <?php echo $item->testimonial_description; ?>
                        </p>
                    </div>
                </li>
                <?php $i++; ?>
                <?php if (($rowcount == $colum) or ($i == $count)) : ?>
                </ul><!-- end row -->
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>