	var lg_menu = $('.select-lang');
	lg_menu.hide();
	$('.lang').on('click', function(){
		lg_menu.toggle();
		$('.fa-angle-down').toggleClass('active');
	})
	var lg_menu_mob = $('.select-lang-mob');
	lg_menu_mob.hide();
	$('.lang_mob').on('click', function(){
		lg_menu_mob.toggle();
		$('.fa-angle-down').toggleClass('active');
	})
	var mob_burger = $('.mob_burger');
	mob_burger.on('click', function(){
		$('.mob-nav').addClass('active');
	})
	var close_menu = $('.close-menu');
	close_menu.on('click', function(){
		$('.mob-nav').removeClass('active');
	})