<!doctype html>
<html lang="en">
<head>
    <title>Create Category</title>

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

    <link rel="stylesheet" href="<?=base_url('assets/uikit/css/uikit.almost-flat.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/main.style.css')?>">
</head>

<body>
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-1-2 uk-text-left uk-margin-bottom">
                <h1 class="be-title">Add Category</h1>
            </div>
            <div class="uk-width-1-2 uk-text-right">
                <a href="<?=base_url('backend/category');?>" class="uk-button" type="button"><i class="uk-icon-arrow-left"></i>&nbsp;&nbsp;Back</a>
            </div>
        </div>
        <form class="uk-form" method="post" action="<?=base_url('backend/category/add')?>">
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-medium-2-4 uk-push-1-4 uk-row-first">
                    <label class="uk-form-label" for="category_name">Category Name</label>
                    <div class="uk-form-controls">
                        <input id="category_name" class="uk-width-1-1" type="text" name="category_name" placeholder="Category Name">
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-medium-2-4 uk-push-1-4 uk-row-first">
                    <label class="uk-form-label" for="status">Status</label>
                    <div class="uk-form-controls">
                        <select id="status" class="uk-width-1-1" name="status">
                            <option value="">Choose One</option>
                            <option value="Enabled">Enabled</option>
                            <option value="Disabled">Disabled</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-grid-small uk-margin-top">
                <div class="uk-width-medium-2-4 uk-push-1-4 uk-row-first">
                    <button class="uk-button uk-button-primary uk-width-1-1" type="submit">Save</button>
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