с дочерними категориями


<?php 
/**
* @version      4.10.5 13.08.2013
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/
defined('_JEXEC') or die('Restricted access');

print $this->_tmp_maincategory_html_start;
?>
<?php $Table_Category = &JTable::getInstance("Category", "JShop");?>
<?php if ($this->params->get('show_page_heading') && $this->params->get('page_heading')){?>
<div class="shophead<?php print $this->params->get('pageclass_sfx');?>">
    <h1><?php print $this->params->get('page_heading')?></h1>
</div>
<?php }?>

<div class="jshop" id="comjshop">
    <div class="category_description">
        <?php print $this->category->description?>
    </div>

    <div class="jshop_list_category">
    <?php if (count($this->categories)) : ?>

        <?php foreach ($this->categories as $k => $category) : ?>
            <?php if ($k % $this->count_category_to_row == 0) : ?>
                <div class = "row-fluid">
            <?php endif; ?>

            <div class = "sblock<?php echo $this->count_category_to_row;?> jshop_categ category">
                <div class="sblock2 image">
                    <a href = "<?php print $category->category_link;?>">
                        <img class = "jshop_img" src = "<?php print $this->image_category_path;?>/<?php if ($category->category_image) print $category->category_image; else print $this->noimage;?>" alt="<?php print htmlspecialchars($category->name);?>" title="<?php print htmlspecialchars($category->name);?>" />
                    </a>
                </div>
                <div class="sblock2">
                    <div class="category_name">
                        <a class = "product_link" href = "<?php print $category->category_link?>">
                            <?php print $category->name?>
                        </a>
                    </div>
                         <div class="sub-category">
             <?php $Sub_Categories = $Table_Category->getSubCategories($category->category_id); ForEach($Sub_Categories As $Sub_Category){Print "<div><A Href = \"".$Sub_Category->category_link."\">".$Sub_Category->name."</A></div>";}?>
           </div>
                    <p class = "category_short_description">
                        <?php print $category->short_description?>
                    </p>
                </div>
            </div>
      
           <?php if ($k % $this->count_category_to_row == $this->count_category_to_row - 1) : ?>

                </div>
            <?php endif; ?>
        <?php endforeach;?>

        <?php if ($k % $this->count_category_to_row != $this->count_category_to_row - 1) : ?>

            </div>
        <?php endif; ?>

    <?php endif; ?>
    </div>
</div>
