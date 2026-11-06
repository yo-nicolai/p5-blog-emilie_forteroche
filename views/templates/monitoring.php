<?php

/**
 * Page de monitoring : tableau des articles avec leurs statistiques.
 * @var Article[] $articles
 * @var string $colonne
 * @var string $tri
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
?>

<div class="monitoring">
    <h2>Statistiques des articles</h2>
    <table>
        <thead>
            <tr>
                <th class="tableTextAlignLeft"><a href="index.php?action=monitoring&colonne=title&tri=<?= $triTitle ?>">Titre</a></th>
                <th class="tableContentCenter"><a href="index.php?action=monitoring&colonne=views&tri=<?= $triVues ?>">Vues</a></th>
                <th class="tableContentCenter"><a href="index.php?action=monitoring&colonne=date&tri=<?= $triDate ?>">Date de publication</a></th>
                <th class="tableContentCenter"><a href="index.php?action=monitoring&colonne=comment&tri=<?= $triComment ?>">Commentaires</a></th>
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