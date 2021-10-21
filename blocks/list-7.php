<view>
    <div class="oms-block oms-block-7">
        <div class="container">
            <div class="oms-title oms-title-mb-20 text-break">{{title}}</div>

            <div class="row">
                <wb-foreach wb="from=list&tpl=false">
                <div class="col-12 col-md-4">
                    <div class="oms-block-7-number">{{sprintf("%02d", {{_ndx}})}}</div>
                    <div class="oms-block-7-title">{{text1}}</div>
                    <div class="oms-block-7-description text-break">{{text2}}</div>
                </div>
                </wb-foreach>
            </div>

            <div class="oms-buttons" wb-if="'{{button}}'>''">
                <button class="oms-button" onclick="fillForm()">
                    {{button}}
                </button>
            </div>
        </div>
    </div>
</view>

<edit header="Список тип #7 (номер+заголовок+текст 3 кол)" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-3">Заголовок</label>
        <div class="col-9">
            <textarea class="form-control col-12" rows="auto" name="title" placeholder="Заголовок"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3">Текст кнопки</label>
        <div class="col-9">
            <input class="form-control" type="text" name="button">
        </div>
    </div>
    <wb-multiinput name="list">
        <input class="form-control mb-1 col-12 tx-semibold" type="text" name="text1" placeholder="Заголовок">
        <textarea class="form-control mb-1 col-12" rows="auto" name="text2" placeholder="Текст"></textarea>
        </div>
    </wb-multiinput>

</edit>