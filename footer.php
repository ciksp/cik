
            </div>
        </div>
    </div>
</div>

<div class="footer_container">
    <div class="container1300">
        <div class="footer">
            <div class="footer__block1">
                <div class="footer__block1_logo">
                    <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/_24.png" alt=""></a>
                </div>
                <div class="footer__block1_addon">
                    <div class="footer__block1_text">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/includes/footer1.php"
                            )
                        );?>
                    </div>
                    <div class="footer__block_social">

                    </div>
                </div>
            </div>
            <div class="footer__block2">
                <h2>МЕНЮ</h2>
                <div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom-menu",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "footer",
                            "USE_EXT" => "N"
                        )
                    );?>
                </div>
            </div>
            <div class="footer__block3">
                <h2>КОНТАКТЫ</h2>
                <div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/includes/footer2.php"
                        )
                    );?>
                </div>
                <div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/includes/footer3.php"
                        )
                    );?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

            <div id="auth" class="modalBlockContainer hideblock">
                <div class="modalBlock authPerson hideblock">
                    <img style="width: 50px; margin-top: 20px" src="<?=SITE_TEMPLATE_PATH?>/images/lcab10.png" title="личный кабинет" alt="">
                    <div class="userform">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:system.auth.form",
                            "auth",
                            array(
                                "FORGOT_PASSWORD_URL" => "/auth/pass.php",
                                "PROFILE_URL" => "/auth/personal.php",
                                "REGISTER_URL" => "/auth/index.php",
                                "SHOW_ERRORS" => "N",
                                "COMPONENT_TEMPLATE" => "auth"
                            ),
                            false
                        );?>
                    </div>
                    <div class="closeModalBlock">X</div>
                </div>
            </div>


            <script>
                if(document.location.pathname === "/") {
                    let indexPage = document.querySelectorAll('.index');
                    for(let i = 0; i < indexPage.length; i++) {
                        indexPage[i].classList.remove('hide');
                    }
                    document.querySelector('.breadcrumb_container').classList.remove('flex-centre');
                    document.querySelector('.breadcrumb_container').classList.add('hide');
                }
                if(document.location.pathname === "/kontakty/") {
                    document.querySelector('.contact_container').classList.remove('hide');
                    document.querySelector('.contact_container').classList.add('flex-centre');

                }

                let bodyStyle = document.querySelector('html');
                let lstBadSee = localStorage.getItem('see');
                if (lstBadSee === 'yes')  {
                    bodyStyle.style.fontSize = '15px';
                    let versionBadSee = document.getElementById('badVersion');
                    versionBadSee.innerHTML = 'стандартная версия';
                }

                window.onload = function () {
                    let showModalBlock = document.querySelectorAll('.showModalBlock');
                    for (let i = 0; i < showModalBlock.length; i++) {
                        showModalBlock[i].onclick = function(e) {
                            showModal(e);
                        }
                    }
                    // console.log(localStorage.getItem(see));
                    let glasses = document.querySelector('.top-header__add1_glasses');
                    glasses.onclick = function(e) {
                        BadSeeOn();
                    };
                    // glasses.addEventListener('click', e => {
                    //     BadSeeOn();
                    // });
                };

                // else {
                //     bodyStyle.style.fontSize = '10px';
                // }
            </script>

            <script>

                // window.onload = function () {
                //     let showModalBlock = document.querySelectorAll('.showModalBlock');
                //     for (let i = 0; i < showModalBlock.length; i++) {
                //         showModalBlock[i].onclick = function(e) {
                //             showModal(e);
                //         }
                //     }
                // };

                function closeModalBlock() {
                    let closeModalBlock = document.querySelectorAll('.modalBlockContainer.showBlock');
                    for (let i = 0; i < closeModalBlock.length; i++)  {
                        closeModalBlock[i].onclick = function(e) {
                            closeModal(e);
                        }
                    }
                }

                // let showModalBlock = document.querySelectorAll('.showModalBlock');
                // for (itemBlock of showModalBlock) {
                //     itemBlock.addEventListener('click', showModal);
                // }

                function showModal(e) {
                    //  if (Array.prototype.includes.call(e.target.classList,'showModalBlock')) {
                    //  if ([].includes.call(e.target.classList,'showModalBlock')) {

                    if (isShowTrue(e)) {
                        closeModal(e);
                        let blockShow = document.getElementById(e.target.dataset.block);
                        blockShow.classList.remove('hideblock');
                        blockShow.classList.add('showBlock');
                        blockShow.firstElementChild.classList.remove('hideblock');
                        blockShow.firstElementChild.classList.add('showBlock');
                        e.target.classList.add('show');
                        closeModalBlock();
                        // blockShow.addEventListener('click', closeModal);
                    }
                    else {
                        return true;
                    }
                }

                function isShowTrue(e) {
                    let isTrueItem = false;
                    for(let i = 0;  i < e.target.classList.length; i++ ) {
                        if ( e.target.classList[i] === 'showModalBlock' ) {
                            isTrueItem  = true;
                        }
                    }
                    return isTrueItem;
                }

                function closeModal(e) {
                    let modal = document.querySelector('.modalBlockContainer.showBlock');
                    if (isCloseTrue(e)) {
                        modal.classList.remove('showBlock');
                        modal.classList.add('hideblock');
                        modal.firstElementChild.classList.remove('showBlock');
                        modal.firstElementChild.classList.add('hideblock');
                        let show = document.querySelectorAll('.show');
                        for (let i = 0; i < show.length; i++) {
                            show[i].classList.remove('show');
                        }
                    }
                }

                function isCloseTrue(e) {
                    let modal = document.querySelector('.modalBlockContainer.showBlock');
                    let isModal = false;
                    for (let i = 0; i < e.target.classList.length; i++ ) {
                        if (e.target.classList[i] === 'modalBlockContainer' || e.target.classList[i] === 'closeModalBlock') {
                            isModal = true;
                        }
                    }
                    return  (modal !== null && isModal);
                }

            </script>

            <script>
                function BadSeeOn(Element) {
                    // console.log(localStorage.getItem('see'));
                    let lstBadSee = localStorage.getItem('see');
                    let bodyStyle = document.querySelector('html');
                    let versionBadSee = document.getElementById('badVersion');
                    if (lstBadSee === 'yes')  {
                        bodyStyle.style.fontSize = '10px';
                        localStorage.setItem('see', 'no');
                        versionBadSee.innerHTML = 'версия для слабовидящих'
                    } else {
                        bodyStyle.style.fontSize = '15px';
                        localStorage.setItem('see', 'yes');
                        versionBadSee.innerHTML = 'стандартная версия';
                    }
                    window.location.reload();
                }
            </script>

            <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
            <script type="text/javascript">
                ymaps.ready(init);

                function init () {
                    var myMap = new ymaps.Map("contact-map", {
                        // Центр карты, указываем коордианты
                        center:[59.47402545000709,33.8432955848474],
                        // Масштаб, тут все просто
                        zoom: 17,
                        // Отключаем все элементы управления
                        // controls: []
                    });

                    var myGeoObjects = [];

                    // Наша метка, указываем коордианты
                    myGeoObjects = new ymaps.Placemark([59.4745,33.8428],{
                        balloonContentBody: 'Бокситогорский центр',
                    },
                    {
                        iconLayout: 'default#image',
                        // Путь до нашей картинки
                        iconImageHref: '/local/templates/bcppmsp/images/_24.png',
                        // Размер по ширине и высоте
                        iconImageSize: [70, 70],
                        // Смещение левого верхнего угла иконки относительно
                        // её «ножки» (точки привязки).
                        iconImageOffset: [0, 0]
                    });

                    var clusterer = new ymaps.Clusterer({
                        clusterDisableClickZoom: false,
                        clusterOpenBalloonOnClick: false,
                    });

                    clusterer.add(myGeoObjects);
                    myMap.geoObjects.add(clusterer);
                    // Отлючаем возможность изменения масштаба
                    myMap.behaviors.disable('scrollZoom');
                }
            </script>

</body
</html>