<view>
    <div class="oms-block oms-block-14">
        <div class="container">
            <div class="oms-title oms-title-mb-5 text-break">{{title}}</div>
            <div class="text-break">{{text}}</div>
            <div class="oms-block-14-hr"></div>

            <div class="row">
                <div class="col-12 col-md-6 mb-5 mb-md-0">
                    <div class="oms-block-14-title">{{table_title_1}}</div>
                    <wb-foreach wb="from=list_1&tpl=false">
                    <div class="d-flex align-items-start">
                        <div class="oms-block-14-line"></div>
                        <div class="oms-block-14-description">
                            {{list_text}}
                        </div>
                    </div>
                    </wb-foreach>
                </div>
                <div class="col-12 col-md-6">
                    <div class="oms-block-14-title">{{table_title_2}}</div>
                    <wb-foreach wb="from=list_2&tpl=false">
                    <div class="d-flex align-items-start">
                        <div class="oms-block-14-line"></div>
                        <div class="oms-block-14-description">
                            {{list_text}}
                        </div>
                    </div>
                    </wb-foreach>
                </div>
            </div>
        </div>
    </div>
</view>

<edit header="Список в 2 колонки" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label for="my-input">Заголовок / текст</label>
        <textarea class="form-control tx-semibold mb-1" rows="auto" name="title" placeholder="Заголовок"></textarea>
        <textarea class="form-control" rows="auto" name="text" placeholder="Текст"></textarea>
    </div>
    <div class="form-group row px-3">
        <div class="col-sm-6 bg-gray-100 py-2">
            <div class="form-group">
                <label >Заголовок слева</label>
                <input class="form-control" type="text" name="table_title_1">
            </div>
            <wb-multiinput name="list_1">
                <textarea class="form-control" rows="auto" name="list_text" placeholder="Текст"></textarea>
            </wb-multiinput>
        </div>
        <div class="col-sm-6 bg-gray-200 py-2">
            <div class="form-group">
                <label >Заголовок справа</label>
                <input class="form-control" type="text" name="table_title_2">
            </div>
            <wb-multiinput name="list_2">
                <textarea class="form-control" rows="auto" name="list_text" placeholder="Текст"></textarea>
            </wb-multiinput>
        </div>

    </div>
</edit>