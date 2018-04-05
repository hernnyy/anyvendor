function addCardToView(cards,obj){
	var htmlStringButton = ""
	if (obj.price>0) {
		htmlStringButton = obj.link;
	}else{
		var stringButton = "<a href='#' class='btn btn-primary' target='_blank'>Buy now!</a>"
		var htmlButton = document.createElement('a');
		htmlButton.innerHTML = stringButton.trim();
		buyButton = htmlButton.firstChild;
		buyButton.href = obj.link
		buyButton.setAttribute('onclick',  'traceit('+obj.code+','+obj.price+');');
		buyButton.text = "Get It FREE!"
		buyButton.classList = "btn btn-info"
		htmlStringButton = htmlButton.innerHTML;
	};
	var card = "<div class=\"card text-center bg-secondary text-white\">\
	<div class=\"card-header\">Sale "+obj.price.toFixed(2)+"USD</div>\
	<img class=\"card-img-top thumbnail zoom\" src=\""+obj.image+"\" alt=\"preview image\">\
	<div class=\"card-body\">\
	<h5 class=\"card-title\">"+obj.name+"</h5>\
	<p class=\"card-text\">"+obj.description+"</p>"+htmlStringButton+"</div>\
	</div>"
	cards.append(card);
}

function searchCard(){
	var param = $("#txtSearch").val().toLowerCase();
	var cards = $("#cardContainer");
	var list = mainListView;
	cards.empty();
	for (var i = 0; i < list.length; i++) {
		if (list[i].name.toLowerCase().indexOf(param) >= 0 || 
			list[i].description.toLowerCase().indexOf(param) >= 0 ){
		addCardToView(cards,list[i]);
		}
	}
}

function firstMainLoad(data){
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
    	addCardToView(cards,list[i]);
     }
      mainListView = list;
    }