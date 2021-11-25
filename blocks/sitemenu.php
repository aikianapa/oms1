<view>
    <div class="oms-menu hidden">
        <div class="oms-menu-wrapper">
            <img class="oms-menu-close" src="assets/icons/close.svg" alt="">

            <div class="oms-menu-wrapper-block-1">
                <!--wb-foreach wb="from=menu&tpl=false">
                    <a href="{{link}}">
                        {{label}}
                    </a>
                </wb-foreach-->
            </div>
            <div class="oms-menu-wrapper-hr"></div>
            <div class="oms-menu-wrapper-block-2">
                <a class="js-phone_link" href="tel:+{{wbDigitsOnly({{_var.phone}})}}">
                    {{_var.phone}}
                </a>

                <a href="mailto:{{_var.email}}">{{_var.email}}</a>
            </div>
        </div>
    </div>
    <script wb-app>
        $('.oms-menu-wrapper-block-1').html('');
        $('.oms-block').each(function(){
            let id = $(this).attr('id');
            let title = $(this).find('.oms-title').text();
            if (id !== undefined && title !== undefined) {
                $('.oms-menu-wrapper-block-1').append('<a href="#'+id+'">'+title+'</a>');
            }
        })
        $('.oms-menu-wrapper-block-1').delegate('a',wbapp.evClick,function(ev){
            ev.preventDefault();
            let target = $(this).attr('href');
            const offsetTop = document.querySelector(`${target}`).offsetTop;
            window.scroll({ top: offsetTop - 106, behavior: 'smooth' });
            $('.oms-menu-close').trigger('click');
        })
    </script>
</view>

<edit header="Меню сайта" group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>

    <wb-multiinput name="menu">
        <input class="form-control col-6" name="label" placeholder="Пункт меню">
        </textarea>
        <input class="form-control col-6" name="link" placeholder="Ссылка">
        </textarea>
    </wb-multiinput>
</edit>