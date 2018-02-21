<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="http://172.16.100.20:9999/js/plugin.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

{{--asset{} is function--}}
<!--js-->
    {{--<script src="{{ asset('js/plugin.js')}}"></script>--}}
    {{--<script src="{{ asset('js/annotator.js')}}"></script>--}}
    <script src="http://172.16.100.20:9999/js/annotator.js"></script>

    <!--bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
{{--<h1>hi!!</h1>--}}

<div class="container">
    <br>
    <?php echo $data[0] ?>

    <br><br>
    <?php
    foreach ($data as $show) {
        echo $show->name;
    }
    ?>


    <div >
        <table class="table">
            <tr class="table-primary">
                <td>資料列 01</td>
                <td>資料列 02</td>
            </tr>
            <?php
            for ($i = 0; $i <= 1; $i++) {
                $data_set = $data[$i];
            ?>
            <tr>
                <td> <?php echo $data_set->id?> </td>
                <td> <?php echo $data_set->name?> </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>

</div>

</body>
</html>
