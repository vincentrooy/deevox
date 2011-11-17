<h1>Artists List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Sf guard user</th>
      <th>Artist name</th>
      <th>Hometown</th>
      <th>Nationality</th>
      <th>Website</th>
      <th>Facebook address</th>
      <th>Twitter address</th>
      <th>Date of early career</th>
      <th>Number of album</th>
      <th>Number of title</th>
      <th>Resume</th>
      <th>Detail</th>
      <th>Creation date of the account</th>
      <th>Photo biographie</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($artists as $artist): ?>
    <tr>
      <td><a href="<?php echo url_for('artiste/show?id='.$artist->getId()) ?>"><?php echo $artist->getId() ?></a></td>
      <td><?php echo $artist->getSfGuardUserId() ?></td>
      <td><?php echo $artist->getArtistName() ?></td>
      <td><?php echo $artist->getHometown() ?></td>
      <td><?php echo $artist->getNationality() ?></td>
      <td><?php echo $artist->getWebsite() ?></td>
      <td><?php echo $artist->getFacebookAddress() ?></td>
      <td><?php echo $artist->getTwitterAddress() ?></td>
      <td><?php echo $artist->getDateOfEarlyCareer() ?></td>
      <td><?php echo $artist->getNumberOfAlbum() ?></td>
      <td><?php echo $artist->getNumberOfTitle() ?></td>
      <td><?php echo $artist->getResume() ?></td>
      <td><?php echo $artist->getDetail() ?></td>
      <td><?php echo $artist->getCreationDateOfTheAccount() ?></td>
      <td><?php echo $artist->getPhotoBiographie() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('artiste/new') ?>">New</a>
