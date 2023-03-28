<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        img {
            width: 100% !important;
            height: auto !important;
        }

        blockquote {
            background-color: #F8F6F1;
            padding: 0 20px 20px 20px;
            border-left: 10px solid darkgray;
        }
    </style>
</head>
<body>
    <div class="container">
        {!! $detail->body ?? '' !!}
    </div>
</body>
</html>