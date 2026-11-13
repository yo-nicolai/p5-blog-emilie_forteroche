<?php

/**
 * Page de monitoring : tableau des articles avec leurs statistiques.
 * @var Article[] $articles
 * @var string $colonne
 * @var string $tri
 * @var string $fleche
 */

if ($colonne === 'title' && $tri === 'decroissant') {
    $triTitle = 'croissant';
} else {
    $triTitle = 'decroissant';
}

if ($colonne === 'views' && $tri === 'decroissant') {
    $triVues = 'croissant';
} else {
    $triVues = 'decroissant';
}

if ($colonne === 'date' && $tri === 'decroissant') {
    $triDate = 'croissant';
} else {
    $triDate = 'decroissant';
}

if ($colonne === 'comment' && $tri === 'decroissant') {
    $triComment = 'croissant';
} else {
    $triComment = 'decroissant';
}

if ($tri === 'decroissant') {
    $fleche = '▼';
} else {
    $fleche = '▲';
}
?>

<div class="monitoring">
    <h2>Statistiques des articles</h2>
    <table>
        <thead>
            <tr>
                <th class="tableTextAlignLeft">
                    <a href="index.php?action=monitoring&colonne=title&tri=<?= $triTitle ?>">
                        Titre <?php if ($colonne === 'title') {
                                    echo $fleche;
                                } ?></a>
                </th>
                <th class="tableContentCenter">
                    <a href="index.php?action=monitoring&colonne=views&tri=<?= $triVues ?>">
                        Vues <?php if ($colonne === 'views') {
                                    echo $fleche;
                                } ?></a>
                </th>
                <th class="tableContentCenter">
                    <a href="index.php?action=monitoring&colonne=date&tri=<?= $triDate ?>">
                        Date de publication <?php if ($colonne === 'date') {
                                                echo $fleche;
                                            } ?></a>
                </th>
                <th class="tableContentCenter">
                    <a href="index.php?action=monitoring&colonne=comment&tri=<?= $triComment ?>">
                        Commentaires <?php if ($colonne === 'comment') {
                                            echo $fleche;
                                        } ?></a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) { ?>
                <tr>
                    <td class="tableTextAlignLeft"><?= $article->getTitle() ?></td>
                    <td class="tableContentCenter"><?= $article->getViews() ?></td>
                    <td class="tableContentCenter"><?= ucfirst(Utils::convertDateToFrenchFormat($article->getDateCreation())) ?></td>
                    <td class="tableContentCenter"><?= $article->getNbComments() ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>