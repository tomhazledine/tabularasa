import initGoogleMap from '../custom_modules/googlemaps';

if (typeof hasMap !== 'undefined') {
    initGoogleMap({
        lat: lat,
        lng: lng,
        zoom: zoom
    });
}
