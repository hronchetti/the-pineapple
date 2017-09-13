// <![CDATA[
/*=================================
SETTING UP GOOGLE MAP
=================================*/
function initMap(){
    var originLatLng;
    var Pineapplelocation = {lat: 51.497180, lng: -0.113878};
    var map = new google.maps.Map(document.getElementById('map'), {
        // Options for the map's display
        zoom: 14,
        // Center above The Pineapple for inclusion of InfoWindow
        center: {lat: 51.498864, lng: -0.113912},
        disableDefaultUI: true
    });
    var marker = new google.maps.Marker({
        position: Pineapplelocation,
        map: map,
        title: 'The Pineapple'
    });
    // Creating infoWindow for the Pineapple
    var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h5>The Pineapple</h5>'+
        '<div id="bodyContent">'+
        '<p>53 Hercules Road, London.<br> SE1 7DZ</p>'+
        '</div>'+
        '</div>';
    // Creating infoWindow and adding infoWindow content
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    // Adding infoWindow to the map and assocating it with a marker
    infowindow.open(map, marker);
    /*=================================
    CONTROLLING LANDMARK DIRECTIONS CSS
    =================================*/
    var landmarkList =  document.getElementsByClassName('directions__landmark');
    // Clearing selection
    function clearSelection(){
        for(i = 0; i < landmarkList.length; i++){
            var currentLandmark = landmarkList[i];
            currentLandmark.classList.remove('directions__landmark--clicked');
        }
    }
    /*=================================
    CALCULATING THE ORIGIN OF DIRECTIONS
    =================================*/
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    //
    function calculateOrigin(){
        clearSelection();
        // Closing info window so all directions are visible
        infowindow.close(map, marker);
        // Hide duplicate marker
        marker.setVisible(false);
        // Applying the directions to the map
        directionsDisplay.setMap(map);
        // Adding selected state to marker clicked
        this.classList.add('directions__landmark--clicked');

        if (this.id === 'imperial-war-museum') {

            originLatLng = {lat: 51.495804, lng: -0.108629};

        } else if (this.id === 'waterloo-station'){

            originLatLng = {lat: 51.503159, lng: -0.112316};

        } else if (this.id === 'bfi'){

            originLatLng = {lat: 51.504835, lng: -0.113664};

        } else if (this.id === 'london-eye'){

            originLatLng = {lat: 51.503323, lng: -0.119544};

        } else{
            // Big Ben
            originLatLng = {lat: 51.500729, lng: -0.124628};

        }
        // Handling the directions request
        calculateAndDisplayRoute(directionsService, directionsDisplay);        
    }
    /*=================================
    CREATING DIRECTIONS TO THE PINEAPPLE
    =================================*/
    function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
        origin: originLatLng,
        destination: Pineapplelocation,
        travelMode: 'WALKING'
    },  function(response, status) {
            if (status === 'OK') {
                directionsDisplay.setDirections(response);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }
    // Changing the directions origin when a landmark is clicked
    document.getElementById('imperial-war-museum').addEventListener('click', calculateOrigin);
    document.getElementById('waterloo-station').addEventListener('click', calculateOrigin);
    document.getElementById('bfi').addEventListener('click', calculateOrigin);
    document.getElementById('london-eye').addEventListener('click', calculateOrigin);
    document.getElementById('big-ben').addEventListener('click', calculateOrigin);
    /*=================================
    RESETTING DIRECTIONS
    =================================*/
    function clearAllDirections(){
        clearSelection();
        // Remove all directions shown
        directionsDisplay.setMap(null)
        // Reveal marker
        marker.setVisible(true);
        // Resettin the zoom level and center of the map
        map.setZoom(14);
        map.setCenter({lat: 51.498864, lng: -0.113912});
        // Opening the info window
        infowindow.open(map, marker);
    }
    document.getElementById('clear-all').addEventListener('click', clearAllDirections);
}
// ]]>