<span id="subpage_visible_action_<?php echo $td_subpage->getId() ?>">
  <?php if ($td_subpage->getActive()): ?>
    <?php include_partial('tdSubpage/ajax_deactivate', array('td_subpage' => $td_subpage)) ?>
  <?php else: ?>
    <?php include_partial('tdSubpage/ajax_activate', array('td_subpage' => $td_subpage)) ?>
  <?php endif; ?>
</span>
