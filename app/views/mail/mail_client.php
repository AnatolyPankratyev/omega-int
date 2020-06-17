<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Mailbox Newsletter Flat Responsive Widget Template  :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Mailbox Newsletter Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <style>
        /*--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    --*/
        /* reset */
        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
        article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
        ol,ul{list-style:none;margin:0px;padding:0px;}
        blockquote,q{quotes:none;}
        blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
        table{border-collapse:collapse;border-spacing:0;}
        /* start editing from here */
        a{text-decoration:none;}
        .txt-rt{text-align:right;}/* text align right */
        .txt-lt{text-align:left;}/* text align left */
        .txt-center{text-align:center;}/* text align center */
        .float-rt{float:right;}/* float right */
        .float-lt{float:left;}/* float left */
        .clear{clear:both;}/* clear float */
        .pos-relative{position:relative;}/* Position Relative */
        .pos-absolute{position:absolute;}/* Position Absolute */
        .vertical-base{	vertical-align:baseline;}/* vertical align baseline */
        .vertical-top{	vertical-align:top;}/* vertical align top */
        nav.vertical ul li{	display:block;}/* vertical menu */
        nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
        img{max-width:100%;}
        /*end reset*/
        /****-----start-body----****/
        body{
            text-align: center;
            background: #013f42;
            background-size:cover;
            font-family: "Asap-Regular";
        }

        @font-face{
            font-family: "Asap-Regular";
            src:url(https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap);
        }

        .padding{
            padding:60px 100px;
        }

        .mail-img-w3ls img{
            width:13%;
            margin:0 auto;
        }

        .mail-img-w3ls span{
            height:5px;
            width:250px;
            background:#e77200; /*#D65B88*/
            display:block;
            text-align:center;
            margin:0 auto;
        }

        .header-agileits {
            text-align: center;
            padding:10px 0;
            padding-bottom:50px;
            font-family: "Asap-Regular";
        }

        .header-agileits h1 {
            font-size:50px;
            color: #fff;
            letter-spacing:3px;
            margin:0 auto;
            padding-bottom:10px;
        }
        .header-agileits p{
            font-size:16px;
            color:#d0cccc;
            letter-spacing:1px;
            margin:0 auto;
            width:50%;
            text-align:center;
            line-height:24px;
        }

        .design-w3l{
            width:40%;
            margin:0 auto;
        }

        .mail-form-agile {
            padding: 40px 50px;
            text-align: center;
            margin:0px;
            background: rgba(23, 218, 218, 0.18);
            color: #000;
            margin:0 auto;
        }

        .mail-form-agile input[type="text"]{
            padding: 13px 10px;
            width: 92.5%;
            font-size: 16px;
            outline: none;
            color: #FFFFFF;
            background: transparent;
            border: 0px;
            border-bottom: 1px solid #fff;
            border-radius: 0px;
            font-family: "Asap-Regular";
            letter-spacing: 1.4px;
            font-weight: 600;
        }
        ::-webkit-input-placeholder{
            color:#b4b0b0 !important;
            font-weight:400;
        }
        .btn{
            font-size: 18px;
            padding: 10px 20px;
            letter-spacing:1.2px;
            border: none;
            text-transform: capitalize;
            outline: none;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            background: #e77200;
            color: #333;
            cursor: pointer;
            margin: 0 auto;
            margin-top:40px;
            font-family: "Asap-Regular";
            -webkit-transition-duration: 0.9s;
            transition-duration: 0.9s;
            font-weight:600;
        }
        .btn:hover {
            -webkit-transition-duration: 0.9s;
            transition-duration: 0.9s;
            background:#fff;
        }

        .footer{
            text-align: center;
            padding: 50px 15px 0px;
            padding-top:75px;
            letter-spacing:1.6px;
            line-height:22px;
        }
        .footer p {
            font-size: 16px;
            color: #fff;
            margin: 0px;
            letter-spacing:1.4px;
        }
        .footer p a {
            color:#e77200;
            font-weight:blod;
            -webkit-transition-duration: 0.5s;
            transition-duration: 0.5s;
        }
        .footer p a:hover {
            color: #eee;
            -webkit-transition-duration: 0.5s;
            transition-duration: 0.5s;
        }





        /*-- responsive media queries --*/

        @media screen and (max-width:1280px){
            .header-agileits p {
                width: 65%;
            }
            .design-w3l {
                width: 45%;
            }

        }


        @media screen and (max-width:1080px){
            .mail-img-w3ls img {
                width: 16%;
            }
            .header-agileits h1 {
                font-size: 46px;
            }
            .header-agileits p {
                width: 75%;
            }
            .design-w3l {
                width: 55%;
            }


        }


        @media screen and (max-width:1050px){
            .header-agileits p {
                width: 80%;
            }


        }



        @media screen and (max-width:991px){
            .header-agileits{
                padding-bottom: 40px;
            }
            .mail-img-w3ls img {
                width: 16%;
            }
            .header-agileits h1 {
                font-size: 44px;
                padding-bottom: 3px;
            }
            .header-agileits p {
                font-size: 14px;
            }
            .design-w3l {
                width: 60%;
            }
            .footer {
                text-align: center;
                padding: 50px 15px 0px;
                padding-top: 50px;
                letter-spacing: 1.6px;
                line-height: 22px;
            }

        }


        @media screen and (max-width:800px){
            .mail-img-w3ls img {
                width: 22%;
            }
            .mail-img-w3ls span {
                width: 220px;
            }
            .header-agileits p {
                width: 100%;
            }
            .design-w3l {
                width: 76%;
            }
            .mail-form-agile {
                padding: 30px 40px;
            }
            .mail-form-agile input[type="submit"] {
                font-size: 16px;
            }
            .footer p {
                font-size: 14px;
            }

        }

        @media screen and (max-width:768px){
            .padding{
                padding:50px;
            }

        }

        @media screen and (max-width:736px){
            .header-agileits h1 {
                font-size: 42px;
                padding-bottom: 2px;
            }
            .footer {
                padding: 40px 0px 0px;
            }
        }

        @media screen and (max-width:667px){


        }

        @media screen and (max-width:640px){


        }

        @media screen and (max-width:600px){
            .padding{
                padding:50px 20px;
            }
            .header-agileits h1 {
                font-size: 38px;
            }

        }

        @media screen and (max-width:568px){
            .mail-img-w3ls span {
                width: 220px;
            }
            .header-agileits h1 {
                font-size: 36px;
            }
            .header-agileits p {
                font-size: 14px;
                line-height:22px;
            }
            .design-w3l {
                width: 84%;
            }


        }

        @media screen and (max-width:480px){
            .mail-img-w3ls span {
                width: 160px;
            }
            .header-agileits h1 {
                font-size: 34px;
            }
            .header-agileits p {
                font-size: 13px;
                line-height: 22px;
            }
            .design-w3l {
                width: 98%;
            }
            .mail-form-agile input[type="submit"] {
                font-size: 14px;
                margin-top: 30px;
            }
            .footer p {
                font-size: 13px;
            }

        }

        @media screen and (max-width:414px){
            .header-agileits h1 {
                font-size: 30px;
            }
            .padding {
                padding: 30px 15px;
            }
            .mail-img-w3ls span {
                height: 2.5px;
            }
            .header-agileits {
                padding-bottom: 30px;
            }
            .mail-form-agile {
                padding:25px 30px;
            }
            .footer {
                padding: 30px 0px 0px;
            }

        }

        @media screen and (max-width:375px){
            .mail-img-w3ls img {
                width: 24%;
            }
            .mail-img-w3ls span {
                height: 1.5px;
            }
            .mail-form-agile input[type="text"] {
                font-size: 14px;
            }
            .mail-form-agile {
                padding: 25px;
            }

        }

        @media screen and (max-width:320px){
            .padding {
                padding: 25px 10px;
            }
            .design-w3l {
                width: 100%;
            }
            .mail-img-w3ls img {
                width: 27%;
            }
            .mail-img-w3ls span {
                width:100px;
            }
            .header-agileits h1 {
                font-size: 25px;
            }



        }
        .link {
            color: white;
            text-decoration: underline;
        }
        .link:hover {
            text-decoration: none;
        }





    </style>
</head>

<body>
<div class="padding">

    <div class="mail-img-w3ls">
        <img src="./images/mailbox.png" alt " ">
        <span> </span>
    </div>

    <div class="header-agileits">
        <h1>Спасибо за заявку</h1>
        <p>Вы оставили заявку на сайте <a href="https://omega-int.ru" class="link">  OMEGA Интерьер </a></p>
        <p>В ближайшее время с вами свяжется менеджер</p>
    </div>

    <div class="design-w3l">
        <div class="mail-form-agile">
            <a href="https://omega-int.ru" class="btn">На сайт</a>
        </div>
        <div class="clear"> </div>
    </div>

    <div class="footer">
        <p>© 2020 All Rights Reserved <a href="https://omega-int.ru">  OMEGA Интерьер </a></p>
    </div>

</div>
</body>
</html>