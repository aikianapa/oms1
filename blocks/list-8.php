<view>
    <div class="oms-block oms-block-9">
        <div class="container">
            <div class="oms-title oms-title-mb-10 text-break">{{title}}</div>

            <div class="row">
                <wb-foreach wb="from=list&tpl=false">
                <div class="col-12 col-md-6 oms-block-9-item">
                    <div>{{sprintf("%02d", {{_ndx}})}}</div>
                    <div class="text-break">{{text}}</div>
                </div>
                </wb-foreach>
            </div>

            <button class="oms-button" onclick="fillForm()" wb-if="'{{button}}'>''">{{button}}</button>
        </div>
    </div>
</view>

<edit header="Список тип #8 (номер+текст 2 кол)" group="landing-1">
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
        <textarea class="form-control mb-1 col-12" rows="auto" name="text" placeholder="Текст"></textarea>
        </div>
    </wb-multiinput>

</edit>