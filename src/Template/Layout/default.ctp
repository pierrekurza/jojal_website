<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Jojo Fan Club
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('materialize.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <header>
        <nav class="nav-extended light-blue darken-2">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="/" class="brand-logo">Logo</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="/users/connexion">Se connecter</a></li>
                        <li><a href="/users/inscription">Créer un compte</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <?= $this->Flash->render() ?>
        <div class="container">
            <?= $this->fetch('content') ?>
        </div>
    </main>

    <footer class="page-footer light-blue darken-2">
        <div class="footer-copyright">
            <div class="container">
                © Team Jojo
            </div>
        </div>
    </footer>

</body>
</html>
