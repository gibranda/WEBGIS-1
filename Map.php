<!DOCTYPE html>
<html>
  <head>
    <title>Coal Leases</title>
    <link rel="shortcut icon" href="images/layers.png" type="image/x-icon">
    <link rel="stylesheet" href="leaflet.css" />
    <link rel="stylesheet" href="search/src/leaflet-search.css" />
	<link rel="stylesheet" href="leaflet-loader/leaflet-loader.css" />
    
    <script src="leaflet.js"></script>
    <script src="http://maps.google.com/maps/api/js?v=3.2&sensor=false"></script>
    <script src="leaflet-google.js"></script>
    <script src="shp.js"></script>
    <script src="catiline.js"></script>
    <script src="leaflet.shpfile.js"></script>
    <script src="search/src/leaflet-search.js"></script>
	<script src="leaflet-loader/leaflet-loader.js"></script>
	
	
    <style>
			html { height: 100% }
			body { height: 100%; margin: 0; padding: 0;background-color: #f4f4f4;}
			#map{ height: 100% }
                       /*Fix for Google Layers*/
                        .leaflet-map-pane {
                    z-index: 2 !important;
                                }

                    .leaflet-google-layer {
                      z-index: 1 !important;
                                }
    </style>
  </head>
  <body>
  <div style=" height:100%; width: 100%"> <div id="logo" style="height:18%;width:10%;float:left"><img src="a.jpg" width="150" height="120" ></div>
      <div id="header" style="height:18%; width: 90%; background-color: DodgerBlue;float:left;text-align:center "> 
              <h1><b>   MINES AND MINERAL</b></h1>
              <h2>(COAL INFORMATION)</h2>
      
     
      </div><div id="picDiv" style="height:80%; width:15%; background-color: silver;float:left"> <br> &nbsp &nbsp &nbsp  <img src="b.jpg" width="150" height="120" ><hr> <br> &nbsp &nbsp &nbsp  <img src="c.jpg" width="150" height="120" ><hr> <br> &nbsp &nbsp &nbsp  <img src="d.jpg" width="150" height="120" ></div>
    <div style=" width:70%; height:80%; float:left" id="map"></div>
    <div id="box" style="height:80%;width:15%; background-color:silver;float:left"> <h2> <b>&nbsp &nbsp &nbsp &nbsp Legend</b></h2><hr> <h3> <b>&nbsp &nbsp &nbsp &nbsp &nbsp Blue Active</b></h3>  <div id="ba" & style="height:5%; width:95%; background-color:white; border:solid blue; "></div> <h3> <b>&nbsp &nbsp &nbsp &nbsp &nbsp Red&nbspInactive </b> </h3><div id="ri" & style="height:5%; width:95%; background-color:white; border:solid red; "></div> <h3> <b>&nbsp &nbsp &nbsp &nbsp &nbsp Operative </b> </h3><div id="o" & style="height:5%; width:95%; background-color:white; border:solid green; "></div> <h3> <b>&nbsp &nbsp &nbsp &nbsp &nbsp Non&nbspOperative </b> </h3><div id="no" & style="height:5%; width:95%; background-color:white; border:solid yellow; "></div></div> </div>
    <script type='text/javascript'>
      var map = new L.Map('map', {center: new L.LatLng(32.787, 73.147), zoom: 11});
      L.control.scale().addTo(map);
//        Simple BaseLayer
//      var googleLayer = new L.Google('ROADMAP');
//      map.addLayer(googleLayer);
//            Layer Swicher
      var googleLayer = new L.Google('ROADMAP'),
       googleLayerh = new L.Google('HYBRID');
       var baseLayers = {
			"ROADMAP": googleLayer,
			"HYBRID": googleLayerh
		};

       L.control.layers(baseLayers).addTo(map);
        map.addLayer(googleLayer);
		var shpurl='Data/MWEB';
      
    var shpfile = new L.Shapefile(shpurl,{
      onEachFeature:function(feature, layer) {
    	if (feature.properties) {
			layer.bindPopup(Object.keys(feature.properties).map(function(k){
				return k + ": " + feature.properties[k] ;
			}).join("<br />"),{maxHeight:200});
    	}
	}});
//             var Overlay = L.layerGroup([shpfile]);
			 
			 shpfile.addTo(map);
			 
             // Search 
    var searchControl = new L.Control.Search({layer: shpfile, propertyName: 'ML_No', circleLocation:false});

	searchControl.on('search_locationfound', function(e) {
		
		e.layer.setStyle({fillColor: '#3f0', color: '#0f0'});
		if(e.layer._popup)
			e.layer.openPopup();

	}).on('search_collapsed', function(e) {

		shpfile.eachLayer(function(layer) {	//restore feature color
			shpfile.resetStyle(layer);
		});	
	});
	var controlLoader = L.control.loader().addTo(map).show();

	setTimeout(function() {
		controlLoader.hide();
	},5000);
	map.addControl( searchControl );  //inizialize search control
          
         
         shpfile.once("load", function(){
          console.log("finished loaded shapefile");
          
         });
    </script>
	</div>
  </body>
</html>
