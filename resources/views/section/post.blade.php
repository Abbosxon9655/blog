<ul class="posts__list basic-flex">

  @foreach ($posts as $item)
      <li class="posts__item">
          {{-- <a href="{{ route('singlePost', $item->id) }}"> --}}
              <img src="/images/{{ $item->img }}" alt="Image" class="posts__img">
              <h2 class="posts__title">{{ $item->title_uz }}</h2>
              <span class="posts__date">{{ $item->created_at->format('H:i / d.m.Y') }}</span>
          </a>
      </li>
  @endforeach

</ul>