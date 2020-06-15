<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		#display{
            display: grid;
            grid-template-columns: 500px 500px 500px; 

        }
        img{
        	height: 200px;
        	width: 300px;
        }
    </style>
</head>
<body>
	<div id="display">
	@foreach($data as $vy)
	<div>
		<h2>Title: {{ $vy->title }}</h2>
		<h2>Description : {{ $vy->description }} </h2>
		<h2>Photo1:</h2> <img src="{{'storage/'. $vy->photo }}" alt="">
		
		<form action="{{'/display/'.$vy->id}}" method="POST">
			@csrf
			@method("DELETE")
			<button type="submit">
				DELETE
			</button>

		</form>

		<form action="{{'/display/'.$vy->id.'/edit'}}" method="GET">

			<button type="submit">

			EDIT
		</button><hr/>
		</form>
		
		
	</div>
	@endforeach
	</div>
</body>
</html>