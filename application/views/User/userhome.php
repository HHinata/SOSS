<html lang="zh-cmn" ng-app="app" class="ng-scope"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>美餐</title>


    <script charset="utf-8" src="https://tag.baidu.com/vcard/v.js?siteid=10609030&amp;url=https%3A%2F%2Fmeican.com%2Fpreorder%2Ffilter%2F944827%23%2Fmeal%2F2c8f4064ea5132971167265ed792f8db%2Fr%2F39788f&amp;source=&amp;rnd=660606050&amp;hm=1"></script><script src="//hm.baidu.com/hm.js?d63dbf1497d491c4e3cf91f6efab2555"></script><script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?d63dbf1497d491c4e3cf91f6efab2555";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <link href="css/index.440052aa.css" rel="stylesheet"></head>
<body mc-main-directive="" class="ng-scope"><div class="styles.block ng-scope" mc-resize=""></div>

<!-- ngIf: !ctrl.size.single --><div ng-if="!ctrl.size.single" ng-class="styles.device" mc-modal-blur="" class="ng-scope _2zS-F6UMECOrJS3OH_kUnO-style-device">
    <div class="_3_ezOQfol5ICPsaEsgqgEI-style-container mc-animation-fade" mc-nav-directive="">
        <div ng-class="styles.background" class="_1bmR6_HKofqjPGefbkrMoA-style-background"></div>
        <div class="_39jw663raq8OlEaVxSb7h6-style-body">
            <div class="_3RjTXhr1QvaB3e9iy2L9au-style-bodyInner">
                <div class="js-body-table _3jrnWcey-E6UI-C0xJqCN-style-bodyTable">
                    <div class="">
                        <div class="_3CWmisXzf5-eT8Hh0zwE20-style-noti ng-hide" mc-class="{ [styles.open]: isOpen }" mc-click="clickMini($event)" ng-show="notes.length" mc-nav-notification="">
                            <div class="js-noti-icon QM_RKfWpSfhqXGqvQ_CSV-style-notiIcon">
                                <i ng-class="['icon',  customClass, iconClass]" mc-icon="" which="notification_yellow" class="ng-isolate-scope icon  icon-notification_yellow"></i>
                            </div>
                            <div class="aEKDuewVw-W-xis2d9wOy-style-notiArrowIcon" mc-click="clickHead($event)">
                                <i ng-class="['icon',  customClass, iconClass]" mc-icon="" which="down_arrow_yellow" class="ng-isolate-scope icon  icon-down_arrow_yellow"></i>
                            </div>
                            <div class="js-noti-head _15TeOptj6YPXj6918HoceN-style-notiHead" mc-click="clickHead($event)">
                                公告
                            </div>
                            <div class="js-contents V7c87ig8bByw9x9IE1dsN-style-notiContents" ng-style="{
      width: notes.length * 100 + '%',
      left:  - activeIndex * 100 + '%',
      overflow: isOpen ? 'visible' : 'hidden'
    }" style="width: 0%; left: 0%; overflow: hidden;">
                                <!-- ngRepeat: note in notes track by $index -->
                            </div>
                            <div class="js-noti-button-wrap _2OlptABjXigedeN4dY_MFk-style-notiButtonWrap">
                                <div class="_2myCvnQxIrfKi9XICvHJ9I-style-notiButton" mc-click="done($event)">知道了</div>
                            </div>
                            <!-- ngIf: notes.length > 1 -->
                        </div>
                    </div>
                    <div class="js-corps-wrapper BgVy7by4ErYFqbZFubKME-style-corpsWrapper" mc-nav-meals=""><!-- ngIf: !ctrl.meal.list.length && !ctrl.e.isWeixin && ctrl.meal.isFetched -->
                        <!-- ngIf: ctrl.meal.list.length -->
                        <ul class="_3cFY1ceEWgD9ld_jwV6PdE-style-corps mc-animation-fade" ng-if="ctrl.meal.list.length" style="opacity: 1;">
                            <!-- ngRepeat: date in ctrl.meal.list track by $index -->
                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals -->
                                <span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek"><?php echo $date[0] ?></span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals -->
                                <ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index -->
                                    <li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp <?php echo $gaoliang[0]?>">
                                        <a ng-href="/ShopList?user=1&date=0&uid=<?php echo $uid?>" ng-class="styles.link" href="/ShopList?user=1&date=0&uid=<?php echo $uid?>" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付<?php echo $address; ?>晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->

                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals -->
                                <span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek"><?php echo $date[1] ?></span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals -->
                                <ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index -->
                                    <li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp <?php echo $gaoliang[1]?>">
                                        <a ng-href="/ShopList?user=1&date=1&uid=<?php echo $uid?>" ng-class="styles.link" href="/ShopList?user=1&date=1&uid=<?php echo $uid?>" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付<?php echo $address; ?>晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->

                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals -->
                                <span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek"><?php echo $date[2] ?></span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals -->
                                <ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index -->
                                    <li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp <?php echo $gaoliang[2]?>">
                                        <a ng-href="/ShopList?user=1&date=2&uid=<?php echo $uid?>" ng-class="styles.link" href="/ShopList?user=1&date=2&uid=<?php echo $uid?>" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付<?php echo $address; ?>晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->

                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals -->
                                <span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek"><?php echo $date[3] ?></span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals -->
                                <ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index -->
                                    <li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp <?php echo $gaoliang[3]?>">
                                        <a ng-href="/ShopList?user=1&date=3&uid=<?php echo $uid?>" ng-class="styles.link" href="/ShopList?user=1&date=3&uid=<?php echo $uid?>" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付<?php echo $address; ?>晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->

                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals -->
                                <span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek"><?php echo $date[4] ?></span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals -->
                                <ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index -->
                                    <li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp <?php echo $gaoliang[4]?>">
                                        <a ng-href="/ShopList?user=1&date=4&uid=<?php echo $uid?>" ng-class="styles.link" href="/ShopList?user=1&date=4&uid=<?php echo $uid?>" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付<?php echo $address; ?>晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->

                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals -->
                                <span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek"><?php echo $date[5] ?></span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals -->
                                <ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index -->
                                    <li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp <?php echo $gaoliang[5]?>">
                                        <a ng-href="/ShopList?user=1&date=5&uid=<?php echo $uid?>" ng-class="styles.link" href="/ShopList?user=1&date=5&uid=<?php echo $uid?>" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付<?php echo $address; ?>晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->

                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals -->
                                <span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek"><?php echo $date[6] ?></span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals -->
                                <ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index -->
                                    <li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp <?php echo $gaoliang[6]?>">
                                        <a ng-href="/ShopList?user=1&date=6&uid=<?php echo $uid?>" ng-class="styles.link" href="/ShopList?user=1&date=6&uid=<?php echo $uid?>" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付<?php echo $address; ?>晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->

                        </ul><!-- end ngIf: ctrl.meal.list.length -->
                        <!-- ngIf: !ctrl.meal.isFetched && !ctrl.size.single -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ngIf: ctrl.e.isTempAccount -->
        <div class="_3H1WdiIFri8I1j5ZNRD9SK-style-operations js-fixed">
            <div class="_3QqhfwHjLSnRm151Mm55vL-style-actions">
                <div class="_1ZtCAffVEjA1oZgTU_qhjs-style-pay" ng-mouseout="overBatch = false" ng-mouseover="overBatch = true" ng-mousedown="pressBatch = true" ng-mouseup="pressBatch = false" mc-click="ctrl.routeToEcard()">　
                    <div class="HECNttXR6VwuMtavN6km--style-payIcon icon icon-batch" mc-class="{
            [styles.hover]: overBatch &amp;&amp; !showBatch,
            [styles.pressed]: pressBatch
          }">
                        <span class="BYBYg4DsEhHmfsAVLqNxZ-style-orderCount"></span>
                    </div>
                </div>

                <div mc-action-menu-ctrl="" ng-class="styles.notification" ng-show="ctrl.e.isInternalStaff" ng-mouseout="overWaiter = false" ng-mouseover="overWaiter = true" class="ng-scope xyIVi8ClLqWOj1LRL2csa-style-ctrlPositionHelper ng-hide _2659H3EqDGDB8T9rpNle3T-style-notification">
                    <div mc-action-menu-toggle="" ng-class="styles.actionIconWrapper" class="_3ldAwQHLs91dobwCrdQbaz-style-actionIconWrapper">
                        <div class="icon icon-waiter_icon" ng-class="{
              'icon-waiter_icon': !overWaiter &amp;&amp; !actionMenuCtrl.isOn(),
              'icon-waiter_icon_hover': overWaiter &amp;&amp; !actionMenuCtrl.isOn(),
              'icon-waiter_icon_pressed': actionMenuCtrl.isOn()
            }"></div>
                    </div>
                    <div mc-action-menu="" ng-class="styles.notificationMenu" class="ng-isolate-scope _2tdCcTsGm-SCSpLq6D6mbY-style-menuPositionHelper _2nggli3F0l_GO0897c_Z8Q-style-notificationMenu">.<!-- ngIf: isOn() -->
                        <!-- ngIf: isOn() --></div>
                </div>

                <a class="_2659H3EqDGDB8T9rpNle3T-style-notification" ng-mouseout="overNotification = false" ng-mouseover="overNotification = true" ng-mousedown="pressNotification = true" ng-mouseup="pressNotification = false" mc-click="ctrl.routeToNotification()">
                    <div class="icon icon-notification" mc-class="{
               [styles.hover]: overNotification &amp;&amp; !showNotification,
               [styles.pressed]: pressNotification
             }">
                    </div>
                </a>

                <div ng-class="styles.user"  onclick="window.location.href='UserInfo?uid=<?php echo $uid?>&usertype=<?php echo $usertype?>';" class="_2aFVDIPMLKYnkv0x2vi3dW-style-user">
                    <div ng-class="actionIconWrapper" ng-mouseout="overFace = false" ng-mouseover="overFace = true">
                        <div ng-class="{
              'icon': true,
              'icon-face': !overFace &amp;&amp; !actionMenuCtrl.isOn(),
              'icon-face_hover': overFace &amp;&amp; !actionMenuCtrl.isOn(),
              'icon-face_pressed': actionMenuCtrl.isOn()
            }" class="icon icon-face"></div>
                    </div>
                </div>
            </div>
            <div class="_73HvgI0cnJ5grAO_Djk5A-style-operationsRule">
                <hr class="Psq6wybSAGHE2Juv3SSNr-style-operationsRuleInner">
            </div>
        </div>
    </div>
    <div class="_1KNiA28qlRm4LucsDNab0Z-style-restSection mc-animation-fade" mc-re-directive="">
        <div ng-class="styles.background" class="-yFeZTGCtWYJMVSBCS7nn-style-background">
        </div>
        <div class="_37iJcSDIbh5G-vvTkAaGZu-style-header js-fixed">
            <!-- ngIf: !ctrl.isSearchFormOn -->
            <div class="_2J_4A2wKM94FvRGZ6HNej-style-mealTitle" ng-if="!ctrl.isSearchFormOn">
                <h3 class="ng-binding"><?php echo $date[7]?> 16:30</h3>
                <span class="_3r-TbkQw68v7mdhVe01ZSX-style-corpName">企业付黎明大厦晚餐</span>
                <!-- ngIf: ctrl.e.searchEnable && ctrl.restaurant.list.length -->
                <span ng-if="ctrl.e.searchEnable &amp;&amp; ctrl.restaurant.list.length" class="_1KP8oP309iI3Qf-j_dPU1z-style-search" mc-click="ctrl.isSearchFormOn = true">
                    <i class="_3HM8JH-D0zMqffHZmJ88dS-style-searchIcon icon icon-search"></i>
                </span><!-- end ngIf: ctrl.e.searchEnable && ctrl.restaurant.list.length -->

                <!-- ngIf: ctrl.size.single && ctrl.e.autoAddr.namespace !== ctrl.meal.current.namespace -->
            </div><!-- end ngIf: !ctrl.isSearchFormOn -->
            <!-- ngIf: ctrl.isSearchFormOn -->
        </div>
        <!-- ngIf: ctrl.restaurant.isFetched -->
        <div class="sHoKiKzj1RGVkPjJHIWye-style-rests mc-animation-fade" ng-if="ctrl.restaurant.isFetched" style="opacity: 1;">
            <!-- ngIf: !ctrl.e.isTempAccount -->
            <div ng-if="!ctrl.e.isTempAccount" mc-re-timeout="" status="ctrl.currentMeal.status" close-time="ctrl.currentMeal.closeTime" reason="ctrl.currentMeal.reason" class="ng-scope ng-isolate-scope">
                <!-- ngIf: status === 'AVAILABLE' -->
                <!-- ngIf: (status === 'CLOSED' || status === 'NOT_YET' || status === 'POINT_OUT') && reason -->
            </div><!-- end ngIf: !ctrl.e.isTempAccount -->
            <ul class="" id="ShopList">
            </ul>
        </div><!-- end ngIf: ctrl.restaurant.isFetched -->
        <!-- ngIf: !ctrl.restaurant.isFetched -->
    </div>
    <!-- ngIf: ctrl.isShowDish -->
    <div ng-class="styles.container" mc-dish-directive="" ng-if="ctrl.isShowDish" class="ng-scope _1po2JRN2PMhBYoDFMakreW-style-container">
        <div ng-class="styles.background" class="_1QdDZpt-001WGzLoASvoqZ-style-background"></div>
        <div class="_3kfuIgYLEKNcaG73pZkDlk-style-header" mc-section-head="" status="ctrl.status">
            <!-- ngIf: ctrl.dish.restaurant.name -->
            <div class="_3xfp6SHIapi2SZOEh0R8t3-style-restName mc-animation-fade" ng-if="ctrl.dish.restaurant.name" style="opacity: 1;">
                <span class="f19zmoxFFn21rJGNW9mFY-style-restNameText"><?php echo $shops_info[$shop_num]['sname'] ?></span>
                <!-- ngIf: ctrl.isShow --><div mc-action-menu-ctrl="" ng-class="styles.adminEntrance" ng-if="ctrl.isShow" class="ng-scope xyIVi8ClLqWOj1LRL2csa-style-ctrlPositionHelper _18Zru9_tAP-tfiA1W8dxjr-style-adminEntrance">
                    <div mc-action-menu-toggle="" ng-class="styles.iconGear" class="icon icon-gear_icon _2MgIUeVZ-FoftTtmdEFnhm-style-iconGear">
                    </div>
                    <div mc-action-menu="" ng-class="styles.corpSettings" class="ng-isolate-scope _2tdCcTsGm-SCSpLq6D6mbY-style-menuPositionHelper _3zlzivDRXgPhOct2UlzFCq-style-corpSettings"><!-- ngIf: isOn() -->
                        <!-- ngIf: isOn() --></div>
                </div><!-- end ngIf: ctrl.isShow -->
            </div><!-- end ngIf: ctrl.dish.restaurant.name -->
            <div class="XUG6pH2CmJ6dt1gebL4r3-style-restNavWrapper">
                <ul class="_1Fxj_F3K1YB3Gkc_iYk-kD-style-restNav" style="left: 305.5px;">
                    <li class="_3f0KRLngbkf31lkfjRC639-style-rest js-scroll-item" mc-click="status.currentSectionIndex=$index" mc-class="{[styles.active]: status.currentSectionIndex === $index}" ng-repeat="section in ctrl.list track by $index">
                        套餐
                    </li><!-- end ngRepeat: section in ctrl.list track by $index -->
                </ul>
            </div>
            <!-- ngIf: ctrl.dish.restaurant.name --><div ng-if="ctrl.dish.restaurant.name" class="_34kTzh5yZmZ_FSOu0yfLWg-style-hrHelper mc-animation-fade" style="opacity: 1;">
                <div class="_1jEuVDBiVWAdSqWrPggnBf-style-hrInner">
                    <hr class="hr">
                </div>
            </div><!-- end ngIf: ctrl.dish.restaurant.name -->
            <!-- ngIf: ctrl.list --><div class="_3xZ91dYyAWkX8Xn1qDC350-style-dotWrapper" ng-if="ctrl.list">
                <i ng-class="['icon',  customClass, iconClass]" mc-icon="" which="dot" class="ng-isolate-scope icon  icon-dot"></i>
            </div><!-- end ngIf: ctrl.list -->
            <!-- ngIf: ctrl.size.single -->
        </div>
        <!-- ngIf: ctrl.isLoading -->
        <!-- ngIf: !ctrl.isLoading --><div class="mc-animation-fade _3TgcnXwhMpfbD2RWc7qlCG-style-dishesWrapper _3TgcnXwhMpfbD2RWc7qlCG-style-dishesWrapper" mc-class="{
    [styles.isNotEmptyCart]: ctrl.cart.list.length,
    [styles.dishesWrapper]: true
  }" mc-section-body="" status="ctrl.status" ng-if="!ctrl.isLoading" style="opacity: 1;">
            <div class="_1as_ut201rqyELag5iE4nk-style-dishesSlideHelper">
                <!-- ngIf: ctrl.isShowPlaceholder -->
                <!-- ngIf: !ctrl.isShowPlaceholder -->
                <div class="_3zG8HL5jaEuzJDXamp1fax-style-dishesInner transiting js-dishes-inner" ng-if="!ctrl.isShowPlaceholder" mc-dishes-scroller="" ng-style="{'width': (100 * ctrl.list.length) + '%'}" mc-click="status.isCartOn = false;" style="margin-left: 0px; width: 300%;">
                    <!-- ngRepeat: section in ctrl.list track by $index -->
                    <div class="_3pZSWddFONp7zYK3ORCfTV-style-dishes js-dishes" mc-follow-finger="" current-section-index="status.currentSectionIndex" index="0" ng-repeat="section in ctrl.list track by $index" ng-style="{'width': (100  / ctrl.list.length) + '%'}" style="width: 33.3333%; overflow-y: auto;">
                        <!-- ngIf: ctrl.checkSectionInView($index) -->
                        <ul class="_2eGiLxKIGdB63_g9I7nvTN-style-dishList" ng-if="ctrl.checkSectionInView($index)" id="CommodityList">
                        </ul><!-- end ngIf: ctrl.checkSectionInView($index) -->
                    </div><!-- end ngRepeat: section in ctrl.list track by $index -->
                    <div class="_3pZSWddFONp7zYK3ORCfTV-style-dishes js-dishes" mc-follow-finger="" current-section-index="status.currentSectionIndex" index="1" ng-repeat="section in ctrl.list track by $index" ng-style="{'width': (100  / ctrl.list.length) + '%'}" style="width: 33.3333%; overflow-y: auto;">
                        <!-- ngIf: ctrl.checkSectionInView($index) -->
                        <ul class="_2eGiLxKIGdB63_g9I7nvTN-style-dishList" ng-if="ctrl.checkSectionInView($index)">
                        </ul><!-- end ngIf: ctrl.checkSectionInView($index) -->
                    </div><!-- end ngRepeat: section in ctrl.list track by $index -->
                    <div class="_3pZSWddFONp7zYK3ORCfTV-style-dishes js-dishes" mc-follow-finger="" current-section-index="status.currentSectionIndex" index="2" ng-repeat="section in ctrl.list track by $index" ng-style="{'width': (100  / ctrl.list.length) + '%'}" style="width: 33.3333%; overflow-y: auto;">
                        <!-- ngIf: ctrl.checkSectionInView($index) -->
                    </div><!-- end ngRepeat: section in ctrl.list track by $index -->
                </div><!-- end ngIf: !ctrl.isShowPlaceholder -->
                <!-- ngIf: !ctrl.size.single --><div class="DANTJ3h2PjIs65OOyDpP0-style-slideLeft _3bVxIePMfkya16AyQnam-g-style-slide" mc-three-columns="322" ng-if="!ctrl.size.single" ng-init="slideStatus = { left: {}, right: {} };" style="width: 96.5px;">
                    <div class="_1OLTdUXpJHUn6uIlFy7GB4-style-middle ng-hide" ng-show="status.currentSectionIndex > 0" mc-click="ctrl.onSwipeRight()" ng-mousedown="slideStatus.left.down = true;" ng-mouseup="slideStatus.left.down = false;" ng-mouseover="slideStatus.left.over = true;" ng-mouseout="slideStatus.left.over = false;">
                        <a class="icon-slide-left icon icon-slide_left" ng-class="{
             'hover': slideStatus.left.over,
             'active': slideStatus.left.down
           }"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="_2ABZZGf8ZDa_pczpgG-EPp-style-cartWrapper" mc-dish-cart="" ng-if="!ctrl.isLoading">
        </div>
        <div mc-dish-address="" ng-if="!ctrl.isLoading" class="ng-scope"></div>
    </div>
