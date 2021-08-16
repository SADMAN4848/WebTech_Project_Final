<?php include 'householder_header.php';?>

<html>
    <body>
        <center>
          <img id="building" src="storage/building_7.jpg">
          <button onclick="get('building').src='storage/building_7.jpg'">1</button>
          <button onclick="get('building').src='storage/building_2.jpg'">2</button>
          <button onclick="get('building').src='storage/building_9.jpg'">3</button>
          <button onclick="get('building').src='storage/building_6.jpg'">4</button>
          <script>
            function get(id){
              return document.getElementById(id);
            }
          </script>
        </center>
    </body>
</html>






<?php include 'householder_footer.php';?>
