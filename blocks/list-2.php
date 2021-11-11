<view>
    <div class="oms-block oms-block-11">
        <div class="container">
            <div class="oms-title oms-title-mb-20">{{title}}</div>
            <div class="oms-block-11-items">
                <wb-foreach wb="from=list&tpl=false">
                <div class="d-lg-flex">
                    <div>
                        <div class="oms-block-11-title text-break">{{text1}}</div>
                        <div class="oms-block-11-description text-break">{{text2}}</div>
                    </div>
                    <img src="/thumbc/540x291/src{{image.0.img}}" alt="{{text1}}" width="540" height="540">
                </div>
                </wb-foreach>
            </div>
        </div>
    </div>
</view>

<edit header="Список тип #2 (текст+картинка)" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label for="my-input">Заголовок</label>
        <input id="my-input" class="form-control" type="text" name="title">
    </div>
    <wb-multiinput name="list">
    <div class="col-sm-8 pt-3">
        <div class="row">
            <input class="form-control tx-semibold col-12 mb-1" type="text" name="text1" placeholder="Заголовок">
            <textarea class="form-control col-12" rows="auto" name="text2" placeholder="Текст"></textarea>
        </div>        
    </div>
    <div class="col-sm-4 pl-4">
        <wb-module wb="module=filepicker&mode=single&width=160&height=100&name=image" wb-path="/assets/img/landing-1/" />
    </div>
</wb-multiinput>
</edit>