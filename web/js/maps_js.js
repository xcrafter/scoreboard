function reload(a,b)
{
    init(0,a,b);
}
function init(e,a,b){
   a = a || 9.58104116208;
    b = b || 76.6330845995;

    var mapOptions = {
        center:new google.maps.LatLng(a,b),
        zoom:15
    }

    var map = new google.maps.Map(document.getElementById("map"),mapOptions);

   /* var marker = new google.maps.Marker({
        position: new google.maps.LatLng(a,b),
        map: map
    });*/

    //alert($("#locations").val());
    var geocoder = new google.maps.Geocoder;
    var infowindow = new google.maps.InfoWindow;
    geocodeLatLng(geocoder,map,infowindow,a,b);
    getGeoval(geocoder,a,b);



}

function geocodeLatLng(geocoder, map, infowindow,a,b) {
    //var input = document.getElementById('latlng').value;
    //var latlngStr = input.split(',', 2);
    var latlng = {lat: a, lng: b};
    geocoder.geocode({'location': latlng}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            if (results[1]) {
                map.setZoom(15);
                var marker = new google.maps.Marker({
                    position: latlng,
                    map: map
                });
                infowindow.setContent(results[1].formatted_address);
                //alert(results[1].formatted_address);
                infowindow.open(map, marker);
            } else {
                window.alert('No results found');
            }
        } else {
            window.alert('Geocoder failed due to: ' + status);
        }
    });
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;

}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

function getGeoval(geocoder,a,b)
{
    var latlng = {lat: a, lng: b};h="";
    geocoder.geocode({'location': latlng}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            if (results[1]) {
                $("#loca").text(results[1].formatted_address);


                //alert($("#locations").val());
               // setCookie("loc",h,30);

               //$("#Default").text(results[1].formatted_address)


            }}}
        );

    //return h;
    }

//google.maps.event.addDomListener(window, 'load', init);