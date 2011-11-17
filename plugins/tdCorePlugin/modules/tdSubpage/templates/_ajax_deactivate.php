<li class="sf_admin_action_deactivate" id="ajax_deactivate_<?php echo $td_subpage->getId() ?>">
<?php use_helper('jQuery'); ?>
  <?php echo jq_link_to_remote(__('Deactivate', array(), 'sf_admin'), array(
    'update'   => 'subpage_visible_action_'.$td_subpage->getId(),
    'url'      => '@tdSubpage_ajax_deactivate?id='.$td_subpage->getId(),
    'script' => true,
    'complete' => jq_remote_function( array(
      'update' => 'subpage_visible_column_'.$td_subpage->getId(),
      'url'    => 'graphics/empty',
      'script' => true
    )),
  )) ?>
</li>
