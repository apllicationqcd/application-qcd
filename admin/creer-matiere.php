<?php include 'includes/admin-head.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<section class="admin-section section-create">
  <div class="inner-admin-section">
    <div class="admin-section-header admin-section-title">
        <h1>Back-office | <span>Créer une matière</span></h1>
    </div>
    <div class="section-create-bloc">
	   <form method="post" action="#" class="create-item-form">
    	<h2 class="create-title">Pour créer une matière, remplissez les champs si dessous.</h2>
    	<p class="create-subtitle">Tout les champs marqués d'une étoile sont obligatoires. </p>
	   	<fieldset class="create-item-field">
	   		<label for="nom_matiere" class="create-item-label">Nom de la matière<em> *</em></label>
	   		<input type="text" name="nom_matiere" class="create-item-item create-input" id="nom_matiere" required>
	   		<label for="description_matiere" class="create-item-label">Description<em> *</em></label>
	   		<textarea name="description_matiere" class="create-item-item create-textarea" id="description_matiere" cols="30" rows="5" required></textarea>
	   	</fieldset>
	   	<fieldset class="create-item-field">
	   		<label for="image_matiere" class="create-item-label">Image<em> *</em> <span>(200ko maximum)</span></label>
	   		<input type="file" name="nom_matiere" class="create-item-item create-input" id="image_matiere" accept="image/*" required>
	   		<label for="statut_matiere" class="create-item-label">Statut<em> *</em></label>
	   		<select class="form-control" id="statut_matiere" required>
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