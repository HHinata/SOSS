<!DOCTYPE html>
<html lang="zh-cmn" ng-app="app" class="ng-scope"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>美餐</title>


    <script charset="utf-8" src="https://tag.baidu.com/vcard/v.js?siteid=10609030&amp;url=https%3A%2F%2Fmeican.com%2Fpreorder%2Ffilter%2F944827&amp;source=&amp;rnd=1959880484&amp;hm=1"></script><script src="//hm.baidu.com/hm.js?d63dbf1497d491c4e3cf91f6efab2555"></script><script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?d63dbf1497d491c4e3cf91f6efab2555";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <link href="https://www.meicanstatic.com/preorder/static/index.fa57cf2f.css" rel="stylesheet"></head>
<body mc-main-directive="" class="ng-scope">


<div ng-class="[
    styles.container,
    ctrl.size.single ? styles.mobile : '',
    styles[mode],
    'mc-modal-container',
    action === 'right' ? 'mc-modal-action-right' : '',
    action === 'bottom' ? 'mc-modal-action-bottom' : '',
  ]" mc-click="onClick($event)" data-modal-id="3" mc-modal="" class="ng-scope ng-isolate-scope _3XLyVMHZeKflmTv_vSdhBz-style-container _2d7TK923zHq2LQrKq4JmE0-style-mobile _2EZpdbYlA5L-0vxfRxkicX-style-white mc-modal-container  mc-modal-action-bottom" style="opacity: 1;">
    <div ng-class="styles.inner" class="_3Hwu_2GSDIciwZ-e4opE4y-style-inner" style="margin-top: 0px;">
        <div ng-class="styles.header" ng-show="title" class="_3_wSuLB2xzf6CLU1pfE3Z1-style-header">
            <div ng-class="styles.headerInner" class="ward56HhCdk0GZ-1MTcvO-style-headerInner">
                <span ng-class="styles.title" class="ng-binding">用户信息</span>
            </div>
        </div>
        <div ng-animate-children="" ng-class="[
        styles.body,
        title ? '' : styles.isHeadLess,
      ]" ng-transclude="" class="_8vChZXuKdle9d-13m9Gxl-style-body"><div mc-modal-me="" class="ng-scope"><div ng-class="styles.block" class="_3nBaXV2aEsEJA2h2_HVAEx-style-block">
                    <div ng-class="styles.container" mc-click="$event.stopPropagation()" class="_2zr0iYIKVbpdSwEMCUn83Q-style-container">
                        <div ng-class="styles.inner" class="_1Pe7GdQbdUNvrHqqjaEkWP-style-inner">
                            <div ng-class="styles.group" class="_2UigEaYqg_TEE1K979TvOl-style-group">
                                <div ng-class="styles.title" class="_2qB5iACcWxNybtA6D2bYR7-style-title">用户名称</div>
                                <a ng-class="styles.item" class="jJ_UGsU2MxEp9-XuX_b7U-style-item"><?php echo $user_info['uname']?></a>
                            </div>
                            <div ng-class="styles.group" class="_2UigEaYqg_TEE1K979TvOl-style-group">
                                <div ng-class="styles.title" class="_2qB5iACcWxNybtA6D2bYR7-style-title">联系电话</div>
                                <a ng-class="styles.item" class="jJ_UGsU2MxEp9-XuX_b7U-style-item"><?php echo $user_info['phone']?></a>
                            </div>
                            <div ng-class="styles.group" class="_2UigEaYqg_TEE1K979TvOl-style-group">
                                <div ng-class="styles.title" class="_2qB5iACcWxNybtA6D2bYR7-style-title">性别</div>
                                <a ng-class="styles.item" class="jJ_UGsU2MxEp9-XuX_b7U-style-item"><?php echo $user_info['sex']?></a>
                            </div>
                            <div ng-class="styles.group" class="_2UigEaYqg_TEE1K979TvOl-style-group">
                                <div ng-class="styles.title" class="_2qB5iACcWxNybtA6D2bYR7-style-title">修改信息</div>
                                <div mc-modal-me-item="" text="修改信息" on-click-item="ctrl.openModalBinding" href="/EditUser?gid=<?php echo $gid ?>&uid=<?php echo $user_info['uid']?>" class="ng-isolate-scope">
                                    <a ng-class="styles.item" mc-click="onClick($event)" ng-href="" href="/EditUser?gid=<?php echo $gid ?>&uid=<?php echo $user_info['uid']?>" class="jJ_UGsU2MxEp9-XuX_b7U-style-item">
                                        <span class="ng-binding">修改信息</span>
                                        <i ng-class="['icon',  customClass, iconClass]" mc-icon="" class-name="_2zn6BlloQejehRAwde1wBE-style-icon" which="arrow-right-digital-card" class="ng-isolate-scope icon  icon-arrow-right-digital-card _2zn6BlloQejehRAwde1wBE-style-icon"></i>
                                    </a>
                                </div>
                            </div>
                            <div ng-class="styles.group" class="_2UigEaYqg_TEE1K979TvOl-style-group">
                                <div ng-class="styles.title" class="_2qB5iACcWxNybtA6D2bYR7-style-title">删除用户</div>
                                <div ng-if="!ctrl.e.isMobile" mc-modal-me-item="" text="删除用户" href="/DeleteUser?gid=<?php echo $gid ?>&uid=<?php echo $user_info['uid']?>" class="ng-scope ng-isolate-scope">
                                    <a ng-class="styles.item" ng-href="/DeleteUser?gid=<?php echo $gid ?>&uid=<?php echo $user_info['uid']?>" href="/DeleteUser?gid=<?php echo $gid ?>&uid=<?php echo $user_info['uid']?>" class="jJ_UGsU2MxEp9-XuX_b7U-style-item">
                                        <span class="ng-binding">删除用户</span>
                                        <i ng-class="['icon',  customClass, iconClass]" mc-icon="" class-name="_2zn6BlloQejehRAwde1wBE-style-icon" which="arrow-right-digital-card" class="ng-isolate-scope icon  icon-arrow-right-digital-card _2zn6BlloQejehRAwde1wBE-style-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
    </div>
</div>

</body></html>







