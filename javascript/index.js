let clickCounter = 0;

function callGeonames() {
	let countryCode = $('#countryCode').val();
	$.post('geonames.php', {postCountryCode: countryCode, lang: "EN"}, function(data){
		let obj = JSON.parse(data)
		console.log(obj);
		$('#countryInfoSection').html(obj);
	});
	clickCounter++;
	if(clickCounter >= 3) {
		$(":submit").prop('disabled', true);
		setTimeout(function(){
			clickCounter = 0;
			$(":submit").prop('disabled', false);}, 60000);
	}
    
}

$( document ).ready(function() {
    console.log( "ready!" );
    $(":submit").click(callGeonames);
});
