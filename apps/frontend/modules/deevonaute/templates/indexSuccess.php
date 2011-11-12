<h1>Deevonautes List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Email address</th>
      <th>Username</th>
      <th>Algorithm</th>
      <th>Salt</th>
      <th>Password</th>
      <th>Is active</th>
      <th>Is super admin</th>
      <th>Last login</th>
      <th>Type</th>
      <th>Profile photo</th>
      <th>Gender</th>
      <th>Culture</th>
      <th>Country</th>
      <th>Way</th>
      <th>Additional address</th>
      <th>Zip code</th>
      <th>City</th>
      <th>Date of birth</th>
      <th>Phone number</th>
      <th>Film prefere 1</th>
      <th>Film prefere 2</th>
      <th>Film prefere 3</th>
      <th>Artiste prefere 1</th>
      <th>Artiste prefere 2</th>
      <th>Artiste prefere 3</th>
      <th>Genre prefere 1</th>
      <th>Genre prefere 2</th>
      <th>Genre prefere 3</th>
      <th>Size of storage space</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($deevonautes as $deevonaute): ?>
    <tr>
      <td><a href="<?php echo url_for('deevonaute/show?id='.$deevonaute->getId()) ?>"><?php echo $deevonaute->getId() ?></a></td>
      <td><?php echo $deevonaute->getFirstName() ?></td>
      <td><?php echo $deevonaute->getLastName() ?></td>
      <td><?php echo $deevonaute->getEmailAddress() ?></td>
      <td><?php echo $deevonaute->getUsername() ?></td>
      <td><?php echo $deevonaute->getAlgorithm() ?></td>
      <td><?php echo $deevonaute->getSalt() ?></td>
      <td><?php echo $deevonaute->getPassword() ?></td>
      <td><?php echo $deevonaute->getIsActive() ?></td>
      <td><?php echo $deevonaute->getIsSuperAdmin() ?></td>
      <td><?php echo $deevonaute->getLastLogin() ?></td>
      <td><?php echo $deevonaute->getType() ?></td>
      <td><?php echo $deevonaute->getProfilePhoto() ?></td>
      <td><?php echo $deevonaute->getGender() ?></td>
      <td><?php echo $deevonaute->getCulture() ?></td>
      <td><?php echo $deevonaute->getCountry() ?></td>
      <td><?php echo $deevonaute->getWay() ?></td>
      <td><?php echo $deevonaute->getAdditionalAddress() ?></td>
      <td><?php echo $deevonaute->getZipCode() ?></td>
      <td><?php echo $deevonaute->getCity() ?></td>
      <td><?php echo $deevonaute->getDateOfBirth() ?></td>
      <td><?php echo $deevonaute->getPhoneNumber() ?></td>
      <td><?php echo $deevonaute->getFilmPrefere1() ?></td>
      <td><?php echo $deevonaute->getFilmPrefere2() ?></td>
      <td><?php echo $deevonaute->getFilmPrefere3() ?></td>
      <td><?php echo $deevonaute->getArtistePrefere1() ?></td>
      <td><?php echo $deevonaute->getArtistePrefere2() ?></td>
      <td><?php echo $deevonaute->getArtistePrefere3() ?></td>
      <td><?php echo $deevonaute->getGenrePrefere1() ?></td>
      <td><?php echo $deevonaute->getGenrePrefere2() ?></td>
      <td><?php echo $deevonaute->getGenrePrefere3() ?></td>
      <td><?php echo $deevonaute->getSizeOfStorageSpace() ?></td>
      <td><?php echo $deevonaute->getCreatedAt() ?></td>
      <td><?php echo $deevonaute->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('deevonaute/new') ?>">New</a>
