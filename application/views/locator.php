<?php $this->load->view('includes/header') ?>
<body>
<?php $this->load->view('includes/outsidemenu') ?>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div id="map" style="display:none">
                  <!-- -->
                </div>
                <div class="" width="100%">
                  <iframe class= "col-md-12" height="400" frameborder="0"
                    src="https://www.google.com/maps/embed/v1/directions?origin= 11.2395445,125.0024079&destination=Tacloban City Astrodome&key=AIzaSyCQsaQYMeegD3H-wv6149gnnKWezQXQ4MU" allowfullscreen style="overflow:auto"></iframe>
                   </iframe>
                </div>
            </div>
        </div>
    </div>
    <?php
        $this->load->view('forms/login');
        $this->load->view('includes/footer');
    ?>
    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap" async defer></script>
    <script>
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.

function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 15
    });
    var infoWindow = new google.maps.InfoWindow({map: map});

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
            console.log(pos);
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
}
</script>
<script type="text/javascript" src="/assets/js/login_register.js"></script>
</body>
</html>
