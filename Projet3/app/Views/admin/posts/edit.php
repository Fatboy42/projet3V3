
<form method="post">
<?= $form->input('titre', 'Titre');  ?>
<?= $form->input('contenu', 'Contenu', ['type' => 'textarea']);  ?>
<?= $form->select('etat', 'Etat de l\'article', [1 => 'Normal', 2 => 'Brouillon']);  ?>
<button class="btn btn-primary">Sauvegarder</button>
