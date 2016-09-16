<!doctype html>
<html lang="en">
<head>
    <title>Edit Project</title>

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
    <link rel="stylesheet" href="<?=base_url('assets/uikit/css/components/placeholder.almost-flat.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/uikit/css/components/form-file.almost-flat.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/uikit/css/components/upload.almost-flat.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/uikit/css/components/progress.almost-flat.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/uikit/css/components/notify.almost-flat.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/main.style.css')?>">
</head>

<body>
    <?php foreach($project as $row): ?>
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-2-5 uk-text-left uk-margin-bottom">
                <h1 class="be-title"><?=$row->project_name?></h1>
            </div>
            <div class="uk-width-3-5 uk-text-right">
                <a href="<?=base_url('backend/project');?>" class="uk-button" type="button"><i class="uk-icon-arrow-left"></i>&nbsp;&nbsp;Back</a>
                <a href="<?=base_url('backend/project/delete/'.$row->project_id);?>" class="uk-button uk-button-danger" type="button"><i class="uk-icon-trash"></i>&nbsp;&nbsp;Delete</a>
            </div>
        </div>
        <form class="uk-form" method="post" action="<?=base_url('backend/project/update/'.$row->project_id)?>">
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-medium-2-4 uk-push-1-4">
                    <label class="uk-form-label" for="project_name">Project Name</label>
                    <div class="uk-form-controls">
                        <input id="project_name" class="uk-width-1-1" type="text" name="project_name" placeholder="Project Name" value="<?=$row->project_name;?>">
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-medium-2-4 uk-push-1-4">
                    <label class="uk-form-label" for="project_description">Project Description</label>
                    <div class="uk-form-controls">
                        <textarea name="project_description" class="uk-width-1-1"><?=$row->project_description?></textarea>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-medium-2-4 uk-push-1-4">
                    <label class="uk-form-label" for="status">Category</label>
                    <div class="uk-form-controls">
                        <select id="status" class="uk-width-1-1" name="category_id">
                            <option value="">Choose One</option>
                            <?php foreach($category as $item): ?>
                            <?php if($item->category_id == $row->category_id) { ?>
                            <option value="<?=$item->category_id;?>" selected>
                                <?=$item->category_name;?></option>
                            <?php } else { ?>
                            <option value="<?=$item->category_id;?>">
                                <?=$item->category_name;?></option>
                            <?php } ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-medium-2-4 uk-push-1-4">
                    <label class="uk-form-label" for="status">Status</label>
                    <div class="uk-form-controls">
                        <select id="status" class="uk-width-1-1" name="status">
                            <option value="">Choose One</option>
                            <?php if($row->status == "Enabled") { $status_enabled = "selected"; $status_disabled = ""; } else { $status_enabled = ""; $status_disabled = "selected"; } ?>
                            <option value="Enabled" <?=$status_enabled;?>>Enabled</option>
                            <option value="Disabled" <?=$status_disabled;?>>Disabled</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-medium-2-4 uk-push-1-4">
                    <div class="uk-panel uk-panel-box uk-panel-box-secondary">
                        <h4 class="be-title-panel">Media Upload</h4>
                        <div class="uk-grid uk-grid-small uk-grid-match">
                            <!-- Media Image 1 -->
                            <div class="uk-width-1-2 uk-width-medium-1-3">
                                <div id="upload-drop" media-number="1" class="uk-placeholder uk-text-center">
                                    <div class="image-area"></div>
                                    <a class="uk-form-file">
                                        <i class="uk-icon-plus-circle uk-icon-medium uk-text-muted"></i>
                                        <input id="upload-select" media-number="1" type="file" name="image1">
                                    </a>
                                </div>
                                <div id="progressbar" progressbar-number="1" class="uk-progress uk-hidden uk-margin-bottom">
                                    <div class="uk-progress-bar" style="width: 100%;"></div>
                                </div>
                                <input type="hidden" name="image_media_1" value="<?=$row->image_1;?>">
                            </div>
                            <!-- Media Image 2 -->
                            <div class="uk-width-1-2 uk-width-medium-1-3">
                                <div id="upload-drop" media-number="2" class="uk-placeholder uk-text-center">
                                    <div class="image-area"></div>
                                    <a class="uk-form-file">
                                        <i class="uk-icon-plus-circle uk-icon-medium uk-text-muted"></i>
                                        <input id="upload-select" media-number="2" type="file" name="image2">
                                    </a>
                                </div>
                                <div id="progressbar" progressbar-number="2" class="uk-progress uk-hidden uk-margin-bottom">
                                    <div class="uk-progress-bar" style="width: 0%;"></div>
                                </div>
                                <input type="hidden" name="image_media_2" value="<?=$row->image_2;?>">
                            </div>
                            <!-- Media Image 3 -->
                            <div class="uk-width-1-2 uk-width-medium-1-3">
                                <div id="upload-drop" media-number="3" class="uk-placeholder uk-text-center">
                                    <div class="image-area"></div>
                                    <a class="uk-form-file">
                                        <i class="uk-icon-plus-circle uk-icon-medium uk-text-muted"></i>
                                        <input id="upload-select" media-number="3" type="file" name="image3">
                                    </a>
                                </div>
                                <div id="progressbar" progressbar-number="3" class="uk-progress uk-hidden uk-margin-bottom">
                                    <div class="uk-progress-bar" style="width: 0%;"></div>
                                </div>
                                <input type="hidden" name="image_media_3" value="<?=$row->image_3;?>">
                            </div>
                            <!-- Media Image 4 -->
                            <div class="uk-width-1-2 uk-width-medium-1-3">
                                <div id="upload-drop" media-number="4" class="uk-placeholder uk-text-center">
                                    <div class="image-area"></div>
                                    <a class="uk-form-file">
                                        <i class="uk-icon-plus-circle uk-icon-medium uk-text-muted"></i>
                                        <input id="upload-select" media-number="4" type="file" name="image4">
                                    </a>
                                </div>
                                <div id="progressbar" progressbar-number="4" class="uk-progress uk-hidden uk-margin-bottom">
                                    <div class="uk-progress-bar" style="width: 0%;"></div>
                                </div>
                                <input type="hidden" name="image_media_4" value="<?=$row->image_4;?>">
                            </div>
                            <!-- Media Image 5 -->
                            <div class="uk-width-1-2 uk-width-medium-1-3">
                                <div id="upload-drop" media-number="5" class="uk-placeholder uk-text-center">
                                    <div class="image-area"></div>
                                    <a class="uk-form-file">
                                        <i class="uk-icon-plus-circle uk-icon-medium uk-text-muted"></i>
                                        <input id="upload-select" media-number="5" type="file" name="image5">
                                    </a>
                                </div>
                                <div id="progressbar" progressbar-number="5" class="uk-progress uk-hidden uk-margin-bottom">
                                    <div class="uk-progress-bar" style="width: 0%;"></div>
                                </div>
                                <input type="hidden" name="image_media_5" value="<?=$row->image_5;?>">
                            </div>
                            <!-- Media Image 6 -->
                            <div class="uk-width-1-2 uk-width-medium-1-3">
                                <div id="upload-drop" media-number="6" class="uk-placeholder uk-text-center">
                                    <div class="image-area"></div>
                                    <a class="uk-form-file">
                                        <i class="uk-icon-plus-circle uk-icon-medium uk-text-muted"></i>
                                        <input id="upload-select" media-number="6" type="file" name="image6">
                                    </a>
                                </div>
                                <div id="progressbar" progressbar-number="6" class="uk-progress uk-hidden uk-margin-bottom">
                                    <div class="uk-progress-bar" style="width: 0%;"></div>
                                </div>
                                <input type="hidden" name="image_media_6" value="<?=$row->image_6;?>">
                            </div>
                            <!-- Media Image 7 -->
                            <div class="uk-width-1-2 uk-width-medium-1-3">
                                <div id="upload-drop" media-number="7" class="uk-placeholder uk-text-center">
                                    <div class="image-area"></div>
                                    <a class="uk-form-file">
                                        <i class="uk-icon-plus-circle uk-icon-medium uk-text-muted"></i>
                                        <input id="upload-select" media-number="7" type="file" name="image7">
                                    </a>
                                </div>
                                <div id="progressbar" progressbar-number="7" class="uk-progress uk-hidden uk-margin-bottom">
                                    <div class="uk-progress-bar" style="width: 0%;"></div>
                                </div>
                                <input type="hidden" name="image_media_7" value="<?=$row->image_7;?>">
                            </div>
                            <!-- Media Image 8 -->
                            <div class="uk-width-1-2 uk-width-medium-1-3">
                                <div id="upload-drop" media-number="8" class="uk-placeholder uk-text-center">
                                    <div class="image-area"></div>
                                    <a class="uk-form-file">
                                        <i class="uk-icon-plus-circle uk-icon-medium uk-text-muted"></i>
                                        <input id="upload-select" media-number="8" type="file" name="image8">
                                    </a>
                                </div>
                                <div id="progressbar" progressbar-number="8" class="uk-progress uk-hidden uk-margin-bottom">
                                    <div class="uk-progress-bar" style="width: 0%;"></div>
                                </div>
                                <input type="hidden" name="image_media_8" value="<?=$row->image_8;?>">
                            </div>
                            <!-- Video URL -->
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="project_description">Video URL</label>
                                <div class="uk-form-controls">
                                    <input id="video_media_url" class="uk-width-1-1" type="text" name="video_media_url" placeholder="http://" value="<?=$row->video_url;?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-medium-2-4 uk-push-1-4">
                    <button class="uk-button uk-button-primary uk-width-1-1" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
    <?php endforeach; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/js/uikit.min.js"></script>
    <script src="<?=base_url('assets/uikit/js/components/upload.min.js');?>"></script>
    <script src="<?=base_url('assets/uikit/js/components/notify.min.js');?>"></script>

    <script>
        $(function() {
            $('input[id^="upload-select"]').click(function(){
                numberUpload = $(this).attr("media-number");
                uploadMedia(numberUpload);
            });
        });

        function uploadMedia(numberUpload) {
            var progressbar = $('#progressbar[progressbar-number="'+numberUpload+'"]'),
            bar             = progressbar.find('.uk-progress-bar'),
            settings        = {

                action: '<?=base_url()?>backend/project/upload/'+numberUpload,
                allow : '*.(jpg|jpeg|png)',
                type: 'json',
                param: 'image'+numberUpload,

                loadstart: function() {
                    bar.css("width", "0%").text("0%");
                    progressbar.removeClass("uk-hidden");
                },

                progress: function(percent) {
                    percent = Math.ceil(percent);
                    bar.css("width", percent+"%").text(percent+"%");
                },

                allcomplete: function(response) {
                    bar.css("width", "100%").text("100%");
                    setTimeout(function(){
                        progressbar.addClass("uk-hidden");
                    }, 250);

                    UIkit.notify({
                        message : 'Image '+numberUpload+' was uploaded',
                        status  : 'success',
                        timeout : 2000,
                        pos     : 'top-center'
                    });

                    var uploadedImage = $("#uploaded-image[media-number='"+numberUpload+"']");
                    var uploadDropDiv = $("#upload-drop[media-number='"+numberUpload+"']");
                    var mediaPath = "<?=base_url('media/gallery/')?>"+response.fileName;

                    uploadDropDiv.find(".image-area").css("background-image", "url("+mediaPath+")");

                    $('input[name="image_media_'+numberUpload+'"]').val(response.fileName);
                }
            };

            var select = UIkit.uploadSelect($('#upload-select[media-number="'+numberUpload+'"]'), settings),
            drop   = UIkit.uploadDrop($("#upload-drop"), settings); 
        }
    </script>
</body>

</html>