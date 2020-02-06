<?php $title = 'Billet Simple pour l\'Alaska - Jean Forteroche'; ?>

<?php ob_start(); ?>
<h1>Derniers articles publiés :</h1>


<?php
while ($data = $posts->fetch())
{
?>
    <div class="post">
        <div id="post_title">
            <h3>
                <?= htmlspecialchars($data['title']) ?>
            </h3>
        </div>
        <div id="post_content">
            <?= nl2br(htmlspecialchars($data['post'])) ?>
            <br />
            <em><a href="index.php?action=post&id=<?= $data['id'] ?>">Commentaires</a></em>
        </div>
        <div id="post_date">
            <em>Article publié le <?= $data['creation_date_fr'] ?></em>
        </div>    
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>