  
   <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBdwo_ar4gCikSyy6TlpLtJvxBLDwneIHI"></script>
     <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

     <script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>

     <script type="text/javascript">
        $(function () {
          var marker = null,map = null; 

            $("#btnShow").click(function () {
                $("#dialog").dialog({
                    modal: true,
                    title: "Tentukan Lokasi Rumah Anda...",
                    width: 600,
                    height: 450,
                    buttons: {
                        Close: function () {
                            $(this).dialog('close');
                        }
                    },
                    open: function () {
                        var mapOptions = {
                            center: new google.maps.LatLng(<?php
                              if (isset($showAlamat['Latitude'])) {
                                echo $showAlamat['Latitude'];
                              }else{
                                echo "-6.826744";
                              }
                              ?>, <?php 

                              if (isset($showAlamat['Longitude'])) {
                                echo $showAlamat['Longitude'];
                              }else{
                                echo "107.137007";
                              }

                            ?>),
                            zoom: 25,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }
                        var map = new google.maps.Map($("#dvMap")[0], mapOptions);

                              addMarker({
                              coords:{lat: <?php
                                  if (isset($showAlamat['Latitude'])) {
                                    echo $showAlamat['Latitude'];
                                  }else{
                                    echo "-6.826749";
                                  }
                                  ?>, lng: <?php 

                                  if (isset($showAlamat['Longitude'])) {
                                    echo $showAlamat['Longitude'];
                                  }else{
                                    echo "-6.826749";
                                  }

                                ?>},
                              content:'<?php echo "OLD MARKER = NIS :".$this->session->userdata('nis'); ?>'

                            });

                              function addMarker(props){
                              var marker = new google.maps.Marker({
                              position:props.coords,
                              map:map
                              //icon:'linknya' <<< Ganti Icon Marker
                              });

                              if(props.content){
                                var infowindow = new google.maps.InfoWindow({
                              content:props.content
                            });

                             marker.addListener('click', function() {
                                    infowindow.open(map, marker);
                                  });
                              }
                            }


                          google.maps.event.addListener(map, 'click', function(event) {

                            if(marker != null) {           
                             marker.setMap(null);
                             marker = null;
                          }

                            marker = new google.maps.Marker({
                           position: event.latLng,
                            map: map,
                          });

                          google.maps.event.addListener(marker, 'click', function() {
                            var latlng = marker.getPosition();

                            $('input[name=latitude]').val(latlng.lat());
                             $('input[name=longitude]').val(latlng.lng());
                             $('#dialog').dialog('close');
                            
                          });
                        });
                    } 
                  });
            });
        });
    </script>

     <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

        <script>
      $(document).ready(function(){
        $('input[name=lokasi]').hide(500);
        $('#map').hide(500);

        $('#gmap').click(function(){
          $('#map').toggle(500);
          $('input[name=lokasi]').show(500);

        });

      });
    </script>





  </body>
</html>