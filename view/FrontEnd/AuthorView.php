<?php $title = 'Billet Simple pour l\'Alaska - Jean Forteroche'; ?>
<?php $script = '<script src="public/js/BannerDisplay.js"></script>'; ?>

<?php ob_start(); ?>

<div id="author">
    <div id="author-title">Biographie</div>
    <div id="author-photo"><img src="public/img/author_30pct.jpg" id="author_img" alt="photo de Jean Forteroche"></div>
    <div id="author-biography">
        <p>Jean Forteroche, John Hardrock de son vrai nom, est un auteur de comics (bandes dessinées américaines). Il s'est spécialisé dans les aventures des personnages de Donald Duck et de son univers : Donaldville, en portant une attention toute particulière au personnage de Balthazar Picsou, pour lequel il a créé une série retraçant sa jeunesse, qui lui a valu plusieurs prix.<br/>
        Il s'est démarqué de ses collègues avec un style scénaristique plus mûr et un style graphique fourmillant de détails comiques. Ses récits sont un hommage constant à l'œuvre de Carl Barks (1901-2000), qu'il explique, complète et prolonge.</p>
        <br/>
        <p class="biography-title"><i class="fas fa-circle"></i>&nbsp;&nbsp;Jeunesse</p>
        <p>Jean Forteroche naît le 29 juin 1951 à Louisville, dans le Kentucky, aux États-Unis. Ses parents tiennent une entreprise de construction qu'il est destiné à reprendre1. Dès l'école primaire, Don Rosa s'intéresse au dessin ; il illustre ensuite les journaux de son collège et de son lycée. Dans l'un d'entre eux, il écrit sa première histoire, le Fils du soleil (The Son of the Sun). À aucun moment, il n'imagine pouvoir vivre du dessin, mais il continue à dessiner dans divers fanzines.<br/>Parallèlement à ses études puis à son travail d'ingénieur civil, il dessine dans les années 1970 et 1980 un certain nombre d'aventures avec des personnages de son invention (The Pertwillaby Papers, The Adventures of Captain Kentucky…)2,3. Mais cette activité lui prend du temps et lui rapporte peu, ce qui l'amène à arrêter en 1982.</p>
        <br/>
        <p class="biography-title"><i class="fas fa-circle"></i>&nbsp;&nbsp;Débuts chez Disney</p>
        <p>En 1986, alors que les comics Disney ne sont plus publiés aux États-Unis depuis les années 1970 du fait de la désaffection du public, Disney autorise Gladstone, une petite maison d'édition créée par des fans, à publier des comics Disney. Enthousiasmé par la nouvelle, Don Rosa téléphone à l'éditeur pour lui proposer d'écrire les aventures de Picsou. Connaissant le travail de Don Rosa dans les fanzines, l'éditeur l'invite à envoyer une aventure qui sera publiée si elle convient. Pour sa première histoire, Don Rosa reprend son récit le Fils du soleil en mettant en scène Picsou. Séduit, Gladstone publie l'aventure en juillet 1987 et Don Rosa travaillera pour eux jusqu'en 19894, date à laquelle il interrompt sa collaboration à la suite de la décision de Disney de ne plus rendre les planches originales.</p>
        <br/>
        <p class="biography-title"><i class="fas fa-circle"></i>&nbsp;&nbsp;Un auteur prolifique</p>
        <p>En 1990, Don Rosa se met à travailler pour l'éditeur danois Egmont qui publie les bandes dessinées Disney dans son pays ; les histoires dessinées par Don Rosa sont également populaires dans les autres pays scandinaves. Au tournant des années 1990, Don Rosa travaillera également un temps avec l'éditeur néerlandais Oberon, ainsi qu'avec la maison mère Disney elle-même, et plus tard avec Hachette en France, éditrice de Picsou Magazine.</p>
        <br/>
        <p class="biography-title"><i class="fas fa-circle"></i>&nbsp;&nbsp;Accès à la reconnaissance avec La Jeunesse de Picsou</p>
        <p>Son œuvre la plus connue est la série La Jeunesse de Picsou (The Life and Times of Scrooge McDuck) qui retrace les aventures qu'a vécues Picsou du jour où il gagna son fameux « sou fétiche » à celui où il devint le canard le plus riche du monde. Le génie de cette saga est représentatif du style narratif de Rosa, il introduit des éléments de toutes les histoires de Picsou de Barks en les incluant dans une grande histoire biographique. Il lie ainsi toutes ces références entre elles et leur confére un caractère légendaire. Outre les clins d’œil à Barks, la Jeunesse de Picsou est remplie de références historiques. Don Rosa paufine ainsi le personnage de Picsou en lui offrant une nouvelle perspective historique et une profondeur psychologique qui tranchent avec les standards usuels de Disney pour ses personnages intemporels. Cette série lui a valu un Will Eisner Award (best continuing series) en 1995, la récompense la plus prestigieuse pour un auteur de comics. Il en remportera un second en 1997 (best artist/writer, humour).</p>
        <br/>
        <p class="biography-title"><i class="fas fa-circle"></i>&nbsp;&nbsp;Problèmes de santé et arrêt de travail</p>
        <p>En 2008, Keno Don Rosa est hospitalisé pour des problèmes ophtalmiques consécutifs à un décollement de rétine5. Le 2 juin 2008, il déclare au forum danois Komiks.dk qu'il ne dessinera plus de bandes dessinées6. Si son état de santé est en partie responsable de sa décision d'arrêter, il explique dans un ouvrage autobiographique (The Don Rosa Collection) que son choix est avant tout motivé par les conditions de rémunération imposées par Disney et le mauvais traitement subi par leurs dessinateurs en général : en effet, bien que les œuvres de Don Rosa se soient très bien vendues, il n'a jamais touché de droit d'auteurs sur celles-ci.</p>

    </div>
</div>

<?php $content = ob_get_clean(); ?>

        
<?php require('view/FrontEnd/template.php'); ?>
