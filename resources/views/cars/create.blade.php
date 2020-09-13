{{-- View create.blade.php --}}

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

{{-- Create --}}
<div class="create">

  {{-- Title --}}
  <div class="cars_title">
    <h1>Create car</h1>
  </div>
  {{-- end Title --}}

  <hr>

  {{-- Form Create --}}
  <form class="create_car" action="{{ route("cars.store") }}" method="post">
    {{-- Cross-site request forgery --}}
    @csrf

    {{-- Request method --}}
    @method("POST")

    <br>

    {{-- Create Manufacturer --}}
    <div class="create_manufacturer">
      <label>Manufacturer</label>
      <input type="text" name="manufacturer" value="{{ old("manufacturer") }}" placeholder="manufacturer">
    </div>
    {{-- end Create Manufacturer --}}

    <br>

    {{-- Create Model --}}
    <div class="create_model">
      <label>Model</label>
      <input type="text" name="model" value="{{ old("model") }}" placeholder="model">
    </div>
    {{-- end Create Model --}}

    <br>

    {{-- Create Tags --}}
    <div class="create_tags">
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
    {{-- end Create Tags --}}

    {{-- Create Engine --}}
    <div class="create_engine">
      <label>Engine</label>
      <input type="text" name="engine" value="{{ old("engine") }}" placeholder="engine">
    </div>
    {{-- end Create Engine --}}

    <br>

    {{-- Create Plate --}}
    <div class="create_plate">
      <label>Plate</label>
      <input type="text" name="plate" value="{{ old("plate") }}" placeholder="plate">
    </div>
    {{-- end Create Plate --}}

    <br>

    {{-- Create Year --}}
    <div class="create_year">
      <label>Year</label>
      <input type="number" name="year" value="{{ old("year") }}" placeholder="year">
    </div>
    {{-- end Create Year --}}

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

    {{-- Create Price --}}
    <div class="create_price">
      <label>Price</label>
      <input type="number" name="price" step="any" value="{{ old("price") }}" placeholder="price">
    </div>
    {{-- end Create Price --}}

    <br>

    {{-- Submit --}}
    <div class="create_submit">
      <input type="submit" value="Create">
    </div>
    {{-- end Submit --}}

  </form>
  {{-- end Form Create --}}

</div>
{{-- end Create --}}

{{-- Route to index --}}
<div class="create-to-index">
  <a href="{{ route("cars.index") }}">
    <h3>View Cars list</h3>
  </a>
</div>
{{-- end Route to index --}}
