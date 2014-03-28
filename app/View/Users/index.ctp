<table>
    <tr>
        <th>id</th>
        <th>username</th>
        <th >email</th>
        <th>role</th>

        <th>Actions</th>
    </tr>

    <?php foreach($users as $user): ?>
  <tr>
    <td><?php echo $user['User']['id']; ?></td>

    <td><?php echo $user['User']['username']; ?></td>
    <td><?php echo $user['User']['email']; ?></td>
    <td><?php echo $user['User']['role']; ?></td>


      <td>
          <?php echo $this->Html->link(
              $this->Html->image('icon_effacer.gif'),
              array('controller'=>'users', 'action'=>'delete', $user['User']
              ['id']),
              array('escape' => false),'Etes-vous sûr de vouloir supprimer ce user?'
          ); ?>

          <?php echo $this->Html->link(
              $this->Html->image('icon_edit.gif'),
              array('controller'=>'users', 'action'=>'edit', $user['User']
              ['id']),
              array('escape' => false)
          ); ?>
      </td>
  </tr>
    <?php endforeach; ?>
</table>
        <?php
                echo $this->Html->link(
                'Ajouter un utilisateur',
                array('controller'=>'users', 'action'=>'add')
                );
                ?>
