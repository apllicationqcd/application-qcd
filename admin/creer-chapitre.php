<?php include 'includes/admin-head.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<section class="admin-section section-create">
  <div class="inner-admin-section">
    <div class="admin-section-header admin-section-title">
        <h1>Back-office | <span>Créer un chapitre</span></h1>
    </div>
    <div class="section-create-bloc">
	   <form method="post" action="#" class="create-item-form">
    	<h2 class="create-title">Pour créer un chapitre, remplissez les champs si dessous.</h2>
    	<p class="create-subtitle">Tout les champs marqués d'une étoile sont obligatoires. </p>
	   	<fieldset class="create-item-field">
	   		<label for="nom_chapitre" class="create-item-label">Nom du chapitre<em> *</em></label>
	   		<input type="text" name="nom_chapitre" class="create-item-item create-input" id="nom_chapitre" required>
	   		<label for="choix_matiere" class="create-item-label">Matière<em> *</em></label>
	   		<select name="choix_matiere" class="form-control" id="choix_matiere" cols="30" rows="5" required>
	   			<option>Web</option>
          <option>HTML/CSS</option>
          <option>PHP</option>
          <option>Symphony 2</option>
          <option>Java j2ee</option>
          <option>UML</option>
          <option>Gestion de projets</option>
          <option>Base de donnée</option>
	   		</select>
	   	</fieldset>
	   	<fieldset class="create-item-field">
	   		<label for="statut_chapitre" class="create-item-label">Statut<em> *</em></label>
	   		<select class="form-control" id="statut_chapitre" required>
          <option>Activée</option>
          <option>Désactivée</option>
        </select>
	   	</fieldset>
	   	<fieldset class="create-item-field last-field">
	   		<input type="submit" value="Valider" class="admin-button">
			</fieldset>
	   </form>
    </div>
  </div>
</section>
<?php include 'includes/admin-footer.php'; ?>