<!doctype html>
    <html>
        <head>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151410827-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                
                gtag('config', 'UA-151410827-1');
            </script>
            <link rel="shortcut icon" href="/img/favicon.ico" type="image/png">    
            <title> Multfun - світ анімації </title>
            <meta charset="UTF-8">
            <link href="img/css/main.css" type="text/css" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no">
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const arrow = document.querySelector('[href="#down"]');
                    arrow.addEventListener('click', (e) => {
                        e.preventDefault();
                        const target = document.getElementById('down');
                        const targetY = target.getBoundingClientRect().y;
                        const step = (targetY - window.scrollY) / 20;

                        const scroll = () => {
                            window.scroll(0, window.scrollY + step)

                            if (window.scrollY < targetY){
                                requestAnimationFrame(scroll)
                            }
                        }
                        
                        requestAnimationFrame(scroll)
                    });
                })
                
            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(window).on('load', function () {
                    var $preloader = $('#p_prldr'),
                    $svg_anm   = $preloader.find('.svg_anm');
                    $svg_anm.fadeOut();
                    $preloader.delay(500).fadeOut('slow');
                });
            </script>
            <script>
                $(document).ready(function(){

                    $(function (){
                        $(".arrowupside").hide();

                        $(window).scroll(function (){
                            if ($(this).scrollTop() > 700){
                                $(".arrowupside").fadeIn();
                        } else{
                            $(".arrowupside").fadeOut();
                        }
                        });

                        $(".arrowupside").click(function (){
                        $("body,html").animate({
                                scrollTop:0
                            }, 800);
                            return false;
                            });
                        });
                    });
            </script>
        </head>
        <div id="p_prldr"><div class="contpre"><span class="svg_anm"></span><br>Зачекайте<br></div></div>
        <div class="header">
            <a href="#menu"><img src="img/mlink.png" class="mlink"></a>
            <a href="#search"><img src="img/search.png" class="search"></a>
            <div id="menu" class="menu">
                <a href="#up"><img src="img/arrow.png" class="arrowup"></a>
                <center>
                    <div class="aboutblock">
                        <br><a href="#about" class="amenu">Про сайт</a></br>
                        <br><a href="#blog" class="amenu">Блог</a></br>
                        <br><a href="#copyright" class="amenu">Для правовласників</a></br>
                    </div>
                </center>
            </div>
        </div>
        <div id="about" class="about">
            <div class="aboutblock">
                <h1>Ласкаво просимо до мультпорталу MULTFUN! Тут ви можете переглянути будь-яку серію улюбленого мультфільму дитинства. Це все із максимальною зручністю у вигляді плавності, приємного на око дизайну та надзвичайно малої кількості реклами. У нас також є YouTube- і Телеграм-канал, де ми викладаємо майстерно складені до купи анонси, а іноді й повні серії мультів, доступні для завантаження!</h1>
            </div>
            <a href="#menu"><img src="img/arrow.png" class="arrowleft"></a>
        </div>
        <div id="search" class="about">
            <center><input type="text" placeholder="Пошук" class="sinput"></center>
            <a href="#up"><img src="img/arrow.png" class="arrowup"></a>        
        </div>
        <div class="about" id="blog">
            <h1 align="center" style="color: #fff; font: 40px BeauSans; font-weight: bold; margin-top: 100px; position: absolute; right: 50px; left: 50px;"> Блог </h1>
            <a href="#menu"><img src="img/arrow.png" class="arrowleft"></a>
        </div>
        <div class="about" id="copyright">
            <div class="aboutblock">
                <h2>Весь розміщений контент на ресурсі "www.multfun.ho.ua" є матеріалом, що знаходиться у вільному доступі в мережі Інтернет. Якщо ви є правовласником авторських прав контенту, що використовуються на даному ресурсі, адміністрація готова надати Вам сприяння і видалити з даного сайту відповідні матеріали. При виникненні спірних ситуацій ми просимо правовласника надіслати нам лист в електронному вигляді, де необхідно вказати наступне:</h2>
                <h2>1) Документальне підтвердження Ваших прав на матеріал, захищений авторським правом.</h2>
                <h2>2) Відсканований документ з печаткою.</h2>
                <h2>3) Email з офіційного поштового домена компанії правовласника.</h2>
                <h2>4) Інша інформація, що дозволяє однозначно ідентифікувати Вас як правовласника даного контенту.</h2>
                <h2>5) Прямі посилання на сторінки сайту, які містять дані, опубліковані з порушенням авторських прав.</h2>
                <h2>При отриманні вашого листа, який містить ці підтвердження, протягом 48 годин ми видалимо з сайту захищений авторським правом контент.</h2>
                <h2>З усіх питань звертатися на email: qtvfun@gmail.com</h2>
            </div>
            <a href="#menu"><img src="img/arrow.png" class="arrowleft"></a>
        </div>
        <div id="simpsons" class="about">
            <div class="simpsonsheader">
            </div>
            <div class="cain">
                <h5 align="center">Сімпсони </h5>
                <img src="img/cartoons/posters/simpsons.jpg" class="inposter">
                <h3 class="multtext">«Сімпсони» — американський анімаційний серіал, створений Меттом Ґрейнінґом для компанії FOX. Мультсеріал — сатирична пародія на стиль життя середнього класу США, втілена в сім'ї Сімпсонів, яка складається з Гомера, Мардж, Барта, Ліси та Меґґі. Більшість подій відбуваються у вигаданому містечку Спрингфілді.</h3>
                <iframe class="mult" src="//tortuga.wtf/embed/51" frameborder="0" allowfullscreen></iframe>
                <center><br><h1 align="center" class="prtext">Дивитись онлайн</h1></br></div></center>
                <div class="cartoonsadultin">
                    <h1>Дивіться ще</h1>
                    <a href="#southpark" style="z-index: 4000;">
                        <div class="cartoonblockin">
                            <img src="img/cartoons/posters/southpark.jpg" class="poster">
                            <br><h1 align="center">Південний Парк</h1><br>
                        </div>
                    </a>
                    <a href="#familyguy">
                            <div class="cartoonblockin">
                                <img src="img/cartoons/posters/familyguy.jpg" class="poster">
                                <br><h1 align="center">Гріфіни</h1><br>
                            </div>
                        </a>
                        <a href="#rickandmorty">
                            <div class="cartoonblockin">
                                <img src="img/cartoons/posters/rickandmorty.jpg" class="poster">
                                <br><h1 align="center">Рік та Морті</h1><br>
                            </div>
                        </a>
                        <a href="#futurama">
                            <div class="cartoonblockin">
                                <img src="img/cartoons/posters/futurama.jpg" class="poster">
                                <br><h1 align="center">Футурама</h1><br>
                            </div>
                        </a>
                        <a href="#bobburgers">
                        <a href="#americandad">
                            <div class="cartoonblock">
                                <img src="img/cartoons/posters/americandad.jpg" class="poster">
                                <br><h1 align="center">Тато з Америки</h1><br>
                            </div>
                        </a>
                        <a href="#back"><img src="img/arrow.png" class="arrowleft2"></a>
                    </div>
               </div>
            </div>
        </div>
        <div id="southpark" class="about">
                <div class="southparkheader">
                </div>
                <div class="cain">
                    <h5 align="center">Південний Парк </h5>
                    <img src="img/cartoons/posters/southpark.jpg" class="inposter">
                    <h3 class="multtext">«Південний Парк» — американський анімаційний серіал, створений учасниками рок-гурту DVDA Меттом Стоуном і Треєм Паркером. Випускається кабельним телеканалом Comedy Central з 1997 року. Основу сюжету складають пригоди чотирьох хлопчиків і їхніх друзів, що живуть у маленькому містечку Саут-Парк, штат Колорадо.</h3>
                    <iframe class="mult" src="//tortuga.wtf/embed/111" frameborder="0" allowfullscreen></iframe>
                    <center><br><h1 align="center" class="prtext">Дивитись онлайн</h1></br></div></center>
                    <div class="cartoonsadultin">
                        <h1>Дивіться ще</h1>
                        <a href="#simpsons">
                            <div class="cartoonblock">
                                <img src="img/cartoons/posters/simpsons.jpg" class="poster">
                                <br><h1 align="center">Сімпсони</h1><br>
                            </div>
                        </a>
                        <a href="#familyguy">
                                <div class="cartoonblockin">
                                    <img src="img/cartoons/posters/familyguy.jpg" class="poster">
                                    <br><h1 align="center">Гріфіни</h1><br>
                                </div>
                            </a>
                            <a href="#rickandmorty">
                                <div class="cartoonblockin">
                                    <img src="img/cartoons/posters/rickandmorty.jpg" class="poster">
                                    <br><h1 align="center">Рік та Морті</h1><br>
                                </div>
                            </a>
                            <a href="#futurama">
                                <div class="cartoonblockin">
                                    <img src="img/cartoons/posters/futurama.jpg" class="poster">
                                    <br><h1 align="center">Футурама</h1><br>
                                </div>
                            </a>
                            <a href="#americandad">
                                <div class="cartoonblock">
                                    <img src="img/cartoons/posters/americandad.jpg" class="poster">
                                    <br><h1 align="center">Тато з Америки</h1><br>
                                </div>
                            </a>
                            <a href="#back"><img src="img/arrow.png" class="arrowleft2"></a>
                        </div>
                   </div>
                </div>
            </div>
            <div id="familyguy" class="about">
                    <div class="familyguyheader">
                    </div>
                    <div class="cain">
                        <h5 align="center">Гріфіни </h5>
                        <img src="img/cartoons/posters/familyguy.jpg" class="inposter">
                        <h3 class="multtext">«Гріфіни» або «Сім’янин» — американський комедійно-сатиричний мультсеріал, створений Сетом Макфарлейном у 1999 році. Серіал розповідає про життя Пітера Гріфіна та його родини, яка проживає в Куагоґу, вигаданому передмісті Провіденса, столиці Род-Айленду.</h3>
                        <iframe class="mult" src="//tortuga.wtf/embed/93" frameborder="0" allowfullscreen></iframe>
                        <center><br><h1 align="center" class="prtext">Дивитись онлайн</h1></br></div></center>
                        <div class="cartoonsadultin">
                            <h1>Дивіться ще</h1>
                            <a href="#simpsons">
                                <div class="cartoonblock">
                                    <img src="img/cartoons/posters/simpsons.jpg" class="poster">
                                    <br><h1 align="center">Сімпсони</h1><br>
                                </div>
                            </a>
                            <a href="#southpark">
                                <div class="cartoonblock">
                                    <img src="img/cartoons/posters/southpark.jpg" class="poster">
                                    <br><h1 align="center">Південний Парк</h1><br>
                                </div>
                            </a>
                                <a href="#rickandmorty">
                                    <div class="cartoonblockin">
                                        <img src="img/cartoons/posters/rickandmorty.jpg" class="poster">
                                        <br><h1 align="center">Рік та Морті</h1><br>
                                    </div>
                                </a>
                                <a href="#futurama">
                                    <div class="cartoonblockin">
                                        <img src="img/cartoons/posters/futurama.jpg" class="poster">
                                        <br><h1 align="center">Футурама</h1><br>
                                    </div>
                                </a>
                                <a href="#americandad">
                                    <div class="cartoonblock">
                                        <img src="img/cartoons/posters/americandad.jpg" class="poster">
                                        <br><h1 align="center">Тато з Америки</h1><br>
                                    </div>
                                </a>
                                <a href="#back"><img src="img/arrow.png" class="arrowleft2"></a>
                            </div>
                       </div>
                    </div>
                </div>
                <div id="rickandmorty" class="about">
                        <div class="rickandmortyheader">
                        </div>
                        <div class="cain">
                            <h5 align="center">Рік та Морті </h5>
                            <img src="img/cartoons/posters/rickandmorty.jpg" class="inposter">
                            <h3 class="multtext">«Рік і Морті» — американський мультсеріал, створений Деном Гармоном і Джастіном Ройландом, прем'єра якого відбулася 2 грудня 2013 року на програмному блоці Adult Swim на телеканалі Cartoon Network. Ройланд озвучив головних персонажів: Ріка, вченого-алкоголіка, та його онука Морті.</h3>
                            <iframe class="mult" src="//tortuga.wtf/embed/31" frameborder="0" allowfullscreen></iframe>
                            <center><br><h1 align="center" class="prtext">Дивитись онлайн</h1></br></div></center>
                            <div class="cartoonsadultin">
                                <h1>Дивіться ще</h1>
                                <a href="#simpsons">
                                    <div class="cartoonblock">
                                        <img src="img/cartoons/posters/simpsons.jpg" class="poster">
                                        <br><h1 align="center">Сімпсони</h1><br>
                                    </div>
                                </a>
                                <a href="#southpark">
                                    <div class="cartoonblock">
                                        <img src="img/cartoons/posters/southpark.jpg" class="poster">
                                        <br><h1 align="center">Південний Парк</h1><br>
                                    </div>
                                </a>
                                <a href="#familyguy">
                                    <div class="cartoonblock">
                                        <img src="img/cartoons/posters/familyguy.jpg" class="poster">
                                        <br><h1 align="center">Гріфіни</h1><br>
                                    </div>
                                </a>
                                    <a href="#futurama">
                                        <div class="cartoonblockin">
                                            <img src="img/cartoons/posters/futurama.jpg" class="poster">
                                            <br><h1 align="center">Футурама</h1><br>
                                        </div>
                                    </a>
                                    <a href="#americandad">
                                        <div class="cartoonblock">
                                            <img src="img/cartoons/posters/americandad.jpg" class="poster">
                                            <br><h1 align="center">Тато з Америки</h1><br>
                                        </div>
                                    </a>
                                    <a href="#back"><img src="img/arrow.png" class="arrowleft2"></a>
                                </div>
                           </div>
                        </div>
                    </div>
                    <div id="futurama" class="about">
                            <div class="futuramaheader">
                            </div>
                            <div class="cain">
                                <h5 align="center">Футурама </h5>
                                <img src="img/cartoons/posters/futurama.jpg" class="inposter">
                                <h3 class="multtext">«Футурама» — культовий американський анімаційний серіал, створений на студії «20th Century Fox» Метом Ґрейнінґом і Девідом Коеном, авторами мультсеріалу «Сімпсони». Дія серіалу відбувається в Новому Нью-Йорку в 3000 році. У США серіал демонстрували на Fox Network з 28 березня 1999 року до 10 серпня 2003 року.</h3>
                                <iframe class="mult" src="//tortuga.wtf/embed/77" frameborder="0" allowfullscreen></iframe>
                                <center><br><h1 align="center" class="prtext">Дивитись онлайн</h1></br></div></center>
                                <div class="cartoonsadultin">
                                    <h1>Дивіться ще</h1>
                                    <a href="#simpsons">
                                        <div class="cartoonblock">
                                            <img src="img/cartoons/posters/simpsons.jpg" class="poster">
                                            <br><h1 align="center">Сімпсони</h1><br>
                                        </div>
                                    </a>
                                    <a href="#southpark">
                                        <div class="cartoonblock">
                                            <img src="img/cartoons/posters/southpark.jpg" class="poster">
                                            <br><h1 align="center">Південний Парк</h1><br>
                                        </div>
                                    </a>
                                    <a href="#familyguy">
                                        <div class="cartoonblock">
                                            <img src="img/cartoons/posters/familyguy.jpg" class="poster">
                                            <br><h1 align="center">Гріфіни</h1><br>
                                        </div>
                                    </a>
                                    <a href="#rickandmorty">
                                        <div class="cartoonblock">
                                            <img src="img/cartoons/posters/rickandmorty.jpg" class="poster">
                                            <br><h1 align="center">Рік та Морті</h1><br>
                                        </div>
                                    </a>
                                    <a href="#americandad">
                                        <div class="cartoonblock">
                                            <img src="img/cartoons/posters/americandad.jpg" class="poster">
                                            <br><h1 align="center">Тато з Америки</h1><br>
                                        </div>
                                    </a>
                                        <a href="#back"><img src="img/arrow.png" class="arrowleft2"></a>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <div id="spongebob" class="about">
                                <div class="spongebobheader">
                                </div>
                                <div class="cain">
                                    <h5 align="center">Губка Боб Квадратні Штани </h5>
                                    <a href="http://moviestape.net"><h4 align="center">Взято з сайту moviestape.net</h4></a>
                                    <img src="img/cartoons/posters/spongebob.jpg" class="inposter">
                                    <h3 class="multtext">«Губка Боб Квадратні Штани» — культовий американський мультсеріал виробництва телеканалу Nickelodeon, який вийшов до ефіру влітку 1999 року та став однією з найпопулярніших анімаційних телевізійних програм, а також фактичним «обличчям» каналу «Nickelodeon».</h3>
                                    <iframe class="mult" src="//tortuga.wtf/vod/9450" frameborder="0" allowfullscreen></iframe>
                                    <center><br><h1 align="center" class="prtext">Дивитись онлайн</h1></br></div></center>
                                    <div class="cartoonsadultin">
                                        <h1>Дивіться ще</h1>
                                        <a href="#gravityfalls">
                                            <div class="cartoonblock">
                                                <img src="img/cartoons/posters/gravityfalls.jpg" class="poster">
                                                <br><h1 align="center">Таємниці Ґравіті Фолз</h1><br>
                                            </div>
                                            </a>    
                                            <a href="#back"><img src="img/arrow.png" class="arrowleft2"></a>
                                        </div>
                                   </div>
                                </div>
                            </div>
                            <div id="gravityfalls" class="about">
                                <div class="gravityfallsheader">
                                </div>
                                    <div class="cain">
                                    <h5 align="center">Таємниці Ґравіті Фолз </h5>
                                    <img src="img/cartoons/posters/gravityfalls.jpg" class="inposter">
                                    <h3 class="multtext">«Таємниці Ґравіті Фолз» — американський анімаційний телевізійний серіал Алекса Гірша, створений студією «Disney Television Animation» для каналу Disney Channel та Disney XD. Перший епізод першого сезону було попередньо показано 15 червня 2012 року; офіційна прем’єра відбулася 29 червня 2012 року.</h3>
                                    <iframe class="mult" src="//tortuga.wtf/embed/61" frameborder="0" allowfullscreen></iframe>
                                    <center><br><h1 align="center" class="prtext">Дивитись онлайн</h1></br></div></center>
                                    <div class="cartoonsadultin">
                                        <h1>Дивіться ще</h1>
                                        <a href="#spongebob">
                                            <div class="cartoonblock">
                                                <img src="img/cartoons/posters/spongebob.jpg" class="poster">
                                                <br><h1 align="center">Губка Боб Квадратні Штани</h1><br>
                                            </div>
                                        </a>
                                            <a href="#back"><img src="img/arrow.png" class="arrowleft2"></a>
                                        </div>
                                   </div>
                                </div>
                            </div>
                            </div>
                            <div id="americandad" class="about">
                                    <div class="americandadheader">
                                    </div>
                                    <div class="cain">
                                        <h5 align="center">Американський тато </h5>
                                        <img src="img/cartoons/posters/americandad.jpg" class="inposter">
                                        <h3 class="multtext">«Американський тато!» — американський комедійний мультсеріал виробництва студії «Андердог» та «Фазі Дор» за замовленням 20th Century Fox. Він був придуманий і розроблений, в основному, Сетом МакФарлейном, творцем серіалу «Гріффіни».</h3>
                                        <center><br><h1 align="center" class="prtext">Дивитись онлайн</h1></br></div></center>
                                        <br><h1 align="center" style="margin-top: 60%;"> Вибачте, щось пішло не так :( </h1></br>
                                        <div class="cartoonsadultin">
                                            <h1>Дивіться ще</h1>
                                            <a href="#simpsons">
                                                <div class="cartoonblock">
                                                    <img src="img/cartoons/posters/simpsons.jpg" class="poster">
                                                    <br><h1 align="center">Сімпсони</h1><br>
                                                </div>
                                            </a>
                                            <a href="#southpark">
                                                <div class="cartoonblock">
                                                    <img src="img/cartoons/posters/southpark.jpg" class="poster">
                                                    <br><h1 align="center">Південний Парк</h1><br>
                                                </div>
                                            </a>
                                            <a href="#familyguy">
                                                <div class="cartoonblock">
                                                    <img src="img/cartoons/posters/familyguy.jpg" class="poster">
                                                    <br><h1 align="center">Гріфіни</h1><br>
                                                </div>
                                            </a>
                                            <a href="#rickandmorty">
                                                <div class="cartoonblock">
                                                    <img src="img/cartoons/posters/rickandmorty.jpg" class="poster">
                                                    <br><h1 align="center">Рік та Морті</h1><br>
                                                </div>
                                            </a>
                                            <a href="#futurama">
                                                <div class="cartoonblock">
                                                    <img src="img/cartoons/posters/futurama.jpg" class="poster">
                                                    <br><h1 align="center">Футурама</h1><br>
                                                </div>
                                            </a>
                                                <a href="#back"><img src="img/arrow.png" class="arrowleft2"></a>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                            <div id="helloween" class="about">
                            <div class="helloweenheader">
                            </div>
                                <div class="cain">
                                    <h5 align="center">Як провести Хелловін з Multfun? </h5>
                                    <br><h3 class="blogtext">Скоро 31 жовтня - довгоочікуваний Хелловін! Останнім часом це свято набирає все більше обертів в Україні, що безумовно відіграє свою роль у нашому суспільному житті. На нашу думку, цього свята не треба цуратися, адже передусім це - атмосферне свято осені, коли люди відчувають панівну в повітрі містику та насолоджуються часом, проведеним із друзями. Хелловін можна святкувати в місцевому торгівельному центрі, піти додому до друга або ж самостійно організувати вечірку хоч у своїй оселі. Хелловін головне мати у серці: не обов’язково різати габруза чи вішати орнаменти в кімнаті, якщо маєш фантазію та Multfun.
У цій статті ми опишемо, як відсвяткувати Хелловін, якщо між походами деінде є вільний час або якщо в тебе просто немає костюма.
У цьому випадку на допомогу приходить Multfun зі своєю хелловінською підбіркою! Хелловінські серії на будь-який смак! Тут будуть описи мультів та серій, які ви можете переглянути на новому сайті.</h3></br>
<br><h3 class="blogtext"><a href="#simpsons"><br><h3 class="blogtext">1. Сімпсони</h3></a></br>
Жовта сімейка повертається у тридцятирічному циклi “Treehouse of Horror”. Кожен такий спецвипуск складається із декількох шалених історій, які кепкують із кліше всіх жахів, при цьому показуючи глядачеві справді захоплюючу історію.
Найкращі тематичні спецвипуски на думку членів команди:
Treehouse of Horror V (шостий сезон)
*посилання чи кнопка, якщо так буде*
Treehouse of Horror XI (дванадцятий сезон)
*посилання чи кнопка, якщо так буде*
Treehouse of Horror XIX (двадцятий сезон) 
Treehouse of Horror XIII (чотирнадцятий сезон)
Treehouse of Horror III (четвертий сезон)
Treehouse of Horror VII (восьмий сезон)</h3></br>
<br><h3 class="blogtext"><a href="#familyguy"><br><h3 class="blogtext">2. Гріфіни</h3></a>
9 сезон 14 серія</h3></br>
<br><h3 class="blogtext"><a href="#southpark"><br><h3 class="blogtext">3. Південний Парк</h3></a>
"Сини відьми", шоста серія у двадцять першому сезоні, креативно глузує із секс-скандалів у Голлівуді. Радимо почати з нього. Продовжувати можете з “Пінкаєм” – сьомою серією всього серіалу, сповненою жартами про Майкла Джексона та несамовитим матюччям.  Але найкращим хелловінським випуском досі вважається “Пекло на Землі 2006” – 11 епізод 10 сезону. Справжнє дійство, що жодної секунди не дає перепочити. Сам Диявол приходить на Землю, щоб влаштувати на ній пекельну тусу. Дивитися всі атеїстам і фанатам чорного гумору!</h3></br>
<br><h3 class="blogtext"><a href="#gravityfalls"><br><h3 class="blogtext">4. Гравіті Фолз</h3></a>
Думаючи про Хелловін та цей мульт, згадуються три серії, одна з яких лише частково пов’язана зі святом. Та і дії усього мультсеріалу відбуваються улітку, тому виходить така цікавинка. Належать вони до двох сезонів. Перша має назву “Літоувін”, що вже є очевидною відсилкою на Хелловін. За рахунком це дванадцята серія першого сезону. І друга серія, яку ми згадуватимемо, - це “Невеличкий магазин жахіть” - данина Стівену Кінгу як автору “Ярмарку нічних жахіть”. Вона складається із трьох міні-історій, які розповідає Дядько Стен. Можливо, хелловінською можна назвати і десяту серію другого сезону, де Діппер допомагає Пасифіці позбавитися від привида у її сімейному маєтку. Даючи вам трішки тривії, у деяких країнах цій серії дали рейтинг 16+ через показ крові.</h3></br>
<br><h3 class="blogtext"><a href="#spongebob"><br><h3 class="blogtext">5. Губка Боб</h3></a>
Із десяти таких серій, найбільш улюбленими серед фанатів є дві. Тринадцята серія найпершого сезону є справжньою класикою, яка стає ще кращою завдяки старому стилю анімації, старанно намальованої руками. "Scaredy Pants", у якій Губка стає хелловінським привидом, обов’язкова до перегляду. Хоч друга конкретно і не є серією для Хелловіну, але всі інші, які такими є, на жаль, просто програють цій за сюжетом, гумором та атмосферою. “Graveyard Shift” — перша частина шістнадцятого епізоду другого сезону. Напевно, усі ще дітьми пам’ятають той самий жарт про Графа Дракулу, той саспенс із загадковою постаттю за “Красті-Крабом” та ту зловісну музику на фоні. Неймовірна хелловінська пригода.</h3></br>
<br><a href="#back"><img src="img/arrow.png" class="arrowleft3"></a></br>            
</div>
                            </div>
                            <div id="newyear" class="about">
                            <div class="newyearheader">
                            </div>
                                <div class="cain">
                                    <h5 align="center">Як провести Новий рік та Різдво з Multfun? </h5>
                                    <br><h3 class="blogtext">Новий рік скоро настане, а за ним слідує і Різдво. Наша команда вітає вас з цими святами, та бажає чудово їх провести. Ось вам добірка різдвяних серій мультфільмів</h3></br>
<br><h3 class="blogtext"><a href="#futurama"><br><h3 class="blogtext">Футурама</h3></a></br>
2 сезон 4 серія. Як же без наших друзів? У центрі сюжету новорічного епізоду звісно ж Фрай, який дізнається про нові традиції Людини Х (раніше відомий як Різдво), коли він гуляє вулицями та вбиває усіх, кого зустрічає, через несправність. Не варто уявляти море крові, але багато смішних жартів тобі гарантовано під час перегляду цього епізоду.</h3></br>
<center><img src="blog/img/newyear/futurama.jpeg" class="posterblog"></center>
<br><h3 class="blogtext"><a href="#familyguy"><br><h3 class="blogtext">Гріфіни</h3></a>
11 сезон 8 серія. «Гріфіни», як завжди, у сатиричній манері вирішили переповісти історію народження Ісуса, але таким чином, на який наважився б лише серіал Сета Макфарлейна. Чому слід дивитися це? Цей епізод, безумовно, не той, який варто дивитись у колі родичів, адже вони можуть не зрозуміти безлічі жартів. Але, якщо ти є шанувальником «Сімпсонів», тобі безперечно сподобається. Приємним плюс є досить веселе закінчення.</h3></br>
<center><img src="blog/img/newyear/familyguy.jpeg" class="posterblog"></center>
<br><h3 class="blogtext"><a href="#southpark"><br><h3 class="blogtext">Південний Парк</h3></a>
8 сезон 14 серія. Серед 23 сезонів популярного анімаційного мультфільму для дорослих ми акцентуємо увагу на тому, де Стен погоджується допомогти лісовим істотам, які уміють розмовляти. Звісно усе перетворюється, у кращих традиціях серіалу, в Різдвяну катастрофу. Але це не заважає епізоду бути смішним та сповненим новорічного духу.</h3></br>
<center><img src="blog/img/newyear/southpark.jpeg" class="posterblog"></center>
<br><h3 class="blogtext"><a href="#rickandmorty"><br><h3 class="blogtext">Рік та Морті</h3></a>
4 сезон 5 серія. Нова серія мультфільму - різдвяна спеціальна пропозиція, весела пародія на "Термінатор" і чудовий гумор на тему подорожей у часі і причинно-наслідкових зв'язків у всесвіті.</h3></br>
<center><img src="blog/img/newyear/rickandmorty.jpeg" class="posterblog"></center>
<br><a href="#back"><img src="img/arrow.png" class="arrowleft3"></a></br>            
</div>
                            </div>

        <body>
            <a href="#down"><img src="img/arrow.png" class="arrow"><br><p class="bottomp">Мультфільми</p></br></a>
            <div class="social">
                <a href="https://www.youtube.com/channel/UC5v6CINdvCZ1wnbsgZGwfqg" target="_blank"><img src="img/youtube.png" class="icon"></a>
                <a href="https://www.instagram.com/multfun_ua/" target="_blank"><img src="img/instagram.png" class="icon"></a>
                <a href="https://www.t.me/multfun_ua/" target="_blank"><img src="img/telegram.png" class="icon"></a>
            </div>
        </body>
        <div class="down" id="down">
            <div class="blonav">
                <img src="blog/img/christmas.png" class="bloimg">
                <h1 class="bloh1"> Як провести Новий рік з Multfun? </h1>
                <h1 class="bloh12"> Скоро Новий рік - довгоочікуване свято! Ось вам підбірка серій мультів на це свято</h1>
                <a href="#newyear" class="blolink">Читати далі</a>
            </div>
            <a href="#upside"><img src="img/arrow.png" class="arrowupside"></a>
            <h4 style="margin: 10px;"> Мультфільми для дорослих </h4>
            <center>
                <div class="cartoonsadult">
                    <a href="#simpsons">
                        <div class="cartoonblock">
                            <img src="img/cartoons/posters/simpsons.jpg" class="poster">
                            <br><h1 align="center">Сімпсони</h1><br>
                        </div>
                    </a>
                    <a href="#southpark">
                        <div class="cartoonblock">
                            <img src="img/cartoons/posters/southpark.jpg" class="poster">
                            <br><h1 align="center">Південний Парк</h1><br>
                        </div>
                    </a>
                    <a href="#familyguy">
                        <div class="cartoonblock">
                            <img src="img/cartoons/posters/familyguy.jpg" class="poster">
                            <br><h1 align="center">Гріфіни</h1><br>
                        </div>
                    </a>
                    <a href="#rickandmorty">
                        <div class="cartoonblock">
                            <img src="img/cartoons/posters/rickandmorty.jpg" class="poster">
                            <br><h1 align="center">Рік та Морті</h1><br>
                        </div>
                    </a>
                    <a href="#futurama">
                        <div class="cartoonblock">
                            <img src="img/cartoons/posters/futurama.jpg" class="poster">
                            <br><h1 align="center">Футурама</h1><br>
                        </div>
                    </a>
                    <a href="#americandad">
                        <div class="cartoonblock">
                            <img src="img/cartoons/posters/americandad.jpg" class="poster">
                            <br><h1 align="center">Тато з Америки</h1><br>
                        </div>
                    </a>
                </div>
            </center>
            <h4 style="margin: 10px;"> Мультфільми для дітей </h4>
            <center>
                <div class="cartoonschild">
                    <a href="#spongebob">
                        <div class="cartoonblock">
                            <img src="img/cartoons/posters/spongebob.jpg" class="poster">
                            <br><h1 align="center">Губка Боб Квадратні Штани</h1><br>
                        </div>
                    </a>
                    <a href="#gravityfalls">
                        <div class="cartoonblock">
                            <img src="img/cartoons/posters/gravityfalls.jpg" class="poster">
                            <br><h1 align="center">Таємниці Ґравіті Фолз</h1><br>
                        </div>
                    </a>
                </div>
                </center>
        </div>
    </html>