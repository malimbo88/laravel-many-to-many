{{-- View show.blade.php --}}

{{-- Car Info --}}
<div class="cars">

  {{-- Title --}}
  <div class="cars_title">
    <h1>Car Info</h1>
  </div>
  {{-- end Title --}}

  <hr>

  {{-- Car Infos list --}}
  <ul class="car_info">

    {{-- Manufacturer --}}
    <li class="manufacturer">
      <a href="{{ route("cars.show", $car ) }}">
        <h2 class="manufacturer">{{ $car->manufacturer }}</h2>
      </a>
    </li>
    {{-- end Manufacturer --}}

    {{-- Model --}}
    <li class="model">
      <span class="model">Model: {{ $car->model }}</span>
    </li>
    {{-- end Model --}}

    {{-- Tags car body --}}
    <li class="tags">
      <h3>Car Body</h3>

      {{-- Tags list --}}
      <ul class="tags_list">

        {{-- Every single Tag --}}
        @foreach ($car->tags as $tag)

          {{-- Tag car body --}}
          <li>
            <span>{{ $tag->car_body }} </span>
          </li>
          {{-- Tag car body --}}

        @endforeach
        {{-- end Every single Tag --}}

      </ul>
      {{-- Tags list --}}

      <br>
    </li>
    {{-- end Tags car body --}}

    {{-- Engine --}}
    <li class="engine">
      <span class="engine">Engine: {{ $car->engine }}</span>
    </li>
    {{-- end Engine --}}

    {{-- Plate --}}
    <li class="plate">
      <span class="plate">Plate: {{ $car->plate }}</span>
    </li>
    {{-- end Plate --}}

    {{-- Year --}}
    <li class="year">
      <span>Year: {{ $car->year }} </span>
    </li>
    {{-- end Year --}}

    {{-- User owner --}}
    <li class="user">
      <span>Owner: {{ $car->user->name }} </span>
    </li>
    {{-- end User owner --}}

    {{-- Price --}}
    <li class="price">
      <span>Price: {{ $car->price }} $</span>
    </li>
    {{-- end Price --}}

  </ul>
  {{-- Cars Infos list --}}

</div>
{{-- end Car Info --}}

{{-- Route to index --}}
<div class="show-to-index">
  <a href="{{ route("cars.index") }}">View Cars list</a>
</div>
{{-- end Route to index --}}
