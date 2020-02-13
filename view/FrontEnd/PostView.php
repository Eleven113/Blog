<?php $title = 'Billet Simple pour l\'Alaska - Jean Forteroche'; ?>
<?php $script = '<script src="public/js/NoticeRun.js"></script>' ; ?>
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
    <div id="backto">
        <a href="index.php"><i class="fa fa-share fa-flip-horizontal"></i> Retour à la liste des articles</a>
    </div>

    <article class="post">
        <h1>
            <?= htmlspecialchars($post['title']) ?>
        </h1>
            
        <p>
            <?= nl2br(htmlspecialchars($post['post'])) ?>
        </p>
    </article>
    <div id="comments">
        <div id="comments_post">
            <h2>Commentaires</h2>

            <?php

                $post_count = 0;
                while ($comment = $comments->fetch())
                {
                    $post_count++;
            ?>
                <div id="comment">
                    <div id="comment_title">
                        <div>
                            <strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= htmlspecialchars($comment['date_comment_fr']) ?>
                        </div>
                        <a href="index.php?action=alertcomment&id=<?= $comment['id'] ?>"><i class="fas fa-exclamation-triangle"></i></a>
                    </div>
                    <div id="comment_content">
                        <?= nl2br(htmlspecialchars($comment['comment'])) ?>
                    </div>
                </div>    
            <?php
                }
                
                if ($post_count === 0){
            ?>
                <div id="no_comment">Il n'y a aucun commentaire pour cet article. Soyez le premier à donner votre avis.</div>
            <?php    
                }

                $comments->closeCursor();
            ?>
        </div>    
        <div id="comments_form">
            <form action="index.php?action=addcomment&id=<?= $_GET['id'] ?>""  method="post">
                <legend>Votre commentaire</legend>
                <label for="pseudo">Nom</label> : <input type="text" name="name" id="name" class="form-control" required/>
                <label for="message">Message</label> :  <br/><textarea name="text" id="text" row="30" class="form-control" required>Tapez votre commentaire ici</textarea>
                <br/>
                <button type="submit" value="submit" class="btn btn-dark"><i class='fas fa-comment'></i> Envoyer</button>
            </form>
        </div>
    </div>    
        <?php $content = ob_get_clean(); ?>

        
    <?php require('view/FrontEnd/template.php'); ?>


