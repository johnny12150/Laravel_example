<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Get JSON</title>
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

{{--asset{} is function--}}
<!--js-->
{{--<script src="{{ asset('js/plugin.js')}}"></script>--}}
{{--<script src="{{ asset('js/annotator.js')}}"></script>--}}


<!--bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <style>

    </style>
</head>
<body>
{{--<h1>hi!!</h1>--}}

<div class="container">
    <br>
<div id="show"></div>


</div>

</body>
    <script>
        {{--Get image server JSON file by using js--}}
        //global variable
        var data; //save json file
        $(document).ready(function () {
            //var url ="http://172.16.100.20:8182/iiif/2/galaxy.png/info.json"; //the url of image server
            //var url ="http://172.16.100.20:5055/img/01_Icarus_Breughel.jpg/info.json"; //auth server
            var url ="http://172.16.100.20:9999/info.json"; //test json

            $.ajax({
                url: url,
                dataType: "json",
                cache: false,
                async: false,
                success: function (result) { //handle the json that we get
                    parseJSONP(result);
                },
                error: function (request, error) {
                    alert('GET JSON FAIL !!');
                }
            });

           // console.log(data);
        })

        function parseJSONP(jsonData) {
            //console.log(jsonData.height);

            //console.log(jsonData["@context"]);

            data=jsonData;
            console.log(data);
            //print object but not really functional
            /*var output = '';
            for (var property in data) {
                output += property + ': ' + data[property]+'; <br>';
                console.log(property);
            }*/

            var str = JSON.stringify(data, undefined, 2);
            $("#show").append("<p>"+ str +"</p>");

        }

        //this ain't work
        //console.log(data);

    </script>
</html>
