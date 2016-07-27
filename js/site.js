// JavaScript Document

// Function for delayed execution via callback
var delayed = (function(){
	var timer = 0;
	return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	};
})();

function goTrain(delay){
	delayed(function(){
		$('#train').animate({ left: [-3000, 'easeInSine'] }, 10000, function(){
			$('#train').css({ left: $(window).width() }).animate({ left: [-100, 'easeOutSine'] }, 7500, function(){
				goTrain(5000);
			})
		});
	}, delay);
}

function checkEmail(myForm) {
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email_subscribe.value)){
		return (true)
	}
	alert("Please enter a valid email address")
	return (false)
}


function login(){
	var cms_win = window.open("","cms_win","width="+screen.availWidth+",height="+screen.availHeight+",left=0,top=0,scrollbars=yes,resizable=yes");
	cms_win.focus();
	
	return true;
}

$(window).load(function(){
	

	$('#cms_login_button').animate({'top':[0, 'easeOutCirc']}, 1000, function(){
		$('#subscribe_label').animate({'top':[-84, 'easeOutSine']}, 750);
	});

	$('#plectrum').fadeIn({queue:false}).animate({'top':['92px', 'easeOutBounce']}, 1500);
	$('#plectrum_shadow').fadeIn({queue:false}).animate({'top':['102px', 'easeOutBounce'], 'left':['465px', 'easeOutBounce']}, 1500);
	
	$('#cityscape').css('visibility','visible');
	goTrain(2000);
	


});



