$(document).ready(function(){


$('.qcd-choice').hide();

if($('.admin-section-header span').text() == 'Gestion des matières' || $('.admin-section-header span').text() == 'Créer une matière'){
	$('.item-m').addClass('item-active');
	$('.item-m img').css('display','block');
}else if($('.admin-section-header span').text() == 'Gestion des chapitres' || $('.admin-section-header span').text() == 'Créer un chapitre'){
	$('.item-c').addClass('item-active');
	$('.item-c img').css('display','block');
}else if($('.admin-section-header span').text() == 'Gestion des QCD' || $('.admin-section-header span').text() == 'Créer un QCD'){
	$('.item-g').addClass('item-active');
	$('.item-g img').css('display','block')
}

$('.qcd-show-btn').click(function(e){
	$('.qcd-choice').slideDown(450);
});


});//end doc