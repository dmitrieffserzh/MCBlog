@extends('layouts.blog')

@section('content')
    <div class="section-header">
        <h1 class="section-header__title">Блог</h1>
        <div class="section-header__subtitle">Таким образом сложившаяся структура организации играет важную роль</div>
    </div>
    @for($i = 0; $i <= 10; $i++)

        <article class="article" data-img="/uploads/images/0.jpg">
            <header class="article__header">
                <h2>Таким образом сложившаяся структура организации играет важную роль в формировании направлений прогрессивного развития</h2>
            </header>

        </article>





<!--

        <article class="article">
            <header class="article__header">
                <h2>Таким образом сложившаяся структура организации играет важную роль в формировании направлений прогрессивного развития</h2>
            </header>
            <div class="article__poster">
                <img src="/uploads/images/0.jpg" alt="">
            </div>
            <div class="article__desc">
                Повседневная практика показывает, что консультация с широким активом способствует подготовки и реализации форм развития. Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки системы обучения кадров, соответствует насущным потребностям.
            </div>
            <footer class="article__footer">
                <a href="#" class="article__more-link">Читать далее...</a>
            </footer>
        </article>
-->



    @endfor


    <script>

        $(window).scroll(function() {
            if ($(window).scrollTop() > 5)
                $('.header').addClass('scroll');
            else
                $('.header').removeClass('scroll');
        });



        $(document).ready(function () {
            var articles = $(".article");


            $.each(articles, function(index, value){
                console.log("INDEX: " + index + " VALUE: " + value);

                randColor(value);

            });

            function randColor(elem) {
                var element = elem,
                    //code_color = document.querySelector('.code_color'),
                    r = Math.floor(Math.random() * (256)),
                    g = Math.floor(Math.random() * (256)),
                    b = Math.floor(Math.random() * (256)),
                    color = '#' + r.toString(16) + g.toString(16) + b.toString(16);


                var img = $(element).data('img');

                $(element).css({
                    'background':'linear-gradient(135deg, rgba(0, 0, 0, 0.5) 0%, '+ color +' 100%), url('+ img +') no-repeat'
                }) ;
                //code_color.innerText = color;
            }

        });

    </script>


@endsection

@section('sidebar')
    <ul>
        <li><a href="">Категория</a></li>
        <li><a href="">Категория</a></li>
        <li><a href="">Категория</a></li>
        <li><a href="">Категория</a></li>
        <li><a href="">Категория</a></li>
        <li><a href="">Категория</a></li>
        <li><a href="">Категория</a></li>
    </ul>
@endsection