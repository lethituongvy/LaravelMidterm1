<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<style>
        #display {
            display: grid;
            grid-template-columns: 500px 500px 500px;

        }
    </style>
</head>
<body>
	<h1>TODOS</h1>
	<div id = display>
		@foreach($todos as $todo)
			<div>
				<h2>Title : {{ $todo -> title }} </h2>
				<h2>Desciption : {{ $todo -> description }} </h2>
				<form action="{{'/todos/'.$ ->id}}" method="POST">
					@csrf
					@method("DELETE")
					<button type="submit">
						DELETE
					</button>
				</form>
				<button>
				EDIT
				</button><hr/>
			</div>
		@endforeach
	</div>
</body>
</html>