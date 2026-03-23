function initMap() {
    // 1. Define the coordinates (Example: New York City)
    const myLocation = { lat: 40.7128, lng: -74.0060 };

    // 2. Create the map and place it in the 'map' div
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: myLocation,
    });

    // 3. Add a red pin (marker) on the location
    const marker = new google.maps.Marker({
        position: myLocation,
        map: map,
        title: "Hello World!"
    });
}