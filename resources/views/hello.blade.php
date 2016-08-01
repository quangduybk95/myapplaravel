<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family:  serif;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            @forelse ($data as $element)
            <p>{{ $element->ten_truyen}}</p>
            <img src="{{$element->link_image}}" alt="" height="100px" width="100px">
            @empty
            {{-- empty expr --}}
            @endforelse
        </div>
    </div>
</body>
</html>
