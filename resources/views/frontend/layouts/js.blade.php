<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.slim.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/aos/aos.js')}}"></script>
<script>
    AOS.init();
</script>
<script>
    function initialize() {
        var propertiPeta = {
            center: new google.maps.LatLng(-7.953021, 112.607127),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        };

        var peta = new google.maps.Map(
            document.getElementById("googleMap"),
            propertiPeta
        );
    }
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA73b--S2d9Lz4N_QGJf-gyrOP298nQ8zU&callback=initialize"
    async
    defer
></script>
@stack('customjs')
