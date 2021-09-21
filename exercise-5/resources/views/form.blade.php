<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create a simple CRUD application using MVC:</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

</head>
<body>
    <form method="POST" action="/volunteer/{{ !empty($data) ? 'edit/'.$data->VolunteerId : 'new' }}">
        @csrf
        <div class="form-group">
            <label for="i1">FirstName</label>
            <input type="text" class="form-control" id="i1" placeholder="FirstName" name="FirstName" value="{{ $data->FirstName ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="i2">LastName</label>
            <input type="text" class="form-control" id="i1" placeholder="LastName" name="LastName" value="{{ $data->LastName ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="i3">Age</label>
            <input type="number" class="form-control" id="i3" placeholder="Age" name="Age" value="{{ $data->Age ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="i4">BirthDate</label>
            <input class="datepicker" data-date-format="mm/dd/yyyy" name="BirthDate" value="{{ !empty($data) ? $data->BirthDate->format('d/m/Y') : '' }}" required>
        </div>
        <div class="form-group">
            <label for="i4">Sex</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex_id" id="inlineRadio1" value="1" checked>
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex_id" id="inlineRadio2" value="2" {{ !empty($data) && $data->sex_id == 2 ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
        </div>
         
        <div class="form-group">
            <label for="i5">Region</label>
            <select name="region_code">
            @foreach($regions as $r)
                <option value="{{ $r->region_code }}" {{ !empty($data) && $data->region_code == $r->region_code ? 'selected' : '' }} >{{ $r->region_name }}</option>
            @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(function() {
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy'
            , });
        })

    </script>
</body>
</html>
