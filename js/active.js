function traceit(code,price){
	gtag('event', 'click_download_'+code, {
	  'article': code,
	  'price': price
	});
}