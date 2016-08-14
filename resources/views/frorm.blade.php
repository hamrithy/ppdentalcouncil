<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.7.0/summernote.css" rel="stylesheet">
</head>
<body>

<form class="form-horizontal">
    <div class="form-group">
        <label for="title" class="control-label col-sm-2">Title</label>
        <div class="col-sm-10">
            {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' => 'Title', 'id' => 'title', 'required']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="control-label col-sm-2">Content</label>
        <div class="col-sm-10">
            {{ Form::textarea('message', NULL, ['class' => 'form-control', 'placeholder' => 'Message', 'id' => 'message', 'required']) }}
        </div>
    </div>
</form>

<!-- Load all JS at footer for faster website loading.. -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.7.0/summernote.js"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('#message').summernote({
            height: 250,
            callbacks: {
                onImageUpload: function(files, editor, $editable) {
                    alert('evoked');
                    sendFile(files[0],editor,$editable);
                }
            }
        });
        function sendFile(file,editor,welEditable) {
            data = new FormData();
            data.append("file", file);
            jQuery.ajax({
                url: "{{ URL::to('upload/image') }}",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function(s){
                    jQuery('#message').summernote("insertImage", s);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus+" "+errorThrown);
                }
            });
        }
    });
</script>
</body>
</html>