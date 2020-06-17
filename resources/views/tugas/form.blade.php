@if(session('error'))
<div class="alert alert-error">
    {{ session('error') }}
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
    <b>Perhatian</b>
    <br/>
    <ul>
      @foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
    </ul>
</div>
@endif
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Form</title>
    <style>
*{
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
  </head>
  <body>
    <h1>Penambahan Kasus COVID 19 di Indonesia</h1>
    <div class="container">
    <form action="{{ url('tugas', @$tugas->lokasi) }}" method="post" >
      @csrf

      @if(!empty($tugas))
        @method('PATCH')
      @endif
      <div class="row">
        <div class="col-25">
          <label>Lokasi:</label>
        </div>
        <div class="col-75">
           <input type="text" name="lokasi" value="{{ old('lokasi', @$tugas->lokasi) }}"><br/>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Positive:</label>
        </div>
        <div class="col-75">
           <input type="text" name="positive" value="{{ old('positive', @$tugas->positive) }}" /><br/><br/>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Sembuh:</label>
        </div>
        <div class="col-75">
           <input type="text" name="sembuh" value="{{ old('sembuh', @$tugas->sembuh) }}" /><br/>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Mati:</label>
        </div>
        <div class="col-75">
           <input type="text" name="mati" value="{{ old('mati', @$tugas->mati) }}" /><br/>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Id:</label>
        </div>
        <div class="col-75">
            <input type="text" name="id" value="{{ old('id', @$tugas->id) }}" /><br/>
        </div>
      </div><br><br><br>
      <div class="row">
        <input type="submit" value="Simpan">
      </div>
    </form>
    </div>
  </body>
</html>
