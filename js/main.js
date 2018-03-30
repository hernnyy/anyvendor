window.onload = initPageFunction;
function initPageFunction() {
	// alert('ok');
	// $("#cardContainer").empty();
	var mainListView = [];
	urlajax = 'file:///D:/projects/repos/anyvendor/docs/store/mods.csv';
	// urlajax = '../docs/store/mods.csv';
  $.ajax({
    url:urlajax,
    dataType : "text",
    success: function (data){
    	var list = [];
    	var rows = data.split('\n');
    	for (var i = 0; i < rows.length; i++) {
    	var store = rows[i].split(";");
    	var co = {};
    	if (store.length > 1) {
    		var j = 0;
    		co.code = parseFloat(store[j]);
    		co.image = store[++j];
    		co.name = store[++j];
    		co.description = store[++j];
    		co.price = parseFloat(store[++j]);
    		co.link = store[++j];
    		list.push(co)
    	};
      };
      var cards = $("#cardContainer");
	  for (var i = 0; i < list.length; i++) {

	  	var stringButton = "<a href='#' class='btn btn-primary'>Buy now!</a>"
	  	var htmlButton = document.createElement('a');
  		htmlButton.innerHTML = stringButton.trim();
  		buyButton = htmlButton.firstChild;
  		buyButton.href = list[i].link +"&"+ list[i].code
  		buyButton.setAttribute('onclick',  'traceit('+list[i].code+','+list[i].price+');');
	  	if (list[i].price>0) {
	  		
	  	}else{
	  		buyButton.text = "Get It FREE!"
	  		buyButton.classList = "btn btn-info"
	  	};
		var card = "<div class=\"card text-center bg-secondary text-white\">\
				<div class=\"card-header\">Sale "+list[i].price.toFixed(2)+"USD</div>\
				<img class=\"card-img-top thumbnail zoom\" src=\""+list[i].image+"\" alt=\"preview image\">\
				<div class=\"card-body\">\
					<h5 class=\"card-title\">"+list[i].name+"</h5>\
					<p class=\"card-text\">"+list[i].description+"</p>"+htmlButton.innerHTML+"</div>\
			</div>"
		cards.append(card);
      }
      mainListView = list;
    },
    error: function(xhr, error){
        console.debug(xhr); console.debug(error);
 	}
  });
}