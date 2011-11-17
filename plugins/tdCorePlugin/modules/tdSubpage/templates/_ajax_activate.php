<li class="sf_admin_action_activate" id="ajax_activate_<?php echo $td_subpage->getId() ?>">
<?php use_helper('jQuery'); ?>
  <?php echo jq_link_to_remote(__('Activate', array(), 'sf_admin'), array(
    'update'   => 'subpage_visible_action_'.$td_subpage->getId(),
    'url'      => '@tdSubpage_ajax_activate?id='.$td_subpage->getId(),
    'script' => true,
    'complete' => jq_remote_function( array(
      'update' => 'subpage_visible_column_'.$td_subpage->getId(),
      'url'    => 'graphics/tick',
      'script' => true
    )),
  )) ?>
</li>
