<html>
<head>
</head>
<body>
<h1>Sample page</h1>
    {{ Form::open(array('url' => '/sample','method' => 'GET')) }}
       <div class="form-group">
         <label for=""></label>
         <input type="text"
           class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
         <small id="helpId" class="form-text text-muted">Help text</small>
       </div>

       <input type="submit" value="Submit" />
    {{ Form::close() }}
</body>
</html>