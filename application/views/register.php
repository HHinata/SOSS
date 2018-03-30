<html><!--<![endif]--><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <!-- Start of Baidu Transcode -->
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="mobile-agent" content="format=html5;url=https://www.jianshu.com/p/27829a7a5f3e">
    <!-- End of Baidu Transcode -->

    <meta name="description" content="作者：春哥读者：锅巴GG 很久之前就拜读过春哥的很多文章，以及Nginx的相关博文，大部分内容都是来自持续关注的OpenResty内容，但是本教程确实是基础中的基础。由于最近工作的关系，需要系统的学习掌握Nginx架构特性以及利用lua-nginx-module进行二次开发，不仅开始重读相关的资料，而重读的时候，尤其以此教程入手获益匪浅，故记录之。本笔记只按自己的理解记录，和原书差异较大，有...">

    <meta name="360-site-verification" content="604a14b53c6b871206001285921e81d8">
    <meta property="wb:webmaster" content="294ec9de89e7fadb">
    <meta property="qc:admins" content="104102651453316562112116375">
    <meta property="qc:admins" content="11635613706305617">
    <meta property="qc:admins" content="1163561616621163056375">
    <meta name="google-site-verification" content="cV4-qkUJZR6gmFeajx_UyPe47GW9vY6cnCrYtCHYNh4">
    <meta name="google-site-verification" content="HF7lfF8YEGs1qtCE-kPml8Z469e2RHhGajy6JPVy5XI">
    <meta http-equiv="mobile-agent" content="format=html5; url=https://www.jianshu.com/p/27829a7a5f3e">

    <!-- Apple -->
    <meta name="apple-mobile-web-app-title" content="简书">

    <!--  Meta for Smart App Banner -->
    <meta name="apple-itunes-app" content="app-id=888237539, app-argument=jianshu://notes/3523162">
    <!-- End -->

    <!--  Meta for Twitter Card -->
    <meta content="summary" property="twitter:card">
    <meta content="@jianshucom" property="twitter:site">
    <meta content="Agentzh的Nginx教程(OpenxResty三部曲1/3)" property="twitter:title">
    <meta content="作者：春哥读者：锅巴GG 很久之前就拜读过春哥的很多文章，以及Nginx的相关博文，大部分内容都是来自持续关注的OpenResty内容，但是本教程确实是基础中的基础。由于最近..." property="twitter:description">
    <meta content="https://www.jianshu.com/p/27829a7a5f3e" property="twitter:url">
    <!-- End -->

    <!--  Meta for OpenGraph -->
    <meta property="fb:app_id" content="865829053512461">
    <meta property="og:site_name" content="简书">
    <meta property="og:title" content="Agentzh的Nginx教程(OpenxResty三部曲1/3)">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://www.jianshu.com/p/27829a7a5f3e">
    <meta property="og:description" content="作者：春哥读者：锅巴GG 很久之前就拜读过春哥的很多文章，以及Nginx的相关博文，大部分内容都是来自持续关注的OpenResty内容，但是本教程确实是基础中的基础。由于最近工作的关系，需要系统...">
    <!-- End -->

    <!--  Meta for Facebook Applinks -->
    <meta property="al:ios:url" content="jianshu://notes/3523162">
    <meta property="al:ios:app_store_id" content="888237539">
    <meta property="al:ios:app_name" content="简书">

    <meta property="al:android:url" content="jianshu://notes/3523162">
    <meta property="al:android:package" content="com.jianshu.haruki">
    <meta property="al:android:app_name" content="简书">
    <!-- End -->


    <title>Agentzh的Nginx教程(OpenxResty三部曲1/3) - 简书</title>

    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token" content="dSTU4dzrOnXtlPi23OKM3VgqvnaiPWvIrYUBCMbpwSz9M9HD+jF+qJmc0xyQSdoFdy/UJ6KkqFBGCnjdPEOX4g==">

    <link rel="stylesheet" media="all" href="//cdn2.jianshu.io/assets/web-221ec98db5f8f985b66f.css">

    <link rel="stylesheet" media="all" href="//cdn2.jianshu.io/assets/web/pages/notes/show/entry-468d5669dc55b0d2a6c2.css">

    <link href="//cdn2.jianshu.io/assets/favicons/favicon-e743bfb1821442341c3ab15bdbe804f7ad97676bd07a770ccc9483473aa76f06.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/57-a6f1f1ee62ace44f6dc2f6a08575abd3c3b163288881c78dd8d75247682a4b27.png" sizes="57x57">
    <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/72-fb9834bcfce738fd7b9c5e31363e79443e09a81a8e931170b58bc815387c1562.png" sizes="72x72">
    <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/76-49d88e539ff2489475d603994988d871219141ecaa0b1a7a9a1914f4fe3182d6.png" sizes="76x76">
    <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/114-24252fe693524ed3a9d0905e49bff3cbd0228f25a320aa09053c2ebb4955de97.png" sizes="114x114">
    <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/120-1bb7371f5e87f93ce780a5f1a05ff1b176828ee0d1d130e768575918a2e05834.png" sizes="120x120">
    <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/152-bf209460fc1c17bfd3e2b84c8e758bc11ca3e570fd411c3bbd84149b97453b99.png" sizes="152x152">

    <!-- Start of 访问统计 -->
    <script src="https://zz.bdstatic.com/linksubmit/push.js"></script><script src="//hm.baidu.com/hm.js?0c0e9d9b1e7d617b3e6842e85b9fb068"></script><script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?0c0e9d9b1e7d617b3e6842e85b9fb068";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <!-- End of 访问统计 -->
    <style type="text/css">fieldset[disabled] .multiselect {
            pointer-events: none;
        }

        .multiselect__spinner {
            position: absolute;
            right: 1px;
            top: 1px;
            width: 48px;
            height: 35px;
            background: #fff;
            display: block;
        }

        .multiselect__spinner:after,
        .multiselect__spinner:before {
            position: absolute;
            content: "";
            top: 50%;
            left: 50%;
            margin: -8px 0 0 -8px;
            width: 16px;
            height: 16px;
            border-radius: 100%;
            border-color: #41b883 transparent transparent;
            border-style: solid;
            border-width: 2px;
            box-shadow: 0 0 0 1px transparent;
        }

        .multiselect__spinner:before {
            animation: a 2.4s cubic-bezier(.41,.26,.2,.62);
            animation-iteration-count: infinite;
        }

        .multiselect__spinner:after {
            animation: a 2.4s cubic-bezier(.51,.09,.21,.8);
            animation-iteration-count: infinite;
        }

        .multiselect__loading-enter-active,
        .multiselect__loading-leave-active {
            transition: opacity .4s ease-in-out;
            opacity: 1;
        }

        .multiselect__loading-enter,
        .multiselect__loading-leave-active {
            opacity: 0;
        }

        .multiselect,
        .multiselect__input,
        .multiselect__single {
            font-family: inherit;
            font-size: 14px;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
        }

        .multiselect {
            box-sizing: content-box;
            display: block;
            position: relative;
            width: 100%;
            min-height: 40px;
            text-align: left;
            color: #35495e;
        }

        .multiselect * {
            box-sizing: border-box;
        }

        .multiselect:focus {
            outline: none;
        }

        .multiselect--disabled {
            opacity: .6;
        }

        .multiselect--active {
            z-index: 1;
        }

        .multiselect--active:not(.multiselect--above) .multiselect__current,
        .multiselect--active:not(.multiselect--above) .multiselect__input,
        .multiselect--active:not(.multiselect--above) .multiselect__tags {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .multiselect--active .multiselect__select {
            transform: rotate(180deg);
        }

        .multiselect--above.multiselect--active .multiselect__current,
        .multiselect--above.multiselect--active .multiselect__input,
        .multiselect--above.multiselect--active .multiselect__tags {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .multiselect__input,
        .multiselect__single {
            position: relative;
            display: inline-block;
            min-height: 20px;
            line-height: 20px;
            border: none;
            border-radius: 5px;
            background: #fff;
            padding: 0 0 0 5px;
            width: 100%;
            transition: border .1s ease;
            box-sizing: border-box;
            margin-bottom: 8px;
            vertical-align: top;
        }

        .multiselect__tag~.multiselect__input,
        .multiselect__tag~.multiselect__single {
            width: auto;
        }

        .multiselect__input:hover,
        .multiselect__single:hover {
            border-color: #cfcfcf;
        }

        .multiselect__input:focus,
        .multiselect__single:focus {
            border-color: #a8a8a8;
            outline: none;
        }

        .multiselect__single {
            padding-left: 6px;
            margin-bottom: 8px;
        }

        .multiselect__tags-wrap {
            display: inline;
        }

        .multiselect__tags {
            min-height: 40px;
            display: block;
            padding: 8px 40px 0 8px;
            border-radius: 5px;
            border: 1px solid #e8e8e8;
            background: #fff;
        }

        .multiselect__tag {
            position: relative;
            display: inline-block;
            padding: 4px 26px 4px 10px;
            border-radius: 5px;
            margin-right: 10px;
            color: #fff;
            line-height: 1;
            background: #41b883;
            margin-bottom: 5px;
            white-space: nowrap;
            overflow: hidden;
            max-width: 100%;
            text-overflow: ellipsis;
        }

        .multiselect__tag-icon {
            cursor: pointer;
            margin-left: 7px;
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            font-weight: 700;
            font-style: normal;
            width: 22px;
            text-align: center;
            line-height: 22px;
            transition: all .2s ease;
            border-radius: 5px;
        }

        .multiselect__tag-icon:after {
            content: "\D7";
            color: #266d4d;
            font-size: 14px;
        }

        .multiselect__tag-icon:focus,
        .multiselect__tag-icon:hover {
            background: #369a6e;
        }

        .multiselect__tag-icon:focus:after,
        .multiselect__tag-icon:hover:after {
            color: #fff;
        }

        .multiselect__current {
            min-height: 40px;
            overflow: hidden;
            padding: 8px 12px 0;
            padding-right: 30px;
            white-space: nowrap;
            border-radius: 5px;
            border: 1px solid #e8e8e8;
        }

        .multiselect__current,
        .multiselect__select {
            line-height: 16px;
            box-sizing: border-box;
            display: block;
            margin: 0;
            text-decoration: none;
            cursor: pointer;
        }

        .multiselect__select {
            position: absolute;
            width: 40px;
            height: 38px;
            right: 1px;
            top: 1px;
            padding: 4px 8px;
            text-align: center;
            transition: transform .2s ease;
        }

        .multiselect__select:before {
            position: relative;
            right: 0;
            top: 65%;
            color: #999;
            margin-top: 4px;
            border-style: solid;
            border-width: 5px 5px 0;
            border-color: #999 transparent transparent;
            content: "";
        }

        .multiselect__placeholder {
            color: #adadad;
            display: inline-block;
            margin-bottom: 10px;
            padding-top: 2px;
        }

        .multiselect--active .multiselect__placeholder {
            display: none;
        }

        .multiselect__content-wrapper {
            position: absolute;
            display: block;
            background: #fff;
            width: 100%;
            max-height: 240px;
            overflow: auto;
            border: 1px solid #e8e8e8;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            z-index: 1;
            -webkit-overflow-scrolling: touch;
        }

        .multiselect__content {
            list-style: none;
            display: inline-block;
            padding: 0;
            margin: 0;
            min-width: 100%;
            vertical-align: top;
        }

        .multiselect--above .multiselect__content-wrapper {
            bottom: 100%;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-bottom: none;
            border-top: 1px solid #e8e8e8;
        }

        .multiselect__content::webkit-scrollbar {
            display: none;
        }

        .multiselect__element {
            display: block;
        }

        .multiselect__option {
            display: block;
            padding: 12px;
            min-height: 40px;
            line-height: 16px;
            text-decoration: none;
            text-transform: none;
            vertical-align: middle;
            position: relative;
            cursor: pointer;
            white-space: nowrap;
        }

        .multiselect__option:after {
            top: 0;
            right: 0;
            position: absolute;
            line-height: 40px;
            padding-right: 12px;
            padding-left: 20px;
        }

        .multiselect__option--highlight {
            background: #41b883;
            outline: none;
            color: #fff;
        }

        .multiselect__option--highlight:after {
            content: attr(data-select);
            background: #41b883;
            color: #fff;
        }

        .multiselect__option--selected {
            background: #f3f3f3;
            color: #35495e;
            font-weight: 700;
        }

        .multiselect__option--selected:after {
            content: attr(data-selected);
            color: silver;
        }

        .multiselect__option--selected.multiselect__option--highlight {
            background: #ff6a6a;
            color: #fff;
        }

        .multiselect__option--selected.multiselect__option--highlight:after {
            background: #ff6a6a;
            content: attr(data-deselect);
            color: #fff;
        }

        .multiselect--disabled {
            background: #ededed;
            pointer-events: none;
        }

        .multiselect--disabled .multiselect__current,
        .multiselect--disabled .multiselect__select,
        .multiselect__option--disabled {
            background: #ededed;
            color: #a6a6a6;
        }

        .multiselect__option--disabled {
            cursor: text;
            pointer-events: none;
        }

        .multiselect__option--disabled.multiselect__option--highlight {
            background: #dedede!important;
        }

        .multiselect-enter-active,
        .multiselect-leave-active {
            transition: all .15s ease;
        }

        .multiselect-enter,
        .multiselect-leave-active {
            opacity: 0;
        }

        .multiselect__strong {
            margin-bottom: 8px;
            line-height: 20px;
            display: inline-block;
            vertical-align: top;
        }

        [dir=rtl] .multiselect {
            text-align: right;
        }

        [dir=rtl] .multiselect__select {
            right: auto;
            left: 1px;
        }

        [dir=rtl] .multiselect__tags {
            padding: 8px 8px 0 40px;
        }

        [dir=rtl] .multiselect__content {
            text-align: right;
        }

        [dir=rtl] .multiselect__option:after {
            right: auto;
            left: 0;
        }

        [dir=rtl] .multiselect__clear {
            right: auto;
            left: 12px;
        }

        [dir=rtl] .multiselect__spinner {
            right: auto;
            left: 1px;
        }

        @keyframes a {
            0% {
                transform: rotate(0);
            }

            to {
                transform: rotate(2turn);
            }
        }</style><style type="text/css">@font-face {
            font-family: 'KaTeX_AMS';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_AMS-Regular-3d8245dcb4489694a6a263b05c1cca01.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_AMS-Regular-ac1d46d953d403677171697581a284d2.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_AMS-Regular-c67be87adba7d31c013be127b936233d.ttf) format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_Caligraphic';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Caligraphic-Bold-970d3e76493b82fccf21ad5888ddee77.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Caligraphic-Bold-445f96a387df0d13ded71f27c608516d.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Caligraphic-Bold-3f61a84d76e80396489d32bc9dd8d444.ttf) format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_Caligraphic';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Caligraphic-Regular-0ef0f2e356a2e1c457b6585d34edae77.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Caligraphic-Regular-74f6918c7d2b768ffd32048102bc0172.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Caligraphic-Regular-c3bc8fcec0e85a50cabf71e4e8074991.ttf) format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_Fraktur';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Fraktur-Bold-950649ba5e5cfd37cdad74095411d350.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Fraktur-Bold-1aca7ef7f976fb54a207ffc8aa180e38.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Fraktur-Bold-e11e6bf02fc41279a540d3655abf3b07.ttf) format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_Fraktur';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Fraktur-Regular-135ccd74931753318f6f52f3fce19018.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Fraktur-Regular-c5b430bfcb3e5423b77401afcdb69b66.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Fraktur-Regular-a9509497466d16e6b7265a223ea39093.ttf) format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_Main';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Main-Bold-82bce349c8ff0927380b5177e9258ad0.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Main-Bold-29d4b276c622ff1d1376d9afcbd2f25a.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Main-Bold-db576c7d5d6eb6ebefc9b334f4140d42.ttf) format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_Main';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Main-BoldItalic-13900e552dbf51aead905f897043226c.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Main-BoldItalic-3f3be43bbdd58a4a86c8eddd3d39a26a.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Main-BoldItalic-cec43f729e0e6810c3433f6020ec676e.ttf) format('truetype');
            font-weight: bold;
            font-style: italic;
        }

        @font-face {
            font-family: 'KaTeX_Main';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Main-Italic-b488f60f79c9d1f533def644385d8219.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Main-Italic-f8a754484e776e94b6116dfbcb1761a7.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Main-Italic-85b3329fdb41fadfb0fdc01ec5290b2f.ttf) format('truetype');
            font-weight: normal;
            font-style: italic;
        }

        @font-face {
            font-family: 'KaTeX_Main';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Main-Regular-999cd6bac6e8118065ac500d4f133c63.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Main-Regular-485696cf1d821baac6ae06c42e09faef.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Main-Regular-f4fe6dca4a5f5520ae0caab31848aae3.ttf) format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_Math';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Math-Italic-7a31741a44e58952cb4b8a763c206fcd.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Math-Italic-8eb56b3ff5b141cd3732a24e65c2b339.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Math-Italic-10740d7488d690a743339650103f1cb3.ttf) format('truetype');
            font-weight: normal;
            font-style: italic;
        }

        @font-face {
            font-family: 'KaTeX_SansSerif';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_SansSerif-Bold-0d0f967a34b828083a11bb264e578c32.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_SansSerif-Bold-99bd87431ac7ef8f27591f72d7812509.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_SansSerif-Bold-771a1f955e7ff2106402b58d1e8a1ad2.ttf) format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_SansSerif';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_SansSerif-Italic-b1ac79b9b69c954bbeb8fc02500832e0.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_SansSerif-Italic-9c3f03ec809c6f298d716cbda8260fcb.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_SansSerif-Italic-cb729d47fbd26ff0ae62bb840085e5b5.ttf) format('truetype');
            font-weight: normal;
            font-style: italic;
        }

        @font-face {
            font-family: 'KaTeX_SansSerif';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_SansSerif-Regular-23f1730fda70ec6ec6aa789979890cba.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_SansSerif-Regular-fc90839714a9e877682309c3daf7493e.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_SansSerif-Regular-43b0cb92c2405f175772931ccd68002e.ttf) format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_Script';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Script-Regular-ae1fad1f4d1c227c9d567da8ea9f988c.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Script-Regular-60febfa114c5e32f0ce73050476aa39f.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Script-Regular-e9169ca7b32608b6235ec9ffff742a71.ttf) format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_Size1';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Size1-Regular-fda0824e8cfb676664ad063c367cfce3.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Size1-Regular-1d6cf6b89f694dc76e13ecc4e8214dd2.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Size1-Regular-f2e296ef7cef0f6f16912e5d171929b2.ttf) format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_Size2';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Size2-Regular-a7a0eb93afb696cb9b4efb87e6cd45a3.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Size2-Regular-f48e83b7bcaa68a86a78e8edfee1a04e.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Size2-Regular-0767ede65042583bcc06f09055f4d7ca.ttf) format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_Size3';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Size3-Regular-397bd6872be7adff4f000c49fa85a9c3.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Size3-Regular-0387ab387ace32f15b43c3a4a39f187f.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Size3-Regular-882f723427a0986846fe786bd8d6f6c7.ttf) format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_Size4';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Size4-Regular-3c14ed11dd8eea981c93bf283193856d.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Size4-Regular-726db3bd435c8a6e45e44741dae67263.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Size4-Regular-27901d5ce93d8971c416d9123fedb911.ttf) format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'KaTeX_Typewriter';
            src: url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Typewriter-Regular-895baecfbf4ef298fdfe943fb117c15e.woff2) format('woff2'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Typewriter-Regular-696705de367f02534e8abb38b55af067.woff) format('woff'), url(//cdn2.jianshu.io/assets/_/_/_/_/shared/node_modules/katex/dist/fonts/KaTeX_Typewriter-Regular-6374f53e08c02d7b9ec594e2fb0c5fe8.ttf) format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .katex-display {
            display: block;
            margin: 1em 0;
            text-align: center;
        }

        .katex-display > .katex {
            display: inline-block;
            text-align: initial;
        }

        .katex {
            font: normal 1.21em KaTeX_Main, Times New Roman, serif;
            line-height: 1.2;
            white-space: nowrap;
            text-indent: 0;
            text-rendering: auto;
        }

        .katex * {
            -ms-high-contrast-adjust: none !important;
        }

        .katex .katex-html {
            display: inline-block;
        }

        .katex .katex-mathml {
            position: absolute;
            clip: rect(1px, 1px, 1px, 1px);
            padding: 0;
            border: 0;
            height: 1px;
            width: 1px;
            overflow: hidden;
        }

        .katex .base {
            position: relative;
            display: inline-block;
        }

        .katex .strut {
            display: inline-block;
        }

        .katex .textbf {
            font-weight: bold;
        }

        .katex .textit {
            font-style: italic;
        }

        .katex .textrm {
            font-family: KaTeX_Main;
        }

        .katex .textsf {
            font-family: KaTeX_SansSerif;
        }

        .katex .texttt {
            font-family: KaTeX_Typewriter;
        }

        .katex .mathit {
            font-family: KaTeX_Math;
            font-style: italic;
        }

        .katex .mathrm {
            font-style: normal;
        }

        .katex .mathbf {
            font-family: KaTeX_Main;
            font-weight: bold;
        }

        .katex .boldsymbol {
            font-family: KaTeX_Math;
            font-weight: bold;
            font-style: italic;
        }

        .katex .amsrm {
            font-family: KaTeX_AMS;
        }

        .katex .mathbb {
            font-family: KaTeX_AMS;
        }

        .katex .mathcal {
            font-family: KaTeX_Caligraphic;
        }

        .katex .mathfrak {
            font-family: KaTeX_Fraktur;
        }

        .katex .mathtt {
            font-family: KaTeX_Typewriter;
        }

        .katex .mathscr {
            font-family: KaTeX_Script;
        }

        .katex .mathsf {
            font-family: KaTeX_SansSerif;
        }

        .katex .mainit {
            font-family: KaTeX_Main;
            font-style: italic;
        }

        .katex .mainrm {
            font-family: KaTeX_Main;
            font-style: normal;
        }

        .katex .vlist-t {
            display: inline-table;
            table-layout: fixed;
        }

        .katex .vlist-r {
            display: table-row;
        }

        .katex .vlist {
            display: table-cell;
            vertical-align: bottom;
            position: relative;
        }

        .katex .vlist > span {
            display: block;
            height: 0;
            position: relative;
        }

        .katex .vlist > span > span {
            display: inline-block;
        }

        .katex .vlist > span > .pstrut {
            overflow: hidden;
            width: 0;
        }

        .katex .vlist-t2 {
            margin-right: -2px;
        }

        .katex .vlist-s {
            display: table-cell;
            vertical-align: bottom;
            font-size: 1px;
            width: 2px;
        }

        .katex .msupsub {
            text-align: left;
        }

        .katex .mfrac > span > span {
            text-align: center;
        }

        .katex .mfrac .frac-line {
            display: inline-block;
            width: 100%;
        }

        .katex .mspace {
            display: inline-block;
        }

        .katex .mspace.negativethinspace {
            margin-left: -0.16667em;
        }

        .katex .mspace.muspace {
            width: 0.055556em;
        }

        .katex .mspace.thinspace {
            width: 0.16667em;
        }

        .katex .mspace.negativemediumspace {
            margin-left: -0.22222em;
        }

        .katex .mspace.mediumspace {
            width: 0.22222em;
        }

        .katex .mspace.thickspace {
            width: 0.27778em;
        }

        .katex .mspace.sixmuspace {
            width: 0.333333em;
        }

        .katex .mspace.eightmuspace {
            width: 0.444444em;
        }

        .katex .mspace.enspace {
            width: 0.5em;
        }

        .katex .mspace.twelvemuspace {
            width: 0.666667em;
        }

        .katex .mspace.quad {
            width: 1em;
        }

        .katex .mspace.qquad {
            width: 2em;
        }

        .katex .llap,
        .katex .rlap,
        .katex .clap {
            width: 0;
            position: relative;
        }

        .katex .llap > .inner,
        .katex .rlap > .inner,
        .katex .clap > .inner {
            position: absolute;
        }

        .katex .llap > .fix,
        .katex .rlap > .fix,
        .katex .clap > .fix {
            display: inline-block;
        }

        .katex .llap > .inner {
            right: 0;
        }

        .katex .rlap > .inner,
        .katex .clap > .inner {
            left: 0;
        }

        .katex .clap > .inner > span {
            margin-left: -50%;
            margin-right: 50%;
        }

        .katex .rule {
            display: inline-block;
            border: solid 0;
            position: relative;
        }

        .katex .overline .overline-line,
        .katex .underline .underline-line {
            display: inline-block;
            width: 100%;
        }

        .katex .sqrt > .root {
            margin-left: 0.27777778em;
            margin-right: -0.55555556em;
        }

        .katex .sizing,
        .katex .fontsize-ensurer {
            display: inline-block;
        }

        .katex .sizing.reset-size1.size1,
        .katex .fontsize-ensurer.reset-size1.size1 {
            font-size: 1em;
        }

        .katex .sizing.reset-size1.size2,
        .katex .fontsize-ensurer.reset-size1.size2 {
            font-size: 1.2em;
        }

        .katex .sizing.reset-size1.size3,
        .katex .fontsize-ensurer.reset-size1.size3 {
            font-size: 1.4em;
        }

        .katex .sizing.reset-size1.size4,
        .katex .fontsize-ensurer.reset-size1.size4 {
            font-size: 1.6em;
        }

        .katex .sizing.reset-size1.size5,
        .katex .fontsize-ensurer.reset-size1.size5 {
            font-size: 1.8em;
        }

        .katex .sizing.reset-size1.size6,
        .katex .fontsize-ensurer.reset-size1.size6 {
            font-size: 2em;
        }

        .katex .sizing.reset-size1.size7,
        .katex .fontsize-ensurer.reset-size1.size7 {
            font-size: 2.4em;
        }

        .katex .sizing.reset-size1.size8,
        .katex .fontsize-ensurer.reset-size1.size8 {
            font-size: 2.88em;
        }

        .katex .sizing.reset-size1.size9,
        .katex .fontsize-ensurer.reset-size1.size9 {
            font-size: 3.456em;
        }

        .katex .sizing.reset-size1.size10,
        .katex .fontsize-ensurer.reset-size1.size10 {
            font-size: 4.148em;
        }

        .katex .sizing.reset-size1.size11,
        .katex .fontsize-ensurer.reset-size1.size11 {
            font-size: 4.976em;
        }

        .katex .sizing.reset-size2.size1,
        .katex .fontsize-ensurer.reset-size2.size1 {
            font-size: 0.83333333em;
        }

        .katex .sizing.reset-size2.size2,
        .katex .fontsize-ensurer.reset-size2.size2 {
            font-size: 1em;
        }

        .katex .sizing.reset-size2.size3,
        .katex .fontsize-ensurer.reset-size2.size3 {
            font-size: 1.16666667em;
        }

        .katex .sizing.reset-size2.size4,
        .katex .fontsize-ensurer.reset-size2.size4 {
            font-size: 1.33333333em;
        }

        .katex .sizing.reset-size2.size5,
        .katex .fontsize-ensurer.reset-size2.size5 {
            font-size: 1.5em;
        }

        .katex .sizing.reset-size2.size6,
        .katex .fontsize-ensurer.reset-size2.size6 {
            font-size: 1.66666667em;
        }

        .katex .sizing.reset-size2.size7,
        .katex .fontsize-ensurer.reset-size2.size7 {
            font-size: 2em;
        }

        .katex .sizing.reset-size2.size8,
        .katex .fontsize-ensurer.reset-size2.size8 {
            font-size: 2.4em;
        }

        .katex .sizing.reset-size2.size9,
        .katex .fontsize-ensurer.reset-size2.size9 {
            font-size: 2.88em;
        }

        .katex .sizing.reset-size2.size10,
        .katex .fontsize-ensurer.reset-size2.size10 {
            font-size: 3.45666667em;
        }

        .katex .sizing.reset-size2.size11,
        .katex .fontsize-ensurer.reset-size2.size11 {
            font-size: 4.14666667em;
        }

        .katex .sizing.reset-size3.size1,
        .katex .fontsize-ensurer.reset-size3.size1 {
            font-size: 0.71428571em;
        }

        .katex .sizing.reset-size3.size2,
        .katex .fontsize-ensurer.reset-size3.size2 {
            font-size: 0.85714286em;
        }

        .katex .sizing.reset-size3.size3,
        .katex .fontsize-ensurer.reset-size3.size3 {
            font-size: 1em;
        }

        .katex .sizing.reset-size3.size4,
        .katex .fontsize-ensurer.reset-size3.size4 {
            font-size: 1.14285714em;
        }

        .katex .sizing.reset-size3.size5,
        .katex .fontsize-ensurer.reset-size3.size5 {
            font-size: 1.28571429em;
        }

        .katex .sizing.reset-size3.size6,
        .katex .fontsize-ensurer.reset-size3.size6 {
            font-size: 1.42857143em;
        }

        .katex .sizing.reset-size3.size7,
        .katex .fontsize-ensurer.reset-size3.size7 {
            font-size: 1.71428571em;
        }

        .katex .sizing.reset-size3.size8,
        .katex .fontsize-ensurer.reset-size3.size8 {
            font-size: 2.05714286em;
        }

        .katex .sizing.reset-size3.size9,
        .katex .fontsize-ensurer.reset-size3.size9 {
            font-size: 2.46857143em;
        }

        .katex .sizing.reset-size3.size10,
        .katex .fontsize-ensurer.reset-size3.size10 {
            font-size: 2.96285714em;
        }

        .katex .sizing.reset-size3.size11,
        .katex .fontsize-ensurer.reset-size3.size11 {
            font-size: 3.55428571em;
        }

        .katex .sizing.reset-size4.size1,
        .katex .fontsize-ensurer.reset-size4.size1 {
            font-size: 0.625em;
        }

        .katex .sizing.reset-size4.size2,
        .katex .fontsize-ensurer.reset-size4.size2 {
            font-size: 0.75em;
        }

        .katex .sizing.reset-size4.size3,
        .katex .fontsize-ensurer.reset-size4.size3 {
            font-size: 0.875em;
        }

        .katex .sizing.reset-size4.size4,
        .katex .fontsize-ensurer.reset-size4.size4 {
            font-size: 1em;
        }

        .katex .sizing.reset-size4.size5,
        .katex .fontsize-ensurer.reset-size4.size5 {
            font-size: 1.125em;
        }

        .katex .sizing.reset-size4.size6,
        .katex .fontsize-ensurer.reset-size4.size6 {
            font-size: 1.25em;
        }

        .katex .sizing.reset-size4.size7,
        .katex .fontsize-ensurer.reset-size4.size7 {
            font-size: 1.5em;
        }

        .katex .sizing.reset-size4.size8,
        .katex .fontsize-ensurer.reset-size4.size8 {
            font-size: 1.8em;
        }

        .katex .sizing.reset-size4.size9,
        .katex .fontsize-ensurer.reset-size4.size9 {
            font-size: 2.16em;
        }

        .katex .sizing.reset-size4.size10,
        .katex .fontsize-ensurer.reset-size4.size10 {
            font-size: 2.5925em;
        }

        .katex .sizing.reset-size4.size11,
        .katex .fontsize-ensurer.reset-size4.size11 {
            font-size: 3.11em;
        }

        .katex .sizing.reset-size5.size1,
        .katex .fontsize-ensurer.reset-size5.size1 {
            font-size: 0.55555556em;
        }

        .katex .sizing.reset-size5.size2,
        .katex .fontsize-ensurer.reset-size5.size2 {
            font-size: 0.66666667em;
        }

        .katex .sizing.reset-size5.size3,
        .katex .fontsize-ensurer.reset-size5.size3 {
            font-size: 0.77777778em;
        }

        .katex .sizing.reset-size5.size4,
        .katex .fontsize-ensurer.reset-size5.size4 {
            font-size: 0.88888889em;
        }

        .katex .sizing.reset-size5.size5,
        .katex .fontsize-ensurer.reset-size5.size5 {
            font-size: 1em;
        }

        .katex .sizing.reset-size5.size6,
        .katex .fontsize-ensurer.reset-size5.size6 {
            font-size: 1.11111111em;
        }

        .katex .sizing.reset-size5.size7,
        .katex .fontsize-ensurer.reset-size5.size7 {
            font-size: 1.33333333em;
        }

        .katex .sizing.reset-size5.size8,
        .katex .fontsize-ensurer.reset-size5.size8 {
            font-size: 1.6em;
        }

        .katex .sizing.reset-size5.size9,
        .katex .fontsize-ensurer.reset-size5.size9 {
            font-size: 1.92em;
        }

        .katex .sizing.reset-size5.size10,
        .katex .fontsize-ensurer.reset-size5.size10 {
            font-size: 2.30444444em;
        }

        .katex .sizing.reset-size5.size11,
        .katex .fontsize-ensurer.reset-size5.size11 {
            font-size: 2.76444444em;
        }

        .katex .sizing.reset-size6.size1,
        .katex .fontsize-ensurer.reset-size6.size1 {
            font-size: 0.5em;
        }

        .katex .sizing.reset-size6.size2,
        .katex .fontsize-ensurer.reset-size6.size2 {
            font-size: 0.6em;
        }

        .katex .sizing.reset-size6.size3,
        .katex .fontsize-ensurer.reset-size6.size3 {
            font-size: 0.7em;
        }

        .katex .sizing.reset-size6.size4,
        .katex .fontsize-ensurer.reset-size6.size4 {
            font-size: 0.8em;
        }

        .katex .sizing.reset-size6.size5,
        .katex .fontsize-ensurer.reset-size6.size5 {
            font-size: 0.9em;
        }

        .katex .sizing.reset-size6.size6,
        .katex .fontsize-ensurer.reset-size6.size6 {
            font-size: 1em;
        }

        .katex .sizing.reset-size6.size7,
        .katex .fontsize-ensurer.reset-size6.size7 {
            font-size: 1.2em;
        }

        .katex .sizing.reset-size6.size8,
        .katex .fontsize-ensurer.reset-size6.size8 {
            font-size: 1.44em;
        }

        .katex .sizing.reset-size6.size9,
        .katex .fontsize-ensurer.reset-size6.size9 {
            font-size: 1.728em;
        }

        .katex .sizing.reset-size6.size10,
        .katex .fontsize-ensurer.reset-size6.size10 {
            font-size: 2.074em;
        }

        .katex .sizing.reset-size6.size11,
        .katex .fontsize-ensurer.reset-size6.size11 {
            font-size: 2.488em;
        }

        .katex .sizing.reset-size7.size1,
        .katex .fontsize-ensurer.reset-size7.size1 {
            font-size: 0.41666667em;
        }

        .katex .sizing.reset-size7.size2,
        .katex .fontsize-ensurer.reset-size7.size2 {
            font-size: 0.5em;
        }

        .katex .sizing.reset-size7.size3,
        .katex .fontsize-ensurer.reset-size7.size3 {
            font-size: 0.58333333em;
        }

        .katex .sizing.reset-size7.size4,
        .katex .fontsize-ensurer.reset-size7.size4 {
            font-size: 0.66666667em;
        }

        .katex .sizing.reset-size7.size5,
        .katex .fontsize-ensurer.reset-size7.size5 {
            font-size: 0.75em;
        }

        .katex .sizing.reset-size7.size6,
        .katex .fontsize-ensurer.reset-size7.size6 {
            font-size: 0.83333333em;
        }

        .katex .sizing.reset-size7.size7,
        .katex .fontsize-ensurer.reset-size7.size7 {
            font-size: 1em;
        }

        .katex .sizing.reset-size7.size8,
        .katex .fontsize-ensurer.reset-size7.size8 {
            font-size: 1.2em;
        }

        .katex .sizing.reset-size7.size9,
        .katex .fontsize-ensurer.reset-size7.size9 {
            font-size: 1.44em;
        }

        .katex .sizing.reset-size7.size10,
        .katex .fontsize-ensurer.reset-size7.size10 {
            font-size: 1.72833333em;
        }

        .katex .sizing.reset-size7.size11,
        .katex .fontsize-ensurer.reset-size7.size11 {
            font-size: 2.07333333em;
        }

        .katex .sizing.reset-size8.size1,
        .katex .fontsize-ensurer.reset-size8.size1 {
            font-size: 0.34722222em;
        }

        .katex .sizing.reset-size8.size2,
        .katex .fontsize-ensurer.reset-size8.size2 {
            font-size: 0.41666667em;
        }

        .katex .sizing.reset-size8.size3,
        .katex .fontsize-ensurer.reset-size8.size3 {
            font-size: 0.48611111em;
        }

        .katex .sizing.reset-size8.size4,
        .katex .fontsize-ensurer.reset-size8.size4 {
            font-size: 0.55555556em;
        }

        .katex .sizing.reset-size8.size5,
        .katex .fontsize-ensurer.reset-size8.size5 {
            font-size: 0.625em;
        }

        .katex .sizing.reset-size8.size6,
        .katex .fontsize-ensurer.reset-size8.size6 {
            font-size: 0.69444444em;
        }

        .katex .sizing.reset-size8.size7,
        .katex .fontsize-ensurer.reset-size8.size7 {
            font-size: 0.83333333em;
        }

        .katex .sizing.reset-size8.size8,
        .katex .fontsize-ensurer.reset-size8.size8 {
            font-size: 1em;
        }

        .katex .sizing.reset-size8.size9,
        .katex .fontsize-ensurer.reset-size8.size9 {
            font-size: 1.2em;
        }

        .katex .sizing.reset-size8.size10,
        .katex .fontsize-ensurer.reset-size8.size10 {
            font-size: 1.44027778em;
        }

        .katex .sizing.reset-size8.size11,
        .katex .fontsize-ensurer.reset-size8.size11 {
            font-size: 1.72777778em;
        }

        .katex .sizing.reset-size9.size1,
        .katex .fontsize-ensurer.reset-size9.size1 {
            font-size: 0.28935185em;
        }

        .katex .sizing.reset-size9.size2,
        .katex .fontsize-ensurer.reset-size9.size2 {
            font-size: 0.34722222em;
        }

        .katex .sizing.reset-size9.size3,
        .katex .fontsize-ensurer.reset-size9.size3 {
            font-size: 0.40509259em;
        }

        .katex .sizing.reset-size9.size4,
        .katex .fontsize-ensurer.reset-size9.size4 {
            font-size: 0.46296296em;
        }

        .katex .sizing.reset-size9.size5,
        .katex .fontsize-ensurer.reset-size9.size5 {
            font-size: 0.52083333em;
        }

        .katex .sizing.reset-size9.size6,
        .katex .fontsize-ensurer.reset-size9.size6 {
            font-size: 0.5787037em;
        }

        .katex .sizing.reset-size9.size7,
        .katex .fontsize-ensurer.reset-size9.size7 {
            font-size: 0.69444444em;
        }

        .katex .sizing.reset-size9.size8,
        .katex .fontsize-ensurer.reset-size9.size8 {
            font-size: 0.83333333em;
        }

        .katex .sizing.reset-size9.size9,
        .katex .fontsize-ensurer.reset-size9.size9 {
            font-size: 1em;
        }

        .katex .sizing.reset-size9.size10,
        .katex .fontsize-ensurer.reset-size9.size10 {
            font-size: 1.20023148em;
        }

        .katex .sizing.reset-size9.size11,
        .katex .fontsize-ensurer.reset-size9.size11 {
            font-size: 1.43981481em;
        }

        .katex .sizing.reset-size10.size1,
        .katex .fontsize-ensurer.reset-size10.size1 {
            font-size: 0.24108004em;
        }

        .katex .sizing.reset-size10.size2,
        .katex .fontsize-ensurer.reset-size10.size2 {
            font-size: 0.28929605em;
        }

        .katex .sizing.reset-size10.size3,
        .katex .fontsize-ensurer.reset-size10.size3 {
            font-size: 0.33751205em;
        }

        .katex .sizing.reset-size10.size4,
        .katex .fontsize-ensurer.reset-size10.size4 {
            font-size: 0.38572806em;
        }

        .katex .sizing.reset-size10.size5,
        .katex .fontsize-ensurer.reset-size10.size5 {
            font-size: 0.43394407em;
        }

        .katex .sizing.reset-size10.size6,
        .katex .fontsize-ensurer.reset-size10.size6 {
            font-size: 0.48216008em;
        }

        .katex .sizing.reset-size10.size7,
        .katex .fontsize-ensurer.reset-size10.size7 {
            font-size: 0.57859209em;
        }

        .katex .sizing.reset-size10.size8,
        .katex .fontsize-ensurer.reset-size10.size8 {
            font-size: 0.69431051em;
        }

        .katex .sizing.reset-size10.size9,
        .katex .fontsize-ensurer.reset-size10.size9 {
            font-size: 0.83317261em;
        }

        .katex .sizing.reset-size10.size10,
        .katex .fontsize-ensurer.reset-size10.size10 {
            font-size: 1em;
        }

        .katex .sizing.reset-size10.size11,
        .katex .fontsize-ensurer.reset-size10.size11 {
            font-size: 1.19961427em;
        }

        .katex .sizing.reset-size11.size1,
        .katex .fontsize-ensurer.reset-size11.size1 {
            font-size: 0.20096463em;
        }

        .katex .sizing.reset-size11.size2,
        .katex .fontsize-ensurer.reset-size11.size2 {
            font-size: 0.24115756em;
        }

        .katex .sizing.reset-size11.size3,
        .katex .fontsize-ensurer.reset-size11.size3 {
            font-size: 0.28135048em;
        }

        .katex .sizing.reset-size11.size4,
        .katex .fontsize-ensurer.reset-size11.size4 {
            font-size: 0.32154341em;
        }

        .katex .sizing.reset-size11.size5,
        .katex .fontsize-ensurer.reset-size11.size5 {
            font-size: 0.36173633em;
        }

        .katex .sizing.reset-size11.size6,
        .katex .fontsize-ensurer.reset-size11.size6 {
            font-size: 0.40192926em;
        }

        .katex .sizing.reset-size11.size7,
        .katex .fontsize-ensurer.reset-size11.size7 {
            font-size: 0.48231511em;
        }

        .katex .sizing.reset-size11.size8,
        .katex .fontsize-ensurer.reset-size11.size8 {
            font-size: 0.57877814em;
        }

        .katex .sizing.reset-size11.size9,
        .katex .fontsize-ensurer.reset-size11.size9 {
            font-size: 0.69453376em;
        }

        .katex .sizing.reset-size11.size10,
        .katex .fontsize-ensurer.reset-size11.size10 {
            font-size: 0.83360129em;
        }

        .katex .sizing.reset-size11.size11,
        .katex .fontsize-ensurer.reset-size11.size11 {
            font-size: 1em;
        }

        .katex .delimsizing.size1 {
            font-family: KaTeX_Size1;
        }

        .katex .delimsizing.size2 {
            font-family: KaTeX_Size2;
        }

        .katex .delimsizing.size3 {
            font-family: KaTeX_Size3;
        }

        .katex .delimsizing.size4 {
            font-family: KaTeX_Size4;
        }

        .katex .delimsizing.mult .delim-size1 > span {
            font-family: KaTeX_Size1;
        }

        .katex .delimsizing.mult .delim-size4 > span {
            font-family: KaTeX_Size4;
        }

        .katex .nulldelimiter {
            display: inline-block;
            width: 0.12em;
        }

        .katex .delimcenter {
            position: relative;
        }

        .katex .op-symbol {
            position: relative;
        }

        .katex .op-symbol.small-op {
            font-family: KaTeX_Size1;
        }

        .katex .op-symbol.large-op {
            font-family: KaTeX_Size2;
        }

        .katex .op-limits > .vlist-t {
            text-align: center;
        }

        .katex .accent > .vlist-t {
            text-align: center;
        }

        .katex .accent .accent-body {
            width: 0;
            position: relative;
        }

        .katex .overlay {
            display: block;
        }

        .katex .mtable .vertical-separator {
            display: inline-block;
            margin: 0 -0.125em;
            width: 0.25em;
        }

        .katex .mtable .arraycolsep {
            display: inline-block;
        }

        .katex .mtable .col-align-c > .vlist-t {
            text-align: center;
        }

        .katex .mtable .col-align-l > .vlist-t {
            text-align: left;
        }

        .katex .mtable .col-align-r > .vlist-t {
            text-align: right;
        }

        .katex .svg-align {
            text-align: left;
        }

        .katex svg {
            display: block;
            position: absolute;
            width: 100%;
            fill: currentColor;
            stroke: currentColor;
            fill-rule: nonzero;
            fill-opacity: 1;
            stroke-width: 1;
            stroke-linecap: butt;
            stroke-linejoin: miter;
            stroke-miterlimit: 4;
            stroke-dasharray: none;
            stroke-dashoffset: 0;
            stroke-opacity: 1;
        }

        .katex svg path {
            stroke: none;
        }

        .katex .vertical-separator svg {
            width: 0.25em;
        }

        .katex .stretchy {
            width: 100%;
            display: block;
        }

        .katex .stretchy:before,
        .katex .stretchy:after {
            content: "";
        }

        .katex .hide-tail {
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .katex .halfarrow-left {
            position: absolute;
            left: 0;
            width: 50.1%;
            overflow: hidden;
        }

        .katex .halfarrow-right {
            position: absolute;
            right: 0;
            width: 50%;
            overflow: hidden;
        }

        .katex .brace-left {
            position: absolute;
            left: 0;
            width: 25.1%;
            overflow: hidden;
        }

        .katex .brace-center {
            position: absolute;
            left: 25%;
            width: 50%;
            overflow: hidden;
        }

        .katex .brace-right {
            position: absolute;
            right: 0;
            width: 25.1%;
            overflow: hidden;
        }

        .katex .x-arrow-pad {
            padding: 0 0.5em;
        }

        .katex .x-arrow,
        .katex .mover,
        .katex .munder {
            text-align: center;
        }

        .katex .boxpad {
            padding: 0 0.3em 0 0.3em;
        }

        .katex .fbox {
            box-sizing: border-box;
            border: 0.04em solid black;
        }

        .katex .fcolorbox {
            box-sizing: border-box;
            border: 0.04em solid;
        }

        .katex .cancel-pad {
            padding: 0 0.2em 0 0.2em;
        }

        .katex .mord + .cancel-lap,
        .katex .mbin + .cancel-lap {
            margin-left: -0.2em;
        }

        .katex .cancel-lap + .mord,
        .katex .cancel-lap + .mbin,
        .katex .cancel-lap + .msupsub {
            margin-left: -0.2em;
        }

        .katex .sout {
            border-bottom-style: solid;
            border-bottom-width: 0.08em;
        }</style><style type="text/css">
        #free-reward-panel .reward-users-modal main {
            padding: 0;
        }
    </style><style type="text/css">
        @charset "UTF-8";
        /*
         * 变量
        */
        .reward-note-modal .v-modal {
            width: 620px;
            text-align: center;
        }
        .reward-note-modal .v-modal form {
            margin: 0 auto 25px auto;
            padding: 0 40px;
        }
        .reward-note-modal .v-modal .reward-intro {
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 16px;
        }
        .reward-note-modal .v-modal .reward-intro .avatar {
            cursor: default !important;
            width: 36px;
            height: 36px;
            margin-right: 10px;
            display: inline-block;
        }
        .reward-note-modal .v-modal .reward-intro .intro {
            margin-right: 5px;
            font-weight: bold;
            vertical-align: middle;
        }
        .reward-note-modal .v-modal .reward-intro i {
            color: #EA6F5A;
            vertical-align: middle;
        }
        .reward-note-modal .v-modal .main-inputs {
            margin: 25px 0;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group {
            margin: 0 -5px;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group input {
            display: none;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group input:checked + .option {
            color: #EA6F5A;
            border-color: #EA6F5A;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group .custom-amount:checked + .option .custom-text {
            opacity: 0;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group .custom-amount:checked + .option .custom-amount-input {
            opacity: 1;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group .option {
            position: relative;
            margin: 0 5px 15px;
            width: 156px;
            height: 56px;
            line-height: 54px;
            border: 1px solid #E6E6E6;
            border-radius: 4px;
            font-weight: normal;
            color: #999999;
            cursor: pointer;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group .option i {
            font-size: 16px;
            vertical-align: middle;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group .option .amount {
            font-size: 28px;
            vertical-align: middle;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group .option .piece {
            font-size: 13px;
            vertical-align: sub;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group .option .custom-amount-input {
            position: absolute;
            top: 0;
            z-index: -1;
            width: 100%;
            opacity: 0;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group .option .custom-amount-input i {
            position: absolute;
            top: 0;
            left: 10px;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group .option .custom-amount-input .piece {
            position: absolute;
            top: 4px;
            right: 10px;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group .option .custom-amount-input input {
            display: block;
            margin: 0 auto;
            width: 80px;
            height: 54px;
            line-height: 54px;
            border: none;
            font-size: 28px;
            text-align: center;
            background: transparent;
            -moz-appearance: textfield;
        }
        .reward-note-modal .v-modal .main-inputs .amount-group .option .custom-amount-input input::-webkit-outer-spin-button, .reward-note-modal .v-modal .main-inputs .amount-group .option .custom-amount-input input::-webkit-inner-spin-button {
            -webkit-appearance: none !important;
        }
        .reward-note-modal .v-modal .main-inputs .message {
            padding: 15px 20px;
            margin-bottom: 0;
            font-size: 14px;
            border: 1px solid #E6E6E6;
            color: #333333;
            border-radius: 4px;
            background-color: rgba(180, 180, 180, 0.1);
        }
        .reward-note-modal .v-modal .main-inputs .message textarea {
            width: 100%;
            height: 44px;
            padding: 0;
            margin: 0;
            resize: none;
            background: none !important;
            border: none !important;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .reward-note-modal .v-modal .main-inputs .message textarea:focus {
            outline: none;
        }
        .reward-note-modal .v-modal .reward-info .amount {
            font-size: 28px;
            font-weight: bold;
            color: #EA6F5A;
        }
        .reward-note-modal .v-modal .reward-info .pay-method {
            font-size: 14px;
        }
        .reward-note-modal .v-modal .reward-info .pay-method a {
            color: #3194D0;
        }
        .reward-note-modal .v-modal .choose-pay {
            margin: 0 -5px;
        }
        .reward-note-modal .v-modal .choose-pay input {
            display: none;
        }
        .reward-note-modal .v-modal .choose-pay input:checked + .option {
            color: #EA6F5A;
            border-color: #EA6F5A;
        }
        .reward-note-modal .v-modal .choose-pay .option {
            margin: 20px 5px 10px;
            width: 156px;
            height: 56px;
            line-height: 54px;
            text-align: center;
            border: 1px solid #E6E6E6;
            border-radius: 4px;
            cursor: pointer;
        }
        .reward-note-modal .v-modal .choose-pay .option img {
            height: 30px;
        }
        .reward-note-modal .v-modal .choose-pay .option img.day.alipay, .reward-note-modal .v-modal .choose-pay .option img.night.alipay {
            min-width: 85px;
        }
        .reward-note-modal .v-modal .choose-pay .option img.day.wechat, .reward-note-modal .v-modal .choose-pay .option img.night.wechat {
            min-width: 112px;
        }
        .reward-note-modal .v-modal .choose-pay .option img.night {
            display: none;
        }
        .reward-note-modal .v-modal .choose-pay .tooltip {
            width: 230px;
        }
        .reward-note-modal .v-modal .modal-footer {
            padding: 0 15px 20px;
            border: none;
            background-color: transparent;
            text-align: center;
        }
        .reward-note-modal .v-modal .modal-footer .btn {
            padding: 8px 45px;
            font-size: 24px;
        }
        .reward-note-modal .v-modal .btn-pay {
            padding: 8px 25px;
            font-size: 16px;
            color: #ffffff;
            background-color: #F5A623;
        }
        .weixin-pay, .success-pay {
            text-align: center;
        }
        .weixin-pay .v-modal, .success-pay .v-modal {
            width: 350px;
        }
        .weixin-pay .ic-successed, .success-pay .ic-successed {
            font-size: 60px;
            color: #3db922;
        }
        .weixin-pay h2, .weixin-pay h3, .success-pay h2, .success-pay h3 {
            margin-bottom: 20px;
            color: #333333;
        }
        .weixin-pay h2, .success-pay h2 {
            margin: 0 0 40px 0;
            font-size: 24px;
        }
        .weixin-pay .bind-text, .success-pay .bind-text {
            position: relative;
            margin-bottom: 30px;
            font-size: 14px;
            color: #999999;
        }
        .weixin-pay .bind-text:before, .weixin-pay .bind-text:after, .success-pay .bind-text:before, .success-pay .bind-text:after {
            content: "";
            border-top: 1px solid #999;
            display: block;
            position: absolute;
            width: 40px;
            top: 8px;
        }
        .weixin-pay .bind-text:before, .success-pay .bind-text:before {
            left: 30px;
        }
        .weixin-pay .bind-text:after, .success-pay .bind-text:after {
            right: 30px;
        }
        .weixin-pay .share-bind, .success-pay .share-bind {
            display: block;
            margin-bottom: 30px;
        }
        .weixin-pay .share-bind i, .success-pay .share-bind i {
            margin-right: 4px;
            font-size: 22px;
            vertical-align: middle;
        }
        .weixin-pay .share-bind.wechat i, .success-pay .share-bind.wechat i {
            color: #00BB29;
        }
        .weixin-pay .share-bind.weibo i, .success-pay .share-bind.weibo i {
            color: #E05244;
        }
        .weixin-pay .wx-qr-code, .success-pay .wx-qr-code {
            display: inline-block;
        }
        .weixin-pay .wx-qr-code img, .success-pay .wx-qr-code img {
            margin: 0 auto;
            padding: 10px;
            width: 200px;
            background-color: #ffffff;
        }
        .weixin-pay .pay-amount, .success-pay .pay-amount {
            margin: 20px 0;
            color: #787878;
        }
        .weixin-pay .pay-amount span, .success-pay .pay-amount span {
            color: #F5A623;
        }
    </style><style type="text/css">
        @charset "UTF-8";
        /*
         * 变量
        */
        .v-modal-wrap {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            background-color: transparent;
        }
        .v-modal-wrap.modal-leave-active {
            -webkit-transition: opacity 0.3s;
            -o-transition: opacity 0.3s;
            transition: opacity 0.3s;
        }
        .v-modal-wrap.modal-enter-active .v-modal-mask, .v-modal-wrap.modal-leave-active .v-modal-mask {
            opacity: 0;
        }
        .v-modal-wrap.modal-enter-active .v-modal, .v-modal-wrap.modal-leave-active .v-modal {
            -webkit-transform: translate(-50%, -70%);
            -ms-transform: translate(-50%, -70%);
            transform: translate(-50%, -70%);
            opacity: 0;
        }
        .v-modal-wrap .v-modal-mask {
            background-color: rgba(255, 255, 255, 0.7);
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            -webkit-transition: opacity 0.3s;
            -o-transition: opacity 0.3s;
            transition: opacity 0.3s;
            opacity: 1;
        }
        .v-modal-wrap .v-modal {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            border-radius: 6px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            background-color: #fff;
            -webkit-box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
            transition: opacity 0.3s, -webkit-transform 0.3s;
            -o-transition: opacity 0.3s, transform 0.3s;
            transition: opacity 0.3s, transform 0.3s;
            transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s;
            opacity: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            overflow: hidden;
        }
        .v-modal-wrap .v-modal > header:before, .v-modal-wrap .v-modal > header:after, .v-modal-wrap .v-modal > main:before, .v-modal-wrap .v-modal > main:after, .v-modal-wrap .v-modal > footer:before, .v-modal-wrap .v-modal > footer:after {
            content: '';
            clear: both;
            display: table;
        }
        .v-modal-wrap .v-modal > header {
            padding: 20px;
            border-bottom: 1px solid #F0F0F0;
        }
        .v-modal-wrap .v-modal > header h4 {
            margin: 0;
            color: #333;
            text-align: left;
        }
        .v-modal-wrap .v-modal .close {
            position: absolute;
            right: 16px;
            top: 20px;
            font-size: 26px;
            line-height: 20px;
            color: rgba(0, 0, 0, 0.8);
        }
        .v-modal-wrap .v-modal .close:hover {
            color: #000000;
        }
        .v-modal-wrap .v-modal > main {
            padding: 20px 20px 20px 20px;
            font-size: 15px;
            color: #333;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            overflow-x: hidden;
            overflow-y: auto;
        }
        .v-modal-wrap .v-modal > footer {
            padding: 20px;
            background-color: #fff;
        }
        .v-modal-wrap .v-modal > footer button {
            padding: 0;
            margin: 0;
            background-color: transparent;
            border: 0;
            float: right;
        }
        .v-modal-wrap .v-modal > footer button:focus {
            outline: 0;
        }
        .v-modal-wrap .v-modal > footer .submit {
            padding: 4px 12px;
            border: 1px solid;
            border-radius: 20px;
        }
        .v-modal-wrap .v-modal > footer .cancel {
            margin-top: 5px;
        }
        .v-modal-wrap .v-modal > footer .cancel:hover {
            color: #333333;
        }
        .reader-night-mode .v-modal-wrap .v-modal-mask {
            background-color: rgba(63, 63, 63, 0.7);
        }
        .reader-night-mode .v-modal-wrap .v-modal {
            background-color: #3f3f3f;
        }
        .reader-night-mode .v-modal-wrap .v-modal header {
            border-color: #2F2F2F;
        }
        .reader-night-mode .v-modal-wrap .v-modal header h4 {
            color: #C8C8C8;
        }
        .reader-night-mode .v-modal-wrap .v-modal .close {
            color: #C8C8C8;
        }
        .reader-night-mode .v-modal-wrap .v-modal .close:hover {
            color: #ffffff;
        }
        .reader-night-mode .v-modal-wrap .v-modal main {
            color: #C8C8C8;
        }
        .reader-night-mode .v-modal-wrap .v-modal footer {
            background-color: #3f3f3f;
        }
        .reader-night-mode .v-modal-wrap .v-modal footer .cancel:hover {
            color: #C8C8C8;
        }
    </style><style type="text/css">
        @charset "UTF-8";
        /*
         * 变量
        */
        .like[data-v-6ddd02c6] {
            display: inline-block;
        }
        .like .like-group[data-v-6ddd02c6] {
            position: relative;
            padding: 13px 0 15px 0;
            font-size: 0;
            border: 1px solid #EA6F5A;
            border-radius: 40px;
        }
        .like .like-group[data-v-6ddd02c6]:hover {
            background-color: rgba(236, 97, 73, 0.05);
        }
        .like .like-group .btn-like[data-v-6ddd02c6] {
            display: inline-block;
            font-size: 19px;
        }
        .like .like-group .btn-like[data-v-6ddd02c6]:before {
            content: '';
            position: absolute;
            left: 12px;
            top: 2px;
            width: 50px;
            height: 50px;
            background-image: url(//cdn2.jianshu.io/assets/web/like_animation_steps-62a00a7b52377d3069927cdb8e61fd34.png);
            background-position: left;
            background-repeat: no-repeat;
            background-size: 1000px 50px;
        }
        .like .like-group .btn-like a[data-v-6ddd02c6] {
            position: relative;
            padding: 18px 30px 18px 55px;
            color: #EA6F5A;
        }
        .like .like-group .modal-wrap[data-v-6ddd02c6] {
            font-size: 18px;
            border-left: 1px solid rgba(236, 97, 73, 0.4);
            display: inline-block;
            margin-left: -15px;
        }
        .like .like-group .modal-wrap a[data-v-6ddd02c6] {
            color: #EA6F5A;
            padding: 18px 26px 18px 18px;
        }
        .like .like-group.like-animation[data-v-6ddd02c6], .like .like-group.active[data-v-6ddd02c6] {
            background-color: #EA6F5A;
        }
        .like .like-group.like-animation .btn-like a[data-v-6ddd02c6], .like .like-group.active .btn-like a[data-v-6ddd02c6] {
            color: white;
        }
        .like .like-group.like-animation .modal-wrap[data-v-6ddd02c6], .like .like-group.active .modal-wrap[data-v-6ddd02c6] {
            border-left: 1px solid white;
        }
        .like .like-group.like-animation .modal-wrap a[data-v-6ddd02c6], .like .like-group.active .modal-wrap a[data-v-6ddd02c6] {
            color: white;
        }
        .like .like-group.like-animation .btn-like[data-v-6ddd02c6]:before {
            -webkit-animation: likeBlast-data-v-6ddd02c6 0.6s 1 steps(19);
            animation: likeBlast-data-v-6ddd02c6 0.6s 1 steps(19);
            background-position: right;
        }
        @-webkit-keyframes likeBlast {
            0% {
                background-position: left;
            }
            100% {
                background-position: right;
            }
        }
        @keyframes likeBlast-data-v-6ddd02c6 {
            0% {
                background-position: left;
            }
            100% {
                background-position: right;
            }
        }
        .like .like-group.active .btn-like[data-v-6ddd02c6]:before {
            background-position: right;
        }
    </style><style type="text/css">
        @charset "UTF-8";
        /*
         * 变量
        */
        .main {
            position: relative;
            margin: 0 auto;
            padding: 0 0 30px 0;
            width: 620px;
        }
        .main .title {
            padding-left: 8px;
            border-left: 3px solid #EA6F5A;
            line-height: 1;
            font-size: 15px;
        }
        .main .collection-settings {
            position: absolute;
            top: 2px;
            right: 0;
            font-size: 13px;
            color: #A0A0A0;
        }
        .main .collection-settings span {
            padding-left: 4px;
        }
        .main .include-collection {
            width: 100%;
            padding-top: 20px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        .main .include-collection .item {
            display: inline-block;
            margin: 0 12px 12px 0;
            min-height: 32px;
            background-color: white;
            border: 1px solid #DCDCDC;
            border-radius: 4px;
            vertical-align: top;
            overflow: hidden;
        }
        .main .include-collection .item img {
            width: 32px;
            height: 32px;
        }
        .main .include-collection .item .name {
            display: inline-block;
            padding: 0 10px;
            font-size: 14px;
        }
        .main .include-collection .add-collection-wrap {
            margin: 0 12px 12px 0;
        }
        .main .include-collection .add-collection {
            padding: 8px 12px;
            font-size: 14px;
            border: 1px solid #DCDCDC;
            border-radius: 4px;
        }
        .main .include-collection .add-collection i {
            margin-right: 4px;
            color: #969696;
        }
        .main .recommend-note a {
            position: relative;
            margin: 20px 2px 0 0;
            width: 200px;
            height: 160px;
            display: inline-block;
        }
        .main .recommend-note a:after {
            content: "";
            position: absolute;
            width: 200px;
            height: 160px;
            border-radius: 0 0 4px 4px;
            -webkit-box-shadow: inset 0px -80px 50px -22px rgba(0, 0, 0, 0.6);
            box-shadow: inset 0px -80px 50px -22px rgba(0, 0, 0, 0.6);
            top: 0;
            left: 0;
            z-index: 1;
        }
        .main .recommend-note .name {
            position: absolute;
            bottom: 40px;
            left: 10px;
            right: 10px;
            font-size: 17px;
            font-weight: bold;
            color: #ffffff;
            z-index: 2;
        }
        .main .recommend-note .author {
            position: absolute;
            bottom: 10px;
            left: 10px;
            right: 10px;
            z-index: 2;
        }
        .main .recommend-note .avatar {
            width: 20px;
            height: 20px;
            display: inline-block;
        }
        .main .recommend-note .avatar img {
            border-radius: 50%;
        }
        .main .recommend-note .author-name {
            font-size: 12px;
            color: #ffffff;
            display: inline-block;
            vertical-align: -1px;
        }
        .main .show-more {
            margin: 0 12px 12px 0;
            font-size: 14px;
            color: #A0A0A0;
        }
    </style><style type="text/css">
        @charset "UTF-8";
        /*
         * 变量
        */
        .recommend-note {
            margin-bottom: 20px;
        }
        .recommend-note .meta, .recommend-note .list {
            width: 620px;
            margin: 0 auto;
        }
        .recommend-note .meta .title {
            padding-left: 8px;
            border-left: 3px solid #EA6F5A;
            line-height: 1;
            font-size: 15px;
        }
        .recommend-note .meta .title .more {
            float: right;
            font-size: 14px;
            color: #A0A0A0;
        }
        .recommend-note .list {
            margin-top: 20px;
        }
        .recommend-note .list .note {
            display: block;
            margin-bottom: 25px;
            padding: 0 0 25px 0;
            border-bottom: 1px solid #DDDDDD;
        }
        .recommend-note .list .note.have-img {
            min-height: 136px;
        }
        .recommend-note .list .note .cover {
            float: right;
            margin: -5px 0 0 15px;
            width: 150px;
            height: 120px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 6px;
        }
        .recommend-note .list .note .title {
            display: inherit;
            margin-bottom: 4px;
            font-size: 18px;
            line-height: 27px;
            font-weight: bold;
            color: #333333;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .recommend-note .list .note .title:hover {
            text-decoration: underline;
        }
        .recommend-note .list .note .title:visited {
            color: #999999;
        }
        .recommend-note .list .note .description {
            margin-bottom: 12px;
            font-size: 13px;
            line-height: 23px;
            color: #333333;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .recommend-note .list .note .author .avatar {
            display: inline-block;
            width: 24px;
            height: 24px;
            margin-right: 3px;
            border-radius: 50%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            vertical-align: middle;
        }
        .recommend-note .list .note .author .name {
            font-size: 13px;
            color: #333333;
            vertical-align: middle;
        }
    </style><style type="text/css">
        @charset "UTF-8";
        /*
         * 变量
        */
        .pc-bind-phone-modal .modal-content, .pc-bind-phone-modal .modal-body {
            overflow: visible;
        }
        .pc-bind-phone-modal .dropdown-menu {
            max-height: 300px;
            overflow: auto;
        }
        .pc-bind-phone-modal .dropdown-menu .tag {
            background-color: #efefef;
            color: #4A4A4A;
            height: 28px;
            line-height: 28px;
            padding-left: 25px;
            font-size: 12px;
        }
        .reader-night-mode .pc-bind-phone-modal .dropdown-menu .tag {
            background-color: #2F2F2F;
            color: #999999;
        }
    </style></head>

<body lang="zh-CN" class="reader-black-font">
<!-- 全局顶部导航栏 -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="width-limit">
        <!-- 左上方 Logo -->
        <a class="logo" href="/"><img src="//cdn2.jianshu.io/assets/web/nav-logo-4c7bbafe27adc892f3046e6978459bac.png" alt="Nav logo"></a>

        <!-- 右上角 -->
        <!-- 未登录显示登录/注册/写文章 -->
        <a class="btn write-btn" target="_blank" href="/writer#/">
            <i class="iconfont ic-write"></i>写文章
        </a>      <a class="btn sign-up" href="/sign_up">注册</a>
        <a class="btn log-in" href="/sign_in">登录</a>

        <!-- 如果用户登录，显示下拉菜单 -->

        <div class="style-mode"><a class="style-mode-btn"><i class="iconfont ic-navigation-mode"></i></a> <div class="popover-modal" style="left: 0px; display: none;"><div class="meta"><i class="iconfont ic-navigation-night"></i><span>夜间模式</span></div> <div class="switch day-night-group"><a class="switch-btn">开</a> <a class="switch-btn active">关</a></div> <hr> <div class="switch font-family-group"><a class="switch-btn font-song">宋体</a> <a class="switch-btn font-hei active">黑体</a></div> <div class="switch"><a class="switch-btn active">简</a> <a class="switch-btn">繁</a></div></div></div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav">
                    <li class="tab ">
                        <a href="/">
                            <span class="menu-text">首页</span><i class="iconfont ic-navigation-discover menu-icon"></i>
                        </a>            </li>
                    <li class="tab ">
                        <a id="web-nav-app-download-btn" class="app-download-btn" href="/apps?utm_medium=desktop&amp;utm_source=navbar-apps"><span class="menu-text">下载App</span><i class="iconfont ic-navigation-download menu-icon"></i></a>
                    </li>
                    <li class="search">
                        <form target="_blank" action="/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
                            <input type="text" name="q" id="q" value="" autocomplete="off" placeholder="搜索" class="search-input">
                            <a class="search-btn" href="javascript:void(null)"><i class="iconfont ic-search"></i></a>
                        </form>          </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<div class="note">
    <a target="_blank" href="/apps/download?utm_source=sbc" id="web-note-ad-fixed" style="left: 990px; display: block;"><span class="close">×</span></a>
    <div class="post">
        <div class="article">
            <h1 class="title">Agentzh的Nginx教程(OpenxResty三部曲1/3)</h1>

            <!-- 作者区域 -->
            <div class="author">
                <a class="avatar" href="/u/8gXt87">
                    <img src="//upload.jianshu.io/users/upload_avatars/1772/f65180b5a954?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96" alt="96">
                </a>          <div class="info">
                    <span class="name"><a href="/u/8gXt87">锅巴GG</a></span>
                    <!-- 关注用户按钮 -->
                    <a class="btn btn-success follow"><i class="iconfont ic-follow"></i><span>关注</span></a>
                    <!-- 文章数据信息 -->
                    <div class="meta">
                        <!-- 如果文章更新时间大于发布时间，那么使用 tooltip 显示更新时间 -->
                        <span class="publish-time" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="最后编辑于 2017.12.03 03:57">2016.04.10 23:21*</span>
                        <span class="wordage">字数 2216</span>
                        <span class="views-count">阅读 795</span><span class="comments-count">评论 0</span><span class="likes-count">喜欢 2</span></div>
                </div>
                <!-- 如果是当前作者，加入编辑按钮 -->
            </div>

            <!-- 文章内容 -->
            <div data-note-content="" class="show-content">
                <div class="show-content-free">
                    <p><code>作者</code>：<a href="https://link.jianshu.com?t=https://github.com/agentzh" target="_blank" rel="nofollow">春哥</a><br>
                        <code>读者</code>：锅巴GG</p>
                    <pre class="hljs undefined"><code>Nginx的配置文件使用的就是一门微型的编程语言
许多真实世界里的Nginx配置文件其实就是一个一个的小程序。
</code></pre>
                    <blockquote>
                        <p>很久之前就拜读过春哥的很多文章，以及Nginx的相关博文，大部分内容都是来自持续关注的<a href="https://link.jianshu.com?t=http://openresty.org/cn/getting-started.html" target="_blank" rel="nofollow">OpenResty</a>内容，但是本教程确实是基础中的基础。</p>
                        <p>由于最近工作的关系，需要系统的学习掌握Nginx架构特性以及利用<strong><a href="https://link.jianshu.com?t=https://github.com/openresty/lua-nginx-module" target="_blank" rel="nofollow">lua-nginx-module</a></strong>进行二次开发，不仅开始重读相关的资料，而重读的时候，尤其以此教程入手获益匪浅，故记录之。</p>
                        <p>本笔记只按自己的理解记录，和原书差异较大，有问题请参阅<a href="https://link.jianshu.com?t=https://openresty.org/download/agentzh-nginx-tutorials-zhcn.pdf" target="_blank" rel="nofollow">原书</a>。</p>
                    </blockquote>
                    <h3>Nginx配置指令的11个阶段</h3>
                    <ul>
                        <li>重要的事情放前面</li>
                    </ul>
                    <blockquote>
                        <p>我的理解，应该要掌握的内容重点是在：</p>
                    </blockquote>
                    <ol>
                        <li>Ngnix配置文件的自身生命式特性</li>
                        <li>变量的作用域</li>
                        <li>变量书写顺序依赖阶段和模块实现</li>
                    </ol>
                    <blockquote>
                    </blockquote>
                    <div class="image-package">
                        <div class="image-container" style="max-width: 507px; max-height: 1645px; background-color: transparent;">
                            <div class="image-container-fill" style="padding-bottom: 235.11%;"></div>
                            <div class="image-view" data-width="507" data-height="1192"><img data-original-src="//upload-images.jianshu.io/upload_images/1772-bd127ac9190a4de1.png" data-original-width="507" data-original-height="1192" data-original-format="image/png" data-original-filesize="85931" class="" style="cursor: zoom-in;" src="//upload-images.jianshu.io/upload_images/1772-bd127ac9190a4de1.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/507"></div>
                        </div>
                        <div class="image-caption">Nginx配置指令的11个阶段</div>
                    </div>
                    <h3>谈谈变量</h3>
                    <blockquote>
                        <p>在 Nginx 配置中，变量只能存放一种类型的值，因为也只存在一种类型的值，那就是字符串。</p>
                    </blockquote>
                    <pre class="hljs bash"><code class="bash"><span class="hljs-comment"># 使用了标准ngx_rewrite模块的set配置指令对变量$a进行了赋值操作          </span>
<span class="hljs-built_in">set</span> <span class="hljs-variable">$a</span> <span class="hljs-string">"hello world"</span>;
<span class="hljs-comment"># “变量插值”（variable interpolation）</span>
<span class="hljs-built_in">set</span> <span class="hljs-variable">$b</span> <span class="hljs-string">"<span class="hljs-variable">$a</span>, <span class="hljs-variable">$a</span>"</span>;
<span class="hljs-comment">#使用特别的记法来消除歧义,当引用的变量名之后紧跟着变量名的构成字符时（比如后跟字母、数字以及下划线）</span>
<span class="hljs-built_in">set</span> <span class="hljs-variable">$first</span> <span class="hljs-string">"hello "</span>;
<span class="hljs-built_in">echo</span> <span class="hljs-string">"<span class="hljs-variable">${first}</span>world"</span>;
</code></pre>
                    <blockquote>
                        <p><a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpRewriteModule#set" target="_blank" rel="nofollow">set</a> 指令（以及 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpGeoModule#geo" target="_blank" rel="nofollow">geo</a> 指令）不仅有赋值的功能，它还有创建 Nginx 变量的副作用，即当作为赋值对象的变量尚不存在时，它会自动创建该变量。</p>
                        <p>Nginx 变量的创建和赋值操作发生在全然不同的时间阶段。Nginx 变量的创建只能发生在 Nginx 配置加载的时候，或者说 Nginx 启动的时候；而赋值操作则只会发生在请求实际处理的时候。这意味着不创建而直接使用变量会导致启动失败，同时也意味着我们无法在请求处理时动态地创建新的 Nginx 变量。</p>
                        <ul>
                            <li><strong>Nginx 变量一旦创建，其变量名的可见范围就是整个 Nginx 配置，甚至可以跨越不同虚拟主机的 server 配置块。</strong></li>
                            <li><strong>Nginx 变量名的可见范围虽然是整个配置，但每个请求都有所有变量的独立副本，或者说都有各变量用来存放值的容器的独立副本，彼此互不干扰。</strong></li>
                        </ul>
                        <p><code>Nginx 变量的生命期是不可能跨越请求边界的。</code></p>
                    </blockquote>
                    <p>Nginx 变量的一个常见误区是认为变量容器的生命期，是与 location<br>
                        配置块绑定的，其实不然：</p>
                    <pre class="hljs bash"><code class="bash">server {
    listen 8080;
    location /foo {
      <span class="hljs-built_in">set</span> <span class="hljs-variable">$a</span> hello;
      <span class="hljs-comment">#使用第三方模块 [ngx_echo]提供的 [echo_exec]配置指令</span>
      <span class="hljs-comment">#发起到 location /bar的“内部跳转”</span>
      echo_exec /bar;
    } `
    location /bar {
      <span class="hljs-built_in">echo</span> <span class="hljs-string">"a = [<span class="hljs-variable">$a</span>]"</span>;
    }
}
</code></pre>
                    <p><strong>一个请求在其处理过程中，即使经历多个不同的 location<br>
                            配置块，它使用的还是同一套 Nginx 变量的副本。</strong></p>
                    <p>标准 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpRewriteModule" target="_blank" rel="nofollow">ngx_rewrite</a> 模块的 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpRewriteModule#rewrite" target="_blank" rel="nofollow">rewrite</a> 配置指令其实也可以发起“内部跳转”，例如上面那个例子用 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpRewriteModule#rewrite" target="_blank" rel="nofollow">rewrite</a> 配置指令可以改写成下面这样的形式：</p>
                    <pre class="hljs bash"><code class="bash">server {
        listen 8080;

        location /foo {
            <span class="hljs-built_in">set</span> <span class="hljs-variable">$a</span> hello;
            rewrite ^ /bar;
        }

        location /bar {
            <span class="hljs-built_in">echo</span> <span class="hljs-string">"a = [<span class="hljs-variable">$a</span>]"</span>;
        }
    }
</code></pre>
                    <ul>
                        <li>效果和使用 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpEchoModule#echo_exec" target="_blank" rel="nofollow">echo_exec</a> 是完全相同的。</li>
                        <li>Nginx 变量值容器的生命期是与当前正在处理的请求绑定的，而与 location无关。</li>
                    </ul>
                    <p>通过 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpRewriteModule#set" target="_blank" rel="nofollow">set</a> 指令隐式创建的 Nginx 变量。这些变量称为“用户自定义变量”，或者“用户变量”。既然有“用户自定义变量”，自然也就有由 Nginx 核心和各个 Nginx 模块提供的“预定义变量”，或者说“内建变量”（builtin variables）。</p>
                    <ul>
                        <li>内建变量</li>
                    </ul>
                    <blockquote>
                        <p>Nginx 内建变量最常见的用途就是获取关于请求或响应的各种信息。例如由 <a href="https://link.jianshu.com?t=http://nginx.org/en/docs/http/ngx_http_core_module.html" target="_blank" rel="nofollow">ngx_http_core</a> 模块提供的内建变量 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpCoreModule#.24uri" target="_blank" rel="nofollow">$uri</a>，可以用来获取当前请求的 URI（经过解码，并且不含请求参数），而 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpCoreModule#.24request_uri" target="_blank" rel="nofollow">$request_uri</a> 则用来获取请求最原始的 URI （未经解码，并且包含请求参数）。</p>
                        <p>另一个特别常用的内建变量其实并不是单独一个变量，而是有无限多变种的一群变量，即名字以 arg_开头的所有变量，我们估且称之为 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpCoreModule#.24arg_PARAMETER" target="_blank" rel="nofollow">$arg_XXX</a> 变量群。一个例子是$arg_name，这个变量的值是当前请求名为 name<br>
                            的 URI 参数的值，而且还是未解码的原始形式的值。<br>
                            <code>1. Nginx 会在匹配参数名之前，自动把原始请求中的参数名调整为全部小写的形式。</code><br>
                            <code>2. 尝试改写另外一些只读的内建变量，比如$arg_XXX变量，在某些 Nginx 的版本中甚至可能导致进程崩溃。</code></p>
                        <p>有一些内建变量是支持改写的，其中一个例子是 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpCoreModule#.24args" target="_blank" rel="nofollow">$args</a>. 这个变量在读取时返回当前请求的 URL 参数串（即请求 URL 中问号后面的部分，如果有的话），而在赋值时可以直接修改参数串。这里的 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpCoreModule#.24args" target="_blank" rel="nofollow">$args</a> 变量和 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpCoreModule#.24arg_PARAMETER" target="_blank" rel="nofollow">$arg_XXX</a> 一样，也不再使用属于自己的存放值的容器。当我们读取 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpCoreModule#.24args" target="_blank" rel="nofollow">$args</a> 时，Nginx 会执行一小段代码，从 Nginx 核心中专门存放当前 URL 参数串的位置去读取数据；而当我们改写 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpCoreModule#.24args" target="_blank" rel="nofollow">$args</a> 时，Nginx 会执行另一小段代码，对相同位置进行改写。Nginx 的其他部分在需要当前 URL 参数串的时候，都会从那个位置去读数据，所以我们对 <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpCoreModule#.24args" target="_blank" rel="nofollow">$args</a> 的修改会影响到所有部分的功能。</p>
                        <p>与面向对象编程中的“存取器”概念相对应，Nginx 变量也是支持绑定“存取处理程序”的。Nginx 模块在创建变量时，可以选择是否为变量分配存放值的容器，以及是否自己提供与读写操作相对应的“存取处理程序”。</p>
                        <p>不是所有的 Nginx 变量都拥有存放值的容器。拥有值容器的变量在 Nginx 核心中被称为“被索引的”（indexed）；反之，则被称为“未索引的”（non-indexed）。</p>
                    </blockquote>
                    <p>在设置了“取处理程序”的情况下，Nginx 变量也可以选择将其值容器用作缓存，这样在多次读取变量的时候，就只需要调用“取处理程序”计算一次。</p>
                    <p>Nginx 模块可以为其创建的变量选择使用值容器，作为其“取处理程序”计算结果的缓存。显然， <a href="https://link.jianshu.com?t=http://wiki.nginx.org/HttpMapModule" target="_blank" rel="nofollow">ngx_map</a> 模块认为变量间的映射计算足够昂贵，需要自动将因变量的计算结果缓存下来，这样在当前请求的处理过程中如果再次读取这个因变量，Nginx 就可以直接返回缓存住的结果，而不再调用该变量的“取处理程序”再行计算了。</p>
                    <ul>
                        <li>注意缓存和惰性求值以及主动求值</li>
                    </ul>
                    <blockquote>
                        <p>只在实际使用对象时才计算对象值的技术，在计算领域被称为“惰性求值”（lazy evaluation）。提供“惰性求值” 语义的编程语言并不多见，最经典的例子便是 Haskell. 与之相对的便是“主动求值” （eager evaluation）。</p>
                    </blockquote>
                    <p>Nginx 变量的值只有一种类型，那就是字符串，但是变量也有可能压根就不存在有意义的值。没有值的变量也有两种特殊的值：一种是“不合法”（invalid），另一种是“没找到”（not found）。</p>
                    <ul>
                        <li>输出特殊值“找不到”的效果和空字符串是相同的。因为这一回是 Nginx 的“变量插值”引擎自动把“找不到”给忽略了。那么我们究竟应当如何捕捉到“找不到”这种特殊值的踪影呢？</li>
                    </ul>
                    <blockquote>
                        <p>通过第三方模块 ngx_lua，我们可以轻松地在 Lua 代码中做到这一点。请看下面这个例子：</p>
                        <pre class="hljs undefined"><code></code></pre>
                    </blockquote>
                    <p>location /test {<br>
                        content_by_lua '<br>
                        if ngx.var.arg_name == nil then<br>
                        ngx.say("name: missing")<br>
                        else<br>
                        ngx.say("name: [", ngx.var.arg_name, "]")<br>
                        end<br>
                        ';<br>
                        }</p>
                    <pre class="hljs ruby"><code class="ruby">

* ngx_lua
[ngx_lua](<span class="hljs-symbol">http:</span>/<span class="hljs-regexp">/wiki.nginx.org/</span>HttpLuaModule) 模块将 Lua 语言解释器（或者 [LuaJIT](<span class="hljs-symbol">http:</span>/<span class="hljs-regexp">/luajit.org/luajit</span>.html) 即时编译器）嵌入到了 Nginx 核心中，从而可以让用户在 Nginx 核心中直接运行 Lua 语言编写的程序。我们可以选择在 Nginx 不同的请求处理阶段插入我们的 Lua 代码。这些 Lua 代码既可以直接内联在 Nginx 配置文件中，也可以单独放置在外部 .lua 源码文件（或者 Lua 字节码文件）里，然后在 Nginx 配置文件中引用这些文件的路径。

虽然反复指出 Nginx 变量只有字符串这一种数据类型，但这并不能阻止像 ngx_array_var 这样的第三方模块让 Nginx 变量也能存放数组类型的值。
下面就是这样的一个例子：
</code></pre>
                    <p>location /test {<br>
                        array_split "," $arg_names to=$array;<br>
                        array_map "[$array_it]" $array;<br>
                        array_join " " $array to=$res;</p>
                    <pre class="hljs bash"><code class="bash"><span class="hljs-built_in">echo</span> <span class="hljs-variable">$res</span>;
</code></pre>
                    <p>}</p>
                    <pre class="hljs bash"><code class="bash">这个例子中使用了 ngx_array_var 模块的 array_split、 array_map 和 array_join 这三条配置指令，其含义很接近 Perl 语言中的内建函数 split、map 和 join（当然，其他脚本语言也有类似的等价物）。

我们来看看访问 /<span class="hljs-built_in">test</span> 接口的结果：
</code></pre>
                    <p>$ curl '<a href="https://link.jianshu.com?t=http://localhost:8080/test?names=Tom,Jim,Bob" target="_blank" rel="nofollow">http://localhost:8080/test?names=Tom,Jim,Bob</a><br>
                        [Tom] [Jim] [Bob]</p>
                    <pre class="hljs bash"><code class="bash">使用 ngx_array_var 模块可以很方便地处理这样具有不定个数的组成元素的输入数据，例如此例中的 names URL 参数值就是由不定个数的逗号分隔的名字所组成。不过，这种类型的复杂任务通过 ngx_lua 来做通常会更灵活而且更容易维护。

----
<span class="hljs-comment">### 谈谈顺序</span>

&gt; 因为要理解11个阶段的顺序，需要做大量的实验，所以特此附上我测试用的完整样例，供大家学习参考。如果你不能直接说出每个location直接调用会返回的结果，不妨重新看看教程。

</code></pre>
                    <h1>nginx.conf</h1>
                    <p>worker_processes 1;<br>
                        error_log logs/error.log;<br>
                        events {<br>
                        worker_connections 1024;<br>
                        }<br>
                        http {<br>
                        map $args $foo {<br>
                        default 0;<br>
                        debug 1;<br>
                        }<br>
                        server {<br>
                        listen 8084;<br>
                        # set_real_ip_from 127.0.0.1;<br>
                        # real_ip_header X-My-IP;</p>
                    <pre class="hljs bash"><code class="bash">    location /<span class="hljs-built_in">test</span> {
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$addr</span> <span class="hljs-variable">$remote_addr</span>;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"from: <span class="hljs-variable">$addr</span>"</span>;
    }
    location / {
    }
}
server {
    listen 8083;
    location / {
        root /Users/gosber/sloth;
    }
}
server {
    listen 8082;
    location / {
        root /Users/gosber/sloth;
        autoindex on; <span class="hljs-comment"># 故意写在index前面，如果存在index.html，优先级应该index高</span>
        index index.html;
    }
    location /index.html {
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$a</span> 32;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"a = <span class="hljs-variable">$a</span>"</span>;
    }
    location /<span class="hljs-built_in">test</span> {
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$args</span> <span class="hljs-string">"foo=1&amp;bar=2"</span>;
        proxy_pass http://127.0.0.1:8081/args;
    }

    location /main {
        <span class="hljs-comment">#curl --data helo  'localhost:8082/main'</span>
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$var</span> main;
        echo_location /foo;
        echo_location /bar;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"main: <span class="hljs-variable">$var</span>"</span>;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"main method: <span class="hljs-variable">$request_method</span>"</span>;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"main method(父子请求独立): <span class="hljs-variable">$echo_request_method</span>"</span>;
        echo_location /sub;
        <span class="hljs-comment"># curl --data helo  --cookie user=gosber 'localhost:8082/main?name='</span>
        content_by_lua <span class="hljs-string">'
            if ngx.var.arg_name == nil then
                ngx.say("name: missing")
            else
                ngx.say("name: [", ngx.var.arg_name, "]")
            end
            if ngx.var.cookie_user == nil then
                ngx.say("cookie user: missing")
            else
                ngx.say("cookie user: [", ngx.var.cookie_user, "]")
            end
            '</span>;
    }
    location /foo {
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$var</span> foo;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"foo: <span class="hljs-variable">$var</span>"</span>;
    }
    location /bar {
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$var</span> bar;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"bar: <span class="hljs-variable">$var</span>"</span>;
    }
    location /sub {
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"sub method: <span class="hljs-variable">$request_method</span>"</span>;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"sub method(父子请求独立): <span class="hljs-variable">$echo_request_method</span>"</span>;
    }
    location /test1 {
        array_split <span class="hljs-string">","</span> <span class="hljs-variable">$arg_names</span> to=<span class="hljs-variable">$array</span>;
        array_map <span class="hljs-string">"[<span class="hljs-variable">$array_it</span>]"</span> <span class="hljs-variable">$array</span>;
        array_join <span class="hljs-string">" "</span> <span class="hljs-variable">$array</span> to=<span class="hljs-variable">$res</span>;
        <span class="hljs-built_in">echo</span> <span class="hljs-variable">$res</span>;
    }
    location /test2 {
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$a</span> 32;
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$b</span> 56;
        set_by_lua <span class="hljs-variable">$c</span> <span class="hljs-string">"return ngx.var.a + ngx.var.b"</span>;
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$quation</span> <span class="hljs-string">"<span class="hljs-variable">$a</span> + <span class="hljs-variable">$b</span> = <span class="hljs-variable">$c</span>"</span>;
        <span class="hljs-built_in">echo</span> <span class="hljs-variable">$quation</span>;
    }
    location /test3 {
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$a</span> 1;
        rewrite_by_lua <span class="hljs-string">"ngx.var.a = ngx.var.a + 1"</span>;
        <span class="hljs-comment"># 第三方模块 ngx_lua 提供的 rewrite_by_lua 配置指令也和 more_set_input_headers 一样运行在 rewrite 阶段的末尾。我们来验证一下</span>
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$a</span> 56;
         <span class="hljs-built_in">echo</span> <span class="hljs-variable">$a</span>;
    }
    location /hello {
        allow 127.0.0.1;
        deny all;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"hello world"</span>;
    }
    location /hellolua {
        access_by_lua <span class="hljs-string">'
        if ngx.var.remote_addr == "127.0.0.1" then
            return
        end
        ngx.exit(403)
        '</span>;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"hello world"</span>;
    }
    location /shunxu {
        <span class="hljs-comment"># 完全反写，不会影响执行顺序</span>

        <span class="hljs-comment"># content phase</span>
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"age = <span class="hljs-variable">$age</span>"</span>;

        <span class="hljs-comment"># access phase</span>
        deny 10.32.168.49;
        access_by_lua <span class="hljs-string">"ngx.var.age = ngx.var.age * 3"</span>;

        <span class="hljs-comment"># rewrite phase</span>
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$age</span> 1;
        rewrite_by_lua <span class="hljs-string">"ngx.var.age = ngx.var.age + 1"</span>;
    }
    location /<span class="hljs-built_in">echo</span> {
        echo_before_body <span class="hljs-string">"before..."</span>;
        proxy_pass http://127.0.0.1:8082/echofoo;
        echo_after_body <span class="hljs-string">"after..."</span>;
    }
    location /echofoo {
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"contents to be proxied"</span>;
    }
}
server {
    listen 8081;

    location /test1 {
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$orig_foo</span> <span class="hljs-variable">$foo</span>;
        <span class="hljs-built_in">set</span> <span class="hljs-variable">$args</span> debug;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"original foo: <span class="hljs-variable">$orig_foo</span>"</span>;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"foo: <span class="hljs-variable">$foo</span>"</span>;
    }

    location /args {
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"args: <span class="hljs-variable">$args</span>"</span>;
    }

    location /t {
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"uri = <span class="hljs-variable">$uri</span>"</span>;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"request_uri = <span class="hljs-variable">$request_uri</span>"</span>;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"name1 = <span class="hljs-variable">$arg_name1</span>"</span>;<span class="hljs-comment"># Nginx 会在匹配参数名之前，自动把原始请求中的参数名调整为全部小写的形式，可以接收Name,Name等</span>
        set_unescape_uri <span class="hljs-variable">$name</span> <span class="hljs-variable">$arg_name</span>;
        set_unescape_uri <span class="hljs-variable">$class</span> <span class="hljs-variable">$arg_class</span>;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"name: <span class="hljs-variable">$name</span>"</span>;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"class: <span class="hljs-variable">$class</span>"</span>;
    }
    location / {
        default_type text/html;
        <span class="hljs-built_in">echo</span> <span class="hljs-string">"d=[<span class="hljs-variable">$d</span>]"</span>;
        content_by_lua <span class="hljs-string">'
            ngx.say("&lt;p&gt;hello, world $d&lt;/p&gt;")
            '</span>;
   }
   location /<span class="hljs-built_in">test</span> {
       <span class="hljs-built_in">set</span> <span class="hljs-variable">$a</span> 测试;
       <span class="hljs-comment"># echo "This is a dollar sign: $a";</span>
       <span class="hljs-built_in">set</span> <span class="hljs-variable">$b</span> foo;
       echo_exec /bar;
   }
   location /bar {
       <span class="hljs-built_in">set</span> <span class="hljs-variable">$c</span> ccc;
       <span class="hljs-built_in">set</span> <span class="hljs-variable">$d</span> ddd;
       <span class="hljs-built_in">echo</span> <span class="hljs-string">"b = [<span class="hljs-variable">$b</span>] d=[<span class="hljs-variable">$d</span>]"</span>;
   }
   location /c {
       <span class="hljs-built_in">set</span> <span class="hljs-variable">$c</span> myccc;
       <span class="hljs-built_in">echo</span> <span class="hljs-string">"my c and d c=[<span class="hljs-variable">$c</span>] d=[<span class="hljs-variable">$d</span>]"</span>; <span class="hljs-comment">#变量全局可见，所以声明一次，全局可用，但是赋值不能跨越边界，除非是内部跳转可以传递 </span>
   }
   location /d {
       rewrite ^ /c;
   }
}
</code></pre>
                    <p>}</p>
                    <pre class="hljs css"><code class="css">
* <span class="hljs-selector-tag">index</span><span class="hljs-selector-class">.html</span>和<span class="hljs-selector-tag">hello</span><span class="hljs-selector-class">.html</span>内容
```<span class="hljs-selector-tag">bash</span>
 <span class="hljs-selector-tag">gosber</span>@<span class="hljs-keyword">freedamadeMBP</span>  ~/sloth  cat index.html
just index.html
 gosber@freedamadeMBP  ~/sloth  cat hello.html
just hello.html
</code></pre>
                    <blockquote>
                        <p>好吧，技术书籍并不适合写书评或者笔记，因为细节特别的多。<br>
                            尤其投入的学习之后，基本仍不住想要动手coding的冲动，根本不想再写笔记。下次一定注意，不再写技术学习的笔记了。 —— <code>锅巴GG</code></p>
                    </blockquote>
                    <hr>
                    <p>想加入更多乐读创业社的活动，请访问网站→ <a href="https://link.jianshu.com?t=http://ledu.club" target="_blank" rel="nofollow">http://ledu.club</a><br>
                        或关注微信公众号选取：<br>
                    </p><div class="image-package">
                        <div class="image-container" style="max-width: 300px; max-height: 300px; background-color: transparent;">
                            <div class="image-container-fill" style="padding-bottom: 100.0%;"></div>
                            <div class="image-view" data-width="300" data-height="300"><img data-original-src="//upload-images.jianshu.io/upload_images/1772-261d5af44f0930e4.jpg" data-original-width="300" data-original-height="300" data-original-format="image/jpeg" data-original-filesize="21391" class="" style="cursor: zoom-in;" src="//upload-images.jianshu.io/upload_images/1772-261d5af44f0930e4.jpg?imageMogr2/auto-orient/strip%7CimageView2/2/w/300"></div>
                        </div>
                        <div class="image-caption">乐读微信公众号</div>
                    </div><p></p>

                </div>
            </div>
        </div>

        <!-- 连载目录项 -->

        <!-- 打赏文章、购买文章、购买连载 -->
        <div id="free-reward-panel" class="support-author"><p>我用我的观点写 你用你的智商读 别谈客观</p> <div class="btn btn-pay">赞赏支持</div> <div class="supporter"><ul class="support-list"></ul> <!----></div> <!----> <!----></div>

        <div class="show-foot">
            <a class="notebook" href="/nb/3197339">
                <i class="iconfont ic-search-notebook"></i>
                <span>一周一本</span>
            </a>        <div class="copyright" data-toggle="tooltip" data-html="true" data-original-title="转载请联系作者获得授权，并标注“简书作者”。">
                © 著作权归作者所有
            </div>
            <div class="modal-wrap" data-report-note="">
                <a id="report-modal">举报文章</a>
            </div>
        </div>

        <!-- 文章底部作者信息 -->
        <div class="follow-detail">
            <div class="info">
                <a class="avatar" href="/u/8gXt87">
                    <img src="//upload.jianshu.io/users/upload_avatars/1772/f65180b5a954?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96" alt="96">
                </a>            <a class="btn btn-success follow"><i class="iconfont ic-follow"></i><span>关注</span></a>
                <a class="title" href="/u/8gXt87">锅巴GG</a>

                <p>写了 215873 字，被 193 人关注，获得了 199 个喜欢</p></div>
            <div class="signature">ThinkInLAMP.com联合创始人
                ——————————————
                PHPConChina.com
                SwiftConChina.com
                OpenTalk
                AlphaShow</div>
        </div>

        <div class="meta-bottom">
            <div data-v-6ddd02c6="" class="like"><div data-v-6ddd02c6="" class="btn like-group"><div data-v-6ddd02c6="" class="btn-like"><a data-v-6ddd02c6="">喜欢</a></div> <div data-v-6ddd02c6="" class="modal-wrap"><a data-v-6ddd02c6="">2</a></div></div> <!----></div>
            <div class="share-group">
                <a class="share-circle" data-action="weixin-share" data-toggle="tooltip" data-original-title="分享到微信">
                    <i class="iconfont ic-wechat"></i>
                </a>
                <a class="share-circle" data-action="weibo-share" data-toggle="tooltip" href="javascript:void((function(s,d,e,r,l,p,t,z,c){var%20f='http://v.t.sina.com.cn/share/share.php?appkey=1881139527',u=z||d.location,p=['&amp;url=',e(u),'&amp;title=',e(t||d.title),'&amp;source=',e(r),'&amp;sourceUrl=',e(l),'&amp;content=',c||'gb2312','&amp;pic=',e(p||'')].join('');function%20a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=440,height=430,left=',(s.width-440)/2,',top=',(s.height-430)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else%20a();})(screen,document,encodeURIComponent,'','','', '推荐 @锅巴GG不唠嗑 的文章《Agentzh的Nginx教程(OpenxResty三部曲1/3)》（ 分享自 @简书 ）','https://www.jianshu.com/p/27829a7a5f3e?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=weibo','页面编码gb2312|utf-8默认gb2312'));" data-original-title="分享到微博">
                    <i class="iconfont ic-weibo"></i>
                </a>
                <a class="share-circle" data-toggle="tooltip" href="http://cwb.assets.jianshu.io/notes/images/3523162/weibo/image_e15eb8ec57e4.jpg" target="_blank" data-original-title="下载长微博图片">
                    <i class="iconfont ic-picture"></i>
                </a>
                <a class="share-circle more-share" tabindex="0" data-toggle="popover" data-placement="top" data-html="true" data-trigger="focus" href="javascript:void(0);" data-content="
          <ul class=&quot;share-list&quot;>
            <li><a href=&quot;javascript:void(function(){var d=document,e=encodeURIComponent,r='http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+e('https://www.jianshu.com/p/27829a7a5f3e?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=qzone')+'&amp;title='+e('推荐 锅巴GG 的文章《Agentzh的Nginx教程(OpenxResty三部曲1/3)》'),x=function(){if(!window.open(r,'qzone','toolbar=0,resizable=1,scrollbars=yes,status=1,width=600,height=600'))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();&quot;><i class=&quot;social-icon-sprite social-icon-zone&quot;></i><span>分享到QQ空间</span></a></li>
            <li><a href=&quot;javascript:void(function(){var d=document,e=encodeURIComponent,r='https://twitter.com/share?url='+e('https://www.jianshu.com/p/27829a7a5f3e?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=twitter')+'&amp;text='+e('推荐 锅巴GG 的文章《Agentzh的Nginx教程(OpenxResty三部曲1/3)》（ 分享自 @jianshucom ）')+'&amp;related='+e('jianshucom'),x=function(){if(!window.open(r,'twitter','toolbar=0,resizable=1,scrollbars=yes,status=1,width=600,height=600'))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();&quot;><i class=&quot;social-icon-sprite social-icon-twitter&quot;></i><span>分享到Twitter</span></a></li>
            <li><a href=&quot;javascript:void(function(){var d=document,e=encodeURIComponent,r='https://www.facebook.com/dialog/share?app_id=483126645039390&amp;display=popup&amp;href=https://www.jianshu.com/p/27829a7a5f3e?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=facebook',x=function(){if(!window.open(r,'facebook','toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330'))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();&quot;><i class=&quot;social-icon-sprite social-icon-facebook&quot;></i><span>分享到Facebook</span></a></li>
            <li><a href=&quot;javascript:void(function(){var d=document,e=encodeURIComponent,r='https://plus.google.com/share?url='+e('https://www.jianshu.com/p/27829a7a5f3e?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=google_plus'),x=function(){if(!window.open(r,'google_plus','toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330'))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();&quot;><i class=&quot;social-icon-sprite social-icon-google&quot;></i><span>分享到Google+</span></a></li>
            <li><a href=&quot;javascript:void(function(){var d=document,e=encodeURIComponent,s1=window.getSelection,s2=d.getSelection,s3=d.selection,s=s1?s1():s2?s2():s3?s3.createRange().text:'',r='http://www.douban.com/recommend/?url='+e('https://www.jianshu.com/p/27829a7a5f3e?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=douban')+'&amp;title='+e('Agentzh的Nginx教程(OpenxResty三部曲1/3)')+'&amp;sel='+e(s)+'&amp;v=1',x=function(){if(!window.open(r,'douban','toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330'))location.href=r+'&amp;r=1'};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})()&quot;><i class=&quot;social-icon-sprite social-icon-douban&quot;></i><span>分享到豆瓣</span></a></li>
          </ul>
        " data-original-title="" title="">更多分享</a>
            </div>
        </div>
        <a id="web-note-ad-1" target="_blank" href="/apps/download?utm_source=nbc"><img src="//cdn2.jianshu.io/assets/web/web-note-ad-1-10f08e404d3887d2d45a4bc8f1831403.png" alt="Web note ad 1"></a>
        <div><div id="comment-list" class="comment-list"><div><form class="new-comment"><a class="avatar"><img src="//cdn2.jianshu.io/assets/default_avatar/avatar_default-78d4d1f68984cd6d4379508dd94b4210.png"></a> <div class="sign-container"><a href="/sign_in?utm_source=desktop&amp;utm_medium=not-signed-in-comment-form" class="btn btn-sign">登录</a> <span>后发表评论</span></div></form> <!----></div> <div id="normal-comment-list" class="normal-comment-list"><div><!----> <div><div class="top-title"><span>评论</span> <a class="close-btn" style="display: none;">关闭评论</a></div> <div class="no-comment"></div> <div class="text">
                                智慧如你，不想<a href="/sign_in?utm_source=desktop&amp;utm_medium=not-signed-in-nocomments-text">发表一点想法</a>咩~
                            </div></div> <!----> <div class="comments-placeholder" style="display: none;"><div class="author"><div class="avatar"></div> <div class="info"><div class="name"></div> <div class="meta"></div></div></div> <div class="text"></div> <div class="text animation-delay"></div> <div class="tool-group"><i class="iconfont ic-zan-active"></i><div class="zan"></div> <i class="iconfont ic-list-comments"></i><div class="zan"></div></div></div> </div></div> <!----> <div><!----></div></div></div>
    </div>

    <div class="side-tool"><ul><li data-placement="left" data-toggle="tooltip" data-container="body" data-original-title="回到顶部" style=""><a class="function-button"><i class="iconfont ic-backtop"></i></a></li> <!----> <!----> <li data-placement="left" data-toggle="tooltip" data-container="body" data-original-title="分享文章"><a tabindex="0" role="button" data-toggle="popover" data-placement="left" data-html="true" data-trigger="focus" href="javascript:void(0);" data-content="<ul class='share-list'>
                <li><a class=&quot;weixin-share&quot;><i class=&quot;social-icon-sprite social-icon-weixin&quot;></i><span>分享到微信</span></a></li>
                <li><a href=&quot;javascript:void((function(s,d,e,r,l,p,t,z,c){var%20f='http://v.t.sina.com.cn/share/share.php?appkey=1881139527',u=z||d.location,p=['&amp;url=',e(u),'&amp;title=',e(t||d.title),'&amp;source=',e(r),'&amp;sourceUrl=',e(l),'&amp;content=',c||'gb2312','&amp;pic=',e(p||'')].join('');function%20a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=440,height=430,left=',(s.width-440)/2,',top=',(s.height-430)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else%20a();})(screen,document,encodeURIComponent,'','','', '推荐 @锅巴GG不唠嗑 的文章《Agentzh的Nginx教程(OpenxResty三部曲1/3)》（ 分享自 @简书 ）','https://www.jianshu.com/p/27829a7a5f3e?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=weibo','页面编码gb2312|utf-8默认gb2312'));&quot;><i class='social-icon-sprite social-icon-weibo'></i><span>分享到微博</span></a></li>

                <li><a href=&quot;javascript:void(function(){var d=document,e=encodeURIComponent,r='http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+e('https://www.jianshu.com/p/27829a7a5f3e?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=qzone')+'&amp;title='+e('推荐 锅巴GG 的文章《Agentzh的Nginx教程(OpenxResty三部曲1/3)》'),x=function(){if(!window.open(r,'qzone','toolbar=0,resizable=1,scrollbars=yes,status=1,width=600,height=600'))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();&quot;><i class='social-icon-sprite social-icon-zone'></i><span>分享到QQ空间</span></a></li>
                <li><a href=&quot;javascript:void(function(){var d=document,e=encodeURIComponent,r='https://twitter.com/share?url='+e('https://www.jianshu.com/p/27829a7a5f3e?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=twitter')+'&amp;text='+e('推荐 锅巴GG 的文章《Agentzh的Nginx教程(OpenxResty三部曲1/3)》（ 分享自 @jianshucom ）')+'&amp;related='+e('jianshucom'),x=function(){if(!window.open(r,'twitter','toolbar=0,resizable=1,scrollbars=yes,status=1,width=600,height=600'))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();&quot;><i class='social-icon-sprite social-icon-twitter'></i><span>分享到Twitter</span></a></li>
                <li><a href=&quot;javascript:void(function(){var d=document,e=encodeURIComponent,r='https://www.facebook.com/dialog/share?app_id=483126645039390&amp;display=popup&amp;href=https://www.jianshu.com/p/27829a7a5f3e?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=facebook',x=function(){if(!window.open(r,'facebook','toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330'))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();&quot;><i class='social-icon-sprite social-icon-facebook'></i><span>分享到Facebook</span></a></li>
                <li><a href=&quot;javascript:void(function(){var d=document,e=encodeURIComponent,r='https://plus.google.com/share?url='+e('https://www.jianshu.com/p/27829a7a5f3e?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=google_plus'),x=function(){if(!window.open(r,'google_plus','toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330'))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();&quot;><i class='social-icon-sprite social-icon-google'></i><span>分享到Google+</span></a></li>
                <li><a href=&quot;javascript:void(function(){var d=document,e=encodeURIComponent,s1=window.getSelection,s2=d.getSelection,s3=d.selection,s=s1?s1():s2?s2():s3?s3.createRange().text:'',r='http://www.douban.com/recommend/?url='+e('https://www.jianshu.com/p/27829a7a5f3e?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=douban')+'&amp;title='+e('Agentzh的Nginx教程(OpenxResty三部曲1/3)')+'&amp;sel='+e(s)+'&amp;v=1',x=function(){if(!window.open(r,'douban','toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330'))location.href=r+'&amp;r=1'};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})()&quot;><i class='social-icon-sprite social-icon-douban'></i><span>分享到豆瓣</span></a></li>
              </ul>" data-original-title="" title="" class="function-button"><i class="iconfont ic-share"></i></a> <!----></li> <!----></ul></div>
</div>
<div class="note-bottom">
    <!---->
    <div><div class="recommend-note"><div class="meta"><div class="title">
                    推荐阅读
                    <a target="_blank" href="/" class="more">
                        更多精彩内容<i class="iconfont ic-link"></i></a></div></div> <div class="list"><div class="note"><!----> <a target="_blank" href="/p/eeee38ae86f6?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=pc_all_hots&amp;utm_source=recommendation" class="title">用户3.0</a> <p class="description">Author 安德烈亚斯·布尔读者： 锅巴GG 读者说：我本以为这是一本讲用户的书，然而，这实际上不折不扣是一本讲营销的书。所以当我看完序言的时候，我真心想换书读了，而好奇心和书的内容，还是让我坚持读完了全书，当然，我觉得还是有所收获。读了才发现，这本书的时间不早了，但是，还是有用的，敬进步吧。 营销真正的变革才刚刚在我们的身边悄然发生 欢迎进入社群经济时代 我们身处社会化经济的时代，客户扮演者积极主动的角色，参与服务过程甚至产品制造过程，实现更高的效率，并以此提高经济效益。用户已经成为创新过程中一个重要组成部分，要求获得更多的关注和尊重。抛开传统意义上的目标人群的划分方法，产生了一类新...</p> <a target="_blank" href="/u/8gXt87?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=pc_all_hots&amp;utm_source=recommendation" class="author"><div class="avatar" style="background-image: url(&quot;//upload.jianshu.io/users/upload_avatars/1772/f65180b5a954?imageMogr2/auto-orient/strip|imageView2/1/w/24/h/24&quot;);"></div> <span class="name">锅巴GG</span></a></div><div class="note"><!----> <a target="_blank" href="/p/e9c74f4fd155?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=pc_all_hots&amp;utm_source=recommendation" class="title">社会媒体挖掘</a> <p class="description">——Social Media Mining (An Introduction) 作者 Reza Zafarani(美), Mohammad Ali Abbasi, Huan Liu读者 锅巴GG 获益匪浅 讲社交现象的书很多，事后总结的也很多，然而这本书让我惊喜。虽然全书按教材的方式组织，并且提供了很多相关的算法，但是抛开这些信息，全书对社交、社交媒体以及挖掘都有很好的覆盖，不敢说由浅入深，但是如果不惧怕数学公式的大篇幅解释，其实本书的核心内容算是非常精炼并有效的传达了高价值的信息，值得反复品读 社会媒体挖掘 社会媒体(Social Media)的发展，使得内容被无数的用户阅读和传播，并...</p> <a target="_blank" href="/u/8gXt87?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=pc_all_hots&amp;utm_source=recommendation" class="author"><div class="avatar" style="background-image: url(&quot;//upload.jianshu.io/users/upload_avatars/1772/f65180b5a954?imageMogr2/auto-orient/strip|imageView2/1/w/24/h/24&quot;);"></div> <span class="name">锅巴GG</span></a></div><div class="note have-img"><a target="_blank" href="/p/e5d6bfa1a65b?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=pc_all_hots&amp;utm_source=recommendation" class="cover" style="background-image: url(&quot;//upload-images.jianshu.io/upload_images/4474991-c4b11aad24401f5c.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/300/h/240&quot;);"></a> <a target="_blank" href="/p/e5d6bfa1a65b?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=pc_all_hots&amp;utm_source=recommendation" class="title">分享我自学画画的工具和书籍，适合零基础小白们</a> <p class="description">我学画画，算是一时冲动。 有这个念头之后，立马就上网搜教材和画材。 掉坑当然免不了，有些画材没买对，有些参考书也并不如网评那么好。 很荣幸，我自学画画两个月来，受到很多友人的鼓励。 现在，已经有朋友想买我的画，有点无地自容，但又非常开心。 走过三分之一人生路，总算见到曙光。 虽是一时兴起，但熬过最初的三十天后，画画已经成为习惯，不用苦苦坚持，而是一种享受。 也希望更多的朋友，通过画画，抒情解郁，找到自己的路。 我分享的书，有我个人偏好，不一定就是最适合你的，我会大概分析利弊，还请权衡。 至于画材，我现在还是小白，所以没用那些专业学院级的。 所以，更适合和我一样零基础想要自学画画的小白们。...</p> <a target="_blank" href="/u/94434fd7e3a0?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=pc_all_hots&amp;utm_source=recommendation" class="author"><div class="avatar" style="background-image: url(&quot;//upload.jianshu.io/users/upload_avatars/4474991/464b3f39f4a9.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/24/h/24&quot;);"></div> <span class="name">南蛮文子</span></a></div><div class="note have-img"><a target="_blank" href="/p/b9d760b195cf?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=pc_all_hots&amp;utm_source=recommendation" class="cover" style="background-image: url(&quot;//upload-images.jianshu.io/upload_images/2759192-e06b647fc555892f.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/300/h/240&quot;);"></a> <a target="_blank" href="/p/b9d760b195cf?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=pc_all_hots&amp;utm_source=recommendation" class="title">我来告诉你，上大学的意义是什么</a> <p class="description">❤ 有读者在后台问我，说:“他觉得大学上得他挺无奈的。刚上大学的他，完全没了高中的上进努力，平时上课要么睡觉，要么玩手机，老师讲的什么内容也几乎一无所知，期末考试全靠拿着厚厚的资料狂背，考完试后又忘个精光，绩点虽不太高，但也能保证不挂科。他问我，觉得这样的大学上得有意义吗?”完后，这位读者还加了一句:“我是不是应该提早退学，别浪费大好光阴。” 我如实回答说:“这样的大学上得一点也没有意义，不但没意思，它还在消磨着你的青春和心气。但我还是不鼓励你退学，我甚至想让你再坚持一下。” 我想，他这样的困惑很多才上大学的人应该都有。甚至，很多大学生到毕业那一刻都没弄明白，大学的意义到底在哪。 在高中...</p> <a target="_blank" href="/u/9ddf8a34f958?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=pc_all_hots&amp;utm_source=recommendation" class="author"><div class="avatar" style="background-image: url(&quot;//upload.jianshu.io/users/upload_avatars/2759192/ffba5bb5-8165-4871-9bca-ee5a2ea03f79.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/24/h/24&quot;);"></div> <span class="name">影子影</span></a></div><div class="note have-img"><a target="_blank" href="/p/66b103c3c93a?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=pc_all_hots&amp;utm_source=recommendation" class="cover" style="background-image: url(&quot;//upload-images.jianshu.io/upload_images/4082943-3f57d5499d3d37b9.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/300/h/240&quot;);"></a> <a target="_blank" href="/p/66b103c3c93a?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=pc_all_hots&amp;utm_source=recommendation" class="title">如何优雅制定能完成的2018年度计划，加速成长！</a> <p class="description">01 前两天，我把2018年新年目标制定出来并分享到简书和朋友圈上，没有想到被刷爆了（详见《刷遍朋友圈的2018年度计划 |努力实现100+个目标，我就是想要开挂的人生！》）。 其实当时想法很简单，一是和大家分享。就像有些人说的那样曾经看到我的清单，借鉴了一些同样想要达到的，制定或者完善了自己的2018梦想清单。二是为了督促自己更好的执行。如果你的目标只是秀出来的没有行动、不去执行的话，那么清单制定就毫无意义了。 文章发出之后看到了很多的留言，有的人说“看到那么多目标觉得我生活的很累”，其实我恰恰觉得相反，正是这些目标让我感受到生活中有了方向，让我更加激发对美好生活的向往。 去做一些更有...</p> <a target="_blank" href="/u/fee4b4b0b89e?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=pc_all_hots&amp;utm_source=recommendation" class="author"><div class="avatar" style="background-image: url(&quot;//upload.jianshu.io/users/upload_avatars/4082943/3f091fa05686.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/24/h/24&quot;);"></div> <span class="name">晓多</span></a></div></div></div></div>
    <!-- 相关文章 -->
    <div class="seo-recommended-notes">

        <div class="note ">
            <a class="title" target="_blank" href="/p/7b7c7c8264a3?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">[code.openresty] Openresty Nginx API for Lua -上</a>
            <p class="description">Nginx API for Lua Introduction ngx.arg ngx.var.VARIABLE Core constants HTTP method constants HTTP status constants Nginx log level consta...</p>
            <a class="author" target="_blank" href="/u/fdd0a44a2311?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <div class="avatar">
                    <img src="//upload.jianshu.io/users/upload_avatars/2699372/1a589887-817a-429b-a097-d10ddee036be.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/48/h/48" alt="48">
                </div>
                <span class="name">lizhengdong</span>
            </a>        </div>

        <div class="note ">
            <a class="title" target="_blank" href="/p/3e0851d72a3c?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">[code.openresty] Openresty框架-Nginx的lua模块</a>
            <p class="description">openresty OpenResty是一个基于 Nginx 与 Lua 的高性能 Web 平台，其内部集成了大量精良的 Lua 库、第三方模块以及大多数的依赖项。用于方便地搭建能够处理超高并发、扩展性极高的动态 Web 应用、Web 服务和动态网关。-- Openrest...</p>
            <a class="author" target="_blank" href="/u/fdd0a44a2311?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <div class="avatar">
                    <img src="//upload.jianshu.io/users/upload_avatars/2699372/1a589887-817a-429b-a097-d10ddee036be.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/48/h/48" alt="48">
                </div>
                <span class="name">lizhengdong</span>
            </a>        </div>

        <div class="note have-img">
            <a class="cover" target="_blank" href="/p/8e0877d69b39?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <img src="//upload-images.jianshu.io/upload_images/2699372-010f4989264186a1.png?imageMogr2/auto-orient/strip|imageView2/1/w/300/h/240" alt="240">
            </a>          <a class="title" target="_blank" href="/p/8e0877d69b39?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">[code.openresty] Openresty指令集-上</a>
            <p class="description">指令集 lua_capture_error_log lua_use_default_type lua_malloc_trim lua_code_cache lua_regex_cache_max_entries lua_regex_match_limit lua_packa...</p>
            <a class="author" target="_blank" href="/u/fdd0a44a2311?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <div class="avatar">
                    <img src="//upload.jianshu.io/users/upload_avatars/2699372/1a589887-817a-429b-a097-d10ddee036be.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/48/h/48" alt="48">
                </div>
                <span class="name">lizhengdong</span>
            </a>        </div>

        <div class="note have-img">
            <a class="cover" target="_blank" href="/p/630e2e1ca57f?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <img src="//upload-images.jianshu.io/upload_images/2007846-c716637460dee7a5?imageMogr2/auto-orient/strip|imageView2/1/w/300/h/240" alt="240">
            </a>          <a class="title" target="_blank" href="/p/630e2e1ca57f?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">Nginx从听说到学会</a>
            <p class="description">第一章    Nginx简介 Nginx是什么 没有听过Nginx？那么一定听过它的“同行”Apache吧！Nginx同Apache一样都是一种WEB服务器。基于REST架构风格，以统一资源描述符(Uniform Resources Identifier)URI或者统一资源...</p>
            <a class="author" target="_blank" href="/u/951a20323565?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <div class="avatar">
                    <img src="//upload.jianshu.io/users/upload_avatars/2007846/b323be6c49de.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/48/h/48" alt="48">
                </div>
                <span class="name">JokerW</span>
            </a>        </div>

        <div class="note ">
            <a class="title" target="_blank" href="/p/1bb7814b4b88?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">nginx与lua的执行顺序和步骤说明</a>
            <p class="description">一、nginx执行步骤 nginx在处理每一个用户请求时，都是按照若干个不同的阶段依次处理的，与配置文件上的顺序没有关系，详细内容可以阅读《深入理解nginx:模块开发与架构解析》这本书，这里只做简单介绍； 1、post-read 读取请求内容阶段，nginx读取并解析完请...</p>
            <a class="author" target="_blank" href="/u/fe3df592a65a?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <div class="avatar">
                    <img src="//cdn2.jianshu.io/assets/default_avatar/6-fd30f34c8641f6f32f5494df5d6b8f3c.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/48/h/48" alt="48">
                </div>
                <span class="name">yky138495</span>
            </a>        </div>

        <div class="note have-img">
            <a class="cover" target="_blank" href="/p/f0b00fa4e8b5?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <img src="//upload-images.jianshu.io/upload_images/6586449-618e19cd8c4ac610.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/300/h/240" alt="240">
            </a>          <a class="title" target="_blank" href="/p/f0b00fa4e8b5?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">山姆奇遇记</a>
            <p class="description">第五章 山姆来到了大城市 山姆坐在高铁上，很快就睡着了，他太累了。 不知道睡了多久，他被一阵嘈杂声惊醒了。他睁开眼睛，看到所有的动物都在往外走，“这应该是到了大城市了吧？”于是，他跟着走出了高铁。 他缓缓的爬出了高铁站，终于看到了所谓的“人类”，“原来就是一群没有毛的大猩猩...</p>
            <a class="author" target="_blank" href="/u/be4bc458b923?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <div class="avatar">
                    <img src="//upload.jianshu.io/users/upload_avatars/6586449/4d09519d-e99f-43c1-aa8f-723a7a5fc43c.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/48/h/48" alt="48">
                </div>
                <span class="name">吃醋DE面条菌</span>
            </a>        </div>

        <div class="note ">
            <a class="title" target="_blank" href="/p/7f5b2c0c89f1?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">再见了！童真</a>
            <p class="description">又一个宁静的夜晚我在喧闹的城市找到一个安静的角落怜惜着我逝去的童真暂且忘了等待和期盼一支一支的续着烟回忆着逝去美好曾经的零食抵不过时间的饥渴你我也在无声的叹息中改变着我想找回曾经的日子 与之相拥而那只是我的一厢情愿童真早已悄然走远曾以为离开你是为了更好的明天但看来我并不是曾...</p>
            <a class="author" target="_blank" href="/u/47545009d124?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <div class="avatar">
                    <img src="//upload.jianshu.io/users/upload_avatars/8114814/31f2e02a-326e-4a2c-a4bb-cdef34c60f4b?imageMogr2/auto-orient/strip|imageView2/1/w/48/h/48" alt="48">
                </div>
                <span class="name">郭可强一老妖</span>
            </a>        </div>

        <div class="note have-img">
            <a class="cover" target="_blank" href="/p/bd0c57cb8ee5?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <img src="//upload-images.jianshu.io/upload_images/7471688-37c59b5f6594acb9.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/300/h/240" alt="240">
            </a>          <a class="title" target="_blank" href="/p/bd0c57cb8ee5?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">七夕送你的情话</a>
            <p class="description">昨天弟弟和弟妹过来，晚上与弟妹一起喝小优的时候，听弟弟说弟妹最近皮肤滑好多，她才喝了两盒而已，真是惊叹小优的效果。自己男人的夸奖总是可以给予我们更大的肯定与开心。 没有一个女人单凭化妆就能与岁月抗衡 没有一个女人单凭美颜相机就可以瞒过众人的眼睛 七夕快乐，愿每个姑娘都有人用心疼爱</p>
            <a class="author" target="_blank" href="/u/97140c5272f6?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <div class="avatar">
                    <img src="//upload.jianshu.io/users/upload_avatars/7471688/8cdb532f-4f3b-42db-b1f0-ab3ef8267f10?imageMogr2/auto-orient/strip|imageView2/1/w/48/h/48" alt="48">
                </div>
                <span class="name">程元宝</span>
            </a>        </div>

        <div class="note have-img">
            <a class="cover" target="_blank" href="/p/84aefd087ba7?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <img src="//upload-images.jianshu.io/upload_images/5113072-e85885778f7f2a5a.JPG?imageMogr2/auto-orient/strip|imageView2/1/w/300/h/240" alt="240">
            </a>          <a class="title" target="_blank" href="/p/84aefd087ba7?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">一只想说情话的单身猫</a>
            <p class="description">资深单身主义人士 却满腹情话 无处诉衷肠 空有一身撩妹技能 奈何自己却是妹子 仅有一身撩汉词藻 却也只能隔靴搔痒 双鱼座 这么矫情 你知道吗 你好哇，你银河 醒来方觉甚是爱你 别人的情话我熟读于心 但是我找不到给我说情话的人 所以，自己就变成了说情话的女汉子 在有爱情的有限...</p>
            <a class="author" target="_blank" href="/u/ed010201f51a?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <div class="avatar">
                    <img src="//upload.jianshu.io/users/upload_avatars/5113072/6592f2248db2.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/48/h/48" alt="48">
                </div>
                <span class="name">榴莲仙女</span>
            </a>        </div>

        <div class="note have-img">
            <a class="cover" target="_blank" href="/p/617b5ffbf8c8?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <img src="//upload-images.jianshu.io/upload_images/2099905-f347964ed6582c43?imageMogr2/auto-orient/strip|imageView2/1/w/300/h/240" alt="240">
            </a>          <a class="title" target="_blank" href="/p/617b5ffbf8c8?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=seo_notes&amp;utm_source=recommendation">贵州宝拉教育!意大利文化交流会圆满成功!</a>
            <p class="description">告诉大家一个好消息 上周日举办的意大利文化交流会圆满成功！ 撒花撒花~ 为了让更多家长了解并认识意大利留学 为了提高中国留意学生对意大利文化的接受程度 也为了构造一个中意友好交流的平台 ... 工作人员都很努力地采购物品，布置会场 生怕有什么做的不好的地方~ 宝拉教育贵州驻...</p>
            <a class="author" target="_blank" href="/u/1ad842028140?utm_campaign=maleskine&amp;utm_content=user&amp;utm_medium=seo_notes&amp;utm_source=recommendation">
                <div class="avatar">
                    <img src="//upload.jianshu.io/users/upload_avatars/2099905/80b6e1819cbd.png?imageMogr2/auto-orient/strip|imageView2/1/w/48/h/48" alt="48">
                </div>
                <span class="name">贵州宝拉教育</span>
            </a>        </div>
    </div>
</div>

<script type="application/json" data-name="page-data">{"user_signed_in":false,"locale":"zh-CN","os":"mac","read_mode":"day","read_font":"font2","note_show":{"is_martin_user":false,"is_author":false,"is_following_author":false,"is_liked_note":false,"follow_state":0,"uuid":"79a87f86-06be-4267-abbf-ced76cfaca95"},"note":{"id":3523162,"slug":"27829a7a5f3e","user_id":1772,"notebook_id":3197339,"commentable":true,"likes_count":2,"views_count":795,"public_wordage":2216,"comments_count":0,"total_rewards_count":0,"is_author":false,"paid_type":"free","paid_content_accessible":false,"author":{"nickname":"锅巴GG","total_wordage":215873,"followers_count":193,"total_likes_count":199}}}</script>

<script src="//cdn2.jianshu.io/assets/babel-polyfill-fe4aded7942fe8b49646.js" crossorigin="anonymous"></script>
<script src="//cdn2.jianshu.io/assets/web-base-4084b9724cc8dcd21c1f.js" crossorigin="anonymous"></script>
<script src="//cdn2.jianshu.io/assets/web-dd70f6738dfed437567c.js" crossorigin="anonymous"></script>

<script src="//cdn2.jianshu.io/assets/web/pages/notes/show/entry-10465e1a9f46ca000f67.js" crossorigin="anonymous"></script>
<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>



<!----><!----></body></html>