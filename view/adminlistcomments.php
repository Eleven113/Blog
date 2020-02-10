<?php $title = 'Interface d\'administration - Commentaires'; ?>

<?php ob_start(); ?>

<div id="cr_post"><h3><a href="index.php?action=createpost"><i class="fas fa-clipboard-list"></i>&nbsp;Liste des commentaires : </a></h3></div>
<div id="comments">
<?php
while ($data = $comments->fetch())
{
?>
    <div class="comment">
        <div id="comment_data">
            <div id="comment_data-author">Posté par <?= htmlspecialchars($data['author']) ?> le <?= htmlspecialchars($data['creation_date_fr']) ?></div>
            <div id="comment_data-alert">Signalé <?= htmlspecialchars($data['alert']) ?> fois</div>
        </div>
        <div id="comment_content">
        <?= htmlspecialchars($data['comment']) ?>
        </div>
        <div id="comment_actions">
                <a href="index.php?action=updatecomment&id=<?= $data['id'] ?>"><i class="fas fa-pen"></i></a>
                <a href="index.php?action=deletecomment&id=<?= $data['id'] ?>"><i class="fas fa-trash-alt"></i></a>
        </div>
    </div>
<?php
}
$comments->closeCursor();
?>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('admin/template.php'); ?>