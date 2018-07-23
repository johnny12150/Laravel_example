<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHP Get JSON</title>
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
    {{--echo stuff that is from the controller--}}

    {{--print whatever type--}}
    <?php // var_dump($json_data) ?>

    {{--when json_data is array --}}

    {{--can't use $json_data[0] or $json_data[0]->height --}}
    <?php // echo $json_data['height'] ."<br>" ?>

    {{--print the width in array (在陣列中的陣列)--}}
    <?php // echo $json_data['sizes'][0]['width'] ."<br>" ?>

    {{--when json_data is obj--}}
    <?php echo $json_data->height ."<br>" ?>
    <?php echo $json_data->sizes[0]->width ."<br>" ?>

    <?php // echo gettype($json_data)?>


</div>

</body>

</html>
