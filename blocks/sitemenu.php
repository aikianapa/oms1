<view>
    <div class="oms-menu hidden">
        <div class="oms-menu-wrapper">
            <img class="oms-menu-close" src="assets/icons/close.svg" alt="">

            <div class="oms-menu-wrapper-block-1">
                <wb-foreach wb="from=menu&tpl=false">
                    <a href="{{link}}">
                        {{label}}
                    </a>
                </wb-foreach>
            </div>
            <div class="oms-menu-wrapper-hr"></div>
            <div class="oms-menu-wrapper-block-2">
                <a href="tel:+{{wbDigitsOnly({{_var.phone}})}}">
        {{_var.phone}}
      </a>

                <a href="mailto:{{_var.email}}">{{_var.email}}</a>
            </div>
        </div>
    </div>

</view>

<edit header="Меню сайта" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>

    <wb-multiinput name="menu">
        <input class="form-control col-6" name="label" placeholder="Пункт меню">
        </textarea>
        <input class="form-control col-6" name="link" placeholder="Ссылка">
        </textarea>
    </wb-multiinput>
</edit>