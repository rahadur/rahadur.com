<?php
$description = 'Hello i am Rahadur Rahman the Software Engineer';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?> -
        <?= $description ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('app.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><?= $this->fetch('title') ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><?= __("Home") ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?= __("Profile") ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?= __("Project") ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?= __("Repos") ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?= __("Tools") ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?= __("Tutorial") ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?= __("Blog") ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
    <?= $this->Html->script('jquery-3.2.1.min.js') ?>
    <?= $this->Html->script('popper.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
</body>
</html>
