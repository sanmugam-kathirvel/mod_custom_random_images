<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_random_image
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="random-image<?php echo $moduleclass_sfx ?>">
    <div class="row">
        <?php foreach($images as $image): ?>
            <?php if ($link) : ?>
                <a href="<?php echo $link; ?>">
            <?php endif; ?>
	        <div class="col-md-2 item"><?php echo JHtml::_('image', $image->folder . '/' . $image->name, $image->name, array('width' => $image->width, 'height' => $image->height)); ?></div>
            <?php if ($link) : ?>
            </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <a class="view-all" href="gallery">Go to Gallery <i class="fa fa-arrow-circle-o-right"></i></a>
</div>
