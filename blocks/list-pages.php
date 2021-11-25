<view>
    <div id="oms-block-13" class="oms-block oms-block-13">
        <div class="container">
            <div class="oms-title oms-title-mb-15">{{header}}</div>

            <div class="row">
                <wb-foreach wb="table=pages&tpl=false&sort=header" wb-filter="{'active':'on','name':{'$ne':'home'}}">
                <div class="col-12 col-md-6 oms-block-13-item">
                    <a href="{{url}}">{{header}}</a>
                </div>
                </wb-foreach>
            </div>
        </div>
    </div>
</view>

<edit header="Список всех лендингов" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>