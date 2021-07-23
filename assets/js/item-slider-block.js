jQuery(document).ready(function(){
		var $contentOne = jQuery('#content-one');
		var $contentTwo = jQuery('#content-two');
		var $contentThree = jQuery('#content-three');

	//button hovers
	//when user hovers over button
	jQuery('.button').click(function(){
		$('.content').addClass('hidden');
		let $isOne = jQuery(this).hasClass('one');
		let $isTwo = jQuery(this).hasClass('two');
		let $isThree = jQuery(this).hasClass('three');

		jQuery('.button').removeClass('active');
		jQuery(this).addClass('active');


		if($isOne){
			jQuery('#content-one').removeClass('hidden');
			jQuery('.content-container').css('background-image', 'url(' + 'https://www.definitivehc.com/hubfs/2019medicarenursinghomes.jpg' + ')');
		}
		else if($isTwo){
			jQuery('#content-two').removeClass('hidden');
			jQuery('.content-container').css('background-image', 'url(' + 'https://www.nchcvt.org/wp-content/uploads/2019/02/NursingHomeDentalProgram.jpg' + ')');
		}
		else if($isThree){
			jQuery('#content-three').removeClass('hidden');
						jQuery('.content-container').css('background-image', 'url(' + 'https://www.caspercollege.edu/wp-content/uploads/2019/08/casper-college-pre-occupational-therapy-program.jpg' + ')');
		}
  });
});
