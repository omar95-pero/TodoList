<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@toastr_css
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://github.com/omar95-pero?tab=repositories‏‏" target="_blanck">OmarAttyaAliPero</a>
    </div>
</nav>
<div class="col-md-3"></div>
<div class="col-md-6 well">
    <h3 class="text-primary">PHP - Simple To Do List App</h3>
    <hr style="border-top:1px dotted #ccc;"/>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <center>

            <form action="{{route('todoStore')}}" method="post" class="form-inline">
                @csrf
                <input type="text" class="form-control" name="task" required/>
                <input type="submit" class="btn btn-primary form-control" value="AddTask">
            </form>
        </center>
    </div>
    <br/><br/><br/>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Task</th>
            <th>Status</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
@foreach($todos as $todo)
        <tr>
            <td>{{$todo->id}}</td>
            <td>{{$todo->task}}</td>
            <td>{{$todo->status == 'not_finished'?'Not Finished':'Finished'}}</td>
            <td colspan="2" class="text-center">
                @if($todo->status == 'not_finished')
                    <a href="{{route('Status.Update',$todo->id)}}"class="btn btn-success"><span class="glyphicon glyphicon-check"></span></a>
                @endif
                    <a href="{{route('Task.Delete',$todo->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
            </td>
        </tr>
@endforeach
        </tbody>
    </table>
</div>
@jquery
@toastr_js
@toastr_render
</body>

</html>

git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/omar95-pero/TodoList.git
git push -u origin main
