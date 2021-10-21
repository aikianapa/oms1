<view>
    <div id="oms-block-15" class="oms-block oms-block-15">
        <div class="container" wb-if="'{{title}}'>''">
            <div class="oms-title oms-title-mb-15">{{title}}</div>
        </div>

        <div class="container oms-reviews">
            <div class="row">
                <wb-foreach wb-from="feedback">
                <div class="col-12 col-md-4">
                    <div class="oms-review">

                        <div class="d-flex">
                            <img class="oms-review-img" src="/thumb/95x95/src/{{avatar.0.img}}" alt="{{fullname}}">
                            <div>
                                <div class="oms-review-name">{{fullname}}</div>
                                <div class="oms-review-date">{{date}}</div>
                            </div>
                        </div>

                        <div class="oms-review-body text-break">{{text}}</div>

                    </div>
                </div>
                </wb-foreach>
            </div>


            <div class="oms-buttons">
                <button class="oms-button" onclick="fillForm()">
                    Вызвать медицинского поверенного
                </button>
            </div>
        </div>
    </div>
</view>

<edit header="Отзывы" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label for="my-input">Заголовок</label>
        <input id="my-input" class="form-control" type="text" name="title">
    </div>
    <wb-multiinput name="feedback">
    <div class="col-sm-3 pr-3">
        <wb-module wb="module=filepicker&mode=single&width=100&height=100&name=avatar" wb-path="/assets/img/landing-1/feedback/" />
    </div>
    <div class="col-sm-9 pt-3">
        <div class="row">
        <input class="form-control col-4 mb-1" type="text" name="date" wb-mask="99.99.9999" placeholder="Дата">
            <input class="form-control col-8 mb-1" type="text" name="fullname" placeholder="Имя">
            <textarea class="form-control col-12" rows="auto" name="text" placeholder="Отзыв"></textarea>
        </div>        
    </div>
    </wb-multiinput>
</edit>