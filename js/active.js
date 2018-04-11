function traceit(code,price){
	gtag('event', 'click_download', {
  		'event_label': code,
  		'value': price,
  		'price': price
	});
}