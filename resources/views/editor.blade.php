<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('ck_post') }}" method="post">
        <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
        @csrf
        <input type="submit" name="submit" value="submit">
    </form>

    <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.log(error);
            });
    </script>
</body>
</html>