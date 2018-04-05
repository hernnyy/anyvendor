function traceit(code,price){
	gtag('event', 'click_download',code,price,'true', {
	  'article': code,
	  'price': price
	});
}