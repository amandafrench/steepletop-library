<div class="item record">
    <?php
    $title = metadata($item, array('Dublin Core', 'Title'));
    $creator = metadata($item, array('Dublin Core', 'Creator'));
    $description = metadata($item, array('Dublin Core', 'Description'), array('snippet' => 150));
    ?>
    <h3><?php echo link_to($item, 'show', strip_formatting($title)); ?></h3>
    <?php if (metadata($item, 'has files')) {
        echo link_to_item(
            item_image('thumbnail', array(), 0, $item), 
            array('class' => 'image'), 'show', $item
        );
    }
    ?>
    <p><?php echo strip_tags($creator); ?></p>
    <?php if ($description): ?>
        <p class="item-description"><?php echo $description; ?></p>
    <?php endif; ?>
</div>
