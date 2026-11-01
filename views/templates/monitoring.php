<div class="monitoring">
    <h2>Statistiques des articles</h2>
    <table>
        <thead>
            <tr>
                <th class="tableTextAlignLeft">Titre</th>
                <th class="tableContentCenter">Vues</th>
                <th class="tableContentCenter">Date de publication</th>
                <th class="tableContentCenter">Commentaires</th>
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