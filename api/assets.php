<?php

if ($_GET['type'] === 'css') {
    header("Content-type: text/css; charset: UTF-8");
    echo require __DIR__ . '/../public/css/' . $_GET['file'];
} else if ($_GET['type'] === 'js') {
    header('Content-Type: application/javascript; charset: UTF-8');
    echo require __DIR__ . '/../public/js/' . $_GET['file'];
}
