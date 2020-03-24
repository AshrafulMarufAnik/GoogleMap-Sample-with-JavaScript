<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" />
<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.css" rel="stylesheet" />

<style>

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 50px;
  transition: 0.5s;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
}

@media screen and (min-device-width: 375px)  and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.infoWindow {
    width: 270px;
    background-color: lightslategray;
    border-radius: 6px;
    padding: 6px;
    color: white;
}

.dataTables_filter {
    color: white;
    float:left;
    margin-bottom:5px;
    margin-right:5px;
}

.dataTables_info {
    color: white;
    float:left;
    margin-top:6px;
    margin-bottom:15px;
    margin-right:5px;
}

</style>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDex7JhF9ACZDEdKKkpvaRbuACEXmFZAIQ&sensor=false"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
        var map, infoWindow;
        var center = new google.maps.LatLng(23.7870018, 90.4031056);

        function pointInit(pointName, lat, lng, addres, incharge, phone) 
        {
            var mapOptions = {
                zoom: 7,
                center: center,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [
                            {
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#212121"
                                }
                                ]
                            },
                            {
                                "elementType": "labels.icon",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#757575"
                                }
                                ]
                            },
                            {
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                {
                                    "color": "#212121"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#757575"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative.country",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative.land_parcel",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative.locality",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#bdbdbd"
                                }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#757575"
                                }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#181818"
                                }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#616161"
                                }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                {
                                    "color": "#1b1b1b"
                                }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "color": "#2c2c2c"
                                }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#8a8a8a"
                                }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#373737"
                                }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#3c3c3c"
                                }
                                ]
                            },
                            {
                                "featureType": "road.highway.controlled_access",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#4e4e4e"
                                }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#616161"
                                }
                                ]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#757575"
                                }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#000000"
                                }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#3d3d3d"
                                }
                                ]
                            }
                        ]
            }

            var pointLocation = {lat: parseFloat(lat), lng: parseFloat(lng)};

            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions,{
                gestureHandling: 'greedy',
                zoom: 15,
                center: pointLocation
            });
            var position = new google.maps.LatLng(parseFloat(lat), parseFloat(lng));
            var marker = new google.maps.Marker({
                map: map,
                position: position,
                animation:google.maps.Animation.zoom,
                title: "paperfly point",
                // label: "Paperfly point",
                icon: {
                    url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                },

            });

            var contentString = '<div class="infoWindow"><strong>' + pointName + '</strong>' +
                '<br/><br/>' + addres +
                '<br/><br/>' + incharge +
                '<br/><br/>' + phone + '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 300
            });
            infowindow.setContent(contentString);
            infowindow.open(map, marker);

            map.setZoom(15);
            map.panTo(marker.getPosition());
            map.setCenter(marker.getPosition());

            bounds  = new google.maps.LatLngBounds();
            loc = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
            bounds.extend(loc);
            //map.fitBounds(bounds);
            map.panToBounds(bounds);     

            // google.maps.event.addListener(marker, 'click', function() {
            //     map.setZoom(10);
            //     map.setCenter(marker.getPosition());
            //         window.setTimeout(function() {
            //         map.panTo(marker.getPosition());
            //         marker.setMap(null);
            //       }, 5000);
            //     infowindow.open(map, marker);
            // });


        }

        function init() 
        {

            var mapOptions = {
                zoom: 7.5,
                center: center,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [
                            {
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#212121"
                                }
                                ]
                            },
                            {
                                "elementType": "labels.icon",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#757575"
                                }
                                ]
                            },
                            {
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                {
                                    "color": "#212121"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#757575"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative.country",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative.land_parcel",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative.locality",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#bdbdbd"
                                }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#757575"
                                }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#181818"
                                }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#616161"
                                }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                {
                                    "color": "#1b1b1b"
                                }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "color": "#2c2c2c"
                                }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#8a8a8a"
                                }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#373737"
                                }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#3c3c3c"
                                }
                                ]
                            },
                            {
                                "featureType": "road.highway.controlled_access",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#4e4e4e"
                                }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#616161"
                                }
                                ]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#757575"
                                }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#000000"
                                }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#3d3d3d"
                                }
                                ]
                            }
                        ]
            }

            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

            makeRequest('get_locations.php', function(data) {
                var data = JSON.parse(data.responseText);
                for (var i = 0; i < data.length; i++) {
                    displayLocation(data[i]);
                }
            });
        }

        function initMap() 
        {
            var mapOptions = {
                zoom: 7,
                center: center,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [
                            {
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#212121"
                                }
                                ]
                            },
                            {
                                "elementType": "labels.icon",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#757575"
                                }
                                ]
                            },
                            {
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                {
                                    "color": "#212121"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#757575"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative.country",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative.land_parcel",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative.locality",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#bdbdbd"
                                }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#757575"
                                }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#181818"
                                }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#616161"
                                }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                {
                                    "color": "#1b1b1b"
                                }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "color": "#2c2c2c"
                                }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#8a8a8a"
                                }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#373737"
                                }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#3c3c3c"
                                }
                                ]
                            },
                            {
                                "featureType": "road.highway.controlled_access",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#4e4e4e"
                                }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#616161"
                                }
                                ]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#757575"
                                }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#000000"
                                }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "color": "#3d3d3d"
                                }
                                ]
                            }
                        ]
            }

            var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions, {
                center: center,
                zoom: 9
            });
            var infoWindow = new google.maps.InfoWindow;

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Your Location');
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) 
        {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }

        function getDirection() {

        }

        function displayLocation(location) 
        {
            var content = '<div class="infoWindow"><strong>' + location.name + '</strong>' +
                '<br/>' + location.address +
                '<br/>' + location.description + '</div>';

            if (parseInt(location.lat) == 0) {
                geocoder.geocode({
                    'address': location.address
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {

                        var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location,
                            title: location.name,
                            icon: {
                                url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                            }
                        });

                        google.maps.event.addListener(marker, 'click', function() {
                            infowindow.setContent(content);
                            infowindow.open(map, marker);
                        });
                    }
                });
            } 
            else 
            {
                var position = new google.maps.LatLng(parseFloat(location.lat), parseFloat(location.lon));
                var marker = new google.maps.Marker({
                    map: map,
                    position: position,
                    title: location.name,
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                    }

                });

                var contentString = '<div class="infoWindow"><strong>' + location.name + '</strong>' +
                    '<br/><br/>' + location.address +
                    '<br/><br/>' + location.description + '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString,
                    maxWidth: 300
                });

                google.maps.event.addListener(marker, 'click', function() {
                    map.setZoom(10);
                    map.setCenter(marker.getPosition());
                    infowindow.open(map, marker);
                    window.setTimeout(function() {
                        //map.panTo(marker.getPosition());
                        //marker.setMap(null);
                        //infowindow.setContent(null);
                        infowindow.close();
                    }, 5000);
                });
            }
        }

        function makeRequest(url, callback) 
        {
            var request;
            if (window.XMLHttpRequest) {
                request = new XMLHttpRequest();
            } else {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            }
            request.onreadystatechange = function() {
                if (request.readyState == 4 && request.status == 200) {
                    callback(request);
                }
            }
            request.open("GET", url, true);
            request.send();
        }

    </script>

