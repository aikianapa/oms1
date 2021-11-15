<view>
    <div class="oms-block oms-block-1">
        <div class="container d-md-flex">
            <div class="oms-block-1-left">
                <div class="oms-block-1-title text-break">{{text1}}</div>
                <div class="oms-block-1-tags">
                    <div>{{text2}}</div>
                    <wb-foreach wb="from=list&tpl=false">
                        <div class="oms-block-1-tags-item">{{_val}}</div>
                    </wb-foreach>
                </div>

                <div class="oms-block-1-info">
                    <div>
                        {{text3}}
                    </div>
                    <a href="{{link}}">{{label}}</a>
                </div>
            </div>
            <div class="oms-block-1-form">
                <form>
                    <wb-data>
                        <input name="subject" value="{{_parent.label_button}}" type="hidden" data-label="Тема">
                        <input name="_mailto" value="{{_var.orders_email}}" type="hidden">
                        <input name="source" value="{{_route.url}}" type="hidden" data-label="Источник">
                        <div class="group">
                            <input class="input" required name="phone" wb-mask="+7 (999) 999-99-99" data-label="{{_parent.label_phone}}">
                            <label class="label">
                                {{_parent.label_phone}}
                            </label>
                        </div>

                        <div class="group">
                            <input class="input" required name="name" data-label="{{_parent.label_name}}">
                            <label class="label">
                                {{_parent.label_name}}
                            </label>
                        </div>

                        <div class="oms-buttons">
                            <button class="oms-button" type="button" onclick="sendMail(this)">
                                {{_parent.label_button}}
                            </button>
                        </div>
                    </wb-data>
                </form>
            </div>
        </div>
    </div>
</view>

<edit header="Заглавный блок" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <textarea class="form-control col-12 tx-semibold" rows="auto" name="text1" placeholder="Заголовок"></textarea>
    <div class="divider-text">Список</div>
    <input class="form-control" type="text" name="text2" placeholder="Заголовок списка">
    <wb-multiinput name="list">
        <input class="form-control" type="text" name="list" placeholder="Пункты списка">
    </wb-multiinput>
    <div class="divider-text">Сноска и ссылка</div>
    <div class="row px-3">
        <input class="form-control col-12 mb-1" type="text" name="text3" placeholder="Текст сноски">
        <input class="form-control col-6" type="text" name="label" placeholder="Текст ссылки">
        <input class="form-control col-6" type="text" name="link" placeholder="Ссылка">
    </div>
    <div class="divider-text">Форма</div>
    <div class="form-group row">
        <div class="col-sm-4">
            <label>Текст поля "Телефон"</label>
            <input class="form-control" type="text" name="label_phone">
        </div>
        <div class="col-sm-4">
            <label>Текст поля "Имя"</label>
            <input class="form-control" type="text" name="label_name">
        </div>
        <div class="col-sm-4">
            <label>Текст кнопки</label>
            <input class="form-control" type="text" name="label_button">
        </div>
    </div>
</edit>