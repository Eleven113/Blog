<?php $title = 'Interface d\'administration - Articles'; ?>

<?php ob_start(); ?>

<div id="cr_post"><h3><a href="index.php?action=createpost"><i class="fas fa-plus-circle"></i>&nbsp;Créer un nouvel article</a></h3></div>
<div id="ud_post"><h3><i class="fas fa-scroll"></i>&nbsp;Modifier/Supprimer un article existant :</h3></div>



<?php
while ($data = $posts->fetch())
{
?>
    <div class="post">
        <div id="post_admin">
            <div id ="post_title">
                <div id="post_id">
                    <?= htmlspecialchars($data['id']) ?>-&nbsp;
                </div>
                <div id="post_name">
                    <?= htmlspecialchars($data['title']) ?>
                </div>
            </div>
            <div id="button_admin">
                <a href="index.php?action=updatepost"><i class="fas fa-pen"></i></a>
                <a href="index.php?action=deletepost"><i class="fas fa-trash-alt"></i></a>
            </div>                    
        </div>  
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('admin/template.php'); ?>