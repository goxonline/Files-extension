<?php $view->script('files', 'files:js/files.js', 'vue') ?>

<div id="files">
  <ul>
    <li v-for="entry in entries" >
      {{ entry.message }}
    </li>
  </ul>
</div>



<!--
<h1><?= $message ?></h1>




<ul>
  <?php foreach ($entries as $entry): ?>
    <li><?= $entry['message'] ?> : <?= $entry['done'] ? 'Hecho!' : 'No checho!' ?></li>
  <?php endforeach ?>
</ul>
-->