</div>

<script>
    function add(a,b) {
        var att = document.createAttribute(a);
        att.value=b;
        return att;
    }
    function chakandingdan() {
        var a = document.createElement("li");
        a.setAttributeNode(add("ng-if", "ctrl.currentMeal.order"));
        a.setAttributeNode(add("class", "F9ey8JgI2IoqPcogOQFwt-style-rest mc-animation-slide"));
        a.setAttributeNode(add("ng-init", "isMouseOn = false;"));
        a.setAttributeNode(add("ng-mouseover", "isMouseOn = true;"));
        a.setAttributeNode(add("ng-mouseout", "isMouseOn = false;"));
        a.setAttributeNode(add("mc-class", "{[styles.active]: ctrl.isOrderActive }"));

        var b = document.createElement("a");
        b.setAttributeNode(add("ng-href", "!ctrl.e.isMobile"));
        b.setAttributeNode(add("href", "/EditGroupInfo"));


        var c = document.createElement("div");
        c.setAttributeNode(add("class", "_3uNy7RgCOUcfFu6au1W54_-style-restInner"));

        var d = document.createElement("span");
        var node = document.createTextNode('查看订单');
        d.appendChild(node);

        var e = document.createElement("i");
        e.setAttributeNode(add("ng-class", "{'icon-right_arrow': !isMouseOn &amp;&amp; !ctrl.isOrderActive,'icon-right_arrow_hover': isMouseOn &amp;&amp; !ctrl.isOrderActive,'icon-right_arrow_active': ctrl.isOrderActive}"));
        e.setAttributeNode(add("class", "_149wo3vV6N64zC-afF4Q1V-style-rightIcon icon icon-right_arrow"));


        c.appendChild(d);
        c.appendChild(e);
        b.appendChild(c);
        a.appendChild(b);

        var element = document.getElementById("ShopList");
        element.appendChild(a);
    }
    function buildShop(shop,num) {
        var a = document.createElement("li");
        a.setAttributeNode(add("ng-repeat", "restaurant in ctrl.restaurant.list track by $index"));
        a.setAttributeNode(add("class", "F9ey8JgI2IoqPcogOQFwt-style-rest "+shop['gaoliang']+shop['xuanzhong']));
        a.setAttributeNode(add("ng-init", "isMouseOn = false"));
        a.setAttributeNode(add("ng-mouseover", "isMouseOn = true;"));
        a.setAttributeNode(add("ng-mouseout", "isMouseOn = false;"));
        a.setAttributeNode(add("mc-class", "{[styles.disabled]: !restaurant.open || !ctrl.currentMeal.isAvailable || ctrl.currentMeal.isMealPointDisabled,[styles.active]: ctrl.checkRestaurantActive(restaurant),}"));

        var b = document.createElement("a");
        b.setAttributeNode(add("ng-href", "/Welcome?flag=1&date=<?php echo $date_num?>&uid=<?php echo $uid?>&usertype=1&shopnum="+num));
        b.setAttributeNode(add("href", "/Welcome?flag=1&date=<?php echo $date_num?>&uid=<?php echo $uid?>&usertype=1&shopnum="+num));


        var c = document.createElement("div");
        c.setAttributeNode(add("class", "_3uNy7RgCOUcfFu6au1W54_-style-restInner"));

        var node = document.createTextNode(shop['sname']);
        c.appendChild(node);

        var e = document.createElement("i");
        e.setAttributeNode(add("ng-class", "{'icon-right_arrow': !isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),'icon-right_arrow_hover': isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),'icon-right_arrow_active': ctrl.checkRestaurantActive(restaurant)}"));
        e.setAttributeNode(add("class", "_149wo3vV6N64zC-afF4Q1V-style-rightIcon icon icon-right_arrow_active"));


        c.appendChild(e);
        b.appendChild(c);
        a.appendChild(b);

        var element = document.getElementById("ShopList");
        element.appendChild(a);
    }
    function buildCommodity()
    {
        var a = document.createElement("li");
        a.setAttributeNode(add("mc-click", "ctrl.increaseDish(dish)"));
        a.setAttributeNode(add("ng-init", "isMouseOn = false"));
        a.setAttributeNode(add("mc-class", "{[styles.dish]: true,[styles.isChecked]: ctrl.findDishCount(dish) || removingDish,[styles.isDisabled]: ctrl.checkDishDisabled(dish),[styles.isRemoving]: removingDish}"));
        a.setAttributeNode(add("ng-mouseover", "isMouseOn = true;"));
        a.setAttributeNode(add("ng-mouseout", "isMouseOn = false;"));
        a.setAttributeNode(add("ng-if", "dish.name"));
        a.setAttributeNode(add("ng-repeat", "dish in section.dishes track by $index"));
        a.setAttributeNode(add("class", "ng-scope _16JFh_4mqlSffOpyj-kpiZ-style-dish _3lTmiaVKGwuA9EzB2pZdew-style-isDisabled"));

        var b = document.createElement("div");
        b.setAttributeNode(add("class", "tRxCcUwoD4jLdVCL1PtFJ-style-dishMinusScope"));
        b.setAttributeNode(add("mc-tapstart", "removingDish=true"));
        b.setAttributeNode(add("mc-tapend", "removingDish=false"));
        b.setAttributeNode(add("data-tapend-delay", "300"));
        b.setAttributeNode(add("mc-click", "ctrl.decreaseDish(dish, $event);"));

        var c = document.createElement("div");
        c.setAttributeNode(add("class", "_8hoLf-d3Kbiq_UMK4QDDR-style-dishHelper"));
        var d = document.createElement("div");
        d.setAttributeNode(add("class", "pUShWN6o3tcMwRHm5tNVG-style-dishLine"));
        var e = document.createElement("div");
        e.setAttributeNode(add("class", "_294J71JhBboOh-_afExr_7-style-dishLineInner"));

        var f = document.createElement("div");
        f.setAttributeNode(add("class", "_1bj3B-tvRyIUZncjGp29WP-style-dishMinus"));
        var g = document.createElement("div");
        g.setAttributeNode(add("class", "Oj-koE4srJDcbl2j5czYg-style-dishMinusHelper"));
        var h = document.createElement("div");
        h.setAttributeNode(add("class", "_17-G443-CvKI-YJjL9KgdA-style-dishMinusAssistant"));
        var i = document.createElement("i");
        i.setAttributeNode(add("class", "_3o47L0AJhtXM1ZOUltJdM0-style-dishMinusIcon icon icon-minus"));
        h.appendChild(i);
        g.appendChild(h);
        f.appendChild(g);

        var j = document.createElement("div");
        j.setAttributeNode(add("class", "_8kRBbYwRQv9BvU1onNzYU-style-dishName"));
        var k = document.createElement("div");
        k.setAttributeNode(add("class", "_2sZfsnFPiUH5V4fXhlBugg-style-dishNameHelper"));
        var l = document.createElement("div");
        l.setAttributeNode(add("class", "k830dcw3hnfrFruRRJShf-style-dishTitle"));
        var node1 = document.createTextNode('酥嫩鸡腿排饭套餐');
        l.appendChild(node1);
        var m = document.createElement("div");
        m.setAttributeNode(add("class", "_1HwOunLJd2-n_KC65PCLQ1-style-dishSubtitle"));
        var node2 = document.createTextNode('咸鲜/配精美小菜&饮料/滴滴专供');
        m.appendChild(node2);
        var n = document.createElement("div");
        n.setAttributeNode(add("class", "_2E1I0DVW20nub3sewfo33b-style-dishFav ng-hide"));
        n.setAttributeNode(add("ng-show", "ctrl.checkFavourite(restaurant.id, dish)"));
        var o = document.createElement("i");
        o.setAttributeNode(add("class", "icon icon-small_green_heart"));
        o.setAttributeNode(add("ng-class", "{ 'icon-small_white_heart': isMouseOver || !!dish.count }"));

        k.appendChild(l);
        k.appendChild(m);
        j.appendChild(k);
        n.appendChild(o);
        j.appendChild(n);


        var p = document.createElement("div");
        p.setAttributeNode(add("class", "_1OBuvcl0odOTRHWAPhxNDq-style-dishNumber"));
        var q = document.createElement("div");
        q.setAttributeNode(add("class", "_20GkClv-ushPUxit7dSovR-style-dishNumberHelper"));
        var r = document.createElement("span");
        r.setAttributeNode(add("class", "_1XdGI6FaEB_-Y_HzjRuy8L-style-dishFree WYUX1iwW0a7mlumZV6n0H-style-dishPrice"));
        r.setAttributeNode(add("ng-show", "ctrl.currentMeal.free"));
        var node3 = document.createTextNode('**');
        r.appendChild(node3);
        var s = document.createElement("div");
        s.setAttributeNode(add("class", "l4v0hBmwjNECjhQpsgYG2-style-dishCount"));
        var t = document.createElement("div");
        t.setAttributeNode(add("class", "_3J0YTE_rMI4fjwUSg5DtOB-style-dishCountNumber"));
        s.appendChild(t);
        q.appendChild(r);
        q.appendChild(s);
        p.appendChild(q);


        var element = document.getElementById("CommodityList");
        d.appendChild(e);
        c.appendChild(d);
        c.appendChild(f);
        c.appendChild(j);
        c.appendChild(p);
        a.appendChild(b);
        a.appendChild(c);
        element.appendChild(a);
    }
    var dingdanflag = <?php echo $chakandingdan?>;
    if(dingdanflag){
        chakandingdan();
    }
    var sum = <?php echo count($shops_info)?>;
    var shops = <?php echo json_encode($shops_info)?>;
    for (var i=0;i<sum;i++)
    {
        buildShop(shops[i],i);
    }
    buildCommodity();
</script>
</body></html>