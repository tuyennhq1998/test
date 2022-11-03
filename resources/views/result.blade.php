<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="margin-top:30px;background-color: rgba(32, 226, 225, 0.2); ">
<h1 align="center">RESULT</h1>
<div style="display:flex; padding: 10px" >
    <button href="{{url('/')}}" class="btn btn-secondary" style="height:50%; margin-right:10px">Back</button>
    <form action="{{url('exportPdf')}}" method="POST">
        @csrf
        <?php if ($result != null): ?>
            <input type="hidden" class="form-control" name="data" value="{{$result}}" placeholder="Enter email">
        <?php endif ?>
        <button type="submit" class="btn btn-secondary" style="margin-right:50px">PDF</button>
    </form>
    <form action="{{url('sendMail')}}" method="POST">
        @csrf
        <div style="display:flex">
        <?php if ($result != null): ?>
            <input type="hidden" name="data" value="{{$result}}" style="width:80%" aria-describedby="emailHelp" placeholder="Enter email">
        <?php endif ?>
        <input type="email" class="form-control" required name="email" style="width:80%; margin-right:8px" aria-describedby="emailHelp" placeholder="Enter email">
        <button type="submit" class="btn btn-secondary" style="height: 38px;width: 120px;">Send Mail</button>
        </div>
    </form>
    <!-- <form>
        <div class="form-group" style="display:flex">

        </div>
    </form> -->

    </div>
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
            <?php if ($result != null):
                foreach ($result as $data): ?>
                    <tr>
                    <th scope="row">{{$data->ID}}</th>
                    <td>{{$data->Name}}</td>
                    <td>{{$data->Email}}</td>
                    <td>{{$data->Entry_Date}}</td>
                    <td>{{ __($data->Date) }}</td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</body>
</html>