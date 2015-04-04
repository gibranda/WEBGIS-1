// Data Loding
    var dataPath = "Data/Coal.geojson"

      var promise = $.getJSON(dataPath);
      promise.then(function(data) {

        
        var dataLayer = L.geoJson(data);

        // THIS IS NEW
        var coal = L.geoJson(data, {
            filter: function(feature, layer) {
                return feature.properties.Mineral == "Coal";
            }
        });

        var limeStone = L.geoJson(data, {
            filter: function(feature, layer) {
                return feature.properties.Mineral == "Lime Stone";
            }
        });
       
        
        // THIS IS NEW
        coal.addTo(map)
        limeStone.addTo(map)

        $("#Coal").click(function() {
        map.addLayer(others)
        map.removeLayer(cafes)
        });
        $("#LimeStone").click(function() {
        map.addLayer(cafes)
        map.removeLayer(others)
        });
    });

    // var dataLayer = new L.GeoJSON.AJAX(dataPath,
    //   {
    //             style: style,
    //             onEachFeature: onEachFeature
    //   });