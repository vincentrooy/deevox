<h1>Td articles List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Author</th>
      <th>Text</th>
      <th>Image</th>
      <th>Active</th>
      <th>Type</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($td_articles as $td_article): ?>
    <tr>
      <td><a href="<?php echo url_for('article/show?id='.$td_article->getId()) ?>"><?php echo $td_article->getId() ?></a></td>
      <td><?php echo $td_article->getTitle() ?></td>
      <td><?php echo $td_article->getAuthorId() ?></td>
      <td><?php echo $td_article->getText() ?></td>
      <td><?php echo $td_article->getImage() ?></td>
      <td><?php echo $td_article->getActive() ?></td>
      <td><?php echo $td_article->getType() ?></td>
      <td><?php echo $td_article->getCreatedAt() ?></td>
      <td><?php echo $td_article->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('article/new') ?>">New</a>
