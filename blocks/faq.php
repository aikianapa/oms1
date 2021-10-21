<view>
    <div id="oms-block-16" class="oms-block oms-block-16">
        <div class="container">
            <div class="oms-title oms-title-mb-20">{{title}}</div>
            <wb-foreach wb-from="faq">
            <div class="oms-block-16-item">
                <div class="oms-block-16-item-row">
                    <div class="oms-block-16-item-block-1">
                        {{number}}
                    </div>
                    <div class="oms-block-16-item-block-2">
                        Нажмите, чтобы открыть
                    </div>
                    <button class="oms-block-16-item-block-3">
                        <img src="../assets/icons/plus.svg" alt="">
                    </button>
                </div>

                <div class="oms-block-16-item-block-4 hidden text-break">{{text}}</div>
            </div>
            </wb-foreach>
        </div>
    </div>
</view>

<edit header="Вопрос-ответ" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label for="my-input">Заголовок</label>
        <input id="my-input" class="form-control" type="text" name="title">
    </div>
    <wb-multiinput name="faq">
        <input class="form-control col-12 mb-1" type="text" name="number" placeholder="Вопрос">
        <textarea class="form-control col-12" rows="auto" name="text" placeholder="Ответ"></textarea>
    </wb-multiinput>
</edit>