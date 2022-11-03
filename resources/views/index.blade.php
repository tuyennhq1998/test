<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body align="center" style="margin-top:30px;background-color: rgba(32, 226, 225, 0.2); " >
    <h1 align="center">FORM ENTRY DATE</h1>
    <div class="container">
    <form action="{{url('searchDate')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">From</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="from" aria-describedby="emailHelp" placeholder="From">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">To</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="to" placeholder="To">
        </div>
        
        <button type="submit" class="btn btn-primary" style="
    width: 94%">Submit</button>
        <a href="{{url('clear')}}" class="btn btn-primary">
                        Clear
                    </a>
       
    </form>
    
    </div>
</body>
<script>
    
    <?php
        if (session()->get('error') != null): ?>
        
        alert('{{session()->get('error')}}');
        <?php session()->forget('error');endif ?>
    
</script>
</html>