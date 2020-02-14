<?php $title = 'Billet Simple pour l\'Alaska - Jean Forteroche'; ?>

<?php ob_start(); ?>
<div id="concept">  
    <p><strong>Jean Forteroche</strong> vous propose de découvrir en avant-première les dix premiers chapitres de son prochain roman. </p>
    <p><strong>Billet simple pour l'Alaska</strong>, c'est l'histoire d'un jeune homme qui quitte tout pour devenir chercheur d'or dans le Grand Nord. D'aventures en découvertes, vous serez plongés dans l'univers impitoyable et dangereux des prospecteurs au temps de la ruée vers l'or.
    <p>Chaque semaine, un nouveau chapitre sera publié jusqu'à la sortie du livre prévue pour le 22 février 2020. Précommandez le dès à présent sur Amazon.fr, Cultura.fr, Darty.fr (Version Relié ou e-book).</p>
</div>

<h3>Chapitres disponibles :</h3>


<?php
while ($post = $posts->fetch())
{
?> 
    <div class="post">
        <a href="index.php?action=getpost&id=<?= $post['id'] ?>">
            <div class="post_title">
                <h3>
                    <?= htmlspecialchars($post['title']) ?>
                </h3>
            </div>
        </a>
        <a href="index.php?action=getpost&id=<?= $post['id'] ?>">
        <div class="post_content">
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
        <div class="post_date">
            <em id="comments_link"><a href="index.php?action=getpost&id=<?= $post['id'] ?>">Commentaires</a></em>
            <em>Article publié le <?= htmlspecialchars($post['creation_date_fr']) ?></em>
        </div>    
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('view/FrontEnd/template.php'); ?>