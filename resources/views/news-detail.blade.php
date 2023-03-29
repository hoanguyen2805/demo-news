<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <style>
        img {
            width: 100% !important;
            height: auto !important;
        }
        blockquote {
            background-color: #F8F6F1;
            padding: 20px 20px 20px 20px;
            border-left: 10px solid darkgray;
            margin-bottom: 30px;
        }
        .category {
            color: #888;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <p class="category mt-5">{{ config('constant.category.' . $detail->category_id) }}</p>
        <h1 style="font-weight: 700">{{ $detail->title }}</h1>
        <div class="d-flex align-items-baseline">
            <p style="font-size: 15px; font-weight: 700">{{ config('constant.author.' . $detail->author_id) }}</p>
            <p class="ms-2" style="color: #888; font-size: 14px">{{ $detail->created_at->format('- l, d/m/Y H:i') }}</p>
        </div>
        {!! $detail->body ?? '' !!}
    </div>
</body>
</html>