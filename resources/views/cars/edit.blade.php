{{-- View edit.blade.php --}}

{{-- Validation --}}
@if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>Error: {{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif
{{-- end Validation --}}

{{-- Edit --}}
<div class="edit">

  {{-- Title --}}
  <div class="cars_title">
    <h1>Update car</h1>
  </div>
  {{-- end Title --}}

  <hr>

  {{-- Form Edit --}}
  <form class="edit_car" action="{{ route("cars.update", $car) }}" method="post">
    {{-- Cross-site request forgery --}}
    @csrf

    {{-- Request method --}}
    @method("PUT")

    <br>

    {{-- Edit Manufacturer --}}
    <div class="update_manufacturer">
      <label>Manufacturer</label>
      <input type="text" name="manufacturer" value="{{ old("manufacturer") ? old("manufacturer") : $car->manufacturer }}" placeholder="manufacturer">
    </div>
    {{-- end Edit Manufacturer --}}

    <br>

    {{-- Edit Model --}}
    <div class="edit_model">
      <label>Model</label>
      <input type="text" name="model" value="{{ old("model") ? old("model") : $car->model }}" placeholder="model">
    </div>
    {{-- end Edit Model --}}

    <br>

    {{-- Edit Tags --}}
    <div class="edit_tags">
      <h3> Car body style </h3>

      {{-- Every single Tag --}}
      @foreach ($tags as $tag)
        <div class="checkbox">
          <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
          <label>{{ $tag->car_body }}</label>
        </div>
      @endforeach
      {{-- end Every single Tag --}}

      <br>

    </div>
    {{-- end Edit Tags --}}

    {{-- Edit Engine --}}
    <div class="edit_engine">
      <label>Engine</label>
      <input type="text" name="engine" value="{{ old("engine") ? old("engine") : $car->engine }}" placeholder="engine">
    </div>
    {{-- end Edit Engine --}}

    <br>

    {{-- Edit Plate --}}
    <div class="edit_plate">
      <label>Plate</label>
      <input type="text" name="plate" value="{{ old("plate") ? old("plate") : $car->plate }}" placeholder="plate">
    </div>
    {{-- end Edit Plate --}}

    <br>

    {{-- Edit Year --}}
    <div class="edit_year">
      <label>Year</label>
      <input type="number" name="year" value="{{ old("year") ? old("year") : $car->year }}" placeholder="year">
    </div>
    {{-- end Edit Year --}}

    <br>

    {{-- Create User owner --}}
    <div class="create_user">
      <label>User Owner</label>
      <select name="user_id">

        {{-- Every single User --}}
        @foreach ($users as $user)
          <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
        {{-- Every single User --}}

      </select>
    </div>
    {{-- end Create User owner --}}

    <br>

    {{-- Edit Price --}}
    <div class="edit_price">
      <label>Price</label>
      <input type="number" name="price" step="any" value="{{ old("price") ? old("price") : $car->price}}" placeholder="price">
    </div>
    {{-- end Edit Price --}}

    <br>

    {{-- Submit --}}
    <div class="edit_submit">
      <input type="submit" value="Update">
    </div>
    {{-- end Submit --}}

  </form>
  {{-- end Form Edit --}}

</div>
{{-- end Edit --}}

{{-- Route to index --}}
<div class="create-to-index">
  <a href="{{ route("cars.index") }}">
    <h3>View Cars list</h3>
  </a>
</div>
{{-- end Route to index --}}
