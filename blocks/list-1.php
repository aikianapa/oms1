<view>
    <div id="oms-block-13" class="oms-block oms-block-13">
        <div class="container">
            <div class="oms-title oms-title-mb-15">{{title}}</div>

            <div class="row">
                <wb-foreach wb="from=list&tpl=false">
                <div class="col-12 col-md-6 oms-block-13-item">
                    <div class="d-flex align-items-start">
                        <img src="../assets/icons/bookmark.svg" alt="">
                        <div>
                            <div class="oms-block-13-item-title text-break">{{text1}}</div>
                            <div class="oms-block-13-item-description text-break">{{text2}}</div>
                        </div>
                    </div>
                </div>
                </wb-foreach>
            </div>
        </div>
    </div>
</view>

<edit header="Список тип #1" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label for="my-input">Заголовок</label>
        <input id="my-input" class="form-control" type="text" name="title">
    </div>
    <wb-multiinput name="list">
            <textarea class="form-control col-12 tx-semibold" rows="auto" name="text1" placeholder="Заголовок"></textarea>
            <textarea class="form-control col-12" rows="auto" name="text2" placeholder="Текст"></textarea>
    </wb-multiinput>
</edit>