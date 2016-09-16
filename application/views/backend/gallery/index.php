<!doctype html>
<html lang="en">
<head>
   <title>Gallery</title>

   <!-- Standard Favicon -->
   <link rel="icon" type="image/png" href="/favicon.png" />
   <!-- For iPhone 4 Retina display: -->
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/favicon.png" />
   <!-- For iPad: -->
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/favicon.png" />
   <!-- For iPhone: -->
   <link rel="apple-touch-icon-precomposed" href="/favicon.png" />

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
   <meta name="theme-color" content="">
   <meta name="description" content="">
   <meta name="keyword" content="">
   <meta name="author" content="">

   <link rel="stylesheet" href="<?=base_url('assets/uikit/css/uikit.css')?>">
   <link rel="stylesheet" href="<?=base_url('assets/main.style.css')?>">
   <!-- Font Style -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic">
</head>

<body>
    <div class="uk-container uk-container-center">
        <form class="uk-form">
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-medium-2-4 uk-push-1-4 uk-row-first">
                    <label class="uk-form-label" for="gallery_title">Title</label>
                    <div class="uk-form-controls">
                        <input id="gallery_title" placeholder="Gallery Title" class="uk-width-1-1" type="text">
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-medium-2-4 uk-push-1-4 uk-row-first">
                    <label class="uk-form-label" for="gallery_description">Description</label>
                    <div class="uk-form-controls">
                        <textarea id="gallery_description" cols="30" rows="5" placeholder="Description" class="uk-width-1-1"></textarea>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-medium-2-4 uk-push-1-4 uk-row-first">
                    <label class="uk-form-label" for="video_url">Video URL</label>
                    <div class="uk-form-controls">
                        <input id="video_url" placeholder="http://" class="uk-width-1-1" type="url">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/js/uikit.min.js"></script>

    <script>
    $(function() {
        //Awesome
    });
    </script>
</body>

</html>