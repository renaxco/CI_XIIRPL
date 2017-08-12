 <!-- jQuery -->
 <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBdwo_ar4gCikSyy6TlpLtJvxBLDwneIHI"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scrolling-nav.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>

    <script type="text/javascript">
        $(function () {
          var marker = null,map = null; 

            $("#btnShow").click(function () {
                $("#dialog").dialog({
                    modal: true,
                    title: "Student's Location Map",
                    width: 1000,
                    height: 1000,
                    buttons: {
                        Close: function () {
                            $(this).dialog('close');
                        }
                    },
                    open: function () {
                        var mapOptions = {
                            center: new google.maps.LatLng(-6.826744, 107.137007),
                            zoom: 13,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }
                        var map = new google.maps.Map($("#dvMap")[0], mapOptions);


                        //ADD MARKER

                      

                                <?php foreach($showMarker as $s){ ?>

                              addMarker({
                                    coords:{lat: 
                                        <?php
                                  if (isset($s['Latitude'])) {
                                    echo $s['Latitude'];
                                  }else{
                                    echo "-6.826749";
                                  }
                                  ?>,lng: <?php 

                                  if (isset($s['Longitude'])) {
                                    echo $s['Longitude'];
                                  }else{
                                    echo "107.137007";
                                  }

                                ?>},
                                    content: '<?php echo $s['namaSiswa'] ?>'

                                });
                                
                              <?php } ?>


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

                
                    } 
                  });
            });
        });
    </script>

</body>

</html>
