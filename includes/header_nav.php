
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonfast</title>
    <script src="js/jquery-1.11.1.min.js" ></script>
    <link href="css/bootstrap.css" rel="stylesheet"/>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

    <script type="text/javascript">
        if (document.documentElement.clientWidth > 640){
            document.write('<script src="https://maps.googleapis.com/maps/api/js"><\/script>');
        }
    </script>

    <script>
        function initialize() {
            var scCanvas = document.getElementById("map");
            var paCanvas = document.getElementById("pa-canvas");
            var scLatLng = new google.maps.LatLng(35.03884, -82.43390);
            var paLatLng = new google.maps.LatLng(40.03016, -79.08715);
            var scMapOptions = {
                center : scLatLng,
                zoom: 11,
                mapTypeId : google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                draggable: false
                }
            var mapSc = new google.maps.Map(scCanvas, scMapOptions);
            var markerSc = new google.maps.Marker({
                position: scLatLng,
                map: mapSc,
                title: 'Sonfast\n' + '450 Stamey Valley Rd\n' + 'Travelers Rest, SC 29690'
            });
            //mapSc.setOptions({zooming: false});

//            var paMapOptions = {
//                center : paLatLng,
//                zoom: 11,
//                mapTypeId : google.maps.MapTypeId.ROADMAP
//            }
//            var mapPa = new google.maps.Map(paCanvas, paMapOptions);
//            var markerPa = new google.maps.Marker({
//                position: paLatLng,
//                map: mapPa,
//                title: 'Sonfast, Pennsylvania'
//            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

