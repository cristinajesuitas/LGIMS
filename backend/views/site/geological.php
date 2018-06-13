<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
      <meta name="robots" content="noarchive">
              <link rel="alternate" href="https://www.embedmap.net/" hreflang="en">
                              <title> EMBED a google MAP on Your Website | FREE, no Registration!  </title>
  <meta name="description" content=" EMBED your GOOGLE MAP now - for free! Generate your personal Map Embed Code ✓ Copy-Paste to Your Website. Done! '">

  <link media="all" type="text/css" rel="stylesheet" href="https://www.embedmap.net/css/bootstrap.min.css">

  <link media="all" type="text/css" rel="stylesheet" href="https://www.embedmap.net/css/custom.css">

  <link media="all" type="text/css" rel="stylesheet" href="https://www.embedmap.net/css/jquery-ui.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  </head>

<body>

<?php
require("phpsqlsearch_Cap_marker.php");

// Get parameters from URL
$center_lat = $_GET["lat"];
$center_lng = $_GET["lng"];
$radius = $_GET["radius"];

// Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Opens a connection to a mySQL server
$connection=mysql_connect (localhost, $username, $password);
if (!$connection) {
  die("Not connected : " . mysql_error());
}

// Set the active mySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ("Can\'t use db : " . mysql_error());
}

// Search the rows in the markers table
$query = sprintf("SELECT address, name, lat, lng, ( 3959 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance FROM markers HAVING distance < '%s' ORDER BY distance LIMIT 0 , 20",
  mysql_real_escape_string($center_lat),
  mysql_real_escape_string($center_lng),
  mysql_real_escape_string($center_lat),
  mysql_real_escape_string($radius));
$result = mysql_query($query);

$result = mysql_query($query);
if (!$result) {
  die("Invalid query: " . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("name", $row['name']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("distance", $row['distance']);
}

echo $dom->saveXML();
?>

  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-1">
          <div class="logo">
                          <a href="/">
                          <img src="/images/logo_embedmap.net.png" alt="embedmap.net">
            </a>
          </div>
        </div>
        <div class="col-md-6">
                                                                                                                                                                                                            </div>
      </div>
    </div>
  </div>

  <div class="container">
    
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-5">

                    <div class="custom-container">
                        <div class="custom-container-title">Step 1: Create map widget</div>

                        <input type="hidden" id="geoip_country" value="Philippines">
                        <input type="hidden" id="geoip_lat" value="10.6">
                        <input type="hidden" id="geoip_lon" value="123.0333">

                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control"
                               placeholder="Name">
						<br/>
						<label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control"
                               placeholder="Title">
                        <br/>
                        <label for="street">Street</label>
                        <input type="text" id="street" name="street" class="form-control"
                               placeholder="Street">
                        <br/>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="zip_code">Zip Code</label>
                                <input type="text" id="zip" name="zip_code" class="form-control"
                                       placeholder="Optional"
                                       value="">
                            </div>
                            <div class="col-md-6">
                                <label for="city">City</label>
                                <input type="text" id="city" name="city" class="form-control"
                                       placeholder="City" value="">
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-3">
                                <label for="map_type">Map Type</label>
                            </div>
                            <div class="col-md-9">
                                <select id="map_type_combo" class="form-control">
                                    <option value="roadmap"
                                            selected> Roadmap </option>
                                    <option value="satellite"> Satellite </option>
                                    <option value="hybrid">    Satellite with street names </option>
                                    <option value="terrain">   Terrain </option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-3">
                                <label for="zoom_combo">Zoom</label>
                            </div>
                            <div class="col-md-9">
                                <select id="zoom_combo" class="form-control">
									<option value="22"> 1 m</option>
                                    <option value="21"> 2.5 m</option>
                                    <option value="20"> 5 m</option>
                                    <option value="19"> 10 m</option>
                                    <option value="18"> 20 m</option>
                                    <option value="17"> 50 m</option>
                                    <option value="16"> 100 m</option>
                                    <option value="15"> 200 m</option>
                                    <option value="14"> 400 m</option>
                                    <option value="13"> 1 km</option>
                                    <option value="12" selected> 2 km</option>
                                    <option value="11"> 4 km</option>
                                    <option value="10"> 8 km</option>
                                    <option value="9"> 15 km</option>
                                    <option value="8"> 30 km</option>
                                    <option value="7"> 50 km</option>
                                    <option value="6"> 100 km</option>
                                    <option value="5"> 200 km</option>
                                    <option value="4"> 400 km</option>
                                    <option value="3"> 1000 km</option>
                                    <option value="2"> 2000 km</option>
                                </select>
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-8">
                                <label for="map_height_slider">Map Height</label>
                                <div id="map_height_slider"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input id="map_height_value" type="text" class="form-control" value="400">
                                    <span class="input-group-addon">px</span>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-8">
                                <label for="map_width_slider">Map Width</label>
                                <div id="map_width_slider"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input id="map_width_value" type="text" class="form-control" value="520">
                                    <span class="input-group-addon">px</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="user_api_key">Google Maps API key <strong>(mandatory!)</strong></label>
                                <input id="user_api_key" class="form-control" type="text" placeholder="click on the link below">
                                <a href="/en/google-maps-api-key" target="_blank" rel="nofollow">Where do I find this key?</a>
                            </div>
                        </div>

                    </div>


                </div>

                <div class="col-md-7">
                    <div id="map-container" class="custom-container" style="width:545px; height:435px;">
                        <div class="custom-container-title">Google-Maps Preview</div>

                        <div id="map-canvas" style="width:520px; height:400px;">
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <br>

        
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Copy widget code and paste to your website</h4>
                </div>
                <div class="modal-body">
                    <textarea id="final_widget_code" class="form-control" rows="10"></textarea>
                    <br>
                    <div id="modal_body_iframe">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button button-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

  </div>

  <script src="https://www.embedmap.net/js/jquery-1.11.1.min.js"></script>

  <script src="https://www.embedmap.net/js/bootstrap.min.js"></script>

  <script src="https://www.embedmap.net/js/jquery-ui.min.js"></script>


  
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="https://www.embedmap.net/js/custom.js"></script>


    

</body>
</html>