$(document).ready(function(){
	
	 $(window).keydown(function(event){
		if(event.keyCode == 13) {
		event.preventDefault();
		 return false;
		 }
		});

	$('#submit_contact_form').click(function(){

			var dataString = 'name='+ encodeURIComponent( $("input#contact_name").val() ) + '&phone=' + encodeURIComponent( $("input#contact_phone").val() ) + '&email=' + encodeURIComponent( $("input#contact_email").val() ) + '&comments=' + encodeURIComponent( $("textarea#contact_comments").val() ) + '&rcf=' + $("input#recaptcha_challenge_field").val() + '&rrf=' + $("input#recaptcha_response_field").val();

			$.ajax({
				type: "POST",
				url: "/Sepro/ajax_contact_process.php",
				data: dataString,
				error: function(xml) {
					$('#captcha_error').html('<span style="color: #f00;">Incorrect CAPTCHA entered, please try again</span>');
					Recaptcha.reload();
				},
				success: function(data) {
					$('#contact_form').html("<div id='message'></div>");
					$('#message').html("<h2>Mensaje enviado</h2><p style='width: 340px;'>"+data+"</p>")
					.hide()
					.fadeIn(1500, function() {
						$('#message');
					});
					$('#contact_middle_step1').animate({'margin-top':'0px'}, 500);
				}
			});
			return false;

	});
	
	$('#back_contact_form').click(function(){
					$('#contact_middle_step1').animate({'margin-top':'0px'}, 500);

	});
	
	$('#submit_subscribe_form').click(function(){
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test( $('#subscribe_email').val() )){

			var dataString = 'email='+ $("input#subscribe_email").val();
			$.ajax({
				type: "POST",
				url: "/Sepro/ajax_subscribe_process.php",
				data: dataString,
				success: function() {
					$('#subscribe_form').html("<div id='subscribe_message'></div>");
					$('#subscribe_message').html("<p>Thank you for subscribing</p>")
					.hide()
					.fadeIn(1500, function() {
						$('#subscribe_message');
					});
				}
			});
			return false;

		} else {

			$("input#subscribe_email").effect('shake',{times:3},100);
			return false;

		}
	});

	$('#contact_link').click(function(){
		$('#contact').animate({'height':[473, 'easeOutBounce']}, 1500);
	});
	
	/*$('#contact_envelope_middle').click(function(){
		$('#contact').animate({'height':[0, 'easeInSine']}, 1000);
	});*/

	$('.social_tab').click(function(){
		$('.social_tab').removeClass('social_active').addClass('social_inactive');
		$(this).removeClass('social_inactive').addClass('social_active');
		$('.social_content').hide();
		$('#' + this.id + '_content').slideDown();
	});

	$(window).scroll(function () { 
		if ($(window).scrollTop() < 450) { 
			$("#clouds").css("left", 30-$(window).scrollTop()/5 + "px");
			$("#city2").css("top", 250+$(window).scrollTop()/15 + "px");
			$("#city3").css("left", 850-$(window).scrollTop()/15 + "px");
		}
	});

	var videoSrc =""; 
	$("a.lightbox").fancybox({
		'hideOnContentClick': true,
		'autoDimensions': false,
		'width': 799,
		'height': 447,
		'scrolling': 'no',
		'onComplete': function() { 
			videoSrc = $('#glg_video').attr('src');
		},
		'onClosed': function() { 
			$('#glg_video').attr('src',videoSrc);
		}
	});

	$("a#cms_login_link").fancybox({
		'hideOnContentClick': false,
		'padding': 0,
		'overlayColor':'#333',
		'showCloseButton': false,
		'centerOnScroll': true
	});
	
	$('#subscribe_label').click(function(){
		$('html, body').animate({scrollTop:$(document).height()}, 1000, function(){
			$('#subscribe_box').effect("pulsate", { times:1 }, 500);
			$('#subscribe_email').focus();
		})
	});

	$( "#tabs" ).tabs({
		show: function(event, ui) {
			if(ui.index == 2)
			{
				$('#team1_standing').animate({'left':[0,'easeOutSine']}, 800);
				$('#team2_standing').animate({'left':[95,'easeOutSine']}, 800);
				$('#team3_standing').animate({'left':[200,'easeOutSine']}, 800);
				$('#team4_standing').animate({'left':[325,'easeOutSine']}, 800);
				$('#team5_standing').animate({'left':[450,'easeOutSine']}, 800);
				$('#team6_standing').animate({'left':[580,'easeOutSine']}, 800);
				$('#team7_standing').animate({'left':[680,'easeOutSine']}, 800);
				$('#team8_standing').animate({'left':[770,'easeOutSine']}, 800);
			}
		}
	});

	if($("#tabs") && document.location.hash){
		$.scrollTo("#tabs");
	}

	$("#tabs ul").localScroll({ 
		target:"#tabs",
		duration:0,
		hash:true
	});

	$('.view_portfolio').click(function(){
		location.href='portfolio.php'
	});

	$('.get_quote').click(function(){
		$('html, body').animate({scrollTop:0}, 1000, function(){
			$('#contact_link').click();
		})
	});

	$('#meet_the_team').click(function(){
		$('html, body').animate({scrollTop:0}, 1000, function(){
			$('#mtt_tab').click();
		})
	});	

	$('#team1_standing').click(function(){ $('.bio').hide(); $('#team1_bio').fadeIn(); });
	$('#team2_standing').click(function(){ $('.bio').hide(); $('#team2_bio').fadeIn(); });
	$('#team3_standing').click(function(){ $('.bio').hide(); $('#team3_bio').fadeIn(); });
	$('#team4_standing').click(function(){ $('.bio').hide(); $('#team4_bio').fadeIn(); });
	$('#team5_standing').click(function(){ $('.bio').hide(); $('#team5_bio').fadeIn(); });
	$('#team6_standing').click(function(){ $('.bio').hide(); $('#team6_bio').fadeIn(); });
	$('#team7_standing').click(function(){ $('.bio').hide(); $('#team7_bio').fadeIn(); });
	$('#team8_standing').click(function(){ $('.bio').hide(); $('#team8_bio').fadeIn(); });
	$('.team_standing').click(function(){ $('html, body').animate({scrollTop: $("#team_container").offset().top}, 800); });

	$( "#mtt_tab" ).bind( "click", function(){
		$('#team1_standing').animate({'left':[0,'easeOutSine']}, 800);
		$('#team2_standing').animate({'left':[95,'easeOutSine']}, 800);
		$('#team3_standing').animate({'left':[200,'easeOutSine']}, 800);
		$('#team4_standing').animate({'left':[325,'easeOutSine']}, 800);
		$('#team5_standing').animate({'left':[450,'easeOutSine']}, 800);
		$('#team6_standing').animate({'left':[580,'easeOutSine']}, 800);
		$('#team7_standing').animate({'left':[680,'easeOutSine']}, 800);
		$('#team8_standing').animate({'left':[770,'easeOutSine']}, 800);
	});
	
	$('#captcha_link').click(function(){

		if( $('#contact_name').val() == '' || $('#contact_name').val() == 'Nombre' ) {
			$("#contact_name").css({'background-color':'#ffc'}).effect('pulsate', {times:3}, 250, function(){ $(this).focus() } );
			return false;
		}

		if ( /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test( $('#contact_email').val() ) == false ){
			$("#contact_email").css({'background-color':'#ffc'}).effect('pulsate', {times:3}, 250, function(){ $(this).focus() } );
			return false;
		}
		
		if( $('#contact_phone').val() == '' || $('#contact_phone').val() == 'Teléfono' || $('#contact_phone').val().length <= 6 ) {
			$("#contact_phone").css({'background-color':'#ffc'}).effect('pulsate', {times:3}, 250, function(){ $(this).focus() } );
			return false;
		}

		if( $('#contact_comments').val() == '' || $('#contact_comments').val() == 'Mensaje' ) {
			$("#contact_comments").css({'background-color':'#ffc'}).effect('pulsate', {times:3}, 250, function(){ $(this).focus() } );
			return false;
		}

		$('#contact_middle_step1').animate({'margin-top':'-300px'}, 500);
	
	});


});