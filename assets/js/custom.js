// <script>
          
           //radio selection querrys
          $(document).ready(function() {
              $("#pakistan").click(function() {
                  $("#pakiUni").show();
                  $("#abroadUni").hide();                  
              });

              $("#abroad").click(function() {
                  $("#abroadUni").show();
                  $("#pakiUni").hide();
                  
              });
          });

          $(document).ready(function() {
            $("#teachingdegree").click(function() {
              $("#otherdegree").show();
            });
          });

          $(document).ready(function() {
              $("#employed").click(function() {
                  $("#employedinfo").show();
              });
          });

          $(document).ready(function() {
              $("#unemployed").click(function() {
                  $("#employedinfo").hide();
              });
          });

            // onload hide querrys
          $(window).on('load', function() {
              $("#abroadUni").hide();
              $("#pakiUni").hide();
          });
          $(window).on('load', function() {
              $("#otherdegree").hide();
          });

          $(window).on('load', function() {
              $("#employedinfo").hide();
          });
         
        // </script>