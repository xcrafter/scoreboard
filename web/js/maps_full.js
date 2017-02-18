function reload(a,b)
{
    init(0,a,b);
}
function init(e,a,b){

    //a=9.800360;

    a = a || "9.800360";
    b = b || "76.844762";
    //b=76.844762;
    var map = new google.maps.Map(document.getElementById('map'), {
        center:new google.maps.LatLng(a,b),
        zoom:8,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    });
}
google.maps.event.addDomListener(window, 'load', init);