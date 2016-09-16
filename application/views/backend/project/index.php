<!doctype html>
<html lang="en">
<head>
    <title>Project</title>

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
        <?php if(!empty($this->session->flashdata('message'))) { ?>
           <div class="uk-alert uk-alert-success" data-uk-alert="">
                <a href="#" class="uk-alert-close uk-close"></a>
                <p><?=$this->session->flashdata('message');?></p>
            </div> 
        <?php } ?>
        <div class="uk-grid uk-grid-small">
            <div class="uk-width-2-5 uk-text-left uk-margin-bottom">
                <h1 class="be-title">Project</h1>
            </div>
            <div class="uk-width-3-5 uk-text-right uk-margin-bottom">
                <a href="<?=base_url('backend/project/create');?>" class="uk-button" type="button">Add New&nbsp;&nbsp;<i class="uk-icon-plus-circle"></i></a>
            </div>
            <?php foreach($project as $row): ?>
            <div class="uk-width-1-2 uk-width-medium-1-5 uk-margin-bottom uk-text-center">
                <a class="uk-thumbnail" href="<?=base_url('backend/project/edit/'.$row->project_id);?>">
                    <img src="https://unsplash.it/200/200/?random" alt="">
                    <div class="uk-thumbnail-caption"><?=$row->project_name;?></div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/js/uikit.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.uikit.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#category-table').DataTable( {
                //"paging":   false,
                //"ordering": false,
                "info":     false
            } );
        });
    </script>
</body>

</html>