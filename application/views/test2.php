<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title></title>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('library/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('library/bootstrap/css/bootstrap-rtl.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('library/css/style.css'); ?>" rel="stylesheet">
    <script src="<?= base_url('library/js/jquery-3.3.1.min.js'); ?>"></script>
    <!--    <script src="--><? //= base_url('library/js/jquery-ui.min.js'); ?><!--"></script>-->
    <!-- Bootstrap JS -->
    <script src="<?= base_url('library/bootstrap/js/bootstrap.js'); ?>"></script>
    <script src="<?= base_url('library/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script>var base_url = '<?= base_url(); ?>';</script>
    <script src="<?= base_url('library/js/script.js?a=1'); ?>"></script>

    <link rel="stylesheet" href="https://s.tmimgcdn.com/css/owl.theme.min.css?d=d29b789" media="all">
    <link rel="stylesheet" href="https://s.tmimgcdn.com/css/owl.carousel.min.css?d=d29b789" media="all">
    <link rel="stylesheet" href="https://s.tmimgcdn.com/css/standalone/livedemo.css?d=d29b789" media="all">

    <style>
        .grandparent {
            width:250px;
            height:250px;
            background-color:#CCCCCC;
            position:relative;
        }

        .parent {
            width:150px;
            height:150px;
            background-color:#999999;
            /*position:absolute;*/
            bottom:0px;
        }
        .child {
            width:70px;
            height:70px;
            background-color:#666666;
            position:absolute;
            right:0px;
            top:0px;
        }
    </style>
</head>
<body>
<div class="container-fluid" style="padding: 0">
    <div class="row">
        <div class="col-xs-12">
            <div class="grandparent">
                <div class="parent">
                    <div class="child"></div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>