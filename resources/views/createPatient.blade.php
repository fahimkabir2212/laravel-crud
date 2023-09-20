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
    <div class="page-heading">
        
            <div class="header-el wrapper">
                <h1>Patient Management System</h1>
                <a class="primary-btn" href="{{route('view.patient')}}">Back</a>
            </div>
    </div>
    <form action="{{route('store.patient')}}" method="POST">
        {{@csrf_field()}}
        
        <label for="">Name</label>
        <input type="text" name="name" id="name">
        @error('name')
            <span class="error">{{$message}}</span>   
        @enderror

        <label for="">Email</label>
        <input type="text" name="email" id="email">
        @error('email')
            <span class="error">{{$message}}</span>   
        @enderror

        <label for="">Phone</label>
        <input type="text" name="phone" id="phone">

        <label for="">DOB</label>
        <input type="date" name="dob" id="dateOfBirth">
        
        
            <label for="">Gender </label>
        <div class="radd">
        <div class="rad">
            <input type="radio" id="gender" name="gender" value="Male">
            <label for="gender">Male</label><br>
        </div>
        <div class="rad">
            <input type="radio" id="gender" name="gender" value="Female">
            <label for="gender">Female</label><br>
        </div>
        </div>

        <label for="">Patient Type</label>
        <select name="patient_type" id="patientType">
            <option value="coorporate" selected>Corporate</option>
            <option value="general">Genaral</option>
        </select>

        <button class="primary-btn">Add Patient</button>
    </form>
</body>
</html>