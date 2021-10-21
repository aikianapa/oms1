<view>
    <div class="oms-block oms-block-4">
        <div class="container">
            <div class="row">
                <wb-foreach wb-from="numbers">
                <div class="col-12 col-md-4 oms-block-4-item">
                    <div class="oms-block-4-label">{{number}}</div>
                    <div class="oms-block-4-description text-break">{{text}}</div>
                </div>
                </wb-foreach>
            </div>
        </div>
    </div>
</view>

<edit header="Числа" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-multiinput name="numbers">
        <input class="form-control col-sm-3" type="number" name="number">
        <textarea class="form-control col-sm-9" rows="auto" name="text"></textarea>
    </wb-multiinput>
</edit>