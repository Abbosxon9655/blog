<div class="popular-news-wrapper">
  <h4 class="popular-news__title">Cамые популярные новости</h4>
  <ul class="popular-news__list">

      @foreach ($popular_news as $item)
          <li class="popular-news__item">
              {{-- <a href="{{ route('singlePost', $item->id) }}"> --}}
                  <p class="popular-news__description">{{ $item->title_uz }}</p>
                  <span class="popular-news__date">{{ $item->created_at->format('H:i / d.m.Y') }}</span>
              </a>
          </li>
      @endforeach

  </ul>
</div>