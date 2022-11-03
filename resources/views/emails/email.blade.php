<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>List staff from DATE to DATE</h3> <br>
    <!--  -->
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Entry Date</th>
            <th scope="col">Date of Week</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($data != null):
                foreach ($data['data'] as $value): ?>
                    <tr>
                    <th scope="row">{{$value->ID}}</th>
                    <td>{{$value->Name}}</td>
                    <td>{{$value->Email}}</td>
                    <td>{{$value->Entry_Date}}</td>
                    <td align="center">{{ __($value->Date) }}</td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</body>
</html>