</head>

<body onload="initMap();">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">PaperFly points</a>
  <button onclick="init();" type="submit" name="search" class="btn btn-primary" style="margin-left:30px;">All points</button>
  

  <div id="pointTable" style="width: 95%; height: 90%; margin-left:5px; margin-right:5px; margin-top:20px; margin-bottom:10px;">
            <table id="pointDataTable" class="table-responsive table-sm table-bordered" style="height: 100%; width: 100%; margin-bottom:20px;">
                <thead style="background-color: darkslategray; color: white; width: 100%; height: 50px;">
                    <tr style="width: 100%; height: 100%;">
                        <th align="center" style="padding: 5px;">Point name</th>
                        <th align="center" style="padding: 5px;">Point In-Charge</th>
                        <th align="center" style="padding: 5px;">Contact Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'config.php';
                    $sql_read_data = "select * from tbl_point_locator_info";
                    $result = mysqli_query($conn, $sql_read_data) or die("Error in Selecting " . mysqli_error($conn));

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $point1 = $row['pointName'];
                            $address1 = $row['address'];
                            $incharge1 = $row['counterInchargeName'];
                            $number1 = $row['counterInchargePhone'];
                            $number2 = '0'.$number1;
                            $lat = $row['latitude'];
                            $long = $row['longitude'];
                            $pointCode1 = $row['pointCode'];

                            //point_wise_click
                            echo "<tr style='cursor: pointer;' onClick=\"pointInit('" . $point1 . "'," . $lat . "," . $long . ",'" . $address1 . "','" . $incharge1 . "','" . $number2 . "')\">
                                        <td  style='padding: 5px; align=center; color: white;'>" . $row['pointName'] . "</td>
                                        <td  style='padding: 5px; align=center; color: white;'>" . $row['counterInchargeName'] . "</td>
                                        <td  style='padding: 5px; align=center; color: white;'>" . $number2 . "</td>
                                    </tr>";
                        }
                        echo "</tbody>";
                    } else {
                        echo "<span style='color:#ffffff;text-align:center;'>No point found with such name</span>";
                    }

                    ?>
            </table>
        </div>

</div>

<div id="main">

        <div style="background: black; width:100%; height: 50px;">
            <div id="bordiv" style="background: black; float: left; width: 10%; height: 100%;">
                <span id = "spanTV" style="font-size:30px; color:white; cursor:pointer; margin-left:5px;" onclick="openNav()">&#9776;</span>
            </div>

            <div style="background: black; width:90%; float: right; height: 100%;">
                <h3 align="center" style="color:white; margin-top:8px;">PaperFly Point Locations</h3>
            </div>
        </div>


        <div>
            <div id="map_canvas" style="background: black; width:100%; height: 850px;"></div>
        </div>
    

</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#pointDataTable').DataTable({
            // "sScrollY": 700,
            "bScrollCollapse": false,
            "bPaginate": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bSortClasses": false
        });
    });
</script>


<script>

    function openNav() {
        document.getElementById("mySidenav").style.width = "430px";
        // document.getElementById("main").style.marginLeft = "250px";
        // document.getElementById("spanTV").style.visibility = "hidden";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        // document.getElementById("main").style.marginLeft = "0";
        // document.getElementById("spanTV").style.visibility = "visible";
    }

</script>

</body>

</html>