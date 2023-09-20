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
    <div class="header-el page-heading">
        <h1>Patient Management System</h1>
        <a class="primary-btn" href="{{route('view.patient')}}">Back</a>
    </div>
    <form action="{{route('edit.patient')}}" method="POST">
        {{@csrf_field()}}

        <input readonly name="id" id="id" value="{{$data['id']}}">
        
        <label for="">Name</label>
        <input type="text" name="name" id="name" value="{{$data['name']}}">
        @error('name')
            <span class="error">{{$message}}</span>   
        @enderror

        <label for="">Email</label>
        <input type="text" name="email" id="email" value="{{$data['email']}}">
        @error('email')
            <span class="error">{{$message}}</span>   
        @enderror

        <label for="">Phone</label>
        <input type="text" name="phone" id="phone" value="{{$data['phone']}}">

        <label for="">DOB</label>
        <input type="date" name="dob" id="dateOfBirth" value="{{$data['dob']}}">
        
        <label for="">Gender </label>
        <div class="radd">
            <div class="rad">
                <input type="radio" id="gender" name="gender" value="Male" {{($data['gender'] == 'Male') ? 'checked' : ''}}>
        <label for="gender">Male</label><br>
            </div>
        <div class="rad">
            <input type="radio" id="gender" name="gender"  value="Female" {{($data['gender'] == 'Female') ? 'checked' : ''}}>
        <label for="gender">Female</label><br>
        </div>
        </div>

        <label for="">Patient Type</label>
        <select name="patient_type" id="patientType">
            <option value="coorporate" {{($data['patient_type'] == 'coorporate')? 'selected':''}}>Corporate</option>
            <option value="genaral" {{($data['patient_type'] == 'genaral')? 'selected':''}}>Genaral</option>
        </select>

        <button class="primary-btn">Update</button>
    </form>
</body>
</html>