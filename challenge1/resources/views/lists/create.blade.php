<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="text-center">
        <h2>Input To Do Lists</h2>
    </div>

    <form method="POST" action="{{ route('todo.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Activity</label>
            <input name="activity" type="text" class="form-control" placeholder="Enter Activity">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" placeholder="Enter deskripsi" cols="30"
                rows="10"></textarea>
        </div>
        <div class="form-group">
            <label>Date Activity </label>
            <input name="date_activity" type="date" class="form-control">
        </div>
        <div class="form-group">
            <label>Time Activity</label>
            <input name="time_activity" type="time" class="form-control">
        </div>

        <input type="hidden" name="status" value="belum selesai">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
