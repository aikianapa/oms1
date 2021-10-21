<view>
    <div class="oms-block-18">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-column">
                    <div class="oms-block-18-title">
                        {{_var.brand}}
                    </div>

                    <div class="oms-block-18-name">
                        Генеральный директор:<br />{{_var.boss}}
                    </div>

                    <div class="oms-block-18-address text-break"><b>Адрес:</b> {{_var.address}}</div>

                    <div class="oms-block-18-info1">
                        <a href="tel:+{{wbDigitsOnly({{_var.phone}})}}">{{_var.phone}}</a>
                    </div>

                    <div class="oms-block-18-info2">
                        <a href="mailto:{{_var.email}}">{{_var.email}}</a>
                    </div>

                    <div class="oms-block-18-link-wrapper">
                        <a href="{{_var.site}}">
                            Перейти на основной сайт
                        </a>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6">
                    <div class="oms-block-18-map"></div>
                </div>
            </div>
        </div>

        <div class="d-md-none oms-block-18-mobile-map">

        </div>
    </div>
</view>

<edit header="Контакты" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>