<?php get_header(); ?>        
        <!--Баннер в шапке -->
        <div class="box-solid">
            <div class="box-solid-text">
                <h2>
					Отдых для компании и всей семьи
                </h2> 
            </div>
        </div>
        <!--Конец Баннер в шапке -->
        
        <!--Тело сайта -->
        <div class="body">
		
            <!--В нашем клубе Вас ожидает -->
            <div class="blocks">
                <div class="title">
                    <h3 id="about" class="title-h3">В нашем клубе Вас ожидает</h3>
                </div>
                
                <div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/bania.jpg" alt="Русская баня"></a>
                    </div>
                    <div class="uslugi-title">
                        Русская баня
                    </div>
                </div>
                <div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/2.jpg" alt="Spa - услуги"></a>
                    </div>
                    <div class="uslugi-title">
                        Spa - услуги
                    </div>
                </div>
                <div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/3.jpg" alt="Детская площадка"></a>
                    </div>
                    <div class="uslugi-title">
                        Детская площадка
                    </div>
                </div>
                <div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/4.jpg" alt="Беседки для отдыха"></a>
                    </div>
                    <div class="uslugi-title">
                        Беседки для отдыха
                    </div>
                </div>
                <div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/5.jpg" alt="Отель полу люкс"></a>
                    </div>
                    <div class="uslugi-title">
                        Отель полулюкс
                    </div>
                </div>
                <div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/6.jpg" alt="Велосипеды"></a>
                    </div>
                    <div class="uslugi-title">
                        Велосипеды
                    </div>
                </div>
                <div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/7.jpg" alt="Отель люкс"></a>
                    </div>
                    <div class="uslugi-title">
                        Отель люкс
                    </div>
                </div>
                <div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/8.jpg" alt="Мини футбол, бадминтон"></a>
                    </div>
                    <div class="uslugi-title">
                        Мини футбол, бадминтон
                    </div>
                </div>
                <div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/9.jpg" alt="Дартс"></a>
                    </div>
                    <div class="uslugi-title">
                        Дартс
                    </div>
                </div>
                <div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/10.jpg" alt="Украинская кухня"></a>
                    </div>
                    <div class="uslugi-title">
                        Украинская кухня
                    </div>
                </div>
                
            </div>
            <!--Конец В нашем клубе Вас ожидает -->
			
			
			<!--Акции -->
            <div class="blocks">
                <div class="title">
                    <h3 id="actions">Акции</h3>
                </div>
                
                <div class="uslugi">
                    <div class="slider sliderotel">
                        <img src="http://www.ruspar.pl.ua/wp-content/uploads/2016/03/event-1.jpg" alt="Корпоративные праздники">
                    </div>
                    <div class="otel-title">
                        День рождения, свадьба, юбилей<br> в нашем клубе со скидкой 10-20%
                    </div>
                </div>

                <div class="uslugi">
                    <div class="slider sliderotel">
                        <img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/event/event9.jpg" alt="Организация юбилеев">
                    </div>
                    <div class="otel-title">
                        Скидка 5-10% в будние дни до 19-00
                    </div>
                </div>
                
                <div class="uslugi">
                    <div class="slider sliderotel">
                        <img src="http://www.ruspar.pl.ua/wp-content/uploads/2016/03/event2.jpg" alt="Организация свадеб">
                    </div>
                    <div class="otel-title">
                        Постоянным клиентам скидка 5-15%
                    </div>
                </div>
                
            </div>
            <!--Конец Акции -->
            
            <!--В нашем клубе Вас ожидает -->
            <div class="blocks">
                <div class="title">
                    <h3 id="banya">Баня</h3>
                </div>
                <div class="banya-title">
                    <br>
                    <script type="text/javascript">
                        $(document).ready(function()
                        {
                            $(".slider").each(function ()
                            {
                                var obj = $(this);
                                $(obj).append("<div class='nav'></div>");

                                $(obj).find("li").each(function ()
                                {
                                    $(obj).find(".nav").append("<span rel='"+$(this).index()+"'></span>");
                                    $(this).addClass("slider"+$(this).index());
                                });

                                $(obj).find("span").first().addClass("on");
                            });
                        });

                    function sliderJS (obj, sl) // slider function
                    {
                        var ul = $(sl).find("ul");
                        var bl = $(sl).find("li.slider"+obj);
                        var step = $(bl).width();
                        $(ul).animate({marginLeft: "-"+step*obj}, 500);
                    }

                    $(document).on("click", ".slider .nav span", function() // slider click navigate
                    {
                        var sl = $(this).closest(".slider");
                        $(sl).find("span").removeClass("on");
                        $(this).addClass("on");
                        var obj = $(this).attr("rel");
                        sliderJS(obj, sl);
                        return false;
                    });
                    </script>

                    <div class="wrapper">
                        <div class="slider">
                           <h2>Баня выполненная по всем канонам древнерусского мастерства</h2>
                            <ul>
                                <li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/parilka/parilka1.JPG" alt="" /></li>
                                <li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/parilka/parilka2.JPG" alt="" /></li>
                                <li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/parilka/parilka3.JPG" alt="" /></li>
                                <li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/parilka/parilka4.JPG" alt="" /></li>
                            </ul>
                        </div>
						
                        <div class="slider slider2">
                           <h2>Баня в японском стиле</h2>
                            <ul>
                                <li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/parilka/parilka7.JPG" alt="" /></li>
                                <li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/parilka/parilka8.JPG" alt="" /></li>
                            </ul>
                        </div>
                    </div>

                        <script type="text/javascript"> var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-23131825-1']);
                            _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                            })(); </script>

                            <script type="text/javascript">new Image().src = "http://counter.yadro.ru/hit?r"+
                                escape(document.referrer)+((typeof(screen)=="undefined")?"":
                                    ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                                    screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+";"+Math.random();</script>

                                    <script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter20963398 = new Ya.Metrika({id:20963398, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true, trackHash:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/20963398" style="position:absolute; left:-9999px;" alt=""></div></noscript>
                    
                </div>
				<div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/01.jpg" alt="Веничный массаж"></a>
                    </div>
                    <div class="uslugi-title">
                        Веничный массаж
                    </div>
                </div>
				
				<div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/02.jpg" alt="Массаж мёдом"></a>
                    </div>
                    <div class="uslugi-title">
                        Массаж мёдом
                    </div>
                </div>
				
				<div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/03.jpg" alt="Пилинг солью/кофе"></a>
                    </div>
                    <div class="uslugi-title">
                        Пилинг солью/кофе
                    </div>
                </div>
				
				<div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/04.jpg" alt="Точечное прогревание солью"></a>
                    </div>
                    <div class="uslugi-title">
                        <p style="font-size: 13px;">Точечное прогревание солью</p>
                    </div>
                </div>
				
				<div class="uslugi">
                    <div>
                        <a href=""><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/uslugi/05.jpg" alt="Матрас с сеном"></a>
                    </div>
                    <div class="uslugi-title">
                        Матрас с сеном
                    </div>
                </div>
            </div>
            <!--Конец В нашем клубе Вас ожидает -->
            
            <!--Отель -->
            <div class="blocks">
                <div class="title">
                    <h3 id="otel">Отель</h3>
                </div>
                
                <div class="uslugi">
                    <div class="slider sliderotel">
                        <ul>
                            <li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/otel/standart/DSCN7873.JPG" alt="Отель Стандарт"></li>
                            <li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/otel/standart/DSCN7877.JPG" alt="Отель Стандарт"></li>
                        </ul>
                    </div>
                    <div class="otel-title">
                        Стандарт
                    </div>
                    <div class="otel-price">
                        &emsp;<span>160</span>UAH&emsp; 
                    </div>
                </div>
                
                <div class="uslugi">
                    <div class="slider sliderotel">
                        <ul>
                            <li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/otel/pollucs/9.JPG" alt="Отель Полулюкс"></li>
                            <li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/otel/pollucs/10.JPG" alt="Отель Полулюкс"></li>
							<li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/otel/pollucs/5.JPG" alt="Отель Полулюкс"></li>
                        </ul>
                    </div>
                    <div class="otel-title">
                        Полулюкс
                    </div>
                    <div class="otel-price">
                        &emsp;<span>350</span>UAH&emsp; 
                    </div>
                </div>
                
                <div class="uslugi">
                    <div class="slider sliderotel">
                        <ul>
                            <li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/otel/luxury/1.jpg" alt="Отель Люкс"></li>
                            <li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/otel/luxury/6.JPG" alt="Отель Люкс"></li>
                            <li><img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/otel/luxury/7.JPG" alt="Отель Люкс"></li>
                        </ul>
                    </div>
                    <div class="otel-title">
                        Люкс
                    </div>
                    <div class="otel-price">
                        &emsp;<span>450</span>UAH&emsp; 
                    </div>
                </div>

            </div>
            <!--Конец Отель -->
            
            
            <!--Отдых за городом -->
            <div class="blocks">
                <div class="title">
                    <h3 id="outdoors">Отдых за городом</h3>
                </div>
                <br>
                <img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/otdyh.jpg" alt="Отдых за городом">
            </div>
            <!--Конец Отдых за городом -->
            
            
            <!--Проведение мероприятий -->
            <div class="blocks">
                <div class="title">
                    <h3 id="corp">Проведение мероприятий</h3>
                </div>
                
                <div class="uslugi">
                    <div class="slider sliderotel">
                        <img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/event/event.jpg" alt="Корпоративные праздники">
                    </div>
                    <div class="otel-title">
                        Корпоративные праздники
                    </div>
                </div>

                <div class="uslugi">
                    <div class="slider sliderotel">
                        <img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/event/event2.jpg" alt="Организация юбилеев">
                    </div>
                    <div class="otel-title">
                        Организация юбилеев
                    </div>
                </div>
                
                <div class="uslugi">
                    <div class="slider sliderotel">
                        <img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/event/event3.jpg" alt="Организация свадеб">
                    </div>
                    <div class="otel-title">
                        Организация свадеб
                    </div>
                </div>
                
            </div>
            <!--Конец Проведение мероприятий -->
            
            <!--Отзывы клиентов -->
            <div class="blocks">
                <div class="title">
                    <h3 id="reviews">Отзывы клиентов</h3>
                </div>
                
                <div id="_review13" itemprop="review" itemscope itemtype="http://schema.org/Review" class="reviewsprofile">
                    <div class="reviews-img">
                        <img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/profile/person1.png" alt="отзыв клиентов">
                    </div>
                    <div itemprop="reviewBody" class="reviews-left">
                        Ходили в баню с детьми, все очень понравилось. Бронировали за несколько дней. Здорово, что мы были в бане одни и другие посетители нас не смущали. И попели, и поиграли в дартс, было весело. Все чистенько и опрятно, мы довольны, спасибо!
                    </div>
<meta itemprop="author" name="author" content="Алеся Муджири">
<span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
           <meta itemprop="ratingValue" content = "5"/>
           <meta itemprop="bestRating" content = "5"/> </span>
                </div>
                
                <div id="_review15" itemprop="review" itemscope itemtype="http://schema.org/Review" class="reviewsprofile">
                    <div class="reviews-img">
                        <img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/profile/person3.png" alt="отзыв клиентов">
                    </div>
                    <div itemprop="reviewBody" class="reviews-left">
                        Отдыхали с друзьями. Очень понравилось. Баня новая чистая. Номера удобные, ресторан супер! Еда класс!!! Приветливые администраторы.
                    </div>
<meta itemprop="author" name="author" content="Дмитрий Завора">
<span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
           <meta itemprop="ratingValue" content = "5"/>
           <meta itemprop="bestRating" content = "5"/> </span>
                </div>
                
                <div id="_review17" itemprop="review" itemscope itemtype="http://schema.org/Review" class="reviewsprofile">
                    <div class="reviews-img">
                        <img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/profile/person4.png" alt="отзыв клиентов">
                    </div>
                    <div itemprop="reviewBody" class="reviews-left">
                        Отличная баня, и уютная, и выдержана по всем правилам настоящей бани, и в красивом месте. Всем рекомендую! Супер!
                    </div>
<meta itemprop="author" name="author" content="Алексей Михайлов">
<span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
           <meta itemprop="ratingValue" content = "5"/>
           <meta itemprop="bestRating" content = "5"/> </span>
                </div>
                
                <div id="_review19" itemprop="review" itemscope itemtype="http://schema.org/Review" class="reviewsprofile">
                    <div class="reviews-img">
                        <img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/profile/person2.png" alt="отзыв клиентов">
                    </div>
                    <div itemprop="reviewBody" class="reviews-left">
                        Самая лучшая баня из всех что был в Полтаве - чисто и уютно, норм банщик и обстановка как в бане, а не как в борделе. Спасибо за приятный отдых, был уже раза три (сайт нашел случайно)

                    </div>
<meta itemprop="author" name="author" content="Андрей Школяр">
<span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
           <meta itemprop="ratingValue" content = "5"/>
           <meta itemprop="bestRating" content = "5"/> </span>
                </div>
                
            </div>
            <!--Конец Отзывы клиентов -->
            
            
            <!--Новости и советы -->
            <div class="blocks">
                <div class="title">
                    <h3 id="news">Новости и советы</h3>
                </div>
                <div class="uslugi">
                    <div class="slider sliderotel">				
						<!-- <a href="<?php the_permalink(); ?>">
									<?php 
										if ( function_exists( 'add_theme_support' ) )
										the_post_thumbnail( array(340,9999) ); 
									?>
						</a> -->
		<img width="340" height="190" src="http://www.ruspar.pl.ua/wp-content/uploads/2016/04/otdyh-po-panski.jpg" title="отдых по-пански" 
     alt="отдых по-пански">
                    </div>
                   <!-- <div class="otel-title">
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div> -->
                </div>
               <div class="reviews-left">
		<h4>Отдых "по-пански". </h4>Незабываемое оздоровление в бане плюс SPA процедуры, обед или ужин у камина и романтическая ночь в отеле.
               </div>
            </div>
            <!--Конец Новости и советы -->
<?php get_footer(); ?>     