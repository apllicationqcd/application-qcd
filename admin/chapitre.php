<?php include 'includes/admin-head.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<section class="admin-section section-chapter">
  <div class="inner-admin-section">
    <div class="admin-section-header admin-section-title">
        <h1>Back-office | <span>Gestion des chapitres</span></h1>
    </div>
    <div class="matiere-list-header bordered-bottom">
       <a href="creer-chapitre.php" class="admin-button">Créer un chapitre</a>
    </div>
    <div class="admin-section-header">
      <h2>Gestion des chapitres | Affichage des chapitres</span></h2>
    </div>
    <div class="chapter-select">
    	<label>Choisissez une matière</label>
      <select class="form-control">
          <option>Bases de données</option>
          <option>Gestion de projet</option>
          <option>Technologies web</option>
          <option>PHP mysql</option>
          <option>HTML 5/CSS3</option>
      </select>
      <button type="submit" class="admin-button">Afficher les chapitres</button>
    </div>
	  <div class="chapter-choice-container">
	      <table class="chapter-table">
					<thead>
						<tr>
              <th>Chapitre</th>
              <th>Nombre de QCD</th>
              <th>Statut du chapitre</th>
              <th class="centered">Edition</th>
              <th class="centered">Activation</th>
          </tr>
		      </thead>
		      <tbody>
		        <tr class="colored-grey">
		            <td>Généralités su les bases de données</td>
		            <td>5</td>
		            <td>activé</td>
		            <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
		            <td class="chapter-gestion-button activation"><a href="#" class="activation-button off"><span class="pre-activation">dés</span>activer</a></td>
		        </tr>
		        <tr class="">
		            <td>Les requêtes</td>
		            <td>3
		            </td>
		            <td>activé</td>
		            <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
		            <td class="chapter-gestion-button activation"><a href="#" class="activation-button off"><span class="pre-activation">dés</span>activer</a></td>
		        </tr>
		        <tr class="colored-grey">
		            <td>Les opération CRUD</td>
		            <td>1</td>
		            <td>désactivé</td>
		            <td class="chapter-gestion-button"><a href="#" class="modify-button">modifier</a></td>
		            <td class="chapter-gestion-button activation"><a href="#" class="activation-button on"><span class="pre-activation"></span>activer</a></td>
		        </tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<?php include 'includes/admin-footer.php'; ?>