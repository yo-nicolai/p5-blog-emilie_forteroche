<div class="monitoring">
    <h2>Statistiques des articles</h2>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Vues</th>
                <th>Date de publication</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) { ?>
                <tr>
                    <td><?= $article->getTitle() ?></td>
                    <td><?= $article->getViews() ?></td>
                    <td><?= ucfirst(Utils::convertDateToFrenchFormat($article->getDateCreation())) ?></td>
                </tr>
            <?php } ?>
        </tbody>

    </table>




</div>