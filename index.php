<?php

use Pagekit\Application;

return [

  'name' => 'files',

  'type' => 'extension',

  'main' => function(Application $app) {
  },

  'autoload' => [
    'Pagekit\\Files\\' => 'src'
  ],

  'resource' => [
    'files:' => ''
  ],

  'config' => [
    'entries' => [
      ['message' => 'Mensaje 1', 'done' => false ],
      ['message' => 'Mensaje 2', 'done' => false ],
      ['message' => 'Mensaje 3', 'done' => true ],
      ['message' => 'Mensaje 4', 'done' => false ],
      ['message' => 'Mensaje 5', 'done' => true ],
      ['message' => 'Mensaje 6', 'done' => false ],
    ]
  ],

  'routes' => [
    '@files' => [
      'path' => '/files',
      'controller' => 'Pagekit\\Files\\Controller\\FilesController'
    ]
  ],

  'menu' => [
    'files' =>[
      'label' => 'Files',
      'url' => '@files',
      'icon' => 'app/system/assets/images/placeholder-icon.svg',
    ],
  ],

];
