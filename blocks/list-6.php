<view>
    <div id="oms-block-6" class="oms-block oms-block-6">
        <div class="container">
            <div class="oms-title oms-title-mb-10 text-break">{{title}}</div>
        </div>
        <wb-foreach wb="from=list&tpl=false">
            <div class="oms-block-6-item oms-block-6-item--gray">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-4 oms-block-6-item-block-1">
                            <div class="oms-block-6-item-block-1-title text-break">{{text1}}</div>
                            <div class="oms-block-6-item-block-1-hr"></div>
                            <div class="oms-block-6-item-block-1-description text-break">{{text2}}</div>
                        </div>
                        <div class="col-12 col-lg-4 oms-block-6-item-block-2">
                            <div class="text-break">{{text3}}</div>
                        </div>
                        <div class="col-12 col-lg-4 oms-block-6-item-block-3 text-lg-right">
                            <img src="/thumbc/350x190/src/{{image.0.img}}" alt="{{text1}}">
                        </div>
                    </div>
                </div>
            </div>
        </wb-foreach>
    </div>
</view>

<edit header="Список тип #6 (заголовок + текст + картинка)" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label for="my-input">Заголовок</label>
        <textarea class="form-control col-12" rows="auto" name="title" placeholder="Заголовок"></textarea>
    </div>
    <wb-multiinput name="list">
        <div class="col-4">
            <wb-module wb="module=filepicker&mode=single&width=160&height=100&name=image" wb-path="/assets/img/landing-1/" />
        </div>
        <div class="col-8">
            <textarea class="form-control mb-1 col-12 tx-semibold" rows="auto" name="text1" placeholder="Заголовок"></textarea>
            <textarea class="form-control mb-1 col-12" rows="auto" name="text2" placeholder="Подзаголовок"></textarea>
            <textarea class="form-control mb-1 col-12" rows="auto" name="text3" placeholder="Текст"></textarea>
        </div>
    </wb-multiinput>
</edit>