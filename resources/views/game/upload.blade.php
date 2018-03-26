@extends('layouts.master')



@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/game.css') }}">
@stop

@section('content')
	
    <form id="upload" enctype="multipart/form-data" onSubmit="return false">
    	<label>Title</label>
    	<input type="text" name="title" id="title"><br />
    	<label>Description</label>
    	<textarea  rows="15" cols="100" name="description" id="description"></textarea><br />
    	<label>Picture</label><input type="file" name="picture" accept=".jpg"><br />
        <label>Game files</label><input type="file" name="file" accept=".7z"><br />
        <input type="submit">
    </form>
    <div id="message"></div>

    <script>
        var form = document.getElementById('upload');
        var request = new XMLHttpRequest();

        form.addEventListener('submit', function(e)
        {
            e.preventDefault();
            var formdata = new FormData(form);
            request.open('post', 'http://backend.dream.nl/upload');
            request.addEventListener("load", transferComplete);
            request.send(formdata);
        });
        function transferComplete(data)
        {
           response = JSON.parse( data.currentTarget.response);
           if(response.success)
           {
            document.getElementById("message").innerHTML = "Successfully uploaded files!";
           }
        }
    </script>
@stop
