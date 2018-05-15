<!DOCTYPE html>
<html>
<head>
    <title>Multiple Upload</title>
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="src/main.js"></script>
</head>
<style>
    .panel-transparent .panel-body{
    background: rgba(46, 51, 56, 0.2)!important;
}
.fontbg {
    color:black;
    padding:10px;
    background-color:white;
    opacity:0.7;
    border:3px solid black;
}
.fonttitle {
    color:black;
    font-family: "Trebuchet MS";
    font-weight:bold;
}
.fonttitle:hover {
    transform: scale(1.2);
    transition: 500ms;
}
.fontcolor {
    color:black;
    font-family: "Trebuchet MS";
    padding:5px;
    background-color:white;
    border-radius:5px;
    font-size:20px;
    font-weight:bold;
    border:3px solid black;
}
.fontcolor:hover {
    padding:10px;
    transform: scale(1.2);
    transition: 500ms;
}
</style>
<body background="bg2.jpg">
<div class="container">
    <center><h1 class="fontbg fonttitle">Multiple Upload </center></h1>
</div>
<div class="container">
    <div class="row text-center">
    <div class="col-md-4"></div>
        <div class="col-md-4">
        <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
        <form enctype="multipart/form-data" action="" method="post">
            <div class="form-group">
                <label class="fontcolor">Choose Files</label>
                <input type="file" class="form-control" name="userFiles[]" multiple/>
            </div>
            <div class="form-group">
                <input class="form-control" type="submit" name="fileSubmit" value="UPLOAD"/>
            </div>
        </form>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row text-center">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <ul class="gallery">
            <?php if(!empty($files)): foreach($files as $file): ?>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <img src="<?php echo base_url('uploads/files/'.$file['file_name']); ?>" alt="" >
                <p> <b> Uploaded On </b> <?php echo date("j M Y",strtotime($file['created'])); ?></p>
            </li>
            </ul>
            <?php endforeach; else: ?>
            <p class="fontcolor">Image(s) not found.....</p>
            <?php endif; ?>
        </ul>
</div>
<div class="col-md-4"></div>
    </div>
</div>
</body>
</html>