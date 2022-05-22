<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script src="{{ mix('js/app.js') }}" defer></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <title>Add Room/Hall</title>
  <style>
    body {
      background-image: url('{{url("images/web.png")}}');
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
</head>

<body>
  @include('admin.navigation-menu')
  <div style="width:100%;height:93.9vh;display: flex;flex-direction: column;justify-content: center;align-items: center;">
    <div class="div">
      <form id="form" action="{{ url('/store')}}" method="get">
        @csrf
        <div style="display:flex;flex-direction:column;gap:10px;">
          <div style="text-align: center;font-weight: bold;font-size: 20px;">Add Room</div>
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @elseif(session()->has('message'))
          <div id="hh" class="alert alert-success">
            {{session()->get('message')}}
          </div>
          @elseif(session()->has('errorMessage'))
          <div id="hh" class="alert alert-danger">
            {{session()->get('errorMessage')}}
          </div>
          @endif
          <label>Room Name</label>
          <div style="display: flex;align-items: center;gap:20px">
          <div class="form-group" style="display: flex;align-items: center;gap:5px">
            <label>Type</label>
            <select required name="type">
              <option>{{old('type')}}</option>
              <option value="TD">TD</option>
              <option value="TP">TP</option>
              <option value="Hall">Hall</option>
            </select>
          </div>
          <div class="form-group" style="display: flex;align-items: center;gap:5px">
            <label>Number</label>
            <input value="{{old('number')}}" required name="number" class="form-control" type="number" min="1" placeholder="Enter Room/Hall Number">
          </div>
          </div>
          <div class="form-group">
            <label>Capacity</label>
            <input value="{{old('capacity')}}" min="1" required name="capacity" class="form-control" type="number" placeholder="Choose Capacity Number">
          </div>
          <div class="form-group">
            <label>Floor</label>
            <input value="{{old('floor')}}" min="0" required name="floor" class="form-control" type="number" placeholder="Choose Floor Number">
          </div>

          <div class="form-group">
            <label>State</label>
            <select required name="state">
              <option>{{old('state')}}</option>
              <option value="ordinary">Ordinary</option>
              <option value="speacial">Speacial</option>
            </select>
          </div>

        </div>
        <div style="display: flex;justify-content:center;gap:20px">
          <input type="submit" class="btn btn-info" style="margin-top: 20px;background-color: #f9a35c;color:white;border:none;box-shadow: 0px 2px 4px gray;border-radius:15px;padding:3.7px 23.7px" value="Save">
          <a href="{{url('/showList')}}" style="text-decoration: none;margin-top: 20px;background-color: #a4c8d5;color:white;border:none;box-shadow: 0px 2px 4px gray;border-radius:15px;padding:3.7px 15px;">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>