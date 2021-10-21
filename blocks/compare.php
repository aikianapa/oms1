<view>
    <div class="oms-block oms-block-8">
        <div class="container">
            <div class="oms-title oms-title-mb-5 text-break">{{title}}</div>

            <div class="oms-block-8-description text-break">{{text}}</div>

            <div class="row align-items-stretch">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <div class="oms-block-8-item">
                        <div class="oms-block-8-item-header">
                            {{table_title_1}}
                        </div>

                        <div class="oms-block-8-item-body">
                            {{table_text_1}}
                        </div>
                        <div class="oms-block-8-item-footer">
                            <div class="oms-block-8-item-footer-title">
                                {{table_footer_1}}
                            </div>
                            <div class="oms-block-8-item-footer-description text-break">{{table_footer_text_1}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="oms-block-8-item">
                        <div class="oms-block-8-item-header">
                            {{table_title_2}}
                        </div>

                        <div class="oms-block-8-item-body">
                            {{table_text_2}}    
                        </div>
                        <div class="oms-block-8-item-footer">
                            <div class="oms-block-8-item-footer-title">
                                {{table_footer_2}}
                            </div>
                            <div class="oms-block-8-item-footer-description text-break">{{table_footer_text_2}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</view>

<edit header="Сравнение (таблица 2 колонки)" group="landing-1">
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
            <div class="form-group">
                <input class="form-control" wb-module="jodit" name="table_text_1">
            </div>
            <div class="form-group">
                <input class="form-control mb-1 tx-semibold" type="text" name="table_footer_1"  placeholder="Заголовок подвала">
                <textarea class="form-control" rows="auto" name="table_footer_text_1" placeholder="Текст подвала"></textarea>
            </div>
        </div>
        <div class="col-sm-6 bg-gray-200 py-2">
            <div class="form-group">
                <label >Заголовок справа</label>
                <input class="form-control" type="text" name="table_title_2">
            </div>
            <div class="form-group">
                <input class="form-control" wb-module="jodit" name="table_text_2">
            </div>
            <div class="form-group">
                <input class="form-control mb-1 tx-semibold" type="text" name="table_footer_2" placeholder="Заголовок подвала">
                <textarea class="form-control" rows="auto" name="table_footer_text_2" placeholder="Текст подвала"></textarea>
            </div>
        </div>

    </div>
</edit>