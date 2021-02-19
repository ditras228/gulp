---
layout: default
title: BrainsCloud | Home
---
<!--Stories-->
<div class="stories">
    <div class="stories_item" data-modal="video-modal">
        <img class="stories_preview" src="assets/images/1.png" alt="">
        <div class="stories_tittle">Отдыхаю на природе</div>
        <time class="stories_date" datetime="2020-09-21 19:25">2020.09.21</time>
    </div>
    <div class="stories_item">
        <img class="stories_preview" src="assets/images/Rectangle 4.png" alt="">
        <div class="stories_tittle">Заканчиваю
            сложный проект</div>
        <time class="stories_date" datetime="2020-09-21 19:25">2020.09.21</time>
    </div>
    <div class="stories_item">
        <img class="stories_preview" src="assets/images/story.png" alt="">
        <div class="stories_tittle">Переехал в новую
            квартиру</div>
        <time class="stories_date" datetime="2020-09-21 19:25">2020.09.21</time>
    </div>
    <div class="stories_item">
        <img class="stories_preview" src="assets/images/story-1.png" alt="">
        <div class="stories_tittle">Осень пришла!</div>
        <time class="stories_date" datetime="2020-09-21 19:25">2020.09.21</time>
    </div>
</div <!--Add post-->
<div class="add-post">
    <form class="add-post_form" action="/" method="post">
        <textarea class="add-post_textarea" name="post-text" placeholder="Напишите что-нибудь" data-autoresize></textarea>


        <div class="add-post_form-actions">
            <label class="add-post_file" for="add-post-file">
                <input type="file" id="add-post-file">
            </label>
            <button class="add-post_send" type="submit"></button>
        </div>


    </form>
</div>


<!--Add articles-->
<div class="post">
    <div class="post_content">


        <div class="post_text">`Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque eius rerum, distinctio natus repellat quibusdam iure alias reprehenderit, consequatur culpa suscipit nostrum porro vel quisquam soluta ullam iusto ex, illum!</div>
    </div>
    <div class="post_footer">
        <ul class="post_data">
            <li class="post-data-item">
                <time datetime="2020-06-11 19:20">21.06.2020</time>
            </li>
        </ul>
    </div>
</div>
<!--With title-->
<article class="post">
    <div class="post_content">

        <div class="post_header post_header--preview">
            <a href="#">
                <img src="assets/images/post-3.jpg" alt="">
            </a>
        </div>
        <div class="post_title">
            <a href="#">Как писать код быстро и безболезненно?</a>
        </div>
        <div class="post_text">`Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque eius rerum, distinctio natus repellat quibusdam iure alias reprehenderit, consequatur culpa suscipit nostrum porro vel quisquam soluta ullam iusto ex, illum!</div>
    </div>
    <div class="post_footer">
        <ul class="post_data">
            <li class="post-data-item">
                <time datetime="2020-06-11 19:20">21.06.2020</time>
            </li>
            <li class="post-data-item">
                <a href="#">создание сайтов</a>
            </li>
        </ul>
        <a class="post_read" href="post.html">читать</a>
    </div>
</article>

<!--Video-->
<article class="post">
    <div class="post_content">

        <div class="post_header post_header--video">
            <div class="embed">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/iH1_tnf9QrA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="post_title">
            <a href="#">Купил новый ноутбук за 150 000 руб</a>
        </div>
        <div class="post_footer">
            <ul class="post_data">
                <li class="post-data-item">
                    <time datetime="2020-06-11 19:20">21.06.2020</time>
                </li>
                <li class="post-data-item">
                    <a href="#">создание сайтов</a>
                </li>
            </ul>
            <a class="post_read" href="post.html">оставить комментарий</a>
        </div>
    </div>
</article>


<article class="post">
    <div class="post_content">

        <div class="post_header post_header--preview">
            <a href="#">
                <img src="assets/images/Rectangle%205.jpg" alt="">
            </a>
        </div>
        <div class="post_title">
            <a href="#">Как я сходил на FrontEnd Conf 2021</a>
        </div>
        <div class="post_text">`Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque eius rerum, distinctio natus repellat quibusdam iure alias reprehenderit, consequatur culpa suscipit nostrum porro vel quisquam soluta ullam iusto ex, illum!</div>
    </div>
    <div class="post_footer">
        <ul class="post_data">
            <li class="post-data-item">
                <time datetime="2020-06-11 19:20">21.06.2020</time>
            </li>
            <li class="post-data-item">
                <a href="#">создание сайтов</a>
            </li>
        </ul>
        <a class="post_read" href="post.html">читать</a>
    </div>
</article>
<!--Pagination-->
<ul class="pagination">
    <li class="pagination_item">
        <a class="pagination_link" href="#">&lt;</a>
    </li>
    <li class="pagination_item">
        <a class="pagination_link" href="#">1</a>
    </li>
    <li class="pagination_item">
        <a class="pagination_link" href="#">2</a>
    </li>
    <li class="pagination_item">
        <a class="pagination_link" href="#">3</a>
    </li>
    <li class="pagination_link">
        <a class="pagination_link" href="#">&gt;</a>
    </li>
</ul>