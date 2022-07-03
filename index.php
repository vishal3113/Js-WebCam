<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rcerdc | Webcam</title>
    <link rel="stylesheet" href="style.css">
    <script src="assets/webcam.min.js"></script>
    <script src="assets/datatables.min.js"></script>
</head>
<body onload = "configure();">
    
    <div class="container">
        <div id="my_camera">

        </div>
        <div id="results" style="visibility: hidden; position: absolute;">
        
        </div>
        <br>
        <button type="button" onclick="saveSnap();">Upload Image</button>
    </div>



<!-- script -->
<script type="text/javascript"  scr="assets/webcam.min.js">
</script>

    <script type="text/javascript" >
        function configure()
        {
            Webcam.set({
                width: 480,
                height: 360,
                image_format: 'jpeg',
                jpeg_quality:90
            });

            Webcam.attach('#my_camera');  
        }

        function saveSnap()
        {
            Webcam.snap(function(data_uri)
            {
                document.getElementById('results').innerHTML=
                '<img id="webcam" src="'+data_uri+'">';
            });
            Webcam.reset();

            var base64image = document.getElementById("webcam").src;
            Webcam.upload(base64image,'function.php',function(code,text)
            {
                alert ('Image Uploaded Sucessfully');
                document.location.href="index.php"
            });
        }
    </script>




</body>
</html>