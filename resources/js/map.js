"use strict";

import L from "leaflet";

class Map {
    #map;
    #mapZoomLevel = 16;

    constructor() {
        this._loadMap();
    }

    _loadMap() {
        const latitude = 48.1526926;
        const longitude = 17.1221574;

        const coords = [latitude, longitude];

        this.#map = L.map("map").setView(coords, this.#mapZoomLevel);

        L.tileLayer("https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png", {
            attribution:
                '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(this.#map);
    }
}

export default Map;
