<view>
<wb-snippet name="wbapp" />
<header class="oms-header">
        <div class="container">
            <img class="oms-header-logo" src="assets/logo.svg" alt="">

            <div class="d-flex align-items-center">
                <a class="js-phone_link oms-header-phone" href="tel:+{{wbDigitsOnly({{_var.phone}})}}">{{_var.phone}}</a>
                <button class="oms-header-menu-btn">
        <img class="oms-header-burger" src="assets/icons/burger.svg" alt="">
      </button>
            </div>
        </div>
</header>
</view>

<edit header="Шапка сайта" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>