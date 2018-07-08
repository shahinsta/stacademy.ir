<?php
$ProductID = 0;
$PromotionID = 0;
$refProvince = 0;
$refCity = 0;
$boltons = 0;
$boltonsPromotion = 0;
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        @$ProductID = trim(stripslashes(base64_decode($_GET['pid'])));
        @$PromotionID = trim(stripslashes(base64_decode($_GET['cid'])));
        @$refProvince = trim(stripslashes(base64_decode($_GET['ref_province'])));
        @$refCity = trim(stripslashes(base64_decode($_GET['ref_city'])));
        @$boltons = trim(stripslashes(base64_decode($_GET['blt'])));
        @$boltonsPromotion = trim(stripslashes(base64_decode($_GET['bltc'])));
        break;
    case 'POST':
        header('location: http://www.parsonline.com/');
        break;
    default:
        header('location: http://www.parsonline.com/');
}
if (!isset($_GET['ref_province']) || empty($refProvince) || $refProvince == '0') {
    $refProvince = 'all';
}
if (!isset($_GET['ref_city']) || empty($refCity) || $refCity == '0') {
    $refCity = 'all';
}
if (isset($_GET["tid"])) {
    $targetid = trim(stripslashes(base64_decode($_GET["tid"])));
} else {
    if (isset($_COOKIE["_refURL"])) {
        $parse = parse_url($_COOKIE["_refURL"]);

        if (isset($parse['query'])) {
            $QueryStrExpl = explode("&", $parse['query']);

            foreach ($QueryStrExpl as $qSTR) {
                $QueryStr = explode("=", $qSTR);
                if ($QueryStr[0] == 'tid') {
                    $targetid = $QueryStr[1];
                }
            }
        } else {
            $targetid = '0';
        }
    } else {
        $targetid = '0';
    }
}

if (isset($_GET["sl"])) {
    $sl = trim(stripslashes(($_GET["sl"])));
} else {
    if (isset($_COOKIE["_refURL"])) {
        $parse = parse_url($_COOKIE["_refURL"]);

        if (isset($parse['query'])) {
            $QueryStrExpl = explode("&", $parse['query']);

            foreach ($QueryStrExpl as $qSTR) {
                $QueryStr = explode("=", $qSTR);
                if ($QueryStr[0] == 'sl') {
                    $sl = $QueryStr[1];
                }
            }
        } else {
            $sl = '';
        }
    } else {
        $sl = '';
    }
}
if (isset($_GET["pg"])) {
    $pg = trim(stripslashes($_GET["pg"]));
} else {
    $pg = '';
}

if (isset($_GET["pn"])) {
    $pn = trim(stripslashes($_GET["pn"]));
} else {
    $pn = '';
}

if (isset($_GET["sec"])) {
    $sec = trim(stripslashes($_GET["sec"]));
} else {
    $sec = '';
}

if (isset($_GET["sub"])) {
    $sub = trim(stripslashes($_GET["sub"]));
} else {
    $sub = '';
}

if (isset($_GET["ec"])) {
    $ec = trim(stripslashes($_GET["ec"]));
} else {
    $ec = '';
}

if (isset($_COOKIE["_refURL"])) {
    $refURL = trim($_COOKIE["_refURL"]);
    $parse = parse_url($refURL);
    if (isset($parse['host'])) {
        $refHoastName = $parse['host'];
    } else {
        $refHoastName = '_';
    }
} else {
    $refURL = '_';
    $refHoastName = '_';
}

if (isset($_COOKIE["_landURL"])) {
    $landURL = trim($_COOKIE["_landURL"]);
} else {
    $landURL = '';

}

