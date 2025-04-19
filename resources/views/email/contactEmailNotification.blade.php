<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
            color: #333333;
        }
        td {
            border-top: 1px solid #dddddd;
        }
    </style>
</head>
<body>
    <table>
        <!-- Row 1 -->
        <tr>
            <th>Name</th>
            <td>{{$data['name']}}</td>
        </tr>
        <!-- Row 2 -->
        <tr>
            <th>Email</th>
            <td>{{$data['email']}}</td>
        </tr>
        <!-- Row 3 -->
        <tr>
            <th>Mobile</th>
            <td>{{$data['phone']}}</td>
        </tr>
        <!-- Row 4 -->
        <tr>
            <th>Country</th>
            <td>{{$data['country']}}</td>
        </tr>
        <!-- Row 5 -->
        <tr>
            <th>Company</th>
            <td>{{$data['company']}}</td>
        </tr>
        <tr>
            <th>Category</th>
            <td>{{$data['category']}}</td>
        </tr>
        <tr>
            <th>Comment</th>
            <td>{{$data['comment']}}</td>
        </tr>
    </table>
</body>
</html>