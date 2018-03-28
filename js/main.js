window.onload = initPageFunction;
function initPageFunction() {
	// alert('ok');
	// $("#cardContainer").empty();
	var cards = $("#cardContainer");
	for (var i = 0; i < 5; i++) {
		var card = "<div class=\"card text-center bg-secondary text-white\">\
				<div class=\"card-header\">Sale</div>\
				<img class=\"card-img-top\" src=\"https://orig00.deviantart.net/6c12/f/2013/068/3/5/wall_e_blender_3d_models_by_pixeloz-d5xg21w.jpg\" alt=\"preview image\">\
				<div class=\"card-body\">\
					<h5 class=\"card-title\">Mod1</h5>\
					<p class=\"card-text\">3d model avaiable.</p>\
					<a href=\"#\" class=\"btn btn-primary\">Buy now!</a>\
				</div>\
			</div>"
		cards.append(card);
	}
}