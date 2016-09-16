<!doctype html>
<html lang="en">
<head>
    <title>Category</title>

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
    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.uikit.min.css">
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
            <div class="uk-width-1-2 uk-text-left uk-margin-bottom">
                <h1 class="be-title">Category</h1>
            </div>
            <div class="uk-width-1-2 uk-text-right uk-margin-bottom">
                <a href="<?=base_url('backend/category/create');?>" class="uk-button" type="button">Add New&nbsp;&nbsp;<i class="uk-icon-plus-circle"></i></a>
            </div>
            <div class="uk-width-1-1">
                <div class="uk-overflow-container">
                    <table id="category-table" class="uk-table uk-table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="uk-width-1-3 uk-width-medium-2-5">Name</th>
                                <th class="uk-width-1-3 uk-width-medium-2-5">Status</th>
                                <th class="uk-width-1-3 uk-width-medium-1-5">#</th>
                            </tr>
                        </thead>
                        <tfoot style="display:none;">
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>#</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach($category as $row): ?>
                            <tr>
                                <td><?=$row->category_name?></td>
                                <td><?=$row->status?></td>
                                <td><a href="<?=base_url('backend/category/edit/'.$row->category_id);?>" class="uk-button-link uk-button-small"><i class="uk-icon-pencil-square-o"></i>&nbsp;Edit</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
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