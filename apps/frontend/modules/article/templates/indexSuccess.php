<h1>Aktualności</h1>

<table class="blog" cellpadding="0" cellspacing="0">
  <tbody>
    <?php foreach($articles as $article): ?>
      <?php include_partial('article/article', array('article' => $article, 'mode' => 'multi')) ?>
    <?php endforeach; ?>
	<tr>
		<td>
			<?php include_partial('form', array('form' => $form)) ?>
		</td>
	</tr>
  </tbody>
</table>