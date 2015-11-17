<?php include 'includes/admin-head.php'; ?>
<?php include 'includes/admin-header.php'; ?>

<section class="admin-section">
   <div class="inner-admin-section">
      <div class="admin-section-header">
            <h1>Espace enseignant | Tableau de bord</h1>
      </div>
			<div class="admin-section-col">
				<div class="gestion-bloc gestion-item">
					<div class="admin-section-header">
	          <h2>Ajout rapide d'une matière</h2>
	        </div>
	        <div class="add-item">
	        	<input type="text" class="add-field">
	        	<input type="submit" value="ajouter" class="add-submit">
	        	<hr class="clear">
	        	<a href="matiere.php" class="admin-link">Voir toutes les matières</a>
	        </div>
				</div>
				<div class="gestion-bloc gestion-item">
					<div class="admin-section-header">
	          <h2>Ajout rapide d'un chapitre</h2>
	        </div>
	        <div class="add-item">
	        	<input type="text" class="add-field">
	        	<input type="submit" value="ajouter" class="add-submit">
	        	<hr class="clear">
	        	<a href="chapitre.php" class="admin-link">Voir tout les chapitres</a>
	        </div>
				</div>
			</div>
			<div class="admin-section-col">
				<div class="gestion-bloc gestion-item">
					<div class="admin-section-header">
	          <h2>Créer un QCD</h2>
	        </div>
	        <div class="add-item qcd-info qcd-info-t">
	        <label for="qcd-title">Titre du QCD</label>
	        	<input type="text" class="add-field" id="qcd-title">
	        </div>
	        <div class="add-item qcd-info qcd-info-m">
	        	<label for="qcd-title">Choix de la matière</label>
	        	<select class="form-control">
		          <option>Bases de données</option>
		          <option>Gestion de projet</option>
		          <option>Technologies web</option>
		          <option>PHP mysql</option>
		          <option>HTML 5/CSS3</option>
			      </select>
	        </div>
	        <div class="add-item qcd-info qcd-info-c">
	        	<label for="qcd-title">Choix du chapitre</label>
	        	<select class="form-control">
		          <option>***********</option>
		          <option>***********</option>
		          <option>***********</option>
		          <option>***********</option>
		          <option>***********</option>
			      </select>
	        </div>
					<div class="question-create-list">
						<div class="gestion-bloc gestion-item question-create">
							<div class="admin-section-header">
			          <h2>Question 1</h2>
			        </div>
			        <div class="add-item">
								<div class="inner-add-item">
									<label for="add-response-1">Réponse 1</label>
			        		<input type="text" class="add-field" id="add-response-1">
								</div>
								<div class="inner-add-item">
									<label for="add-response-2">Réponse 2</label>
			        		<input type="text" class="add-field" id="add-response-2">
								</div>
								<div class="inner-add-item val-response">
									<label for="add-response-2">Bonne réponse</label>
									<div class="val-response-pick" id="pick-1">
				        		<input type="radio">
				        		<p>1</p>
			        		</div>
			        		<div class="val-response-pick" id="pick-2">
				        		<input type="radio">
				        		<p>2</p>
			        		</div>
								</div>
		        	</div>
						</div>
					</div>
					<input type="submit" value="ajouter une question" class="add-submit add-question no-left">
				</div>
			</div>
		<hr class="clear">	
    </div>
</section>

<?php include 'includes/admin-footer.php'; ?>