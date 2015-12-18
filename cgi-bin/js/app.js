var deviceID = "53ff69066667574826552567";
var accessToken = "50030f940aa6fc92e271ea8025b7d718c32d83ad";

function buttonClick(clickedId)
{
	
setTimeout(function() {
	$.ajax({
		url: "https://api.particle.io/v1/devices/53ff69066667574826552567/RSSend/",
		type: "POST",
		dataType: "json",
		contentType: "application/x-www-form-urlencoded",
		data:{"access_token": accessToken, "args":"130"}
	});
}
	,500);
setTimeout(function(){
	$.ajax({
		url: "https://api.particle.io/v1/devices/53ff69066667574826552567/RSSend/",
		type: "POST",
		dataType: "json",
		contentType: "application/x-www-form-urlencoded",
		data:{"access_token": accessToken, "args":"138"}
	});
}
	,1000);

setTimeout(function() {
	$.ajax({
		url: "https://api.particle.io/v1/devices/53ff69066667574826552567/RSSend/",
		type: "POST",
		dataType: "json",
		contentType: "application/x-www-form-urlencoded",
		data:{"access_token": accessToken, "args":"206"}
	});	
}
	,1500);	
}
