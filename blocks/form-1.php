<view>
    <div id="oms-block-17" class="oms-block oms-block-17">
        <div class="container">
            <div class="oms-title oms-title-mb-15">{{title}}</div>
            <form>
                <input name="subject" value="{{title}}" type="hidden" data-label="Тема">
                <input name="_mailto" value="{{_var.orders_email}}" type="hidden">
                <input name="source" value="{{_route.url}}" type="hidden" data-label="Источник">
                <wb-data>
                    <div class="row">
                        <div class="col-12 col-md-6">

                            <div class="group">
                                <input class="input" required name="name" data-label="Имя">
                                <label class="label">
                                    Ваше имя
                                </label>
                            </div>
                            <div class="group">
                                <input class="input" type="email" name="email" data-label="Адрес E-mail">
                                <label class="label">
                                    Адрес E-mail
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="group">
                                <input class="input" wb-mask="+7 (999) 999-99-99" required name="phone" data-label="Номер телефона">
                                <label class="label">
                                    Номер телефона
                                </label>
                            </div>
                            <div class="group">
                                <input class="input" name="messenger" data-label="Удобный мессенджер">
                                <label class="label">
                                    Удобный мессенджер
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="group">
                                <textarea class="input textarea" name="description" data-label="Описание ситуации"></textarea>
                                <label class="label">
                                    Ваша ситуация
                                </label>
                            </div>
                        </div>
                    </div>

                <div class="oms-buttons">
                    <button type="button" class="oms-button" onclick="sendMail(this)">
                        {{_parent.button}}
                    </button>
                </div>
                </wb-data>
            </form>
        </div>
    </div>
</view>

<edit header="Контактная форма" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label>Заголовок формы</label>
        <input class="form-control" type="text" name="title">
    </div>
    <div class="form-group">
        <label>Текст кнопки</label>
        <input class="form-control" type="text" name="button">
    </div>
</edit>