$(document).ready(function() {
		$('.pop').magnificPopup({
					removalDelay: 300,
					duration: 300, // duration of the effect, in milliseconds
    			easing: 'ease-in-out', // CSS transition easing function
  				mainClass: 'mfp-fade'
				});
	$(".menu").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top-53;     
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });

	var lg_menu = $('.select-lang');
	lg_menu.hide();
	$('.lang').on('click', function(){
		lg_menu.toggle();
		$('.fa-angle-down').toggleClass('active');
	})

	$('#woho').on('click', function() {
  $(document.body).toggleClass('menu-open');
});

	var lg_menu_mob = $('.select-lang-mob');
	lg_menu_mob.hide();
	$('.lang_mob').on('click', function(){
		lg_menu_mob.toggle();
		$('.fa-angle-down').toggleClass('active');
	})

	var mob_burger = $('#woho');
	mob_burger.on('click', function(){
		$('.mob-nav').toggleClass('active');
	})

	var close_menu = $('.close-menu');
	close_menu.on('click', function(){
		$('.mob-nav').removeClass('active');
	})

	var element = $('.scroll_hidden');
	    $(window).scroll(function(){
	        element['display'+ ($(this).scrollTop() > 0 ? 'block': 'none')];          
	    });

 

 $('#work .hover_section, #service .hover_section').on('mouseover',(function() {
    $('.desc').addClass('animated flipInY')
  }));
$('#work .hover_section, #service .hover_section').on('mouseleave',(function() {
    $('.desc').removeClass('animated flipInY')
  }));
$('#proect_creator .hover_section, #team .hover_section, #edviser .hover_section').on('mouseover',(function() {
    $('.desc').addClass('animated zoomIn')
  }));
$('#work .hover_section, #service .hover_section, #edviser .hover_section').on('mouseleave',(function() {
    $('.desc').removeClass('animated zoomIn')
  }));

if($(window).width()<=480){
     $('.hover_section, .box').on('mouseover',(function() {
    $('.desc').removeClass('animated flipInY')
  }));
		$('.hover_section, .box').on('mouseleave',(function() {
    $('.desc').removeClass('animated flipInY')
  }));
		$('#proect_creator .hover_section, #team .hover_section, #edviser .hover_section').on('mouseover',(function() {
    $('.desc').removeClass('animated zoomIn')
  }));
$('#work .hover_section, #service .hover_section, #edviser .hover_section').on('mouseleave',(function() {
    $('.desc').removeClass('animated zoomIn')
  }));
     }   
});
 function myFunc() {
		var x = $('#snackbar');
		var close_snack = $('#snackbar span');
		close_snack.on('click', function(){
			x.removeClass('show')
		})
		x.addClass('show');
	} 

var modal = document.getElementById('myModal');
var btn = document.getElementById('myBtn');
var span = document.getElementsByClassName('close')[0];
/*btn.onclick = function(){
	modal.style.display = 'block';
}*/
/*span.onclick = function(){
	modal.style.display = 'none';
}*/
/*window.onclick = function(event){
	if(event.target == modal){
		modal.style.display = "none";
	}
}*/
// var pathA = document.getElementById("pathA"),
//     pathC = document.getElementById("pathC"),
//     pathB = document.getElementById("pathB"),
//     segmentA = new Segment(pathA, 8, 32),
//     segmentC = new Segment(pathC, 8, 32),
//     segmentB = new Segment(pathB, 8, 32),
//     btnToggle = document.getElementById("toggle-svg"),
//     toggle = true;

 $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
        });

// function inAC(s) {
//   s.draw('80% - 24', '80%', 0.3, {
//     delay: 0.3,
//     callback: function() {
//       inAC2(s);
//     }
//   })
// }

// function inAC2(s) { 
//   s.draw('100% - 54.5', '100% - 30.5', 0.3, {
//     easing: d3_ease.elasticOut
//   });
// }

// function inB(s) {
//   s.draw(8 - 6, 32 - 6, 0.3, {
//     callback: function() {
//       inB2(s);
//     }
//   });
// }

// function inB2(s) {
//   s.draw(8 + 12, 32 - 12, 0.3, {
//     easing: d3_ease.bounceOut
//   });
// }

// function outAC(s) { 
//   s.draw('90% - 24', '90%', 0.3, {
//     easing: d3_ease.elasticIn, 
//     callback: function(){ 
//       outAC2(s) 
//     }
//   }); 
// }

// function outAC2(s) { 
//   s.draw('20% - 24', '20%', 0.4, {
//     callback: function(){ 
//       outAC3(s) 
//     }
//   }); 
// }

// function outAC3(s) { 
//   s.draw(8, 32, 0.3, {
//     easing: d3_ease.elasticOut
//   }); 
// }

// function outB(s) { 
//   s.draw(8, 32, 0.4, {
//     delay: 0.3, easing: d3_ease.elasticOut
//   });
// }

// btnToggle.onclick = function() {
//   if (toggle) {
//     inB(segmentB);
//     inAC(segmentA);
//     inAC(segmentC);
//   }else{
//     outAC(segmentA);
//     outB(segmentB);
//     outAC(segmentC);
//   }
//   toggle = !toggle;
// }

function send_email_1(subject){
  var realName = '';
  var name = 'info';
  var sigan = '@';
  var domain = 'drs.team';

  location.href=('mailto:' + realName + '\<'+name+sigan+domain+'\>?subject-'+subject);
}

function send_email_2(subject){
  var realName = '';
  var name = 'pr';
  var sigan = '@';
  var domain = 'drs.team';

  location.href=('mailto:' + realName + '\<'+name+sigan+domain+'\>?subject-'+subject);
}

$(document).on('click','.lng_to_ru',function(e){
  location.href = "/ru";
});

$(document).on('click','.lng_to_en',function(e){
  location.href = "/en";
});