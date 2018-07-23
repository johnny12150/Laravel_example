<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--for CSRF--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PHP API</title>
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
    {{--<button id="clickme">POST method</button>--}}
    <div id="num">44</div>
    <div id="txt">yoona</div>

</div>

</body>

<script>
    {{--Get image server JSON file by using js--}}


    $(document).ready(function () {
        var pass = $("#num").html();
        var pass01 = $("#txt").html();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //get 成功但是用post會失敗 related to CSRF
        var url = "http://172.16.100.20:9999/api/add"; //test api (laravel)
        $.ajax({
            type: 'POST',
            url: url,
            data: { id: pass, name: pass01 }, //passing data to server
            success: function(response) {
                console.log('done!');
            }
        });

    });

</script>

</html>
