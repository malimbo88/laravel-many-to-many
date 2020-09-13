{{-- View index.blade.php --}}

{{-- Cars --}}
<div class="cars">

  {{-- Title --}}
  <div class="cars_title">
    <h1>Cars List</h1>
  </div>
  {{-- end Title --}}

  <hr>

  {{-- Cars list --}}
  <ul class="cars_list">

    {{-- Every single Car --}}
    @foreach ($cars as $car)
      <li class="single_car">
        <ul class="car_info_list">

          {{-- Manufacturer --}}
          <li class="manufacturer">
            {{-- Route to show--}}
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

          {{-- Year --}}
          <li class="year">
            <span>Year: {{ $car->year }} </span>
          </li>
          {{-- end Year --}}

          {{-- Price--}}
          <li class="price">
            <span>Price: {{ $car->price }} $</span>
          </li>
          {{-- end Price --}}

          {{-- Route to cerate --}}
          <div class="index-to-edit">
            <a href="{{ route("cars.edit", $car ) }}">
              <h3>Update Car</h3>
            </a>
          </div>
          {{-- end Route to cerate --}}

        </ul>
      </li>
    @endforeach
    {{-- Every single Car --}}

  </ul>
  {{-- Cars list --}}

</div>
{{-- end Cars --}}

{{-- Route to cerate --}}
<div class="index-to-create">
  <a href="{{ route("cars.create") }}">
    <h3>Create Car</h3>
  </a>
</div>
{{-- end Route to cerate --}}
