<view>
    <div class="oms-block oms-block-10">
        <div class="container">
            <div class="oms-title oms-title-mb-5">{{title}}</div>
            <div class="oms-block-10-description text-break">{{text}}</div>

            <div class="d-lg-flex">
                <div>
                    <img src="/thumbc/255x220/src{{image.0.img}}" alt="{{image_title}}" width="255" height="220">
                    <div class="oms-block-10-name">{{image_title}}</div>
                    <div class="oms-block-10-position text-break">{{image_text}}</div>
                </div>
                <div class="oms-block-10-text text-break">{{text1}}</div>
            </div>
        </div>
    </div>
</view>

<edit header="Изображение + текст" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-3">Заголовок / Текст</label>
        <input class="form-control col-12 mb-1" type="text" name="title" placeholder="Заголовок">
        <textarea class="form-control col-12" rows="auto" name="text" placeholder="Подзаголовок"></textarea>
    </div>
    <div class="form-group row">
        <div class="col-4">
            <div>
            <wb-module wb="module=filepicker&mode=single&width=200&height=150&name=image" wb-path="/assets/img/landing-1/" />
            </div>
            <input class="form-control col-12 mb-1 tx-semibold" type="text" name="image_title" placeholder="Заголовок">
            <textarea class="form-control col-12" rows="auto" name="image_text" placeholder="Текст"></textarea>
        </div>
        <div class="col-8">
            <label>Текст справа</label>
            <textarea class="form-control col-12" rows="auto" name="text1" placeholder="Текст справа"></textarea>
        </div>
    </div>
</edit>