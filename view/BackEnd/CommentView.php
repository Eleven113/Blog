<?php $title = 'Interface d\'administration - Commentaire'; ?>
<?php $script1= '<script src ="../public/js/tinymce.js"></script>'; ?>

<?php ob_start(); ?>

<h3>Modifier ce commentaire :</h3>

<div id="post_form">
    <form action="index.php?action=updatecomment&id=<?= $comment['id'] ?>"  method="post">
        <textarea name="comment" required>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        </textarea>
        <button type="submit" id="update_comment_btn" class="btn btn-dark"><i class='fas fa-comment'></i>&nbsp;Envoyer</button>
    </form>
</div>   

<?php $content = ob_get_clean(); ?>

<?php require('../view/BackEnd/template.php'); ?>