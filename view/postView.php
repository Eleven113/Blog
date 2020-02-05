<?php $title = 'Billet Simple pour l\'Alaska - Jean Forteroche'; ?>

<?php ob_start(); ?>
    <h1>Billet Simple pour l'Alaska par Jean Forteroche</h1>
    <p><a href="index.php">Retour à la liste des billets</a></p>

    <div class="news">
        <h3>
            <?= htmlspecialchars($post['title']) ?>
        </h3>
            
        <p>
            <?= nl2br(htmlspecialchars($post['content'])) ?>
        </p>
    </div>

    <h2>Commentaires</h2>

    <?php
        while ($comment = $comments->fetch())
        {
    ?>
        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
        <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
    <?php
        }
        $comments->closeCursor();
    ?>
    <?php $content = ob_get_clean(); ?>
        
    <?php require('template.php'); ?>


