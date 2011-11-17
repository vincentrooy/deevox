<?php include_partial('artiste/menuArtiste')?>
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $artist->getId() ?></td>
    </tr>
    <tr>
      <th>Sf guard user:</th>
      <td><?php echo $artist->getSfGuardUserId() ?></td>
    </tr>
    <tr>
      <th>Artist name:</th>
      <td><?php echo $artist->getArtistName() ?></td>
    </tr>
    <tr>
      <th>Hometown:</th>
      <td><?php echo $artist->getHometown() ?></td>
    </tr>
    <tr>
      <th>Nationality:</th>
      <td><?php echo $artist->getNationality() ?></td>
    </tr>
    <tr>
      <th>Website:</th>
      <td><?php echo $artist->getWebsite() ?></td>
    </tr>
    <tr>
      <th>Facebook address:</th>
      <td><?php echo $artist->getFacebookAddress() ?></td>
    </tr>
    <tr>
      <th>Twitter address:</th>
      <td><?php echo $artist->getTwitterAddress() ?></td>
    </tr>
    <tr>
      <th>Date of early career:</th>
      <td><?php echo $artist->getDateOfEarlyCareer() ?></td>
    </tr>
    <tr>
      <th>Number of album:</th>
      <td><?php echo $artist->getNumberOfAlbum() ?></td>
    </tr>
    <tr>
      <th>Number of title:</th>
      <td><?php echo $artist->getNumberOfTitle() ?></td>
    </tr>
    <tr>
      <th>Resume:</th>
      <td><?php echo $artist->getResume() ?></td>
    </tr>
    <tr>
      <th>Detail:</th>
      <td><?php echo $artist->getDetail() ?></td>
    </tr>
    <tr>
      <th>Creation date of the account:</th>
      <td><?php echo $artist->getCreationDateOfTheAccount() ?></td>
    </tr>
    <tr>
      <th>Photo biographie:</th>
      <td><?php echo $artist->getPhotoBiography() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('artiste/edit?id='.$artist->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('artiste/index') ?>">List</a>
