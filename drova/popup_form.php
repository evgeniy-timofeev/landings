<div class="popup popup--order" id="callback" aria-hidden="true">
    <div class="popup__wrap">
        <div class="popup__window popup__window--callback" role="dialog" aria-modal="true">
            <button class="popup__close" data-hystclose>Закрыть</button>
            <div class="popup__styled">
                <h2>Рассчитайте стоимость дров с доставкой</div>
            <form action="#" method="POST" id="callback-form">
                <div class="formitem">
                    <input type="text" id="goods" name="goods" placeholder="Что заказываем?" value="">
                </div>
                <div class="formitem">
                    <input type="text" id="location" name="location" placeholder="Куда доставить?" value="">
                </div>
                <div class="formitem">
                    <input id="phone--main" type="tel" name="phone" placeholder="+7" value="">
                </div>
                <div class="formsubmit">
                    <button type="submit" class="button" id="order"><i
                            class="icon-leaf"></i>Рассчитать
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>