<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/partials/_header.php'; ?>
<?php include __DIR__ . '/env.php'; ?>

    <!-- Inizio main -->
    <main>

      <?php if (isset($_GET['uproom'])) { ?>
        <p class="modifica">La stanza numero: <?php echo $_GET['uproom']; ?> é stata aggiornata con successo</p>
      <?php } ?>

      <?php if (isset($_GET['deleteroom'])) { ?>
        <?php if ($_GET['deleteroom']<> '0') { ?>
          <p class="cancellazione">La stanza numero: <?php echo $_GET['deleteroom']; ?> é stata eliminata con successo</p>
        <?php }else{ ?>
          <p class="cancellazione">La stanza non é stata eliminata</p>
        <?php  } ?>
      <?php } ?>

      <table class="rooms">
        <thead>
          <tr>
            <th>ID</th>
            <th>ROOM NUMBER</th>
            <th>FLOOR</th>
          </tr>
        </thead>

        <tbody>
          <!-- Inizio singola stanza -->
          <?php foreach ($rooms as $room ) { ?>
          <tr>
            <td><?php echo $room['id']?></td>
            <td><?php echo $room['room_number']?></td>
            <td><?php echo $room['floor']?></td>
            <td><a href="<?php echo $path_base . 'show/show.php?id=' . $room['id'];?>">View</a></td>
            <td><a href="<?php echo $path_base . 'update/edit.php?id=' . $room['id'];?>">Update</a></td>
            <td>
              <form action="<?php echo $path_base . "delete/delete.php" ?>" method="post">
                <input type="hidden" name="id_delete" value="<?php echo $room['id'];?>">
                <input type="submit" value="Delete">
              </form>
            </td>
          </tr>
          <?php } ?>
          <!-- Fine singola stanza -->
        </tbody>
      </table>

    </main>
    <!-- Fine main -->
  </body>
</html>
