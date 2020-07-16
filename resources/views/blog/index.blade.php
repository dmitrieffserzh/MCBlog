@extends('layouts.blog')

@section('content')
    <div class="section-header">
        <h1 class="section-header__title">Блог</h1>
        <div class="section-header__subtitle">Таким образом сложившаяся структура организации играет важную роль</div>
    </div>
    @for($i = 0; $i <= 10; $i++)
        <article class="article">
            <header class="article__header">
                <h1>Таким образом сложившаяся структура организации играет важную роль в формировании направлений прогрессивного развития</h1>
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
    @endfor
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