<?php include 'includes/qcd-form-head.php'; ?>
<?php include 'includes/qcd-form-header.php'; ?>

<section class="section section-title">
    <h1>QCD | Généralités sur le web</h1>
    <h2>C'est parti, testez vos connaissances !</h2>
</section>
<section class="section section-chapter-choice">
    <div class="inner-section">
			<div class="qdc-form-container">
				<form method="post" action="">
					<fieldset class="qcd-form-bloc">
						<legend class="qcd-legend">Question 1</legend>
						<div class="qcd-question"><p>Que signifie www ?</p></div>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="001">
							<p class="correct">World Wide Web</p>
						</label>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="002">
							<p class="false">World Windows Web</p>
						</label>
					</fieldset>
					<fieldset class="qcd-form-bloc">
						<legend class="qcd-legend">Question 2</legend>
						<div class="qcd-question"><p>Qu'est ce qu'un navigateur ?</p></div>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="003">
							<p class="correct">Un interpréteur de code html</p>
						</label>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="004">
							<p class="false">Un logiciel</p>
						</label>
					</fieldset>
					<fieldset class="qcd-form-bloc">
						<legend class="qcd-legend">Question 3</legend>
						<div class="qcd-question"><p>Quel est l'intru ?</p></div>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="005">
							<p class="correct">Netscape</p>
						</label>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="006">
							<p class="false">Firefox</p>
						</label>
					</fieldset>
					<fieldset class="qcd-form-bloc">
						<legend class="qcd-legend">Question 4</legend>
						<div class="qcd-question"><p>Java et JavaScript sont le même langage ?</p></div>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="007">
							<p class="false">Vrai</p>
						</label>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="008">
							<p class="correct">Faux</p>
						</label>
					</fieldset>
					<fieldset class="qcd-form-bloc">
						<legend class="qcd-legend">Question 5</legend>
						<div class="qcd-question"><p>Quelle est la première balise d'une page html5 ?</p></div>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="009">
							<p class="correct"><span><</span>!DOCTYPE html</span>></span></p>
						</label>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="010">
							<p class="false"><span><</span>html<span>></span></p>
						</label>
					</fieldset>
					<fieldset class="qcd-form-bloc">
						<legend class="qcd-legend">Question 6</legend>
						<div class="qcd-question"><p>Comment fait-on un alert en JavaScript ?</p></div>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="011">
							<p class="correct">alert()</p>
						</label>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="012">
							<p class="false">alert''</p>
						</label>
					</fieldset>
					<fieldset class="qcd-form-bloc">
						<legend class="qcd-legend">Question 7</legend>
						<div class="qcd-question"><p>Quelle est la dernière version du HTML ?</p></div>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="013">
							<p class="false">4</p>
						</label>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="014">
							<p class="correct">5</p>
						</label>
					</fieldset>
					<fieldset class="qcd-form-bloc">
						<legend class="qcd-legend">Question 8</legend>
						<div class="qcd-question"><p>Qu'est ce que jQuery ?</p></div>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="015">
							<p class="false">Un language de programmation</p>
						</label>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="016">
							<p class="correct">Un framework JavaScript</p>
						</label>
					</fieldset>
					<fieldset class="qcd-form-bloc">
						<legend class="qcd-legend">Question 9</legend>
						<div class="qcd-question"><p>Que signifie PHP ?</p></div>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="017">
							<p class="correct">Hypertext Preprocessor</p>
						</label>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="018">
							<p class="false">Pre Hypertext Processor</p>
						</label>
					</fieldset>
					<fieldset class="qcd-form-bloc">
						<legend class="qcd-legend">Question 10</legend>
						<div class="qcd-question"><p>Quelle est la boucle JavaScript correcte ?</p></div>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="019">
							<p class="correct">for(i = 0; i <= 20; i++){
								// Du code
							};</p>
						</label>
						<label class="qcd-radio">
							<input type="radio" name="qcd-radio-input" value="020">
							<p class="false">for(i = 0; i > 20; i++){
								// Du code
							};</p>
						</label>
					</fieldset>
					<fieldset class="qcd-form-bloc">
						<legend class="qcd-legend">Validation</legend>
						<p class="valisation-p">/!\ Attention, relisez-vous bien ! Après soumission du formulaire vous ne pourrez plus le modifier ! /!\ </p>
						<p class="valisation-p">
							<input type="submit" value="Envoyer" class="send">
							<input type="button" value="correction" class="correction">
						</p>
					</fieldset>
				</form>
			</div>
    </div>
</section>

<?php include 'includes/qcd-form-footer.php'; ?>