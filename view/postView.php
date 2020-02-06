<?php $title = 'Billet Simple pour l\'Alaska - Jean Forteroche'; ?>

<?php ob_start(); ?>
    <p><a href="index.php">Retour à la liste des articles</a></p>

    <div class="post">
        <h1>
            <?= htmlspecialchars($post['title']) ?>
        </h1>
            
        <p>
            <?= nl2br(htmlspecialchars($post['post'])) ?>
        </p>
    </div>
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
                    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['date_comment_fr'] ?></p>
                    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                </div>    
            <?php
                }
                
                if ($post_count === 0){
            ?>
                <div id="no_comment">Il n'y a aucun commentaire pour cet article. Soyez le premier à poster.</div>
            <?php    
                }

                $comments->closeCursor();
            ?>
        </div>    
        <div id="comments_form">
            <form action="minichat_post.php" method="post">
                <legend>Votre commentaire</legend>
                <label for="pseudo">Nom</label> : <input type="text" name="name" id="name" class="form-control" />
                <label for="message">Message</label> :  <br/><textarea name="text" id="text" row="10" cols="60" class="form-control">Tapez votre commentaire ici</textarea>
                <br/>
                <input type="submit" value="Envoyer" />
            
            </form>
        </div>
        <?php $content = ob_get_clean(); ?>

        
    <?php require('template.php'); ?>


