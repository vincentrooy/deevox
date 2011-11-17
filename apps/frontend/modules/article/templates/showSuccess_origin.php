<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $td_article->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $td_article->getTitle() ?></td>
    </tr>
    <tr>
      <th>Author:</th>
      <td><?php echo $td_article->getAuthorId() ?></td>
    </tr>
    <tr>
      <th>Text:</th>
      <td><?php echo $td_article->getText() ?></td>
    </tr>
    <tr>
      <th>Image:</th>
      <td><?php echo $td_article->getImage() ?></td>
    </tr>
    <tr>
      <th>Active:</th>
      <td><?php echo $td_article->getActive() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $td_article->getType() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $td_article->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $td_article->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('article/edit?id='.$td_article->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('article/index') ?>">List</a>
