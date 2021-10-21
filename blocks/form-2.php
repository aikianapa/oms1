<view>
    <div class="oms-modal hidden">
        <div class="oms-modal-overlay"></div>
        <div class="oms-modal-content">
            <section>
                <div class="oms-title oms-title-mb-10">
                    Задать вопрос по болезни
                </div>
                <button class="oms-modal-close">
                    <img src="assets/icons/close.svg" alt="">
                </button>
                <form>
                    <div class="row">
                        <div class="col-12 col-md-6">

                            <div class="group">
                                <input class="input" required name="fullname">
                                <label class="label">
                                    Ваше имя
                                </label>
                            </div>
                            <div class="group">
                                <input class="input" type="email" required name="email">
                                <label class="label">
                                    Адрес E-mail
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="group">
                                <input class="input" required wb-mask="+7 (999) 999-99-99" name="phone">
                                <label class="label">
                                    Номер телефона
                                </label>
                            </div>
                            <div class="group">
                                <input class="input" required name="messenger">
                                <label class="label">
                                    Удобный мессенджер
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="group">
                                <textarea class="input textarea" required name="description"></textarea>
                                <label class="label">
                                    Ваша ситуация
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="oms-buttons">
                        <button type="button" class="oms-button"  data-ajax="/api/mail/">
                            Отправить
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</view>

<edit header="Всплывающая форма"  group="landing-1">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>