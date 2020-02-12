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
        <a href="index.php?action=getpost&id=<?= $data['id'] ?>">
        <div id="post_content">
            <?php              
                if ( strlen($data['post']) > 500 ){
                    $post_txt = htmlspecialchars(substr($data['post'],0,500) . ' (...)');
                }
                else {
                    $post_txt = htmlspecialchars($data['post']);
                }
                echo $post_txt;
            ?>
            <br />
        </div>
        </a>
        <div id="post_date">
            <em><a href="index.php?action=getpost&id=<?= $data['id'] ?>">Commentaires</a></em>
            <em>Article publié le <?= $data['creation_date_fr'] ?></em>
        </div>    
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('view/FrontEnd/template.php'); ?>