/**
 * -------------------
 * LOAD MAP
 *
 * Initialise a Google
 * Map with a provided
 * latitude, longitude
 * and zoom-level.
 * -------------------
 */
const initGoogleMap = options => {
    var customMarkerIcon = '';

    // Sanitise variables
    var mapZoom = parseInt(options.zoom),
        mapLat = parseFloat(options.lat),
        mapLng = parseFloat(options.lng);

    var map; // Setup the Google Maps variable

    function initialize() {
        // Call in the desired offset, and setup the offset latitude and longitude
        var testingOffsetLat = mapLat + 0;
        var testingOffsetLng = mapLng + 0;

        // Declare map centre position
        var currentTarget = new google.maps.LatLng(mapLat, mapLng);
        // Declare marker position
        var currentCentre = new google.maps.LatLng(testingOffsetLat, testingOffsetLng);

        // Setup map options
        var mapOptions = {
            center: currentCentre,
            zoom: mapZoom,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.MAP,
            styles: options.styles,
            disableDefaultUI: true,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            rotateControl: false,
            fullscreenControl: false
        };

        // Make the map
        map = new google.maps.Map(document.getElementById('map__canvas'), mapOptions);

        // Set the marker marker

        var icon = {
            path:
                'M15,0C8.3,0,2.9,5.4,2.9,12.1C2.9,22.5,15,30,15,30s12.1-7.5,12.1-17.9C27.1,5.4,21.7,0,15,0z M15,18.3 c-3.4,0-6.2-2.8-6.2-6.2c0-3.4,2.8-6.2,6.2-6.2c3.4,0,6.2,2.8,6.2,6.2C21.2,15.6,18.4,18.3,15,18.3z',
            fillColor: '#7EC7DC',
            fillOpacity: 1,
            strokeWeight: 0,
            scale: 2,
            size: new google.maps.Size(30, 30),
            anchor: new google.maps.Point(15, 30)
        };

        var marker = new google.maps.Marker({
            position: currentCentre,
            map: map,
            icon: icon
        });
    }

    initialize();
};

export default initGoogleMap;
