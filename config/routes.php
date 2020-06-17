<?php

use project\Router;

Router::add('^service/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Service', 'action' => 'view']);
Router::add('^doors-oak/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'DoorsOak', 'action' => 'view']);
Router::add('^doors-pine/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'DoorsPine', 'action' => 'view']);

// default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');