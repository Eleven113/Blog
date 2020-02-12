<?php $title = 'Interface d\'administration - Commentaires'; ?>
<?php $script= "public/js/deletecomment.js"; ?>
<?php ob_start(); ?>
<div class="confirm" id="confirm_dl_comment">
    <div id="confirm_window">
        <div class="confirm-text">Vous êtes sur le point de supprimer un commentaire ! Confirmez ?</div>
        <div class="confirm-buttons">
            <button id="confirm_dl_comment_no" class="btn btn-dark">Non</button>
            <a href="index.php?action=deletecomment&id=" id="actionLink"><button id="confirm_comment_post_yes" class="btn btn-dark">Oui</button></a>
        </div>
    </div>    
</div>

<div id="cr_post"><h3><i class="fas fa-clipboard-list"></i>&nbsp;Liste des commentaires : </h3></div>
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
            <div id="comment_text">
            <?= htmlspecialchars($data['comment']) ?>
            </div>
            <div id="comment_actions">
                    <div class="comment-update"><a href="index.php?action=showcomment&id=<?= $data['id'] ?>"><i class="fas fa-pen"></i></a></div>
                    <div class="comment-delete" id="<?= $data['id'] ?>"><i class="fas fa-trash-alt"></i></div>
            </div>
        </div>
    </div>
<?php
}
$comments->closeCursor();
?>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('admin/template.php'); ?>