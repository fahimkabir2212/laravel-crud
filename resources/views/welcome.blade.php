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
            <h1>Patient Management System</h1>
            <a href="">Create New</a>
        </div>
        <div class="data-table">
            <table>
                {{-- Patient Details
                    1. name
                    2. email
                    3. phone
                    4. address
                    5. dob
                    6. gender (radio)
                    7. patienttype (dropdown) --}}
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Patient Type</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Date of Birth</td>
                    <td>Gender</td>
                    <td>Patient Type</td>
                </tr>
            </table>
        </div>
    </div>
    
</body>
</html>