<?php $title = 'Interface d\'administration - Articles'; ?>
<?php $script1= '<script src ="../public/js/DeletePost.js"></script>'; ?>
<?php $script2= '<script src ="../public/js/NoticeRun.js"></script>'; ?>

<?php ob_start(); ?>

<?php
    if ( $_SESSION['notice'] ) { ?>
    <div id="notice">
        <div id="notice_icon"><i class="fas fa-check"></i></div>
        <div id="notice_text"><?= $_SESSION['notice'] ?></div>
        <div id="notice_close"><i class="fas fa-times"></i></div>
    </div>
<?php
    unset($_SESSION['notice']);
    }
?>

<div class="confirm" id="confirm_dl_post">
    <div id="confirm_window">
        <div class="confirm-text">Vous êtes sur le point de supprimer un article ! Confirmez ?</div>
        <div class="confirm-buttons">
            <button id="confirm_dl_post_no" class="btn btn-dark">Non</button>
            <a href="index.php?action=deletepost&id=<?= $data['id'] ?>" id="actionLink"><button id="confirm_dl_post_yes" class="btn btn-dark">Oui</button></a>
        </div>
    </div>    
</div>


<div id="cr_post"><h3><a href="index.php?action=createpost"><i class="fas fa-plus-circle"></i>&nbsp;Créer un nouvel article</a></h3></div>
<div id="ud_post"><h3><i class="fas fa-scroll"></i>&nbsp;Modifier/Supprimer un article existant :</h3></div>



<?php
while ($data = $posts->fetch())
{
?>
    <article class="post">
        <div id="post_admin">
            <div id ="post_title">
                <div id="post_name">
                    <?= htmlspecialchars($data['title']) ?>
                </div>
            </div>
            <div id="post_button_admin">
                <div class="post-update"><a href="index.php?action=showpost&id=<?= $data['id'] ?>"><i class="fas fa-pen"></i></a></div>
                <div class="post-delete" id="<?= $data['id'] ?>"><i class="fas fa-trash-alt"></i></a></div>
            </div>                    
        </div>  
    </article>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('../view/BackEnd/template.php'); ?>