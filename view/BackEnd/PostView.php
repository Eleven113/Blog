<?php $title = 'Interface d\'administration - Article'; ?>

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

<script>
    tinymce.init({
    selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_drawer: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>

<?php $content = ob_get_clean(); ?>

<?php require('../view/BackEnd/template.php'); ?>