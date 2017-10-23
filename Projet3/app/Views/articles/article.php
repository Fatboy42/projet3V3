

<h1><?= $article->titre; ?></h1>

<p><em>Publié le : <?= $article->dateAjout; ?></em></p>
<p><em>Auteur : <?= $article->pseudo; ?></em></p>

<?php if ($article->dateModif != 0000-00-00 && $article->dateModif != null):?>
<p><em>Modifié le : <?= $article->dateModif; ?></em></p>
<?php endif; ?>

<p><?= $article->contenu; ?></p>


<form method="post">
<?= $form->input('pseudo', 'Pseudo');  ?>
<?= $form->input('mail', 'Adresse Mail');  ?>
<?= $form->input('contenu', 'Contenu', ['type' => 'textarea']);  ?>
<input type="hidden" name="id" value="<?= $article->id; ?>"></input>
<button class="btn btn-primary">Publier le commentaire</button>
</form>

<?php foreach($commentaires as $commentaire):  ?>

<p>Pseudo : <?= $commentaire->pseudo; ?></p>
<p>Mail : <?= $commentaire->mail; ?></p>
<p>Date : <?= $commentaire->date; ?></p>
<p>Commentaire : <?= $commentaire->contenu; ?></p>

<form action="/index.php?p=report" method="post">
<input type="hidden" name="idcomm" value="<?= $commentaire->id; ?>"></input>
<input type="hidden" name="idarticle" value="<?= $article->id; ?>"></input>
<button class="btn btn-secondary" >Signaler</button>
</form>

<?php endforeach; ?>
