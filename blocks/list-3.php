<view>
    <div class="oms-block oms-block-2">
        <div class="container">
            <div class="oms-title oms-title-mb-5">{{title}}</div>
            <div class="row">
                <wb-foreach wb="from=list&tpl=false">
                <div class="col-12 col-md-4">
                    <div class="oms-block-2-item">
                        {{text}}
                        <div class="oms-block-2-item-badge">{{_ndx}}</div>
                    </div>
                </div>
                </wb-foreach>
            </div>
            <wb-jq wb="$dom->find('.col-12:last-child .oms-block-2-item')->addClass('oms-block-2-item--bg-full')"/>
            <wb-jq wb="$dom->find('.col-12:last-child .oms-block-2-item .oms-block-2-item-badge')->remove()" />
        </div>
    </div>
</view>

<edit header="Список тип #3 (рамки с номерами)" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label>Заголовок</label>
        <input class="form-control" type="text" name="title">
    </div>
    <wb-multiinput name="list">
            <textarea class="form-control col-12" rows="auto" name="text" placeholder="Заголовок"></textarea>

    </wb-multiinput>
</edit>