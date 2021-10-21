<view>
    <div class="oms-block oms-block-3">
        <div class="container">
            <img class="oms-block-3-img" src="{{image.0.img}}" alt="">
        </div>
    </div>
</view>

<edit header="Изображение" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-module wb="module=filepicker&mode=single&width=300&height=200&name=image" wb-path="/assets/img/landing-1/" />
</edit>