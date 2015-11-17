<?php include 'includes/admin-head.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<section class="admin-section section-chapter">
  <div class="inner-admin-section">
    <div class="admin-section-header admin-section-title">
        <h1>Back-office | <span>Gestion des QCD</span></h1>
    </div>
    <div class="matiere-list-header bordered-bottom">
       <a href="creer-qcd.php" class="admin-button">Créer un QCD</a>
    </div>
    <div class="admin-section-header">
        <h2>Gestion des QCD | Affichage des QCD</span></h2>
    </div>
    <div class="chapter-select-bloc-container">
      <div class="chapter-select-bloc">
        <div class="chapter-select">
          <label>Choisissez une matière</label>
          <select class="form-control">
            <option>Bases de données</option>
            <option>Gestion de projet</option>
            <option>Technologies web</option>
            <option>PHP mysql</option>
            <option>HTML 5/CSS3</option>
          </select>
        </div>
      </div>
      <div class="chapter-select-bloc">
        <div class="chapter-select">
          <label>Choisissez un chapitre</label>
          <select class="form-control">
            <option>Généralités su les bases de données</option>
            <option>Les requêtes</option>
            <option>Les opération CRUD</option>
          </select>
        </div>
      </div>
      <hr class="clear">
    </div>
    <div class="qcd-list-container">
      <button type="submit" class="admin-button qcd-show-btn">Afficher les QCD</button>
    </div>
    <div class="chapter-choice-container qcd-choice">
      <table class="chapter-table">
          <thead>
              <tr>
                  <th>QCD</th>
                  <th>Nombre de questions</th>
                  <th>Statut du QCD</th>
                  <th class="centered">Edition</th>
                  <th class="centered">Activation</th>
              </tr>
          </thead>
          <tbody>
              <tr class="colored-grey">
                  <td>QCD n°1</td>
                  <td>10</td>
                  <td>activé</td>
                  <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
                  <td class="chapter-gestion-button activation"><a href="#" class="activation-button off"><span class="pre-activation">dés</span>activer</a></td>
              </tr>
              <tr class="">
                  <td>QCD n°2</td>
                  <td>9</td>
                  <td>activé</td>
                  <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
                  <td class="chapter-gestion-button activation"><a href="#" class="activation-button off"><span class="pre-activation">dés</span>activer</a></td>
              </tr>
              <tr class="colored-grey">
                  <td>QCD n°3</td>
                  <td>10</td>
                  <td>désactivé</td>
                  <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
                  <td class="chapter-gestion-button activation"><a href="#" class="activation-button on"><span class="pre-activation">
</span>activer</a></td>
              </tr>
              <tr class="">
                  <td>QCD n°4</td>
                  <td>7</td>
                  <td>activé</td>
                  <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
                  <td class="chapter-gestion-button activation"><a href="#" class="activation-button off"><span class="pre-activation">dés</span>activer</a></td>
              </tr>
          </tbody>
      </table>
    </div>
  </div>
</section>
<?php include 'includes/admin-footer.php'; ?>