<?php
  include __DIR__ . '/server.php';
  include __DIR__ . '/../partials/_header.php';

?>

<main>
  <h1>ID stanza <?php echo $rooms['room_number']; ?></h1>

  <ul>
    <li>ID stanza: <?php echo $rooms['id']; ?></li>
    <li>Numero stanza: <?php echo $rooms['room_number']; ?></li>
    <li>Piano stanza: <?php echo $rooms['floor']; ?></li>
    <li>Letti stanza: <?php echo $rooms['beds']; ?></li>
    <li>Creazione stanza: <?php echo $rooms['created_at']; ?></li>
  </ul>

</main>
