var mainListView = [];
window.onload = initPageFunction;
function initPageFunction() {
	// alert('ok');
	// $("#cardContainer").empty();
	urlajax = 'file:///D:/projects/repos/anyvendor/docs/store/mods.csv';
	// urlajax = '../docs/store/mods.csv';
  $.ajax({
    url:urlajax,
    dataType : "text",
    success: function (data){
      firstMainLoad(data);
    },
    error: function(xhr, error){
        console.debug(xhr); console.debug(error);
 	}
  });
}