<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">
        <div class="page-heading">
            <div class="wrapper">
                <div class="header-el">
                    <h1>Patient Management System</h1>
                    <a href="{{route('create.patient')}}" class="primary-btn">Create New</a>
                </div>
            </div>
        </div>
        <div class="data-table wrapper">
            <table>
                <tr class="table-head">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Patient Type</th>
                    <th>Action</th>
                </tr>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{$patient['id']}}</td>
                        <td>{{$patient['name']}}</td>
                        <td>{{$patient['email']}}</td>
                        <td>{{$patient['phone']}}</td>
                        <td>{{$patient['dob']}}</td>
                        <td>{{$patient['gender']}}</td>
                        <td>{{$patient['patient_type']}}</td>
                        <td> 
                            <a href="/show-patient/{{$patient['id']}}">Edit</a>
                            <a class="d-btn" href="/delete-patient/{{$patient['id']}}">Delete</a>
                        </td>
                        
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    
</body>
</html>