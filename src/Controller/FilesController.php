<?php

namespace Pagekit\Files\Controller;

use Pagekit\Application as App;

class FilesController
{
  /**
  *@Access(admin=true)
  */
  public function indexAction()
  {
    $module = App::module('files');
    $config = $module->config;

    return [
      '$view' => [
          'title' => 'Esto es un titulo',
          'name' => 'files:views/admin/index.php'
        ],
        '$data' => $config,
        'message' => 'Esto es un mensaje',
        'entries' => $config['entries']
    ];
  }
}
 ?>
