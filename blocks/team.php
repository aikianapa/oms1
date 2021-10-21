<view>
    <div id="oms-block-12" class="oms-block oms-block-12">
        <div class="container">

            <div class="oms-block-12-title oms-title-mb-10">
                <div class="oms-title">
                    {{title}}
                </div>

                <div class="d-flex mt-2 mt-md-0 align-items-center">
                    <button class="oms-block-12-swiper-button-prev">
                        <img src="../assets/icons/arrow_active.svg" alt="">
                    </button>
                    <div class="oms-block-12-swiper-pagination"></div>
                    <button class="oms-block-12-swiper-button-next">
                        <img src="../assets/icons/arrow_active.svg" alt="">
                    </button>
                </div>
            </div>

            <div class="oms-block-12-swiper swiper">
                <div class="swiper-wrapper">
                    <wb-foreach wb-from="team">
                    <div class="swiper-slide">
                        <img src="/thumbc/303x262/src{{avatar.0.img}}" alt="{{fullname}}">
                        <div class="oms-block-12-swiper-name">{{fullname}}</div>
                        <div class="oms-block-12-swiper-description text-break">{{text}}</div>
                    </div>
                    </wb-foreach>
                </div>
            </div>
        </div>
    </div>
</view>

<edit header="Команда (слайдер)" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label for="my-input">Заголовок</label>
        <input id="my-input" class="form-control" type="text" name="title">
    </div>
    <wb-multiinput name="team">
    <div class="col-sm-3 pr-3">
        <wb-module wb="module=filepicker&mode=single&width=100&height=100&name=avatar" wb-path="/assets/img/landing-1/team/" />
    </div>
    <div class="col-sm-9 pt-3">
        <div class="row">
            <input class="form-control tx-semibold col-12 mb-1" type="text" name="fullname" placeholder="Имя">
            <textarea class="form-control col-12" rows="auto" name="text" placeholder="Должность"></textarea>
        </div>        
    </div>
    </wb-multiinput>
</edit>