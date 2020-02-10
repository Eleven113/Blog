<?php $title = 'Interface d\'administration - Commentaires'; ?>

<?php ob_start(); ?>

<h3>Ecrivez votre nouvelle article :</h3>

<div id="post_form">
    <form action="index.php?action=addpost"  method="post">
        <textarea name="post">
            <h3>Le titre de votre article</h3>
            <span>Tapez votre texte ici</span>
        </textarea>
        <button type="submit" id="create_post_btn" class="btn btn-dark"><i class='fas fa-comment'></i>&nbsp;Envoyer</button>
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

<?php require('admin/template.php'); ?>