<?php $title = 'Billet Simple pour l\'Alaska - Jean Forteroche'; ?>

<?php ob_start(); ?>
<h1>Derniers articles publiés :</h1>


<?php
while ($post = $posts->fetch())
{
?>
    <div class="post">
        <div id="post_title">
            <h3>
                <?= htmlspecialchars($post['title']) ?>
            </h3>
        </div>
        <a href="index.php?action=getpost&id=<?= $post['id'] ?>">
        <div id="post_content">
            <?php              
                if ( strlen($post['post']) > 500 ){
                    $post_txt = nl2br(htmlspecialchars(substr($post['post'],0,500) . ' (...)'));
                }
                else {
                    $post_txt = nl2br(htmlspecialchars($post['post']));
                }
                echo $post_txt;
            ?>
            <br />
        </div>
        </a>
        <div id="post_date">
            <em><a href="index.php?action=getpost&id=<?= $post['id'] ?>">Commentaires</a></em>
            <em>Article publié le <?= htmlspecialchars($post['creation_date_fr']) ?></em>
        </div>    
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('view/FrontEnd/template.php'); ?>