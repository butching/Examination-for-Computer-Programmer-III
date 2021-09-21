<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create a simple CRUD application using MVC:</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <a href="/volunteer/new" class="btn btn-primary">Add Volunteer</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Lastname</th>
                <th scope="col">Firstname</th>
                <th scope="col">Age</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Sex_name</th>
                <th scope="col">Region_name</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @if (count($data))
            @foreach($data as $d)
            <tr>
                <th scope="col">{{ $d->LastName }}</th>
                <th scope="col">{{ $d->FirstName }}</th>
                <th scope="col">{{ $d->Age }}</th>
                <th scope="col">{{ $d->BirthDate->format('l, F d, Y'); }}</th>
                <th scope="col">{{ $d->sex?->name }}</th>
                <th scope="col">{{ $d->region?->region_name }}</th>
                <th scope="col"><a href="volunteer/edit/{{ $d->VolunteerId }}">Edit</a> | <a href="volunteer/delete/{{ $d->VolunteerId }}">Delete</a></th>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>
