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
                        <!-- ngIf: ctrl.meal.list.length --><ul class="_3cFY1ceEWgD9ld_jwV6PdE-style-corps mc-animation-fade" ng-if="ctrl.meal.list.length" style="opacity: 1;">
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
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp Wt8gBIl6shObKoAik5zCI-style-active">
                                        <a ng-href="#/meal/2c8f4064ea5132971167265ed792f8db" ng-class="styles.link" href="#/meal/2c8f4064ea5132971167265ed792f8db" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付<?php echo $address; ?>晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->
                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals --><span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek">TUE</span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals --><ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index --><li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp">
                                        <a ng-href="#/meal/38f29428be7a72015cf97d46d6b0d43f" ng-class="styles.link" href="#/meal/38f29428be7a72015cf97d46d6b0d43f" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付黎明大厦晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->
                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals --><span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek">WED</span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals --><ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index --><li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp">
                                        <a ng-href="#/meal/60943a02cadbdbde77fb6fa773920ea1" ng-class="styles.link" href="#/meal/60943a02cadbdbde77fb6fa773920ea1" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付黎明大厦晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->
                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals --><span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek">THU</span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals --><ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index --><li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp">
                                        <a ng-href="#/meal/74916c210f9dde9f85db4cbbe9e1204b" ng-class="styles.link" href="#/meal/74916c210f9dde9f85db4cbbe9e1204b" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付黎明大厦晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->
                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals --><span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek">FRI</span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals --><ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index --><li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp">
                                        <a ng-href="#/meal/c1d355348004ce72bcac127cd37f9bbd" ng-class="styles.link" href="#/meal/c1d355348004ce72bcac127cd37f9bbd" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付黎明大厦晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->
                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals --><span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek">SAT</span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals --><ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index --><li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp">
                                        <a ng-href="#/meal/9e9229496c61c0454c51f75eda62e6a9" ng-class="styles.link" href="#/meal/9e9229496c61c0454c51f75eda62e6a9" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付黎明大厦晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->
                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals --><span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek">SUN</span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals --><ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index --><li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp">
                                        <a ng-href="#/meal/a2ded607e84e5a3a80bffd3825b55fa0" ng-class="styles.link" href="#/meal/a2ded607e84e5a3a80bffd3825b55fa0" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付黎明大厦晚餐</div>
                                            <!-- ngIf: meal.isAvailable && ctrl.checkMealInSearch(meal) -->
                                        </a>
                                    </li><!-- end ngRepeat: meal in date.meals track by $index -->
                                </ul><!-- end ngIf: date.meals -->
                            </li><!-- end ngRepeat: date in ctrl.meal.list track by $index -->
                            <li class="_1dsOuHOIjXVbl1YezXvOLk-style-orderDay" ng-repeat="date in ctrl.meal.list track by $index">
                                <!-- ngIf: date.meals --><span ng-if="date.meals" class="_3a6ZkmNOWAivwcRhWZlByY-style-dayOfWeek">MON</span><!-- end ngIf: date.meals -->
                                <!-- ngIf: date.meals --><ul ng-if="date.meals" class="ng-scope">
                                    <!-- ngRepeat: meal in date.meals track by $index --><li ng-repeat="meal in date.meals track by $index" mc-class="{
            [styles.corp]: true,
            [styles.blocking]: meal.isBlocking,
            [styles.orderedCorp]: !meal.isAvailable,
            [styles.active]: meal === ctrl.meal.current
          }" class="ng-scope _3_6l8Gy6RrXMkols5XMrjL-style-corp _2yief5CHhcqudaaTwkIQjw-style-orderedCorp">
                                        <a ng-href="#/meal/7bd238190236cb9d4a6043fe1395e8c0" ng-class="styles.link" href="#/meal/7bd238190236cb9d4a6043fe1395e8c0" class="_1FtPiX9ThRadyw-1Pi_FkT-style-link">
                                            <span class="_YvHHUKePRPNyHOMAZBY_-style-targetTime">18:30</span>
                                            <div class="_2cvy9glTa02FB4VfYHx2LY-style-name">企业付黎明大厦晚餐</div>
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
                    <div mc-action-menu="" ng-class="styles.notificationMenu" class="ng-isolate-scope _2tdCcTsGm-SCSpLq6D6mbY-style-menuPositionHelper _2nggli3F0l_GO0897c_Z8Q-style-notificationMenu"><!-- ngIf: isOn() -->
                        <!-- ngIf: isOn() --></div>
                </div>

                <a class="_2659H3EqDGDB8T9rpNle3T-style-notification" ng-mouseout="overNotification = false" ng-mouseover="overNotification = true" ng-mousedown="pressNotification = true" ng-mouseup="pressNotification = false" mc-click="ctrl.routeToNotification()">
                    <div class="icon icon-notification" mc-class="{
               [styles.hover]: overNotification &amp;&amp; !showNotification,
               [styles.pressed]: pressNotification
             }">
                    </div>
                </a>

                <div ng-class="styles.user" mc-click="ctrl.routeToMe()" class="_2aFVDIPMLKYnkv0x2vi3dW-style-user">
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
        <div ng-class="styles.background" class="-yFeZTGCtWYJMVSBCS7nn-style-background"></div>
        <div class="_37iJcSDIbh5G-vvTkAaGZu-style-header js-fixed">
            <!-- ngIf: !ctrl.isSearchFormOn --><div class="_2J_4A2wKM94FvRGZ6HNej-style-mealTitle" ng-if="!ctrl.isSearchFormOn">
                <h3 class="ng-binding">MON / 04-02 16:30</h3>
                <span class="_3r-TbkQw68v7mdhVe01ZSX-style-corpName">企业付黎明大厦晚餐</span>
                <!-- ngIf: ctrl.e.searchEnable && ctrl.restaurant.list.length --><span ng-if="ctrl.e.searchEnable &amp;&amp; ctrl.restaurant.list.length" class="_1KP8oP309iI3Qf-j_dPU1z-style-search" mc-click="ctrl.isSearchFormOn = true">
        <i class="_3HM8JH-D0zMqffHZmJ88dS-style-searchIcon icon icon-search"></i>
      </span><!-- end ngIf: ctrl.e.searchEnable && ctrl.restaurant.list.length -->

                <!-- ngIf: ctrl.size.single && ctrl.e.autoAddr.namespace !== ctrl.meal.current.namespace -->
            </div><!-- end ngIf: !ctrl.isSearchFormOn -->
            <!-- ngIf: ctrl.isSearchFormOn -->
        </div>
        <!-- ngIf: ctrl.restaurant.isFetched --><div class="sHoKiKzj1RGVkPjJHIWye-style-rests mc-animation-fade" ng-if="ctrl.restaurant.isFetched" style="opacity: 1;">
            <!-- ngIf: !ctrl.e.isTempAccount --><div ng-if="!ctrl.e.isTempAccount" mc-re-timeout="" status="ctrl.currentMeal.status" close-time="ctrl.currentMeal.closeTime" reason="ctrl.currentMeal.reason" class="ng-scope ng-isolate-scope">
                <!-- ngIf: status === 'AVAILABLE' -->
                <!-- ngIf: (status === 'CLOSED' || status === 'NOT_YET' || status === 'POINT_OUT') && reason -->
            </div><!-- end ngIf: !ctrl.e.isTempAccount -->
            <ul class="">
                <!-- ngIf: ctrl.currentMeal.order --><li class="F9ey8JgI2IoqPcogOQFwt-style-rest mc-animation-slide" ng-if="ctrl.currentMeal.order" ng-init="isMouseOn = false;" ng-mouseover="isMouseOn = true;" ng-mouseout="isMouseOn = false;" mc-class="{[styles.active]: ctrl.isOrderActive }">
                    <a ng-href="#/meal/2c8f4064ea5132971167265ed792f8db/o/7ee960dff65e" href="#/meal/2c8f4064ea5132971167265ed792f8db/o/7ee960dff65e">
                        <div class="_3uNy7RgCOUcfFu6au1W54_-style-restInner">
                            <span>查看订单</span>
                            <i class="_149wo3vV6N64zC-afF4Q1V-style-rightIcon icon icon-right_arrow" ng-class="{
                'icon-right_arrow': !isMouseOn &amp;&amp; !ctrl.isOrderActive,
                'icon-right_arrow_hover': isMouseOn &amp;&amp; !ctrl.isOrderActive,
                'icon-right_arrow_active': ctrl.isOrderActive
              }"></i>
                        </div>
                    </a>
                </li><!-- end ngIf: ctrl.currentMeal.order -->
                <!-- ngIf: !ctrl.search.result.length && !ctrl.e.isRecommendationDisabled && ctrl.restaurant.list.length --><li class="F9ey8JgI2IoqPcogOQFwt-style-rest mc-animation-slide qfiVW8RzFNvV_40DtFe2O-style-disabled" ng-init="isMouseOn = false;" ng-mouseover="isMouseOn = true;" ng-mouseout="isMouseOn = false;" ng-if="!ctrl.search.result.length &amp;&amp; !ctrl.e.isRecommendationDisabled &amp;&amp; ctrl.restaurant.list.length" mc-class="{
          [styles.disabled]: !ctrl.currentMeal.isAvailable || ctrl.currentMeal.isMealPointDisabled,
          [styles.active]: ctrl.isRecommendationActive
        }">
                    <a ng-href="#/meal/2c8f4064ea5132971167265ed792f8db/r" href="#/meal/2c8f4064ea5132971167265ed792f8db/r">
                        <div class="_3uNy7RgCOUcfFu6au1W54_-style-restInner">
                            快捷订餐
                            <i class="_149wo3vV6N64zC-afF4Q1V-style-rightIcon icon icon-right_arrow" ng-class="{
                'icon-right_arrow': !isMouseOn &amp;&amp; !ctrl.isRecommendationActive,
                'icon-right_arrow_hover': isMouseOn &amp;&amp; !ctrl.isRecommendationActive,
                'icon-right_arrow_active': ctrl.isRecommendationActive
              }"></i>
                        </div>
                    </a>
                </li><!-- end ngIf: !ctrl.search.result.length && !ctrl.e.isRecommendationDisabled && ctrl.restaurant.list.length -->
                <!-- ngRepeat: restaurant in ctrl.restaurant.list track by $index --><li class="F9ey8JgI2IoqPcogOQFwt-style-rest qfiVW8RzFNvV_40DtFe2O-style-disabled _2peRTUx-l3u6QN18-rTwjp-style-active" ng-init="isMouseOn = false" ng-mouseover="isMouseOn = true;" ng-mouseout="isMouseOn = false;" ng-repeat="restaurant in ctrl.restaurant.list track by $index" mc-class="{
          [styles.disabled]: !restaurant.open || !ctrl.currentMeal.isAvailable || ctrl.currentMeal.isMealPointDisabled,
          [styles.active]: ctrl.checkRestaurantActive(restaurant),
        }">
                    <a ng-href="#/meal/2c8f4064ea5132971167265ed792f8db/r/6fff76" href="#/meal/2c8f4064ea5132971167265ed792f8db/r/6fff76">
                        <div class="_3uNy7RgCOUcfFu6au1W54_-style-restInner">
                            永和大王(回龙观店)
                            <!-- ngIf: ctrl.searchResult[restaurant.id].length > 0 -->
                            <i class="_149wo3vV6N64zC-afF4Q1V-style-rightIcon icon icon-right_arrow_active" ng-class="{
                'icon-right_arrow': !isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_hover': isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_active': ctrl.checkRestaurantActive(restaurant)
              }">
                            </i>
                        </div>
                    </a>
                </li><!-- end ngRepeat: restaurant in ctrl.restaurant.list track by $index --><li class="F9ey8JgI2IoqPcogOQFwt-style-rest qfiVW8RzFNvV_40DtFe2O-style-disabled" ng-init="isMouseOn = false" ng-mouseover="isMouseOn = true;" ng-mouseout="isMouseOn = false;" ng-repeat="restaurant in ctrl.restaurant.list track by $index" mc-class="{
          [styles.disabled]: !restaurant.open || !ctrl.currentMeal.isAvailable || ctrl.currentMeal.isMealPointDisabled,
          [styles.active]: ctrl.checkRestaurantActive(restaurant),
        }">
                    <a ng-href="#/meal/2c8f4064ea5132971167265ed792f8db/r/81cade" href="#/meal/2c8f4064ea5132971167265ed792f8db/r/81cade">
                        <div class="_3uNy7RgCOUcfFu6au1W54_-style-restInner">
                            跃界(五道口店)
                            <!-- ngIf: ctrl.searchResult[restaurant.id].length > 0 -->
                            <i class="_149wo3vV6N64zC-afF4Q1V-style-rightIcon icon icon-right_arrow" ng-class="{
                'icon-right_arrow': !isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_hover': isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_active': ctrl.checkRestaurantActive(restaurant)
              }">
                            </i>
                        </div>
                    </a>
                </li><!-- end ngRepeat: restaurant in ctrl.restaurant.list track by $index --><li class="F9ey8JgI2IoqPcogOQFwt-style-rest qfiVW8RzFNvV_40DtFe2O-style-disabled" ng-init="isMouseOn = false" ng-mouseover="isMouseOn = true;" ng-mouseout="isMouseOn = false;" ng-repeat="restaurant in ctrl.restaurant.list track by $index" mc-class="{
          [styles.disabled]: !restaurant.open || !ctrl.currentMeal.isAvailable || ctrl.currentMeal.isMealPointDisabled,
          [styles.active]: ctrl.checkRestaurantActive(restaurant),
        }">
                    <a ng-href="#/meal/2c8f4064ea5132971167265ed792f8db/r/f4c6cc" href="#/meal/2c8f4064ea5132971167265ed792f8db/r/f4c6cc">
                        <div class="_3uNy7RgCOUcfFu6au1W54_-style-restInner">
                            鑫记(上地店)
                            <!-- ngIf: ctrl.searchResult[restaurant.id].length > 0 -->
                            <i class="_149wo3vV6N64zC-afF4Q1V-style-rightIcon icon icon-right_arrow" ng-class="{
                'icon-right_arrow': !isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_hover': isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_active': ctrl.checkRestaurantActive(restaurant)
              }">
                            </i>
                        </div>
                    </a>
                </li><!-- end ngRepeat: restaurant in ctrl.restaurant.list track by $index --><li class="F9ey8JgI2IoqPcogOQFwt-style-rest qfiVW8RzFNvV_40DtFe2O-style-disabled" ng-init="isMouseOn = false" ng-mouseover="isMouseOn = true;" ng-mouseout="isMouseOn = false;" ng-repeat="restaurant in ctrl.restaurant.list track by $index" mc-class="{
          [styles.disabled]: !restaurant.open || !ctrl.currentMeal.isAvailable || ctrl.currentMeal.isMealPointDisabled,
          [styles.active]: ctrl.checkRestaurantActive(restaurant),
        }">
                    <a ng-href="#/meal/2c8f4064ea5132971167265ed792f8db/r/ec1be3" href="#/meal/2c8f4064ea5132971167265ed792f8db/r/ec1be3">
                        <div class="_3uNy7RgCOUcfFu6au1W54_-style-restInner">
                            合利屋(百旺店)
                            <!-- ngIf: ctrl.searchResult[restaurant.id].length > 0 -->
                            <i class="_149wo3vV6N64zC-afF4Q1V-style-rightIcon icon icon-right_arrow" ng-class="{
                'icon-right_arrow': !isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_hover': isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_active': ctrl.checkRestaurantActive(restaurant)
              }">
                            </i>
                        </div>
                    </a>
                </li><!-- end ngRepeat: restaurant in ctrl.restaurant.list track by $index --><li class="F9ey8JgI2IoqPcogOQFwt-style-rest qfiVW8RzFNvV_40DtFe2O-style-disabled" ng-init="isMouseOn = false" ng-mouseover="isMouseOn = true;" ng-mouseout="isMouseOn = false;" ng-repeat="restaurant in ctrl.restaurant.list track by $index" mc-class="{
          [styles.disabled]: !restaurant.open || !ctrl.currentMeal.isAvailable || ctrl.currentMeal.isMealPointDisabled,
          [styles.active]: ctrl.checkRestaurantActive(restaurant),
        }">
                    <a ng-href="#/meal/2c8f4064ea5132971167265ed792f8db/r/39788f" href="#/meal/2c8f4064ea5132971167265ed792f8db/r/39788f">
                        <div class="_3uNy7RgCOUcfFu6au1W54_-style-restInner">
                            你的心跳(中关村软件园店)
                            <!-- ngIf: ctrl.searchResult[restaurant.id].length > 0 -->
                            <i class="_149wo3vV6N64zC-afF4Q1V-style-rightIcon icon icon-right_arrow" ng-class="{
                'icon-right_arrow': !isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_hover': isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_active': ctrl.checkRestaurantActive(restaurant)
              }">
                            </i>
                        </div>
                    </a>
                </li><!-- end ngRepeat: restaurant in ctrl.restaurant.list track by $index --><li class="F9ey8JgI2IoqPcogOQFwt-style-rest qfiVW8RzFNvV_40DtFe2O-style-disabled" ng-init="isMouseOn = false" ng-mouseover="isMouseOn = true;" ng-mouseout="isMouseOn = false;" ng-repeat="restaurant in ctrl.restaurant.list track by $index" mc-class="{
          [styles.disabled]: !restaurant.open || !ctrl.currentMeal.isAvailable || ctrl.currentMeal.isMealPointDisabled,
          [styles.active]: ctrl.checkRestaurantActive(restaurant),
        }">
                    <a ng-href="#/meal/2c8f4064ea5132971167265ed792f8db/r/16e4e5" href="#/meal/2c8f4064ea5132971167265ed792f8db/r/16e4e5">
                        <div class="_3uNy7RgCOUcfFu6au1W54_-style-restInner">
                            金百万(上地嘉华店)
                            <!-- ngIf: ctrl.searchResult[restaurant.id].length > 0 -->
                            <i class="_149wo3vV6N64zC-afF4Q1V-style-rightIcon icon icon-right_arrow" ng-class="{
                'icon-right_arrow': !isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_hover': isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_active': ctrl.checkRestaurantActive(restaurant)
              }">
                            </i>
                        </div>
                    </a>
                </li><!-- end ngRepeat: restaurant in ctrl.restaurant.list track by $index --><li class="F9ey8JgI2IoqPcogOQFwt-style-rest qfiVW8RzFNvV_40DtFe2O-style-disabled" ng-init="isMouseOn = false" ng-mouseover="isMouseOn = true;" ng-mouseout="isMouseOn = false;" ng-repeat="restaurant in ctrl.restaurant.list track by $index" mc-class="{
          [styles.disabled]: !restaurant.open || !ctrl.currentMeal.isAvailable || ctrl.currentMeal.isMealPointDisabled,
          [styles.active]: ctrl.checkRestaurantActive(restaurant),
        }">
                    <a ng-href="#/meal/2c8f4064ea5132971167265ed792f8db/r/2b5aa0" href="#/meal/2c8f4064ea5132971167265ed792f8db/r/2b5aa0">
                        <div class="_3uNy7RgCOUcfFu6au1W54_-style-restInner">
                            嘉和一品(清河店)
                            <!-- ngIf: ctrl.searchResult[restaurant.id].length > 0 -->
                            <i class="_149wo3vV6N64zC-afF4Q1V-style-rightIcon icon icon-right_arrow" ng-class="{
                'icon-right_arrow': !isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_hover': isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_active': ctrl.checkRestaurantActive(restaurant)
              }">
                            </i>
                        </div>
                    </a>
                </li><!-- end ngRepeat: restaurant in ctrl.restaurant.list track by $index --><li class="F9ey8JgI2IoqPcogOQFwt-style-rest qfiVW8RzFNvV_40DtFe2O-style-disabled" ng-init="isMouseOn = false" ng-mouseover="isMouseOn = true;" ng-mouseout="isMouseOn = false;" ng-repeat="restaurant in ctrl.restaurant.list track by $index" mc-class="{
          [styles.disabled]: !restaurant.open || !ctrl.currentMeal.isAvailable || ctrl.currentMeal.isMealPointDisabled,
          [styles.active]: ctrl.checkRestaurantActive(restaurant),
        }">
                    <a ng-href="#/meal/2c8f4064ea5132971167265ed792f8db/r/1e7edd" href="#/meal/2c8f4064ea5132971167265ed792f8db/r/1e7edd">
                        <div class="_3uNy7RgCOUcfFu6au1W54_-style-restInner">
                            赛百味(数字山谷店)
                            <!-- ngIf: ctrl.searchResult[restaurant.id].length > 0 -->
                            <i class="_149wo3vV6N64zC-afF4Q1V-style-rightIcon icon icon-right_arrow" ng-class="{
                'icon-right_arrow': !isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_hover': isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_active': ctrl.checkRestaurantActive(restaurant)
              }">
                            </i>
                        </div>
                    </a>
                </li><!-- end ngRepeat: restaurant in ctrl.restaurant.list track by $index --><li class="F9ey8JgI2IoqPcogOQFwt-style-rest qfiVW8RzFNvV_40DtFe2O-style-disabled" ng-init="isMouseOn = false" ng-mouseover="isMouseOn = true;" ng-mouseout="isMouseOn = false;" ng-repeat="restaurant in ctrl.restaurant.list track by $index" mc-class="{
          [styles.disabled]: !restaurant.open || !ctrl.currentMeal.isAvailable || ctrl.currentMeal.isMealPointDisabled,
          [styles.active]: ctrl.checkRestaurantActive(restaurant),
        }">
                    <a ng-href="#/meal/2c8f4064ea5132971167265ed792f8db/r/700e64" href="#/meal/2c8f4064ea5132971167265ed792f8db/r/700e64">
                        <div class="_3uNy7RgCOUcfFu6au1W54_-style-restInner">
                            桃园眷村(五彩城店)
                            <!-- ngIf: ctrl.searchResult[restaurant.id].length > 0 -->
                            <i class="_149wo3vV6N64zC-afF4Q1V-style-rightIcon icon icon-right_arrow" ng-class="{
                'icon-right_arrow': !isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_hover': isMouseOn &amp;&amp; !ctrl.checkRestaurantActive(restaurant),
                'icon-right_arrow_active': ctrl.checkRestaurantActive(restaurant)
              }">
                            </i>
                        </div>
                    </a>
                </li><!-- end ngRepeat: restaurant in ctrl.restaurant.list track by $index -->
            </ul>
        </div><!-- end ngIf: ctrl.restaurant.isFetched -->
        <!-- ngIf: !ctrl.restaurant.isFetched -->
    </div>
    <!-- ngIf: ctrl.isShowDish --><div ng-class="styles.container" mc-dish-directive="" ng-if="ctrl.isShowDish" class="ng-scope _1po2JRN2PMhBYoDFMakreW-style-container">
        <div ng-class="styles.background" class="_1QdDZpt-001WGzLoASvoqZ-style-background"></div>
        <div class="_3kfuIgYLEKNcaG73pZkDlk-style-header" mc-section-head="" status="ctrl.status">
            <!-- ngIf: ctrl.dish.restaurant.name --><div class="_3xfp6SHIapi2SZOEh0R8t3-style-restName mc-animation-fade" ng-if="ctrl.dish.restaurant.name" style="opacity: 1;">
                <span class="f19zmoxFFn21rJGNW9mFY-style-restNameText">永和大王(回龙观店)</span>
                <!-- ngIf: ctrl.isShow --><div mc-action-menu-ctrl="" ng-class="styles.adminEntrance" ng-if="ctrl.isShow" class="ng-scope xyIVi8ClLqWOj1LRL2csa-style-ctrlPositionHelper _18Zru9_tAP-tfiA1W8dxjr-style-adminEntrance">
                    <div mc-action-menu-toggle="" ng-class="styles.iconGear" class="icon icon-gear_icon _2MgIUeVZ-FoftTtmdEFnhm-style-iconGear">
                    </div>
                    <div mc-action-menu="" ng-class="styles.corpSettings" class="ng-isolate-scope _2tdCcTsGm-SCSpLq6D6mbY-style-menuPositionHelper _3zlzivDRXgPhOct2UlzFCq-style-corpSettings"><!-- ngIf: isOn() -->
                        <!-- ngIf: isOn() --></div>
                </div><!-- end ngIf: ctrl.isShow -->
            </div><!-- end ngIf: ctrl.dish.restaurant.name -->
            <div class="XUG6pH2CmJ6dt1gebL4r3-style-restNavWrapper">
                <ul class="_1Fxj_F3K1YB3Gkc_iYk-kD-style-restNav" style="left: 281.5px;">
                    <!-- ngRepeat: section in ctrl.list track by $index --><li class="_3f0KRLngbkf31lkfjRC639-style-rest js-scroll-item _1nqY94nOh9aYE4HLgvAJM5-style-active" mc-click="status.currentSectionIndex=$index" mc-class="{[styles.active]: status.currentSectionIndex === $index}" ng-repeat="section in ctrl.list track by $index">
                        我常点的餐品
                    </li><!-- end ngRepeat: section in ctrl.list track by $index --><li class="_3f0KRLngbkf31lkfjRC639-style-rest js-scroll-item" mc-click="status.currentSectionIndex=$index" mc-class="{[styles.active]: status.currentSectionIndex === $index}" ng-repeat="section in ctrl.list track by $index">
                        同事们常点的餐品
                    </li><!-- end ngRepeat: section in ctrl.list track by $index --><li class="_3f0KRLngbkf31lkfjRC639-style-rest js-scroll-item" mc-click="status.currentSectionIndex=$index" mc-class="{[styles.active]: status.currentSectionIndex === $index}" ng-repeat="section in ctrl.list track by $index">
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
                <!-- ngIf: !ctrl.isShowPlaceholder --><div class="_3zG8HL5jaEuzJDXamp1fax-style-dishesInner transiting js-dishes-inner" ng-if="!ctrl.isShowPlaceholder" mc-dishes-scroller="" ng-style="{'width': (100 * ctrl.list.length) + '%'}" mc-click="status.isCartOn = false;" style="margin-left: 0px; width: 300%;">
                    <!-- ngRepeat: section in ctrl.list track by $index --><div class="_3pZSWddFONp7zYK3ORCfTV-style-dishes js-dishes" mc-follow-finger="" current-section-index="status.currentSectionIndex" index="0" ng-repeat="section in ctrl.list track by $index" ng-style="{'width': (100  / ctrl.list.length) + '%'}" style="width: 33.3333%; overflow-y: auto;">
                        <!-- ngIf: ctrl.checkSectionInView($index) --><ul class="_2eGiLxKIGdB63_g9I7nvTN-style-dishList" ng-if="ctrl.checkSectionInView($index)">
                            <!-- ngRepeat: dish in section.dishes track by $index --><!-- ngIf: dish.name --><li mc-click="ctrl.increaseDish(dish)" ng-init="isMouseOver = false" mc-class="{
              [styles.dish]: true,
              [styles.isChecked]: ctrl.findDishCount(dish) || removingDish,
              [styles.isDisabled]: ctrl.checkDishDisabled(dish),
              [styles.isRemoving]: removingDish
            }" ng-mouseover="isMouseOver = true" ng-mouseout="isMouseOver = false" ng-if="dish.name" ng-repeat="dish in section.dishes track by $index" class="ng-scope _16JFh_4mqlSffOpyj-kpiZ-style-dish _3lTmiaVKGwuA9EzB2pZdew-style-isDisabled">
                                <div class="tRxCcUwoD4jLdVCL1PtFJ-style-dishMinusScope" mc-tapstart="removingDish=true" mc-tapend="removingDish=false" data-tapend-delay="300" mc-click="ctrl.decreaseDish(dish, $event);">
                                </div>
                                <div class="_8hoLf-d3Kbiq_UMK4QDDR-style-dishHelper">
                                    <div class="pUShWN6o3tcMwRHm5tNVG-style-dishLine">
                                        <div class="_294J71JhBboOh-_afExr_7-style-dishLineInner"></div>
                                    </div>
                                    <div class="_1bj3B-tvRyIUZncjGp29WP-style-dishMinus">
                                        <div class="Oj-koE4srJDcbl2j5czYg-style-dishMinusHelper">
                                            <div class="_17-G443-CvKI-YJjL9KgdA-style-dishMinusAssistant">
                                                <i class="_3o47L0AJhtXM1ZOUltJdM0-style-dishMinusIcon icon icon-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_8kRBbYwRQv9BvU1onNzYU-style-dishName">
                                        <div class="_2sZfsnFPiUH5V4fXhlBugg-style-dishNameHelper">
                                            <div class="k830dcw3hnfrFruRRJShf-style-dishTitle">
                                                酥嫩鸡腿排饭套餐
                                            </div>
                                            <div class="_1HwOunLJd2-n_KC65PCLQ1-style-dishSubtitle">
                                                咸鲜/配精美小菜&amp;饮料/滴滴专供
                                            </div>
                                        </div>
                                        <div class="_2E1I0DVW20nub3sewfo33b-style-dishFav ng-hide" ng-show="ctrl.checkFavourite(restaurant.id, dish)">
                                            <i class="icon icon-small_green_heart" ng-class="{ 'icon-small_white_heart': isMouseOver || !!dish.count }"></i>
                                        </div>
                                    </div>
                                    <div class="_1OBuvcl0odOTRHWAPhxNDq-style-dishNumber">
                                        <div class="_20GkClv-ushPUxit7dSovR-style-dishNumberHelper">
                                            <span class="_1XdGI6FaEB_-Y_HzjRuy8L-style-dishFree WYUX1iwW0a7mlumZV6n0H-style-dishPrice" ng-show="ctrl.currentMeal.free">**</span>
                                            <span class="WYUX1iwW0a7mlumZV6n0H-style-dishPrice ng-hide" ng-show="!ctrl.currentMeal.free">
                    30.0
                  </span>
                                            <div class="l4v0hBmwjNECjhQpsgYG2-style-dishCount">
                                                <div class="_3J0YTE_rMI4fjwUSg5DtOB-style-dishCountNumber">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- end ngIf: dish.name --><!-- end ngRepeat: dish in section.dishes track by $index --><!-- ngIf: dish.name --><li mc-click="ctrl.increaseDish(dish)" ng-init="isMouseOver = false" mc-class="{
              [styles.dish]: true,
              [styles.isChecked]: ctrl.findDishCount(dish) || removingDish,
              [styles.isDisabled]: ctrl.checkDishDisabled(dish),
              [styles.isRemoving]: removingDish
            }" ng-mouseover="isMouseOver = true" ng-mouseout="isMouseOver = false" ng-if="dish.name" ng-repeat="dish in section.dishes track by $index" class="ng-scope _16JFh_4mqlSffOpyj-kpiZ-style-dish _3lTmiaVKGwuA9EzB2pZdew-style-isDisabled">
                                <div class="tRxCcUwoD4jLdVCL1PtFJ-style-dishMinusScope" mc-tapstart="removingDish=true" mc-tapend="removingDish=false" data-tapend-delay="300" mc-click="ctrl.decreaseDish(dish, $event);">
                                </div>
                                <div class="_8hoLf-d3Kbiq_UMK4QDDR-style-dishHelper">
                                    <div class="pUShWN6o3tcMwRHm5tNVG-style-dishLine">
                                        <div class="_294J71JhBboOh-_afExr_7-style-dishLineInner"></div>
                                    </div>
                                    <div class="_1bj3B-tvRyIUZncjGp29WP-style-dishMinus">
                                        <div class="Oj-koE4srJDcbl2j5czYg-style-dishMinusHelper">
                                            <div class="_17-G443-CvKI-YJjL9KgdA-style-dishMinusAssistant">
                                                <i class="_3o47L0AJhtXM1ZOUltJdM0-style-dishMinusIcon icon icon-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_8kRBbYwRQv9BvU1onNzYU-style-dishName">
                                        <div class="_2sZfsnFPiUH5V4fXhlBugg-style-dishNameHelper">
                                            <div class="k830dcw3hnfrFruRRJShf-style-dishTitle">
                                                咖喱鸡肉饭套餐
                                            </div>
                                            <div class="_1HwOunLJd2-n_KC65PCLQ1-style-dishSubtitle">
                                                咸鲜/配精美小菜&amp;饮料/滴滴专供
                                            </div>
                                        </div>
                                        <div class="_2E1I0DVW20nub3sewfo33b-style-dishFav ng-hide" ng-show="ctrl.checkFavourite(restaurant.id, dish)">
                                            <i class="icon icon-small_green_heart" ng-class="{ 'icon-small_white_heart': isMouseOver || !!dish.count }"></i>
                                        </div>
                                    </div>
                                    <div class="_1OBuvcl0odOTRHWAPhxNDq-style-dishNumber">
                                        <div class="_20GkClv-ushPUxit7dSovR-style-dishNumberHelper">
                                            <span class="_1XdGI6FaEB_-Y_HzjRuy8L-style-dishFree WYUX1iwW0a7mlumZV6n0H-style-dishPrice" ng-show="ctrl.currentMeal.free">**</span>
                                            <span class="WYUX1iwW0a7mlumZV6n0H-style-dishPrice ng-hide" ng-show="!ctrl.currentMeal.free">
                    25.0
                  </span>
                                            <div class="l4v0hBmwjNECjhQpsgYG2-style-dishCount">
                                                <div class="_3J0YTE_rMI4fjwUSg5DtOB-style-dishCountNumber">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- end ngIf: dish.name --><!-- end ngRepeat: dish in section.dishes track by $index --><!-- ngIf: dish.name --><li mc-click="ctrl.increaseDish(dish)" ng-init="isMouseOver = false" mc-class="{
              [styles.dish]: true,
              [styles.isChecked]: ctrl.findDishCount(dish) || removingDish,
              [styles.isDisabled]: ctrl.checkDishDisabled(dish),
              [styles.isRemoving]: removingDish
            }" ng-mouseover="isMouseOver = true" ng-mouseout="isMouseOver = false" ng-if="dish.name" ng-repeat="dish in section.dishes track by $index" class="ng-scope _16JFh_4mqlSffOpyj-kpiZ-style-dish _3lTmiaVKGwuA9EzB2pZdew-style-isDisabled">
                                <div class="tRxCcUwoD4jLdVCL1PtFJ-style-dishMinusScope" mc-tapstart="removingDish=true" mc-tapend="removingDish=false" data-tapend-delay="300" mc-click="ctrl.decreaseDish(dish, $event);">
                                </div>
                                <div class="_8hoLf-d3Kbiq_UMK4QDDR-style-dishHelper">
                                    <div class="pUShWN6o3tcMwRHm5tNVG-style-dishLine">
                                        <div class="_294J71JhBboOh-_afExr_7-style-dishLineInner"></div>
                                    </div>
                                    <div class="_1bj3B-tvRyIUZncjGp29WP-style-dishMinus">
                                        <div class="Oj-koE4srJDcbl2j5czYg-style-dishMinusHelper">
                                            <div class="_17-G443-CvKI-YJjL9KgdA-style-dishMinusAssistant">
                                                <i class="_3o47L0AJhtXM1ZOUltJdM0-style-dishMinusIcon icon icon-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_8kRBbYwRQv9BvU1onNzYU-style-dishName">
                                        <div class="_2sZfsnFPiUH5V4fXhlBugg-style-dishNameHelper">
                                            <div class="k830dcw3hnfrFruRRJShf-style-dishTitle">
                                                新宫保鸡丁饭套餐
                                            </div>
                                            <div class="_1HwOunLJd2-n_KC65PCLQ1-style-dishSubtitle">
                                                咸鲜/配精美小菜&amp;饮料/滴滴专供
                                            </div>
                                        </div>
                                        <div class="_2E1I0DVW20nub3sewfo33b-style-dishFav ng-hide" ng-show="ctrl.checkFavourite(restaurant.id, dish)">
                                            <i class="icon icon-small_green_heart" ng-class="{ 'icon-small_white_heart': isMouseOver || !!dish.count }"></i>
                                        </div>
                                    </div>
                                    <div class="_1OBuvcl0odOTRHWAPhxNDq-style-dishNumber">
                                        <div class="_20GkClv-ushPUxit7dSovR-style-dishNumberHelper">
                                            <span class="_1XdGI6FaEB_-Y_HzjRuy8L-style-dishFree WYUX1iwW0a7mlumZV6n0H-style-dishPrice" ng-show="ctrl.currentMeal.free">**</span>
                                            <span class="WYUX1iwW0a7mlumZV6n0H-style-dishPrice ng-hide" ng-show="!ctrl.currentMeal.free">
                    25.0
                  </span>
                                            <div class="l4v0hBmwjNECjhQpsgYG2-style-dishCount">
                                                <div class="_3J0YTE_rMI4fjwUSg5DtOB-style-dishCountNumber">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- end ngIf: dish.name --><!-- end ngRepeat: dish in section.dishes track by $index --><!-- ngIf: dish.name --><li mc-click="ctrl.increaseDish(dish)" ng-init="isMouseOver = false" mc-class="{
              [styles.dish]: true,
              [styles.isChecked]: ctrl.findDishCount(dish) || removingDish,
              [styles.isDisabled]: ctrl.checkDishDisabled(dish),
              [styles.isRemoving]: removingDish
            }" ng-mouseover="isMouseOver = true" ng-mouseout="isMouseOver = false" ng-if="dish.name" ng-repeat="dish in section.dishes track by $index" class="ng-scope _16JFh_4mqlSffOpyj-kpiZ-style-dish _3lTmiaVKGwuA9EzB2pZdew-style-isDisabled">
                                <div class="tRxCcUwoD4jLdVCL1PtFJ-style-dishMinusScope" mc-tapstart="removingDish=true" mc-tapend="removingDish=false" data-tapend-delay="300" mc-click="ctrl.decreaseDish(dish, $event);">
                                </div>
                                <div class="_8hoLf-d3Kbiq_UMK4QDDR-style-dishHelper">
                                    <div class="pUShWN6o3tcMwRHm5tNVG-style-dishLine">
                                        <div class="_294J71JhBboOh-_afExr_7-style-dishLineInner"></div>
                                    </div>
                                    <div class="_1bj3B-tvRyIUZncjGp29WP-style-dishMinus">
                                        <div class="Oj-koE4srJDcbl2j5czYg-style-dishMinusHelper">
                                            <div class="_17-G443-CvKI-YJjL9KgdA-style-dishMinusAssistant">
                                                <i class="_3o47L0AJhtXM1ZOUltJdM0-style-dishMinusIcon icon icon-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_8kRBbYwRQv9BvU1onNzYU-style-dishName">
                                        <div class="_2sZfsnFPiUH5V4fXhlBugg-style-dishNameHelper">
                                            <div class="k830dcw3hnfrFruRRJShf-style-dishTitle">
                                                梅菜扣肉饭套餐
                                            </div>
                                            <div class="_1HwOunLJd2-n_KC65PCLQ1-style-dishSubtitle">
                                                咸鲜/配精美小菜&amp;饮料/滴滴专供
                                            </div>
                                        </div>
                                        <div class="_2E1I0DVW20nub3sewfo33b-style-dishFav ng-hide" ng-show="ctrl.checkFavourite(restaurant.id, dish)">
                                            <i class="icon icon-small_green_heart" ng-class="{ 'icon-small_white_heart': isMouseOver || !!dish.count }"></i>
                                        </div>
                                    </div>
                                    <div class="_1OBuvcl0odOTRHWAPhxNDq-style-dishNumber">
                                        <div class="_20GkClv-ushPUxit7dSovR-style-dishNumberHelper">
                                            <span class="_1XdGI6FaEB_-Y_HzjRuy8L-style-dishFree WYUX1iwW0a7mlumZV6n0H-style-dishPrice" ng-show="ctrl.currentMeal.free">**</span>
                                            <span class="WYUX1iwW0a7mlumZV6n0H-style-dishPrice ng-hide" ng-show="!ctrl.currentMeal.free">
                    30.0
                  </span>
                                            <div class="l4v0hBmwjNECjhQpsgYG2-style-dishCount">
                                                <div class="_3J0YTE_rMI4fjwUSg5DtOB-style-dishCountNumber">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- end ngIf: dish.name --><!-- end ngRepeat: dish in section.dishes track by $index -->
                        </ul><!-- end ngIf: ctrl.checkSectionInView($index) -->
                    </div><!-- end ngRepeat: section in ctrl.list track by $index --><div class="_3pZSWddFONp7zYK3ORCfTV-style-dishes js-dishes" mc-follow-finger="" current-section-index="status.currentSectionIndex" index="1" ng-repeat="section in ctrl.list track by $index" ng-style="{'width': (100  / ctrl.list.length) + '%'}" style="width: 33.3333%; overflow-y: auto;">
                        <!-- ngIf: ctrl.checkSectionInView($index) --><ul class="_2eGiLxKIGdB63_g9I7nvTN-style-dishList" ng-if="ctrl.checkSectionInView($index)">
                            <!-- ngRepeat: dish in section.dishes track by $index --><!-- ngIf: dish.name --><li mc-click="ctrl.increaseDish(dish)" ng-init="isMouseOver = false" mc-class="{
              [styles.dish]: true,
              [styles.isChecked]: ctrl.findDishCount(dish) || removingDish,
              [styles.isDisabled]: ctrl.checkDishDisabled(dish),
              [styles.isRemoving]: removingDish
            }" ng-mouseover="isMouseOver = true" ng-mouseout="isMouseOver = false" ng-if="dish.name" ng-repeat="dish in section.dishes track by $index" class="ng-scope _16JFh_4mqlSffOpyj-kpiZ-style-dish _3lTmiaVKGwuA9EzB2pZdew-style-isDisabled">
                                <div class="tRxCcUwoD4jLdVCL1PtFJ-style-dishMinusScope" mc-tapstart="removingDish=true" mc-tapend="removingDish=false" data-tapend-delay="300" mc-click="ctrl.decreaseDish(dish, $event);">
                                </div>
                                <div class="_8hoLf-d3Kbiq_UMK4QDDR-style-dishHelper">
                                    <div class="pUShWN6o3tcMwRHm5tNVG-style-dishLine">
                                        <div class="_294J71JhBboOh-_afExr_7-style-dishLineInner"></div>
                                    </div>
                                    <div class="_1bj3B-tvRyIUZncjGp29WP-style-dishMinus">
                                        <div class="Oj-koE4srJDcbl2j5czYg-style-dishMinusHelper">
                                            <div class="_17-G443-CvKI-YJjL9KgdA-style-dishMinusAssistant">
                                                <i class="_3o47L0AJhtXM1ZOUltJdM0-style-dishMinusIcon icon icon-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_8kRBbYwRQv9BvU1onNzYU-style-dishName">
                                        <div class="_2sZfsnFPiUH5V4fXhlBugg-style-dishNameHelper">
                                            <div class="k830dcw3hnfrFruRRJShf-style-dishTitle">
                                                大王香菇卤肉饭套餐
                                            </div>
                                            <div class="_1HwOunLJd2-n_KC65PCLQ1-style-dishSubtitle">
                                                咸鲜/配精美小菜&amp;饮料/滴滴专供
                                            </div>
                                        </div>
                                        <div class="_2E1I0DVW20nub3sewfo33b-style-dishFav ng-hide" ng-show="ctrl.checkFavourite(restaurant.id, dish)">
                                            <i class="icon icon-small_green_heart" ng-class="{ 'icon-small_white_heart': isMouseOver || !!dish.count }"></i>
                                        </div>
                                    </div>
                                    <div class="_1OBuvcl0odOTRHWAPhxNDq-style-dishNumber">
                                        <div class="_20GkClv-ushPUxit7dSovR-style-dishNumberHelper">
                                            <span class="_1XdGI6FaEB_-Y_HzjRuy8L-style-dishFree WYUX1iwW0a7mlumZV6n0H-style-dishPrice" ng-show="ctrl.currentMeal.free">**</span>
                                            <span class="WYUX1iwW0a7mlumZV6n0H-style-dishPrice ng-hide" ng-show="!ctrl.currentMeal.free">
                    25.0
                  </span>
                                            <div class="l4v0hBmwjNECjhQpsgYG2-style-dishCount">
                                                <div class="_3J0YTE_rMI4fjwUSg5DtOB-style-dishCountNumber">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- end ngIf: dish.name --><!-- end ngRepeat: dish in section.dishes track by $index --><!-- ngIf: dish.name --><li mc-click="ctrl.increaseDish(dish)" ng-init="isMouseOver = false" mc-class="{
              [styles.dish]: true,
              [styles.isChecked]: ctrl.findDishCount(dish) || removingDish,
              [styles.isDisabled]: ctrl.checkDishDisabled(dish),
              [styles.isRemoving]: removingDish
            }" ng-mouseover="isMouseOver = true" ng-mouseout="isMouseOver = false" ng-if="dish.name" ng-repeat="dish in section.dishes track by $index" class="ng-scope _16JFh_4mqlSffOpyj-kpiZ-style-dish _3lTmiaVKGwuA9EzB2pZdew-style-isDisabled">
                                <div class="tRxCcUwoD4jLdVCL1PtFJ-style-dishMinusScope" mc-tapstart="removingDish=true" mc-tapend="removingDish=false" data-tapend-delay="300" mc-click="ctrl.decreaseDish(dish, $event);">
                                </div>
                                <div class="_8hoLf-d3Kbiq_UMK4QDDR-style-dishHelper">
                                    <div class="pUShWN6o3tcMwRHm5tNVG-style-dishLine">
                                        <div class="_294J71JhBboOh-_afExr_7-style-dishLineInner"></div>
                                    </div>
                                    <div class="_1bj3B-tvRyIUZncjGp29WP-style-dishMinus">
                                        <div class="Oj-koE4srJDcbl2j5czYg-style-dishMinusHelper">
                                            <div class="_17-G443-CvKI-YJjL9KgdA-style-dishMinusAssistant">
                                                <i class="_3o47L0AJhtXM1ZOUltJdM0-style-dishMinusIcon icon icon-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_8kRBbYwRQv9BvU1onNzYU-style-dishName">
                                        <div class="_2sZfsnFPiUH5V4fXhlBugg-style-dishNameHelper">
                                            <div class="k830dcw3hnfrFruRRJShf-style-dishTitle">
                                                丰味鱼香肉丝饭套餐
                                            </div>
                                            <div class="_1HwOunLJd2-n_KC65PCLQ1-style-dishSubtitle">
                                                咸鲜/配精美小菜&amp;饮料/滴滴专供
                                            </div>
                                        </div>
                                        <div class="_2E1I0DVW20nub3sewfo33b-style-dishFav ng-hide" ng-show="ctrl.checkFavourite(restaurant.id, dish)">
                                            <i class="icon icon-small_green_heart" ng-class="{ 'icon-small_white_heart': isMouseOver || !!dish.count }"></i>
                                        </div>
                                    </div>
                                    <div class="_1OBuvcl0odOTRHWAPhxNDq-style-dishNumber">
                                        <div class="_20GkClv-ushPUxit7dSovR-style-dishNumberHelper">
                                            <span class="_1XdGI6FaEB_-Y_HzjRuy8L-style-dishFree WYUX1iwW0a7mlumZV6n0H-style-dishPrice" ng-show="ctrl.currentMeal.free">**</span>
                                            <span class="WYUX1iwW0a7mlumZV6n0H-style-dishPrice ng-hide" ng-show="!ctrl.currentMeal.free">
                    25.0
                  </span>
                                            <div class="l4v0hBmwjNECjhQpsgYG2-style-dishCount">
                                                <div class="_3J0YTE_rMI4fjwUSg5DtOB-style-dishCountNumber">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- end ngIf: dish.name --><!-- end ngRepeat: dish in section.dishes track by $index --><!-- ngIf: dish.name --><li mc-click="ctrl.increaseDish(dish)" ng-init="isMouseOver = false" mc-class="{
              [styles.dish]: true,
              [styles.isChecked]: ctrl.findDishCount(dish) || removingDish,
              [styles.isDisabled]: ctrl.checkDishDisabled(dish),
              [styles.isRemoving]: removingDish
            }" ng-mouseover="isMouseOver = true" ng-mouseout="isMouseOver = false" ng-if="dish.name" ng-repeat="dish in section.dishes track by $index" class="ng-scope _16JFh_4mqlSffOpyj-kpiZ-style-dish _3lTmiaVKGwuA9EzB2pZdew-style-isDisabled">
                                <div class="tRxCcUwoD4jLdVCL1PtFJ-style-dishMinusScope" mc-tapstart="removingDish=true" mc-tapend="removingDish=false" data-tapend-delay="300" mc-click="ctrl.decreaseDish(dish, $event);">
                                </div>
                                <div class="_8hoLf-d3Kbiq_UMK4QDDR-style-dishHelper">
                                    <div class="pUShWN6o3tcMwRHm5tNVG-style-dishLine">
                                        <div class="_294J71JhBboOh-_afExr_7-style-dishLineInner"></div>
                                    </div>
                                    <div class="_1bj3B-tvRyIUZncjGp29WP-style-dishMinus">
                                        <div class="Oj-koE4srJDcbl2j5czYg-style-dishMinusHelper">
                                            <div class="_17-G443-CvKI-YJjL9KgdA-style-dishMinusAssistant">
                                                <i class="_3o47L0AJhtXM1ZOUltJdM0-style-dishMinusIcon icon icon-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_8kRBbYwRQv9BvU1onNzYU-style-dishName">
                                        <div class="_2sZfsnFPiUH5V4fXhlBugg-style-dishNameHelper">
                                            <div class="k830dcw3hnfrFruRRJShf-style-dishTitle">
                                                黑椒牛柳饭套餐
                                            </div>
                                            <div class="_1HwOunLJd2-n_KC65PCLQ1-style-dishSubtitle">
                                                咸鲜/配精美小菜&amp;饮料/滴滴专供
                                            </div>
                                        </div>
                                        <div class="_2E1I0DVW20nub3sewfo33b-style-dishFav ng-hide" ng-show="ctrl.checkFavourite(restaurant.id, dish)">
                                            <i class="icon icon-small_green_heart" ng-class="{ 'icon-small_white_heart': isMouseOver || !!dish.count }"></i>
                                        </div>
                                    </div>
                                    <div class="_1OBuvcl0odOTRHWAPhxNDq-style-dishNumber">
                                        <div class="_20GkClv-ushPUxit7dSovR-style-dishNumberHelper">
                                            <span class="_1XdGI6FaEB_-Y_HzjRuy8L-style-dishFree WYUX1iwW0a7mlumZV6n0H-style-dishPrice" ng-show="ctrl.currentMeal.free">**</span>
                                            <span class="WYUX1iwW0a7mlumZV6n0H-style-dishPrice ng-hide" ng-show="!ctrl.currentMeal.free">
                    30.0
                  </span>
                                            <div class="l4v0hBmwjNECjhQpsgYG2-style-dishCount">
                                                <div class="_3J0YTE_rMI4fjwUSg5DtOB-style-dishCountNumber">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- end ngIf: dish.name --><!-- end ngRepeat: dish in section.dishes track by $index --><!-- ngIf: dish.name --><li mc-click="ctrl.increaseDish(dish)" ng-init="isMouseOver = false" mc-class="{
              [styles.dish]: true,
              [styles.isChecked]: ctrl.findDishCount(dish) || removingDish,
              [styles.isDisabled]: ctrl.checkDishDisabled(dish),
              [styles.isRemoving]: removingDish
            }" ng-mouseover="isMouseOver = true" ng-mouseout="isMouseOver = false" ng-if="dish.name" ng-repeat="dish in section.dishes track by $index" class="ng-scope _16JFh_4mqlSffOpyj-kpiZ-style-dish _3lTmiaVKGwuA9EzB2pZdew-style-isDisabled">
                                <div class="tRxCcUwoD4jLdVCL1PtFJ-style-dishMinusScope" mc-tapstart="removingDish=true" mc-tapend="removingDish=false" data-tapend-delay="300" mc-click="ctrl.decreaseDish(dish, $event);">
                                </div>
                                <div class="_8hoLf-d3Kbiq_UMK4QDDR-style-dishHelper">
                                    <div class="pUShWN6o3tcMwRHm5tNVG-style-dishLine">
                                        <div class="_294J71JhBboOh-_afExr_7-style-dishLineInner"></div>
                                    </div>
                                    <div class="_1bj3B-tvRyIUZncjGp29WP-style-dishMinus">
                                        <div class="Oj-koE4srJDcbl2j5czYg-style-dishMinusHelper">
                                            <div class="_17-G443-CvKI-YJjL9KgdA-style-dishMinusAssistant">
                                                <i class="_3o47L0AJhtXM1ZOUltJdM0-style-dishMinusIcon icon icon-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_8kRBbYwRQv9BvU1onNzYU-style-dishName">
                                        <div class="_2sZfsnFPiUH5V4fXhlBugg-style-dishNameHelper">
                                            <div class="k830dcw3hnfrFruRRJShf-style-dishTitle">
                                                台式酱猪排蛋炒饭套餐
                                            </div>
                                            <div class="_1HwOunLJd2-n_KC65PCLQ1-style-dishSubtitle">
                                                咸鲜/配精美小菜&amp;饮料/滴滴专供
                                            </div>
                                        </div>
                                        <div class="_2E1I0DVW20nub3sewfo33b-style-dishFav ng-hide" ng-show="ctrl.checkFavourite(restaurant.id, dish)">
                                            <i class="icon icon-small_green_heart" ng-class="{ 'icon-small_white_heart': isMouseOver || !!dish.count }"></i>
                                        </div>
                                    </div>
                                    <div class="_1OBuvcl0odOTRHWAPhxNDq-style-dishNumber">
                                        <div class="_20GkClv-ushPUxit7dSovR-style-dishNumberHelper">
                                            <span class="_1XdGI6FaEB_-Y_HzjRuy8L-style-dishFree WYUX1iwW0a7mlumZV6n0H-style-dishPrice" ng-show="ctrl.currentMeal.free">**</span>
                                            <span class="WYUX1iwW0a7mlumZV6n0H-style-dishPrice ng-hide" ng-show="!ctrl.currentMeal.free">
                    30.0
                  </span>
                                            <div class="l4v0hBmwjNECjhQpsgYG2-style-dishCount">
                                                <div class="_3J0YTE_rMI4fjwUSg5DtOB-style-dishCountNumber">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- end ngIf: dish.name --><!-- end ngRepeat: dish in section.dishes track by $index --><!-- ngIf: dish.name --><li mc-click="ctrl.increaseDish(dish)" ng-init="isMouseOver = false" mc-class="{
              [styles.dish]: true,
              [styles.isChecked]: ctrl.findDishCount(dish) || removingDish,
              [styles.isDisabled]: ctrl.checkDishDisabled(dish),
              [styles.isRemoving]: removingDish
            }" ng-mouseover="isMouseOver = true" ng-mouseout="isMouseOver = false" ng-if="dish.name" ng-repeat="dish in section.dishes track by $index" class="ng-scope _16JFh_4mqlSffOpyj-kpiZ-style-dish _3lTmiaVKGwuA9EzB2pZdew-style-isDisabled">
                                <div class="tRxCcUwoD4jLdVCL1PtFJ-style-dishMinusScope" mc-tapstart="removingDish=true" mc-tapend="removingDish=false" data-tapend-delay="300" mc-click="ctrl.decreaseDish(dish, $event);">
                                </div>
                                <div class="_8hoLf-d3Kbiq_UMK4QDDR-style-dishHelper">
                                    <div class="pUShWN6o3tcMwRHm5tNVG-style-dishLine">
                                        <div class="_294J71JhBboOh-_afExr_7-style-dishLineInner"></div>
                                    </div>
                                    <div class="_1bj3B-tvRyIUZncjGp29WP-style-dishMinus">
                                        <div class="Oj-koE4srJDcbl2j5czYg-style-dishMinusHelper">
                                            <div class="_17-G443-CvKI-YJjL9KgdA-style-dishMinusAssistant">
                                                <i class="_3o47L0AJhtXM1ZOUltJdM0-style-dishMinusIcon icon icon-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_8kRBbYwRQv9BvU1onNzYU-style-dishName">
                                        <div class="_2sZfsnFPiUH5V4fXhlBugg-style-dishNameHelper">
                                            <div class="k830dcw3hnfrFruRRJShf-style-dishTitle">
                                                葱香鸡丝饭套餐
                                            </div>
                                            <div class="_1HwOunLJd2-n_KC65PCLQ1-style-dishSubtitle">
                                                咸鲜/配精美小菜&amp;饮料/滴滴专供
                                            </div>
                                        </div>
                                        <div class="_2E1I0DVW20nub3sewfo33b-style-dishFav ng-hide" ng-show="ctrl.checkFavourite(restaurant.id, dish)">
                                            <i class="icon icon-small_green_heart" ng-class="{ 'icon-small_white_heart': isMouseOver || !!dish.count }"></i>
                                        </div>
                                    </div>
                                    <div class="_1OBuvcl0odOTRHWAPhxNDq-style-dishNumber">
                                        <div class="_20GkClv-ushPUxit7dSovR-style-dishNumberHelper">
                                            <span class="_1XdGI6FaEB_-Y_HzjRuy8L-style-dishFree WYUX1iwW0a7mlumZV6n0H-style-dishPrice" ng-show="ctrl.currentMeal.free">**</span>
                                            <span class="WYUX1iwW0a7mlumZV6n0H-style-dishPrice ng-hide" ng-show="!ctrl.currentMeal.free">
                    25.0
                  </span>
                                            <div class="l4v0hBmwjNECjhQpsgYG2-style-dishCount">
                                                <div class="_3J0YTE_rMI4fjwUSg5DtOB-style-dishCountNumber">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- end ngIf: dish.name --><!-- end ngRepeat: dish in section.dishes track by $index --><!-- ngIf: dish.name --><li mc-click="ctrl.increaseDish(dish)" ng-init="isMouseOver = false" mc-class="{
              [styles.dish]: true,
              [styles.isChecked]: ctrl.findDishCount(dish) || removingDish,
              [styles.isDisabled]: ctrl.checkDishDisabled(dish),
              [styles.isRemoving]: removingDish
            }" ng-mouseover="isMouseOver = true" ng-mouseout="isMouseOver = false" ng-if="dish.name" ng-repeat="dish in section.dishes track by $index" class="ng-scope _16JFh_4mqlSffOpyj-kpiZ-style-dish _3lTmiaVKGwuA9EzB2pZdew-style-isDisabled">
                                <div class="tRxCcUwoD4jLdVCL1PtFJ-style-dishMinusScope" mc-tapstart="removingDish=true" mc-tapend="removingDish=false" data-tapend-delay="300" mc-click="ctrl.decreaseDish(dish, $event);">
                                </div>
                                <div class="_8hoLf-d3Kbiq_UMK4QDDR-style-dishHelper">
                                    <div class="pUShWN6o3tcMwRHm5tNVG-style-dishLine">
                                        <div class="_294J71JhBboOh-_afExr_7-style-dishLineInner"></div>
                                    </div>
                                    <div class="_1bj3B-tvRyIUZncjGp29WP-style-dishMinus">
                                        <div class="Oj-koE4srJDcbl2j5czYg-style-dishMinusHelper">
                                            <div class="_17-G443-CvKI-YJjL9KgdA-style-dishMinusAssistant">
                                                <i class="_3o47L0AJhtXM1ZOUltJdM0-style-dishMinusIcon icon icon-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_8kRBbYwRQv9BvU1onNzYU-style-dishName">
                                        <div class="_2sZfsnFPiUH5V4fXhlBugg-style-dishNameHelper">
                                            <div class="k830dcw3hnfrFruRRJShf-style-dishTitle">
                                                卤肉馄饨面套餐
                                            </div>
                                            <div class="_1HwOunLJd2-n_KC65PCLQ1-style-dishSubtitle">
                                                咸鲜/配精美小菜&amp;饮料/滴滴专供
                                            </div>
                                        </div>
                                        <div class="_2E1I0DVW20nub3sewfo33b-style-dishFav ng-hide" ng-show="ctrl.checkFavourite(restaurant.id, dish)">
                                            <i class="icon icon-small_green_heart" ng-class="{ 'icon-small_white_heart': isMouseOver || !!dish.count }"></i>
                                        </div>
                                    </div>
                                    <div class="_1OBuvcl0odOTRHWAPhxNDq-style-dishNumber">
                                        <div class="_20GkClv-ushPUxit7dSovR-style-dishNumberHelper">
                                            <span class="_1XdGI6FaEB_-Y_HzjRuy8L-style-dishFree WYUX1iwW0a7mlumZV6n0H-style-dishPrice" ng-show="ctrl.currentMeal.free">**</span>
                                            <span class="WYUX1iwW0a7mlumZV6n0H-style-dishPrice ng-hide" ng-show="!ctrl.currentMeal.free">
                    25.0
                  </span>
                                            <div class="l4v0hBmwjNECjhQpsgYG2-style-dishCount">
                                                <div class="_3J0YTE_rMI4fjwUSg5DtOB-style-dishCountNumber">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- end ngIf: dish.name --><!-- end ngRepeat: dish in section.dishes track by $index --><!-- ngIf: dish.name --><li mc-click="ctrl.increaseDish(dish)" ng-init="isMouseOver = false" mc-class="{
              [styles.dish]: true,
              [styles.isChecked]: ctrl.findDishCount(dish) || removingDish,
              [styles.isDisabled]: ctrl.checkDishDisabled(dish),
              [styles.isRemoving]: removingDish
            }" ng-mouseover="isMouseOver = true" ng-mouseout="isMouseOver = false" ng-if="dish.name" ng-repeat="dish in section.dishes track by $index" class="ng-scope _16JFh_4mqlSffOpyj-kpiZ-style-dish _3lTmiaVKGwuA9EzB2pZdew-style-isDisabled">
                                <div class="tRxCcUwoD4jLdVCL1PtFJ-style-dishMinusScope" mc-tapstart="removingDish=true" mc-tapend="removingDish=false" data-tapend-delay="300" mc-click="ctrl.decreaseDish(dish, $event);">
                                </div>
                                <div class="_8hoLf-d3Kbiq_UMK4QDDR-style-dishHelper">
                                    <div class="pUShWN6o3tcMwRHm5tNVG-style-dishLine">
                                        <div class="_294J71JhBboOh-_afExr_7-style-dishLineInner"></div>
                                    </div>
                                    <div class="_1bj3B-tvRyIUZncjGp29WP-style-dishMinus">
                                        <div class="Oj-koE4srJDcbl2j5czYg-style-dishMinusHelper">
                                            <div class="_17-G443-CvKI-YJjL9KgdA-style-dishMinusAssistant">
                                                <i class="_3o47L0AJhtXM1ZOUltJdM0-style-dishMinusIcon icon icon-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_8kRBbYwRQv9BvU1onNzYU-style-dishName">
                                        <div class="_2sZfsnFPiUH5V4fXhlBugg-style-dishNameHelper">
                                            <div class="k830dcw3hnfrFruRRJShf-style-dishTitle">
                                                台式酱猪排面套餐
                                            </div>
                                            <div class="_1HwOunLJd2-n_KC65PCLQ1-style-dishSubtitle">
                                                咸鲜/配精美小菜&amp;饮料/滴滴专供
                                            </div>
                                        </div>
                                        <div class="_2E1I0DVW20nub3sewfo33b-style-dishFav ng-hide" ng-show="ctrl.checkFavourite(restaurant.id, dish)">
                                            <i class="icon icon-small_green_heart" ng-class="{ 'icon-small_white_heart': isMouseOver || !!dish.count }"></i>
                                        </div>
                                    </div>
                                    <div class="_1OBuvcl0odOTRHWAPhxNDq-style-dishNumber">
                                        <div class="_20GkClv-ushPUxit7dSovR-style-dishNumberHelper">
                                            <span class="_1XdGI6FaEB_-Y_HzjRuy8L-style-dishFree WYUX1iwW0a7mlumZV6n0H-style-dishPrice" ng-show="ctrl.currentMeal.free">**</span>
                                            <span class="WYUX1iwW0a7mlumZV6n0H-style-dishPrice ng-hide" ng-show="!ctrl.currentMeal.free">
                    30.0
                  </span>
                                            <div class="l4v0hBmwjNECjhQpsgYG2-style-dishCount">
                                                <div class="_3J0YTE_rMI4fjwUSg5DtOB-style-dishCountNumber">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- end ngIf: dish.name --><!-- end ngRepeat: dish in section.dishes track by $index --><!-- ngIf: dish.name --><li mc-click="ctrl.increaseDish(dish)" ng-init="isMouseOver = false" mc-class="{
              [styles.dish]: true,
              [styles.isChecked]: ctrl.findDishCount(dish) || removingDish,
              [styles.isDisabled]: ctrl.checkDishDisabled(dish),
              [styles.isRemoving]: removingDish
            }" ng-mouseover="isMouseOver = true" ng-mouseout="isMouseOver = false" ng-if="dish.name" ng-repeat="dish in section.dishes track by $index" class="ng-scope _16JFh_4mqlSffOpyj-kpiZ-style-dish _3lTmiaVKGwuA9EzB2pZdew-style-isDisabled">
                                <div class="tRxCcUwoD4jLdVCL1PtFJ-style-dishMinusScope" mc-tapstart="removingDish=true" mc-tapend="removingDish=false" data-tapend-delay="300" mc-click="ctrl.decreaseDish(dish, $event);">
                                </div>
                                <div class="_8hoLf-d3Kbiq_UMK4QDDR-style-dishHelper">
                                    <div class="pUShWN6o3tcMwRHm5tNVG-style-dishLine">
                                        <div class="_294J71JhBboOh-_afExr_7-style-dishLineInner"></div>
                                    </div>
                                    <div class="_1bj3B-tvRyIUZncjGp29WP-style-dishMinus">
                                        <div class="Oj-koE4srJDcbl2j5czYg-style-dishMinusHelper">
                                            <div class="_17-G443-CvKI-YJjL9KgdA-style-dishMinusAssistant">
                                                <i class="_3o47L0AJhtXM1ZOUltJdM0-style-dishMinusIcon icon icon-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_8kRBbYwRQv9BvU1onNzYU-style-dishName">
                                        <div class="_2sZfsnFPiUH5V4fXhlBugg-style-dishNameHelper">
                                            <div class="k830dcw3hnfrFruRRJShf-style-dishTitle">
                                                雪菜肉丝面套餐
                                            </div>
                                            <div class="_1HwOunLJd2-n_KC65PCLQ1-style-dishSubtitle">
                                                咸鲜/配精美小菜&amp;饮料/滴滴专供
                                            </div>
                                        </div>
                                        <div class="_2E1I0DVW20nub3sewfo33b-style-dishFav ng-hide" ng-show="ctrl.checkFavourite(restaurant.id, dish)">
                                            <i class="icon icon-small_green_heart" ng-class="{ 'icon-small_white_heart': isMouseOver || !!dish.count }"></i>
                                        </div>
                                    </div>
                                    <div class="_1OBuvcl0odOTRHWAPhxNDq-style-dishNumber">
                                        <div class="_20GkClv-ushPUxit7dSovR-style-dishNumberHelper">
                                            <span class="_1XdGI6FaEB_-Y_HzjRuy8L-style-dishFree WYUX1iwW0a7mlumZV6n0H-style-dishPrice" ng-show="ctrl.currentMeal.free">**</span>
                                            <span class="WYUX1iwW0a7mlumZV6n0H-style-dishPrice ng-hide" ng-show="!ctrl.currentMeal.free">
                    25.0
                  </span>
                                            <div class="l4v0hBmwjNECjhQpsgYG2-style-dishCount">
                                                <div class="_3J0YTE_rMI4fjwUSg5DtOB-style-dishCountNumber">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- end ngIf: dish.name --><!-- end ngRepeat: dish in section.dishes track by $index -->
                        </ul><!-- end ngIf: ctrl.checkSectionInView($index) -->
                    </div><!-- end ngRepeat: section in ctrl.list track by $index --><div class="_3pZSWddFONp7zYK3ORCfTV-style-dishes js-dishes" mc-follow-finger="" current-section-index="status.currentSectionIndex" index="2" ng-repeat="section in ctrl.list track by $index" ng-style="{'width': (100  / ctrl.list.length) + '%'}" style="width: 33.3333%; overflow-y: auto;">
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
                </div><!-- end ngIf: !ctrl.size.single -->
                <!-- ngIf: !ctrl.size.single --><div class="_3jDhIXaVSPB63Crna6wfzy-style-slideRight _3bVxIePMfkya16AyQnam-g-style-slide" mc-three-columns="322" ng-if="!ctrl.size.single" style="width: 96.5px;">
                    <div class="_1OLTdUXpJHUn6uIlFy7GB4-style-middle" ng-show="status.currentSectionIndex < ctrl.list.length - 1" mc-click="ctrl.onSwipeLeft()" ng-mousedown="slideStatus.right.down = true;" ng-mouseup="slideStatus.right.down = false;" ng-mouseover="slideStatus.right.over = true;" ng-mouseout="slideStatus.right.over = false;">
                        <a class="slide-right-icon icon icon-slide_right" ng-class="{
             'hover': slideStatus.right.over,
             'active': slideStatus.right.down
           }"></a>
                    </div>
                </div><!-- end ngIf: !ctrl.size.single -->
            </div>
        </div><!-- end ngIf: !ctrl.isLoading -->
        <!-- ngIf: !ctrl.isLoading --><div class="_2ABZZGf8ZDa_pczpgG-EPp-style-cartWrapper" mc-dish-cart="" ng-if="!ctrl.isLoading">
            <!-- ngIf: ctrl.isCartShow -->
            <!-- ngIf: ctrl.isCartOpen -->

            <!-- ngIf: ctrl.isCartOpen -->

            <!-- ngIf: ctrl.isLoading -->
        </div><!-- end ngIf: !ctrl.isLoading -->
        <!-- ngIf: !ctrl.isLoading --><div mc-dish-address="" ng-if="!ctrl.isLoading" class="ng-scope"></div><!-- end ngIf: !ctrl.isLoading -->
    </div><!-- end ngIf: ctrl.isShowDish -->
    <!-- ngIf: ctrl.isShowOrder -->
    <!-- ngIf: !ctrl.isShowDish && !ctrl.isShowOrder -->
</div><!-- end ngIf: !ctrl.size.single -->

<!-- ngIf: ctrl.size.single -->

<!-- ngIf: !ctrl.meal.isFetched && ctrl.size.single -->

</body></html>