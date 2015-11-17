<?php include 'includes/admin-head.php'; ?>
<?php include 'includes/admin-header.php'; ?>

<section class="admin-section">
    <div class="inner-admin-section">
        <div class="admin-section-header admin-section-title">
            <h1>Back-office | <span>Gestion des matières</span></h1>
        </div>
        <div class="matiere-list">
            <div class="matiere-list-header bordered-bottom">
                <a href="creer-matiere.php" class="admin-button">Créer une matière</a>
            </div>
            <div class="admin-section-header">
                <h2>Gestion des matières | Affichage des matières</span></h2>
            </div>
            <div class="matiere-list-header">
                <h2>Liste des matières disponibles</h2>
            </div>
            <div class="chapter-choice-container">
                <table class="chapter-table">
                    <thead>
                        <tr>
                            <th>Titre de la matière</th>
                            <th>Nombre de chapitres</th>
                            <th>Statut de la matière</th>
                            <th class="centered">Edition</th>
                            <th class="centered">Activation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="colored-grey">
                            <td>web</td>
                            <td>5</td>
                            <td>activé</td>
                            <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
                            <td class="chapter-gestion-button activation"><a href="#" class="activation-button off"><span class="pre-activation">dés</span>activer</a></td>
                        </tr>
                        <tr class="">
                            <td>HTML/CSS</td>
                            <td>3
                            </td>
                            <td>activé</td>
                            <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
                            <td class="chapter-gestion-button activation"><a href="#" class="activation-button off"><span class="pre-activation">dés</span>activer</a></td>
                        </tr>
                        <tr class="colored-grey">
                            <td>PHP</td>
                            <td>1</td>
                            <td>désactivé</td>
                            <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
                            <td class="chapter-gestion-button activation"><a href="#" class="activation-button on"><span class="pre-activation">
</span>activer</a></td>
                        </tr>
                        <tr class="">
                            <td>Symphony 2</td>
                            <td>0</td>
                            <td>activé</td>
                            <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
                            <td class="chapter-gestion-button activation"><a href="#" class="activation-button off"><span class="pre-activation">dés</span>activer</a></td>
                        </tr>
                        <tr class="colored-grey">
                            <td>Java j2ee</td>
                            <td>2</td>
                            <td>activé</td>
                            <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
                            <td class="chapter-gestion-button activation"><a href="#" class="activation-button off"><span class="pre-activation">dés</span>activer</a></td>
                        </tr>
                        <tr class="">
                            <td>UML</td>
                            <td>0</td>
                            <td>activé</td>
                            <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
                            <td class="chapter-gestion-button activation"><a href="#" class="activation-button off"><span class="pre-activation">dés</span>activer</a></td>
                        </tr>
                        <tr class="colored-grey">
                            <td>Gestion de projets</td>
                            <td>2</td>
                            <td>activé</td>
                            <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
                            <td class="chapter-gestion-button activation"><a href="#" class="activation-button off"><span class="pre-activation">dés</span>activer</a></td>
                        </tr>
                        <tr class="">
                            <td>Base de données</td>
                            <td>5</td>
                            <td>activé</td>
                            <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
                            <td class="chapter-gestion-button activation"><a href="#" class="activation-button off"><span class="pre-activation">dés</span>activer</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</section>


<?php include 'includes/admin-footer.php'; ?>