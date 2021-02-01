<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>TO DO LIST !!</title>
</head>

<body>
    <a href="/all"> Lihat Semua To Do List</a>
    <div class="text-center">
        <h1>Todo List {{date('d-M-Y')}}</h1>
    </div>
    {{ 'Hari Ini Adalah  :' . date('Y-M-d') }}
    <a href="/create">Tambah Activity List</a>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Activity</th>
                <th>Description</th>
                <th>Jam</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                @foreach ($lists as $list => $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->activity }}</td>
                <td>{{ $p->description }}</td>
                <td>{{ $p->time_activity }}</td>
                <td>{{ $p->status }}</td>
                <td>

                    <?php $encyrpt = Crypt::encryptString($p->id); ?>

                    <form class="delete" action="{{ route('todo.destroy', $p->id) }}" method="GET">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a href="{{ route('todo.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>

                </td>

            </tr>

            @endforeach
            </tr>
        </tbody>


    </table>
</body>

</html>
