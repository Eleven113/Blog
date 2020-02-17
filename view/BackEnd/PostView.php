<?php $title = 'Interface d\'administration - Article'; ?>
<?php $script1= '<script src ="../public/js/tinymce.js"></script>'; ?>

<?php ob_start(); ?>

<h3>Modifier votre article :</h3>

<div id="post_form">
    <form action="index.php?action=updatepost&id=<?= $post['id'] ?>"  method="post">
        <textarea name="post" required>
            <h3><?= htmlspecialchars($post['title']) ?></h3>
            <p><?= nl2br(htmlspecialchars($post['post'])) ?></p>
        </textarea>
        <button type="submit" id="update_post_btn" class="btn btn-dark"><i class='fas fa-comment'></i>&nbsp;Envoyer</button>
    </form>
</div>   

<?php $content = ob_get_clean(); ?>

<?php require('../view/BackEnd/template.php'); ?>