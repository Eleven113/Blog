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
            while ($comment = $comments->fetch())
            {
        ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['date_format_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <?php
            }
            $comments->closeCursor();
        ?>
        <?php $content = ob_get_clean(); ?>
    </div>    
    <div id="comments_form">
        <form>
        </form>
    </div>
        
    <?php require('template.php'); ?>


