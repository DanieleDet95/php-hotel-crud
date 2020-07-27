<?php
  include __DIR__ . '/server.php';
  include __DIR__ . '/../partials/_header.php';

?>

<main>
  <h1>Modifica stanza: <?php echo $rooms['room_number']; ?></h1>

  <form action="<?php echo $path_base . 'update/update.php'; ?>" method="post">
    <div>
      <input type="hidden" name="room_id" value="<?php echo $rooms['id']; ?>">
    </div>
    <div>
      <label>Numero stanza</label>
      <input type="text" name="room_number" value="<?php echo $rooms['room_number']; ?>">
    </div>
    <div>
      <label>Piano stanza</label>
      <input type="text" name="room_floor" value="<?php echo $rooms['floor']; ?>">
    </div>
    <div>
      <label>Letti nella stanza</label>
      <input type="text" name="room_beds" value="<?php echo $rooms['beds']; ?>">
    </div>
    <input type="submit" value="Salva">
  </form>

</main>
