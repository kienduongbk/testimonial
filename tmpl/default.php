<?php

/**
 * @package     joomladdons.com
 * @subpackage  mod_js_testimonials
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$data = $params->get('testimonial');
$heading_title = $params->get('heading_title');
$heading_desc = $params->get('heading_desc');
$count = 0;
$col = $params->get('col');
?>
<div id="js-testimonial" class="js-section" role="testimonial">
    <div class="js-testimonial-inner container">
        <div class="section-heading text-center">
            <h2>Testimonials</h2>

            <p>What customers say about us</p>
        </div>

        <ul class="testimonial-list row">
            <?php foreach ($data as $item) : ?>
                <li class="item col-md-4">
                    <div class="testimonial-block">
                        <img src="<?php echo $item->testimonial_img; ?>" alt="Sample image" class="img-circle" />
                        <h4 class="author-name"><?php echo $item->testimonial_name; ?></h4>
                        <h4 class="author-position"><?php echo $item->testimonial_position; ?></h4>

                        <p>
                            <?php echo $item->testimonial_description; ?>
                        </p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>