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
        .section {
            position: relative;
            width: 100%;
            height: 500px;
        }

        .section_body {
            position: absolute;
            width: 100%;
            /*height: 350px;*/
        }

        .section_header {
            position: absolute;
            width: 100%;
            /*height: 350px;*/
            right: 0;
            top: 0;
        }

        .section_banner {
            position: absolute;
            width: 100%;
            -webkit-clip-path: polygon(0 29%, 100% 15%, 100% 82%, 0 69%);
            clip-path: polygon(0 29%, 100% 15%, 100% 82%, 0 69%);
        }

        .section_ball {
            position: absolute;
            width: 40%;
            z-index: 2;
            left: 250px;
            top: 50px;
        }

        .section_note {
            position: absolute;
            width: 11%;
            z-index: 3;
            left: 650px;
            top: 500px;
        }

        .section_num {
            position: absolute;
            font-size: 150px;
            z-index: 3;
            left: 300px;
            top: 65px;
            color: #849e0c;
        }

        .section_title {
            position: absolute;
            font-size: 100px;
            z-index: 3;
            left: 450px;
            top: 200px;
            color: #fff;
            line-height: 95px;
        }


    </style>
</head>
<body>
<div class="container-fluid" style="padding: 0">
    <div class="row">
        <div class="col-xs-12">
            <div class="section">
                <div class="section_body">
                    <div class="section_header">
                        <img class="section_banner" src="<?= base_url('images/bg.jpg'); ?>">
                        <img class="section_ball" src="<?= base_url('images/ball.png'); ?>">
                        <img class="section_note" src="<?= base_url('images/note.png'); ?>">
                        <span class="section_num">01</span>
                        <p class="section_title">Section <br> Title</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="padding: 0">
    <div class="row">
        <div class="col-xs-12">
            <div class="section">
                <div class="section_body">
                    <div class="section_header">
                        <img class="section_banner" src="<?= base_url('images/bg.jpg'); ?>">
                        <img class="section_ball" src="<?= base_url('images/ball.png'); ?>">
                        <img class="section_note" src="<?= base_url('images/note.png'); ?>">
                        <span class="section_num">01</span>
                        <p class="section_title">Section <br> Title</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>