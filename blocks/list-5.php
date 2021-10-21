<view>
    <div class="oms-block oms-block-5" id="oms-block-5">
        <div class="container">
            <div class="oms-title oms-title-mb-20 text-break">{{title}}</div>
            <wb-foreach wb="from=list&tpl=false">
                <div class="row oms-block-5-item">
                    <div class="col-12 col-lg-6 oms-block-5-item-block-1">
                        <div class="oms-block-5-item-block-1-title">
                            <img src="/assets/icons/{{icon}}.svg" alt="">{{text1}}
                        </div>
                        <div class="oms-block-5-item-block-1-description text-break">{{text2}}</div>
                    </div>
                    <div class="col-12 col-lg-3 oms-block-5-item-block-2 text-break">{{text3}}</div>
                    <div class="col-12 col-lg-3 oms-block-5-item-block-3 text-lg-right">
                        <img src="/assets/icons/icon4.svg" alt="">
                    </div>
                </div>
            </wb-foreach>
        </div>
    </div>
</view>

<edit header="Список тип #5 (заголовок с иконкой + текст)" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label for="my-input">Заголовок</label>
        <textarea class="form-control col-12" rows="auto" name="title" placeholder="Заголовок"></textarea>
    </div>
    <wb-multiinput name="list">
        <select name="icon" class="form-control col-4">
            <wb-foreach wb="count=3">
                <option value="icon{{_value}}">Иконка {{_value}}</option>
            </wb-foreach>
        </select>
        <input class="form-control col-8" name="text1" placeholder="Заголовок">
        </textarea>
        <textarea class="form-control col-12" rows="auto" name="text2" placeholder="Подзаголовок"></textarea>
        <div class="col-12 p-0">
            <textarea class="form-control col-12" rows="auto" name="text3" placeholder="Текст"></textarea>
        </div>
    </wb-multiinput>
</edit>