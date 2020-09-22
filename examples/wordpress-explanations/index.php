<?php

$hooks = [];

function add_action($action_name, $callback)
{
  global $hooks;
  if (!isset($hooks[$action_name])) {
    $hooks[$action_name] = [$callback];
  } else {
    array_push($hooks[$action_name], $callback);
  }
}

function do_action($action_name)
{
  global $hooks;
  $callbacks = $hooks[$action_name];
  foreach ($callbacks as $cb) {
    call_user_func($cb);
  }
}

add_action('init', function () {
  echo 1;
});

add_action('init', function () {
  echo 2;
});


// ...

do_action('init');