?>
<script>
    var sl = '<?= $sl; ?>',
        tid = '<?= $targetid; ?>',
        PackageGroup = '<?= $pg; ?>',
        pagename = '<?= $pn; ?>',
        sitesection = '<?= $sec; ?>',
        sitesubsection = '<?= $sub; ?>',
        eventcategory = '<?= $ec; ?>',
        ProductID = '<?= $ProductID; ?>',
        PromotionID = '<?= $PromotionID; ?>',
        Price = 0,
        Boltons = '<?= $boltons; ?>',
        BoltonsPromotionID = '<?= $boltonsPromotion; ?>',
        BoltonPrice = 0,
        refProvince = '<?= $refProvince; ?>',
        refCity = '<?= $refCity; ?>',
        Province = '',
        City = '',
        ProvinceID = '',
        CityID = '',
        ProvinceName = '',
        CityName = '',
        Prefix = '',
        Numbers = '',
        TelecomCenter = '',
        PrefixNumber = '',
        ProvinceLabel = '',
        CityLabel = '',
        MainURL = '<?= $landURL; ?>',
        BackURL = '<?= $refURL; ?>',
        BackHoastName = '<?= $refHoastName; ?>';
</script>
<script src="//www.parsonline.com/scripts/scripts_pr_landing.js?v=<?php /*echo time(); */ ?>"></script>
<style>
    body{
        font-size:13px !important;
    }
    .newsletter {
        display: none !important;
    }
    .footer{
        display: none !important;
    }

    .alert-warning {
        background-color: transparent;
        border-color: transparent;
        color: #f70000;
    }

    .alert {
        text-shadow: 0 1px 0 rgba(255, 255, 255, .2);
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .alert-success {

        background: none;
        font-size: 14px;
        border: none;
        border-color: transparent;
    }

    .error-txt {
        width: 100%;
        min-height: 200px;
        background: #fff;
        color: red;
        font-size: 16px;
        border-radius: 10px;
        box-shadow: 1px 1px 5px -1px rgba(000, 000, 000, .4)
    }

    /**** My Style*****/

    .form-box {
        margin-top: 130px;
        background: #f5f5f5;
        min-height: 420px;
        display: -webkit-box; /* OLD - iOS 6-, Safari 3.1-6 */
        display: -moz-box; /* OLD - Firefox 19- (buggy but mostly works) */
        display: -ms-flexbox; /* TWEENER - IE 10 */
        display: -webkit-flex; /* NEW - Chrome */
        display: flex;
        -ms-flex: 1;
        align-items: center;
        justify-content: center;
        padding-bottom: 30px;
        padding-top: 25px;
    }

    .txt-box {
        min-height: 420px;
    }

    @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .form-sec {
            height: 100%;
        }
    }

    .right-side {
        width: 100%;
        float: right;
        clear: both;
        padding: 22% 20%;
        font-size: 14px;
    }

    #FormSection h1 {
        font-size: 16px;
        text-align: center;
        padding-right: 0;
        margin-bottom: 30px;
        color: #6b6b6b;
    }

    /*****/
    #FormSection {
        width: 100%;
        padding: 1em 1em 1em 1em;
    }

    .group {
        position: relative;
        margin-bottom: 45px;
    }

    .group input {
        font-size: 12px;
        padding: 5px;
        -webkit-appearance: none;
        display: block;
        background: #fff !important;
        color: #80808f;
        width: 100%;
        border: none;
        border-radius: 5px 5px 0 0;
        border-bottom: 2px solid #b1b1b1 !important;
    }

    .group input:focus {
        outline: none;

    }

    /* Label */

    label {
        color: #999;
        font-size: 16px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        right: 5px;
        top: 10px;
        transition: all 0.2s ease;
    }

    .pack-ttl {
        width: 100%;
        display: block;
        text-align: center;
    }

    .pack-ttl span {
        padding: 3px 0px;
        border: 1px solid #0056b7;
        border-radius: 5px 5px 0 0;
        border-bottom: 0;
        background: #0056b7;
        color: #fff;
        width: 70%;
        display: block;
        margin: 0 auto;
        box-shadow: inset 0px 1px 5px 0px #0056b7;
    }

    /* active */

    .group input:focus ~ label, .group input.used ~ label {
        top: 0px;
        transform: scale(.75);

        /* font-size: 14px; */
        color: #ff9008;
        padding: 3px 10px;
    }

    .phoneNumlbl input:focus ~ label, .phoneNumlbl input.used ~ label {
        right: -10px;
    }

    .emaillbl input:focus ~ label, .emaillbl input.used ~ label {
        right: 10px;
    }

    .bar {
        position: relative;
        display: block;
        width: 100%;
    }

    .bar:before, .bar:after {
        content: '';
        height: 2px;
        width: 0;
        bottom: 1px;
        position: absolute;
        background: #ff9008;
        transition: all 0.2s ease;
    }

    .bar:before {
        right: 50%;
    }

    .bar:after {
        left: 50%;
    }

    .group input:focus ~ .bar:before, .group input:focus ~ .bar:after {
        width: 50%;
    }

    .highlight {
        position: absolute;
        height: 60%;
        width: 100px;
        top: 25%;
        right: 0;
        pointer-events: none;
        opacity: 0.5;
    }

    .group input:focus ~ .highlight {
        animation: inputHighlighter 0.3s ease;
    }

    select:focus ~ .highlight {
        animation: inputHighlighter 0.3s ease;
    }

    @keyframes inputHighlighter {
        from {
            background: #005baa;
        }
        to {
            width: 0;
            background: transparent;
        }
    }

    .button {
        position: relative;
        display: inline-block;
        padding: 8px 40px;
        margin-right: 85px;
        width: 175px;
        height: 55px;
        vertical-align: middle;
        color: #fff;
        font-size: 14px;
        line-height: 20px;
        -webkit-font-smoothing: antialiased;
        text-align: center;
        letter-spacing: 1px;
        background: transparent;
        border: 0;
        /*float: left;*/
        /*border-bottom: 2px solid #60842c;*/
        cursor: pointer;
        transition: all 0.15s ease;
        border-radius: 35px;
    }

    .button:focus {
        outline: 0;
    }

    .buttonOrange {
        background: #7cc308;
        text-shadow: 1px 1px 0 rgb(115, 158, 52);
        font-size: 17px;
        font-weight: bold;
        background: -webkit-gradient(linear, left top, left bottom, from(#0059d1), to(#054ba8));
        background: -webkit-linear-gradient(top, #0059d1, #054ba8);
        background: -moz-linear-gradient(top, #0059d1, #054ba8);
        background: -ms-linear-gradient(top, #0059d1, #054ba8);
        background: -o-linear-gradient(top, #0059d1, #054ba8);
        background-image: -ms-linear-gradient(top, #0059d1 0%, #054ba8 100%);
        -webkit-box-shadow: 0px 10px 37px -11px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 10px 37px -11px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 10px 37px -11px rgba(0, 0, 0, 0.75);
    }

    .buttonOrange:hover {
        background: #5c940b;
        -webkit-box-shadow: 0px 10px 37px -11px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 10px 37px -11px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 10px 37px -11px rgba(0, 0, 0, 0.75);
    }

    .ripples {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        background: transparent;
    }

    .ripplesCircle {
        position: absolute;
        top: 50%;

        transform: translate(-50%, -50%);
        opacity: 0;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.25);
    }

    .ripples.is-active .ripplesCircle {
        animation: ripples .4s ease-in;
    }

    @keyframes ripples {
        0% {
            opacity: 0;
        }

        25% {
            opacity: 1;
        }

        100% {
            width: 200%;
            padding-bottom: 200%;
            opacity: 0;
        }
    }

    .group input[type="text"], .group input[type="email"], .group input[type="number"] {
        text-align: left;
        direction: ltr;
    }

    .row {
        margin: 0;
    }

    fieldset {
        width: 100%;
    }

    label {
        font-family: 'IRANSans', Tahoma, Arial, Helvetica, Sans-Serif;
        font-size: 12px;
        line-height: 100%;
        color: #80808f;
        font-weight: normal;
    }

    option {
        color: #282828;
    }

    option.disabled, option.disabled:hover, option.disabled:focus {
        cursor: not-allowed;
        pointer-events: none;
        color: #cccccc;
    }

    .loader {
        background: rgba(255, 255, 255, 0.6) center center repeat scroll;
        margin: 0 auto;
        padding: 0;
        left: 0;
        width: 100%;
        height: 100%;
        top: 0;
        display: none;
        position: fixed;
        z-index: 99;
    }

    .alret-bg {
        background: rgba(255, 255, 255, 0.6) center center repeat scroll;
        margin: 0 auto;
        padding: 0;
        left: 0;
        width: 100%;
        height: 100%;
        top: 0;
        opacity: 0;
        position: fixed;
        z-index: 99;
    }

    .alret-box {
        background: rgba(0, 0, 0, 0.8) center center repeat scroll;
        margin: 0 auto;
        padding: 5%;
        left: 0;
        width: 50%;
        box-shadow: rgba(0, 0, 0, 0.3) 6px 6px 6px;
        -moz-box-shadow: rgba(0, 0, 0, 0.3) 6px 6px 6px;
        -webkit-box-shadow: rgba(0, 0, 0, 0.3) 6px 6px 6px;
        -o-box-shadow: rgba(0, 0, 0, 0.3) 6px 6px 6px;
        -ms-box-shadow: rgba(0, 0, 0, 0.3) 6px 6px 6px;
        top: 0;
        display: none;
        opacity: 0;
        position: absolute;
        z-index: 100;
    }

    section {
        position: relative;
        overflow: hidden;
    }

    .current_package {
        border: 1px solid #d0d0d0;
        border-radius: 6px;
        position: relative;
        color: #565656;
        overflow: hidden;
        font-family: 'IRANSans';
        clear: both;
        background-color: #fff;
        vertical-align: top;
        clear: both;
        width: 100%;
        box-shadow: 1px 1px 5px -1px rgba(0, 0, 0, 0.38);
    }

    .package_type {
        height: 40px;
        text-align: center;
        padding-top: 2px;
        direction: rtl !important;
        position: relative;
        color: #565656;
    }

    .package_type h3 {
        font-size: 12pt !important;
        margin-top: 7px;
    }

    .text-right {
        font-size: 14px;
        line-height: 40px;
        padding: 10px 0;
    }

    .main_title {
        height: 89px;
        background-color: #ff0f00;
        margin-top: -20px;
        direction: rtl;
        color: #fff;
    }

    .main_title h2 {
        text-align: center;
        font-size: 13pt;
        height: 135px;
        padding-top: 11px;
    }

    .price_box {
        background-color: #0c4f7d;
        height: 61px;
        padding: 5px;
        text-align: center;
        color: #ffffff;
        font-size: 12pt;
    }

    .offer_price {
        font-size: 18pt;
        font-weight: bold;
    }

    .price_box_conditional_price span {
        color: #fff !important;
        font-size: 65pt;
        font-family: Impact;
        font-weight: bold;
    }

    .package_details {
        background-color: #fff;
        min-height: 180px;
        padding: 10px;
        text-align: center;
        direction: rtl;
        color: #80808f;
        font-size: 9pt;
        display: none;
    }

    .package_buttom_details span {
        font-size: 16pt;
    }

    .img {
        width: 100%;
        display: block
    }

    .banner-img img {
        display: block;
    }

    #banner {
        /*border-top: 10px solid #e6e5e8;*/
    }

    .txt-box {
        /*background: url(//www.parsonline.com/data/uploaded_files/1508079132-9.png) no-repeat;*/
        background-size: 100% 100%;
    }

    .form-sec {
        /*background: #f1f2f2;*/
        background: url('//www.parsonline.com/data/uploaded_files/1530532881-3.jpg') no-repeat center center scroll;
        background-size: cover;
        height: 733px;
    }

    @media only screen and (max-width: 980px) {
        .form-sec .container {
            width: 80%;
            margin: 0 auto;
        }

        #FormSection {
            padding: 3em 1em 2em 1em;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 980px) {
        .txt-slide .slide-content {
            font-size: 16px;
            padding: 9px 25px;
        }

        .blue h3 {
            font-size: 28px;
        }
    }

    @media only screen and (max-width: 768px) {
        .package_details {
            min-height: inherit;
        }

        label {
            font-size: 14px;
            top: 15px;
        }

        .txt-box, .form-box, .thanks {
            min-height: 1px;
            width: 100%;
        }

        .txt-slide {
            padding: 0;
            width: 100%;
        }

        #FormSection {
            padding: 5px 2em 0em 2em;
            margin-bottom: 5px;
        }

        .group {
            margin-bottom: 25px;
        }

        .button {
            padding: 4px 30px;
            margin: 1em 0 1em 0;
        }

        .txt-box:after {
            content: "";
            width: 0;
            height: 0;
            border-left: 14px solid transparent;
            border-right: 14px solid transparent;
            border-top: 14px solid #fff;
            position: absolute;
            bottom: -13px;
            z-index: 999;
            right: 48%;
        }

        header h1 {
            margin: 12px 0;
        }

        #FormSection {
            padding: 10px 3em 0em 3em;
        }
    }

    @media only screen and (max-width: 480px) {
        #FormSection h1 {
            font-size: 13px;
        }

        .txt-box {
            background: none;
            padding: 0;
        }

        .form-sec {
            display: block;


        }

        .footer-txt {
            font-size: 10px;
            line-height: 23px;
            position: relative;
            margin: 15px 0 0 0;
        }

        .txt-box {
            background: none;
        }

        .right-side {
            padding: 5% 0%;
        }

        #FormSection {
            padding: 10px 0em 0em 0em;
        }

        .txt-box:after {
            right: 46%;
        }
    }

    @media only screen and (max-width: 480px) {
        .main_title h2 {
            font-size: 11pt;
        }

        .form-sec .container {
            width: 90%;
            min-height: 400px;
            margin: 0% auto;
        }

        .txt-box {
            padding: 0 5px;
        }

        .right-side p {
            font-size: 12px;
            line-height: 24px;
        }

        header h1 {
            margin: 8px 0;
            font-size: 22px;
        }

        label {
            font-size: 12px;
        }

        .group {
            margin-bottom: 10px;
        }

        .button {
            padding: 5px 25px;
            font-size: 12px
        }
    }

    @media all and (-ms-high-contrast: none) {
        .form-box {
            height: 420px;
        }

        *::-ms-backdrop, .form-box {
            height: 420px;
        }
    }

    .bubble_red {
        border-radius: 10px;
        padding: 25px;
        text-align: center;
        margin: 0 auto;
        max-width: 400px;
        width: 90%;
        border: 1px solid #888;
        color: #ff0000;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .onlysmall {
        font-size: 13px;
    }


    /* CountDown timer */
    .flip_clock {
        /*top: 65%;*/
        left: 20px;
        z-index: 10;
        text-align: center;
        /*background-color: #36618f;*/
        width: 100%;
    }

    .qp_countdown {
        font-size: 30px !important;color: #fff !important;
    }

    .qp_countdown > div:nth-child(1) {
        padding-top: 50px;
        background: url('//www.parsonline.com/data/uploaded_files/1530522741-3.png') scroll no-repeat no-repeat center top;
        background-size:120px auto;
    }

    .qp_countdown > div:nth-child(2) {
        padding-top: 50px;
        background: url('//www.parsonline.com/data/uploaded_files/1530522743-3.png') scroll no-repeat no-repeat center top;
        background-size:120px auto;
    }

    .qp_countdown > div:nth-child(3) {
        padding-top: 50px;
        background: url('//www.parsonline.com/data/uploaded_files/1530522742-3.png') scroll no-repeat no-repeat center top;
        background-size:120px auto;
    }

    .qp_countdown > div:nth-child(4) {
        padding-top: 50px;
        background: url('//www.parsonline.com/data/uploaded_files/1530522740-3.png') scroll no-repeat no-repeat center top;
        background-size:120px auto;
    }

    .each_digit {
        background-size: 100% auto;
        width: 40px;
        height: 30px; /*background:#616161 !important;*/ border-radius:5px;/*box-shadow:inset 1px 1px 5px 1px #;*/
        border-radius: 3px;
        font-size: 30px !important;color: #892541 !important;background:none !important;
        line-height: 35px;
    }

</style>
<div class="bubble_red hidden">مدت زمان این جشنواره به پایان رسیده است.</div>
<section class="form-sec">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 form-box">
                <form id="FormSection" class="wow">
                    <p class="text-center"><img alt="loading" id="loadingFrm"
                                                src="//www.parsonline.com/images/loader.gif"/></p>
                    <h1>جهت خرید، فرم زیر را تکمیل و بر روی دکمه ثبت سفارش کلیک کن.</h1>

                    <fieldset>
                        <div class="group namelbl">
                            <input type="text" id="CustomerName" name="CustomerName"><span
                                    class="highlight"></span><span class="bar"></span>
                            <label for="CustomerName">نام و نام خانوادگی</label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="group Provincelbl" id="ProvinceSection" style="display:none">
                                    <select id="Province" name="Province" style="width: 100%">
                                        <option value="0" disabled selected>انتخاب استان</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group Citylbl" id="CitySection" style="display:none">
                                    <select id="City" name="City" style="width: 100%">
                                        <option value="0" disabled selected>انتخاب شهر</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="group phoneNumlbl phone8" id="Number8" style="display: none">
                            <input type="text" maxlength="8" id="PhoneNumber" name="PhoneNumber"
                                   class="number MyYekan"><span
                                    class="highlight"></span><span class="bar"></span>
                            <label for="PhoneNumber">تلفن ثابت بدون کد شهر</label>
                        </div>
                        <div class="group phoneNumlbl phone10" id="Number10">
                            <input type="text" maxlength="10" id="PhoneNumber" name="PhoneNumber"
                                   class="number MyYekan"><span
                                    class="highlight"></span><span class="bar"></span>
                            <label for="PhoneNumber">تلفن ثابت به همراه کد شهر (بدون 0)</label>
                        </div>
                        <div class="group mobilelbl">
                            <input type="text" maxlength="11" id="CustomerMobile" name="CustomerMobile"
                                   class="number MyYekan"><span
                                    class="highlight"></span><span
                                    class="bar"></span>
                            <label for="CustomerMobile">تلفن همراه</label>
                        </div>
                        <button type="button" id="Registeration" class="button buttonOrange">
                            ثبت سفارش
                            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                        </button>
                        <button type="button" id="Registeration2" style="display: none" class="button buttonOrange">
                            ثبت سفارش
                            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                        </button>
                        <div id="Result"></div>
                    </fieldset>
                </form>
            </div>
            <div class="col-xs-12 col-sm-8 txt-box text-center" style="margin-top: 150px;padding-left: 300px;">

                <p style="color:#fff;font-size: 25px;">فقط به مدت محدود<br>ثبت نام در طرح ویژه پارس آنلاین</p><br><br>
                <div class="qp_countdown" data-time="<?= jmktime(0,0,0,5,11,1397) - time()  ?>"
                     data-type="flipClock"></div>
                <br><br>

                <div class="text-center" style="color: #fff">
                    <p  style="font-size:17px">اینترنت پرسرعت 4Mbps، یکساله <br> با <span class="fa_num">90</span> گیگابایت ترافیک و مودم رایگان</p>
                    <p  style="font-weight: bold;font-size: 20px">ماهانه: <span class="fa_num" style="font-size:18px;color: #ded80b;text-decoration: line-through;">45,300  </span><span class="fa_num">20,000    </span>تومان</p>
                </div>

            </div>
        </div>
</section>
<script>
    $(document).ready(function () {
        dataLayer.push({
            'eventcategory': 'spring9703',
            'eventaction': 'pageview',
            'eventlabel': 'spring9703',
            'event': 'uaevent'
        });
    });
</script>
