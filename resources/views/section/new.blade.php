<div class="column-news">
  <h2 class="news__title">Последние новости</h2>
  <ul class="news__list basic-flex">

      @foreach ($latest_news as $item)
          <li class="news__item">
              {{-- <a href="{{ route('singlePost', $item->id) }}" class="basic-flex news__link"> --}}
                  <div class="news-image-wrapper"><img src="images/{{ $item->img }}" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                      <h4 class="news__title">{{ $item->title_uz }}</h4>
                      <p class="news__description">После прорыва дамбы Сардобинского водохранилища возбуждено
                          уголовное
                          дело, сообщили в пресс-службе Генпрокуратуры Узбекистана.
                      </p>
                      <span class="news__date basic-flex">{{ $item->created_at->format('H:i / d.m.Y') }}</span>
                  </div>
              </a>
          </li>
      @endforeach

  </ul>
  <button type="button" class="btn load-more-btn">Больше новостей</button>
</div>