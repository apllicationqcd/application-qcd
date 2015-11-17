<?php include 'includes/admin-head.php'; ?>
<?php include 'includes/admin-header.php'; ?>

<section class="admin-section">
   <div class="inner-admin-section">
      <div class="admin-section-header">
            <h1>Back-office | Tableau de bord</h1>
      </div>
			<div class="admin-section-col">
				<div class="gestion-bloc gestion-item">
					<div class="admin-section-header">
	          <h2>Dernier QCD enregistré</h2>
	        </div>
	        <div class="add-item">
	        	<a href="../qcd-forms/qcd-form-genralites-web" class="last-qcd">QCD : Généralités sur le web</a>
	        	<a href="../qcd-forms/qcd-form-genralites-web" type="submit" class="find">Voir</a>
	        	<hr class="clear">
	        	<a href="gestion-qcd.php" class="admin-link">Voir tout les QCD enregistés</a>
	        </div>
				</div>
				<div class="gestion-bloc gestion-item">
					<div class="admin-section-header">
	          <h2>Dernière matière enregistrée</h2>
	        </div>
	        <div class="add-item">
	        	<a href="../choix-chapitre-web" class="last-qcd">WEB</a>
	        	<a href="../choix-chapitre-web" type="submit" class="find">Voir</a>
	        	<hr class="clear">
	        	<a href="matiere.php" class="admin-link">Voir toutes les matières enregistées</a>
	        </div>
				</div>
				<div class="gestion-bloc gestion-item">
					<div class="admin-section-header">
	          <h2>Dernier chapitre enregistré</h2>
	        </div>
	        <div class="add-item">
	        	<a href="../choix-qcd-web" class="last-qcd">WEB | Chapitre 1</a>
	        	<a href="../choix-qcd-web" type="submit" class="find">Voir</a>
	        	<hr class="clear">
	        	<a href="chapitre.php" class="admin-link">Voir tout les chapitres enregistés</a>
	        </div>
				</div>
			</div>
			<div class="admin-section-col">
				<div class="gestion-bloc gestion-item">
					<div class="admin-section-header">
	          <h2>Recherche</h2>
	        </div>
	        <div class="add-item">
	        	<input type="text" class="add-field">
	        	<a href="#" type="submit" class="find search">Rechercher</a>
	        	<hr class="clear">
	        </div>
			</div>
    </div>
		<hr class="clear">	
   </div>
</section>

<?php include 'includes/admin-footer.php'; ?>