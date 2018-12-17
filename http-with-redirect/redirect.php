<?php

$redirect_uri = "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}" . str_replace('redirect.php', '', $_SERVER['REQUEST_URI']) . 'index.php';

header("Location: $redirect_uri", true, 307);
