##Code PHP Utile

A) Inclure un fichier JS dans votre page `.ctp`

```php
<?= $this->Html->script(['monFichier.js'], array('inline' => false)); ?>
```

B) Inclure une image dans votre page `.ctp`

Par défaut CakePHP va rechercher l'image dans le dossier `/webroot/img`, penser à bien les mettre dans ce dossier

```php
<?= $this->Html->image('question_icon.png', ['width'=>'20px']); ?>
```

C) 