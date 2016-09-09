$(document).ready(function(){
	_.init();
});

var _ = {
	init: function() {
		$(document).on('click', '.js-menu-item', _.changeContent)
			.on('click', '.js-menu-item', _.activateMenu);
	},
	changeContent: function() {
		var page_called = $(this).text();
		_.ajax(page_called);
	},
	ajax: function(page) {
		$.ajax("pages/"+ page +".php")
			.done(function(result) {
				$('.content').html(result);
			});
	},
	activateMenu: function() {
		$('.active').removeClass('active');
		$(this).addClass('active');
	}
};