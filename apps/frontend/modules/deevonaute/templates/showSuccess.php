<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $deevonaute->getId() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $deevonaute->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $deevonaute->getLastName() ?></td>
    </tr>
    <tr>
      <th>Email address:</th>
      <td><?php echo $deevonaute->getEmailAddress() ?></td>
    </tr>
    <tr>
      <th>Username:</th>
      <td><?php echo $deevonaute->getUsername() ?></td>
    </tr>
    <tr>
      <th>Algorithm:</th>
      <td><?php echo $deevonaute->getAlgorithm() ?></td>
    </tr>
    <tr>
      <th>Salt:</th>
      <td><?php echo $deevonaute->getSalt() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $deevonaute->getPassword() ?></td>
    </tr>
    <tr>
      <th>Is active:</th>
      <td><?php echo $deevonaute->getIsActive() ?></td>
    </tr>
    <tr>
      <th>Is super admin:</th>
      <td><?php echo $deevonaute->getIsSuperAdmin() ?></td>
    </tr>
    <tr>
      <th>Last login:</th>
      <td><?php echo $deevonaute->getLastLogin() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $deevonaute->getType() ?></td>
    </tr>
    <tr>
      <th>Profile photo:</th>
      <td><?php echo $deevonaute->getProfilePhoto() ?></td>
    </tr>
    <tr>
      <th>Gender:</th>
      <td><?php echo $deevonaute->getGender() ?></td>
    </tr>
    <tr>
      <th>Culture:</th>
      <td><?php echo $deevonaute->getCulture() ?></td>
    </tr>
    <tr>
      <th>Country:</th>
      <td><?php echo $deevonaute->getCountry() ?></td>
    </tr>
    <tr>
      <th>Way:</th>
      <td><?php echo $deevonaute->getWay() ?></td>
    </tr>
    <tr>
      <th>Additional address:</th>
      <td><?php echo $deevonaute->getAdditionalAddress() ?></td>
    </tr>
    <tr>
      <th>Zip code:</th>
      <td><?php echo $deevonaute->getZipCode() ?></td>
    </tr>
    <tr>
      <th>City:</th>
      <td><?php echo $deevonaute->getCity() ?></td>
    </tr>
    <tr>
      <th>Date of birth:</th>
      <td><?php echo $deevonaute->getDateOfBirth() ?></td>
    </tr>
    <tr>
      <th>Phone number:</th>
      <td><?php echo $deevonaute->getPhoneNumber() ?></td>
    </tr>
    <tr>
      <th>Film prefere 1:</th>
      <td><?php echo $deevonaute->getFilmPrefere1() ?></td>
    </tr>
    <tr>
      <th>Film prefere 2:</th>
      <td><?php echo $deevonaute->getFilmPrefere2() ?></td>
    </tr>
    <tr>
      <th>Film prefere 3:</th>
      <td><?php echo $deevonaute->getFilmPrefere3() ?></td>
    </tr>
    <tr>
      <th>Artiste prefere 1:</th>
      <td><?php echo $deevonaute->getArtistePrefere1() ?></td>
    </tr>
    <tr>
      <th>Artiste prefere 2:</th>
      <td><?php echo $deevonaute->getArtistePrefere2() ?></td>
    </tr>
    <tr>
      <th>Artiste prefere 3:</th>
      <td><?php echo $deevonaute->getArtistePrefere3() ?></td>
    </tr>
    <tr>
      <th>Genre prefere 1:</th>
      <td><?php echo $deevonaute->getGenrePrefere1() ?></td>
    </tr>
    <tr>
      <th>Genre prefere 2:</th>
      <td><?php echo $deevonaute->getGenrePrefere2() ?></td>
    </tr>
    <tr>
      <th>Genre prefere 3:</th>
      <td><?php echo $deevonaute->getGenrePrefere3() ?></td>
    </tr>
    <tr>
      <th>Size of storage space:</th>
      <td><?php echo $deevonaute->getSizeOfStorageSpace() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $deevonaute->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $deevonaute->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('deevonaute/edit?id='.$deevonaute->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('deevonaute/index') ?>">List</a>
