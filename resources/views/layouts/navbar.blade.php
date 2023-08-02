
<nav class="navbar">
    <div class="currencies-responsive basic-flex">
      <div class="currency"><span>$</span><span>10137.2 </span></div>
      <div class="currency"><span>P</span><span>138.26</span></div>
      <div class="currency"><span>E</span><span>10988.72</span></div>
    </div>
    
    <ul class="navbar__menu basic-flex">

      @foreach ($categories as $item)
          
      <li class="menu__item active"><a href="{{ route('list', $item->id) }}">{{ $item['name_uz'] }}</a></li>
  
      @endforeach
  
  </ul>