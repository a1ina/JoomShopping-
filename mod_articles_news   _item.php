<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$item_heading = $params->get('item_heading', 'h4');
?>
    <div class="last-news-block span4">
        <?php $images = json_decode($item->images); ?>
            <?php if (isset($images->image_intro) and !empty($images->image_intro) and $params->get('image')) : ?>
                <div class="news-image-preview">
                    <div class="post-thumb">
                        <a href="<?php echo $item->link;?>">
<img src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" class="left_img" />
</a></div>
                    <div class="new_h">
                        <?php if ($params->get('item_title')) : ?>
                            <?php if ($params->get('link_titles') ) : ?>
                                <a href="<?php echo $item->link; ?>">
                                    <?php echo $item->title; ?>
                                </a>
                                <?php else : ?>
                                    <?php echo $item->title; ?>
                                        <?php endif; ?>
                                            <?php endif; ?>
                                               
                                                <div class="text-h">
                                                    <?php if (!$params->get('intro_only')) : ?>
                                                        <?php echo $item->afterDisplayTitle; ?>
                                                            <?php endif; ?>
                                                                <?php echo $item->beforeDisplayContent; ?>
                                                                    <?php echo $item->introtext; ?>
                                                                        <?php echo $item->afterDisplayContent; ?>
                                                </div>
                                                <?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
                                                    <?php echo '<a class="readmore" href="' . $item->link . '">' . $item->linkText . '</a>'; ?>
                                                        <?php endif; ?>
                    </div>
        </div></div>
                <?php endif; ?>
                    <?php /*if (!$params->get('intro_only')) : ?>
                        <?php echo $item->afterDisplayTitle; ?>
                            <?php endif; ?>
                                <?php echo $item->beforeDisplayContent; ?>
                                    <?php echo $item->introtext; ?>
                                        <?php echo $item->afterDisplayContent;*/ ?>
                                            <?php/* if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
                                                <?php echo '<a class="readmore" href="' . $item->link . '">' . $item->linkText . '</a>'; ?>
                                                    <?php endif;*/ ?>
</div>
