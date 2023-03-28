<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <style>
        img {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-5 bg-light rounded">
                <h1 class="text-center font-weight-bold text-primary">Create News</h1>
                <hr class="bg-light">
                <h5 class="text-center text-success"></h5>
                <form action="{{ route('ck_post') }}" method="post" id="form-box" class="row g-3"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="col-md-6">
                        <label for="author_id" class="form-label">Author</label>
                        <select id="author_id" class="form-select" name="author_id">
                            <option selected>Choose...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="category_id" class="form-label">Category</label>
                        <select id="category_id" class="form-select" name="category_id">
                            <option selected>Choose...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <label class="form-check-label" for="body">
                                Content
                            </label>
                            <textarea name="body" id="body" cols="30" rows="10" required></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block"
                            value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('/assets/plugins/ckeditor-test/ckeditor.js') }}"></script>

    <script>
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "{{ route('upload') }}?id={{ isset($shopInformation) ? $shopInformation->id : null }}&_token={{ csrf_token() }}&_token={{ csrf_token() }}",
            filebrowserUploadMethod: 'form',
            language: 'vi',
            width: '100%',
            toolbarLocation: 'top',
            extraPlugins: ['wordcount', 'colorbutton'],
            wordcount: {
                // find setting https://ckeditor.com/cke4/addon/wordcount
                showParagraphs: false,
                showWordCount: false,
                showCharCount: true,
                countHTML: true,
                countSpacesAsChars: true,
                maxCharCount: 5000
            },
            toolbarGroups: [{
                    name: 'styles',
                    groups: ['styles']
                },
                {
                    name: 'colors',
                    groups: ['colors']
                },
                {
                    name: 'basicstyles',
                    groups: ['basicstyles']
                },
                '/',
                {
                    name: 'clipboard',
                    groups: ['clipboard', 'undo']
                },
                {
                    name: 'paragraph',
                    groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']
                },
                '/',
                {
                    name: 'links',
                    groups: ['links']
                },
                {
                    name: 'insert',
                    groups: ['insert']
                },
                '/',
                {
                    name: 'tools',
                    groups: ['tools']
                },
            ],
            image_previewText: ' ',
        });

        // CKEDITOR.on('body', function(event) {
        //     // Add default CSS for inserted images
        //     CKEDITOR.addCss('img.my-class { max-width: 100%; height: auto; }');
        // });

        CKEDITOR.on('instanceReady', function(event) {
            // Automatically add CSS to uploaded images
            var editor = event.editor;
            editor.on('fileUploadRequest', function(event) {
                event.data.fileLoader.on('load', function() {
                    var img = new CKEDITOR.dom.element('img');
                    img.setAttribute('src', event.data.fileLoader.dataUrl);
                    img.setAttribute('style', 'max-width: 100%; height: auto;');
                    var div = new CKEDITOR.dom.element('div');
                    div.setAttribute('style', 'border: 1px solid black; padding: 5px;');
                    div.append(img);
                    event.data.fileLoader.dataUrl = div.getHtml();
                });
            });
        });
    </script>
</body>

</html>
