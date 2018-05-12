<!DOCTYPE html>
<html>
<head>
    <title>Multiple Upload</title>
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="src/main.js"></script>
</head>
<body background="bg.jpg">
<div class="container">
    <center><h1>Multiple Upload </center></h1>
</div>
<div class="container">
    <div class="row text-center">
        <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
        <form enctype="multipart/form-data" action="" method="post">
            <div class="form-group">
                <label>Choose Files</label>
                <input type="file" class="form-control" name="userFiles[]" multiple/>
            </div>
            <div class="form-group">
                <input class="form-control" type="submit" name="fileSubmit" value="UPLOAD"/>
            </div>
        </form>
    </div>
    <div class="row text-center">
        <ul class="gallery">
            <?php if(!empty($files)): foreach($files as $file): ?>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <img src="<?php echo base_url('uploads/files/'.$file['file_name']); ?>" alt="" >
                <p> <b> Uploaded On </b> <?php echo date("j M Y",strtotime($file['created'])); ?></p>
            </li>
            </ul>
            <?php endforeach; else: ?>
            <p>Image(s) not found.....</p>
            <?php endif; ?>
        </ul>
    </div>
</div>
</body>
</html>